<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

use core\App;
use core\Validator;
use core\RoleUtils;
use core\ParamUtils;
use core\Utils;
use core\SessionUtils;
use app\forms\UserForm;
use app\forms\UserDataForm;

/**
 * Description of RegisterCtrl
 *
 * @author kipas
 */
class RegisterCtrl {

    private $formUser;
    private $formUserData;
    private $confirmPass;
    private $record;

    public function __construct() {
        $this->formUser = new UserForm();
        $this->formUserData = new UserDataForm();
    }

    public function validateLogin() {
        $v = new Validator();
        $this->formUser->login = $v->validateFromRequest("login", [
            'trim' => true,
            'required' => true,
            'required_message' => 'Login jest wymagany',
            'min_length' => 5,
            'max_length' => 20,
            'validator_message' => 'Imię powinno mieścić się pomiędzy 5 i 20 znakami',
        ]);
        $this->formUser->pass = $v->validateFromRequest("pass", [
            'trim' => true,
            'required' => true,
            'required_message' => 'Nie podales hasla',
            'min_length' => 7,
            'max_length' => 20,
            'validator_message' => 'Haslo powinno mieścić się pomiędzy 7 i 20 znakami',
        ]);
        $this->confirmPass = ParamUtils::getFromRequest('confirmPass');

        if ($this->formUser->pass != $this->confirmPass) {
            Utils::addErrorMessage('Hasla różnią się');
        }

        //nie ma sensu walidować dalej, gdy brak wartości
        if (App::getMessages()->isError())
            return false;

        try {
            // 2. odczyt z bazy danych osoby o podanym ID (tylko jednego rekordu)
            $this->record = App::getDB()->select("user", "iduser", [
                "login" => $this->formUser->login
            ]);
            if (!empty($this->record))
                Utils::addErrorMessage('Taki uzytkownik jest zajety');
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        return !App::getMessages()->isError();
    }

    public static function validateAdress() {
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

    public function action_register() {
        // 1. walidacja id osoby do edycji
        if ($this->validateLogin() && $this->validateAdress()) {
            try {
                // 2. odczyt z bazy danych osoby o podanym ID (tylko jednego rekordu)
                $this->record = App::getDB()->insert("user",[
                    "login" => $this->formUser->login,
                    "password" => $this->formUser->pass
                ]);
                $this->formUser->iduser = App::getDB()->get("user","iduser",[
                    "login" => $this->formUser->login
                ]);
                
                $this->record = App::getDB()->insert("userdata",[
                    "name" => $this->formUserData->name,
                    "surname" => $this->formUserData->surname,
                    "city" => $this->formUserData->city,
                    "street" => $this->formUserData->street,
                    "housenumber" => $this->formUserData->houseNumber,
                    "zipcode" => $this->formUserData->zipcode,
                    "phoneNumber" => $this->formUserData->phoneNumber,
                    "user_iduser" => $this->formUser->iduser,
                ]);
                
                RoleUtils::addRole('user');
                SessionUtils::store("iduser", $this->formUser->iduser);
                Utils::addInfoMessage("Zarejestrowano!", $index = null);
                $this->generateView("home.tpl");
                
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
            
        }else {
            $this->generateView("registerView.tpl");
        }
    }
    public function action_registerShow() {
        $this->generateView("registerView.tpl");
    }

    public function generateView($templ) {
        App::getSmarty()->assign('formUser', $this->formUser); // dane formularza dla widoku
        App::getSmarty()->assign('formUserData', $this->formUserData); // dane formularza dla widoku
        
        App::getSmarty()->display($templ);
    }

}
