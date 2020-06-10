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

/**
 * Description of RegisterCtrl
 *
 * @author kipas
 */
class RegisterCtrl {

    private $formUser;
    private $confirmPass;
    private $record;

    public function __construct() {
        $this->formUser = new UserForm();
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

    public function validateAdress() {
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

    public function action_register() {
        // 1. walidacja id osoby do edycji
        if ($this->validateLogin() && $this->validateAdress()) {
            $this->formUser->role = "user";
            
            
            try {
                // wstawianie danych do bazy
                $this->record = App::getDB()->insert("user",[
                    "login" => $this->formUser->login,
                    "password" => $this->formUser->pass,
                    "role" => $this->formUser->role,
                    "name" => $this->formUser->name,
                    "surname" => $this->formUser->surname,
                    "city" => $this->formUser->city,
                    "street" => $this->formUser->street,
                    "housenumber" => $this->formUser->houseNumber,
                    "zipcode" => $this->formUser->zipcode,
                    "phoneNumber" => $this->formUser->phoneNumber,
                ]);
                $this->formUser->iduser = App::getDB()->get("user","iduser",[
                    "login" => $this->formUser->login
                ]);
                
                
                RoleUtils::addRole($this->formUser->role);
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
        
        App::getSmarty()->display($templ);
    }

}
