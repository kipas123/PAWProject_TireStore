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
use app\forms\UserDataForm;
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
    private $formUserData;

    public function __construct() {
        $this->formUser = new UserForm();
        $this->formUserData = new UserDataForm();
    }

    private function validateAdress() {
        $this->formUserData->name = ParamUtils::getFromRequest('name');
        $this->formUserData->surname = ParamUtils::getFromRequest('surname');
        $this->formUserData->city = ParamUtils::getFromRequest('city');
        $this->formUserData->street = ParamUtils::getFromRequest('street');
        $this->formUserData->houseNumber = ParamUtils::getFromRequest('houseNumber');
        $this->formUserData->zipcode = ParamUtils::getFromRequest('zipcode');
        $this->formUserData->phoneNumber = ParamUtils::getFromRequest('phoneNumber');

        if (empty($this->formUserData->name) || empty($this->formUserData->surname) || empty($this->formUserData->city) || empty($this->formUserData->street) || empty($this->formUserData->houseNumber) || empty($this->formUserData->zipcode)) {
            Utils::addErrorMessage('Wypełnij wszystkie pola!');
        }


        return !App::getMessages()->isError();
    }

    private function getParamFromDB() {
        $this->formUser->iduser = SessionUtils::load("iduser", $keep = true);
        try {
            // 2. odczyt z bazy danych osoby o podanym ID (tylko jednego rekordu)
            $record = App::getDB()->get("user", ["[>]userdata" => ["iduser" => "user_iduser"]], "*", [
                "iduser" => $this->formUser->iduser
            ]);
            // 2.1 jeśli osoba istnieje to wpisz dane do obiektu formularza
            $this->formUser->login = $record['login'];
            $this->formUserData->name = $record['name'];
            $this->formUserData->surname = $record['surname'];
            $this->formUserData->city = $record['city'];
            $this->formUserData->street = $record['street'];
            $this->formUserData->houseNumber = $record['housenumber'];
            $this->formUserData->zipcode = $record['zipcode'];
            $this->formUserData->phoneNumber = $record['phoneNumber'];
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
    }

    public function action_accountShow() {
        $this->getParamFromDB();

        $this->generateView("account.tpl");
    }

    public function action_adressEditView() {
        $this->getParamFromDB();
        $this->generateView("adressEdit.tpl");
    }

    public function action_adressEdit() {
        if ($this->validateAdress()) {
            try {
                $this->formUser->iduser = SessionUtils::load("iduser", $keep = true);
                $this->record = App::getDB()->update("userdata", [
                    "name" => $this->formUserData->name,
                    "surname" => $this->formUserData->surname,
                    "city" => $this->formUserData->city,
                    "street" => $this->formUserData->street,
                    "housenumber" => $this->formUserData->houseNumber,
                    "zipcode" => $this->formUserData->zipcode,
                    "phoneNumber" => $this->formUserData->phoneNumber,
                    "user_iduser" => $this->formUser->iduser,
                        ], [
                    "user_iduser" => $this->formUser->iduser
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
    
    private function changePasswordValidate(){
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
        if($this->changePasswordValidate()){
            
            try {
                $this->record = App::getDB()->update("user", [
                    "password" => $this->formUser->pass
                ],[
                    "iduser" => $this->formUser->iduser
                    
                ]);
                Utils::addInfoMessage("Hasło poprawnie zmienione!");
                $this->action_accountShow();
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas aktualizacji hasla');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }else{
            $this->action_accountShow();
        }
    }

    public function generateView($templ) {
        App::getSmarty()->assign('formUser', $this->formUser); // dane formularza dla widoku
        App::getSmarty()->assign('formUserData', $this->formUserData); // dane formularza dla widoku
        App::getSmarty()->display($templ);
    }

}
