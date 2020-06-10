<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

use core\App;
use core\SessionUtils;
use app\forms\UserForm;
use app\forms\OrderForm;
use app\controllers\RegisterCtrl;
use core\ParamUtils;
use core\Utils;
use core\Validator;

/**
 * Description of AccountCtrl
 *
 * @author kipas
 */
class AccountCtrl {

    private $formUser;

    public function __construct() {
        $this->formUser = new UserForm();
        $this->offerForm = new OrderForm();
    }

    private function validateAdress() {
        //walidacja adresu użytkownika
        $this->formUser->name = ParamUtils::getFromRequest('name');
        $this->formUser->surname = ParamUtils::getFromRequest('surname');
        $this->formUser->city = ParamUtils::getFromRequest('city');
        $this->formUser->street = ParamUtils::getFromRequest('street');
        $this->formUser->houseNumber = ParamUtils::getFromRequest('houseNumber');
        $this->formUser->zipcode = ParamUtils::getFromRequest('zipcode');
        $this->formUser->phoneNumber = ParamUtils::getFromRequest('phoneNumber');

        if (empty($this->formUser->name) || empty($this->formUser->surname) || empty($this->formUser->city) || empty($this->formUser->street) || empty($this->formUser->houseNumber) || empty($this->formUser->zipcode)) {
            Utils::addErrorMessage('Wypełnij wszystkie pola!');
        }

        return !App::getMessages()->isError();
    }

    private function getAccountParam() {
        $this->formUser->iduser = SessionUtils::load("iduser", $keep = true);
        try {
            // odczyt z bazy danych osoby o podanym ID (tylko jednego rekordu)
            $record = App::getDB()->get("user", ["login", "name", "surname", "city", "street", "housenumber", "zipcode", "phoneNumber"], [
                "iduser" => $this->formUser->iduser
            ]);
            // jeśli osoba istnieje to wpisz dane do obiektu formularza
            $this->formUser->login = $record['login'];
            $this->formUser->name = $record['name'];
            $this->formUser->surname = $record['surname'];
            $this->formUser->city = $record['city'];
            $this->formUser->street = $record['street'];
            $this->formUser->houseNumber = $record['housenumber'];
            $this->formUser->zipcode = $record['zipcode'];
            $this->formUser->phoneNumber = $record['phoneNumber'];
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
    }

    public function action_accountShow() {
        $this->getAccountParam();

        $this->generateView("account.tpl");
    }

    public function action_adressEditView() {
        $this->getAccountParam();
        $this->generateView("adressEdit.tpl");
    }

    public function action_adressEdit() {
        if ($this->validateAdress()) {
            try {
                $this->formUser->iduser = SessionUtils::load("iduser", $keep = true);
                $this->record = App::getDB()->update("user", [
                    "name" => $this->formUser->name,
                    "surname" => $this->formUser->surname,
                    "city" => $this->formUser->city,
                    "street" => $this->formUser->street,
                    "housenumber" => $this->formUser->houseNumber,
                    "zipcode" => $this->formUser->zipcode,
                    "phoneNumber" => $this->formUser->phoneNumber
                        ], [
                    "iduser" => $this->formUser->iduser
                ]);
                App::getRouter()->redirectTo("accountShow");
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }else {
            $this->generateView("adressEdit.tpl");
        }
    }

    private function changePasswordValidate() {
        try {
            $password = ParamUtils::getFromRequest("password");
            $this->formUser->iduser = SessionUtils::load("iduser", $keep = true);
            $this->record = App::getDB()->select("user", "password", [
                "iduser" => $this->formUser->iduser,
                "password" => $password
            ]);
            if (empty($this->record))
                Utils::addErrorMessage('Złe hasło');
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
        if (App::getMessages()->isError())
            return false;

        $v = new Validator();
        $this->formUser->pass = $v->validateFromRequest("password_new", [
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj nowe hasło',
            'min_length' => 7,
            'max_length' => 20,
            'validator_message' => 'Hasło powinno mieścić się pomiędzy 7 a 20 znakami',
        ]);

        $this->confirmPass = ParamUtils::getFromRequest('confirmPass_new');

        if ($this->formUser->pass != $this->confirmPass) {
            Utils::addErrorMessage('Hasla różnią się');
        }


        return !App::getMessages()->isError();
    }

    public function action_changePassword() {
        if ($this->changePasswordValidate()) {

            try {
                $this->record = App::getDB()->update("user", [
                    "password" => $this->formUser->pass
                        ], [
                    "iduser" => $this->formUser->iduser
                ]);
                Utils::addInfoMessage("Hasło poprawnie zmienione!");
                $this->action_accountShow();
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas aktualizacji hasla');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }else {
            $this->action_accountShow();
        }
    }

    
    public function action_userOrders() {
            try {
                $this->formUser->iduser = SessionUtils::load("iduser", $keep = true);
                $this->record = App::getDB()->select("order",["[>]tireproduct_has_order" => ["idorder" => "order_idorder"]],"*",[
                    "user_iduser" => $this->formUser->iduser
                ]);
                
                
                
                App::getSmarty()->assign('orderForm', $this->record); // dane formularza dla widoku
                $this->generateView("userOrders.tpl");
                
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
    }
    
    
    public function generateView($templ) {
        App::getSmarty()->assign('formUser', $this->formUser); // dane formularza dla widoku
        App::getSmarty()->display($templ);
    }

}
