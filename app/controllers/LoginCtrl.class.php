<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\UserForm;

class LoginCtrl {

    private $formUser;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->formUser = new UserForm();
    }

    private function validate() {
        $this->formUser->login = ParamUtils::getFromRequest('login');
        $this->formUser->pass = ParamUtils::getFromRequest('pass');

        //nie ma sensu walidować dalej, gdy brak parametrów
        if (!isset($this->formUser->login))
            return false;

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if (empty($this->formUser->login)) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        if (empty($this->formUser->pass)) {
            Utils::addErrorMessage('Nie podano hasła');
        }

        //nie ma sensu walidować dalej, gdy brak wartości
        if (App::getMessages()->isError())
            return false;
        try {

            $password_hash = App::getDB()->get("user", "password", [
                "login" => $this->formUser->login
            ]);
            
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
        }
        if (empty($password_hash)){
            Utils::addErrorMessage('Niepoprawny login lub hasło!');
            return false;
        } 
        $password_check = false;
           if((password_verify($this->formUser->pass, $password_hash)) == true){
               $password_check=true;
           } 
        
        if ($password_check) {
            try {

                $record = App::getDB()->get("user",[
                    "[>]roles(role)" => ["roles_idroles" => "idroles"]
                ], [
                    "role.name(role_name)",
                    "iduser"], [
                    "login" => $this->formUser->login,
                ]);
                $this->formUser->role = $record["role_name"];
                $this->formUser->iduser = $record["iduser"];
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
            }

            RoleUtils::addRole($this->formUser->role);
            SessionUtils::store("iduser", $this->formUser->iduser);
        } else {
            Utils::addErrorMessage('Niepoprawny login lub hasło');
        }

        return !App::getMessages()->isError();
    }

    public function action_loginShow() {
        $this->generateView();
    }

    public function action_login() {
        if ($this->validate()) {
            //zalogowany => przekieruj na główną akcję (z przekazaniem messages przez sesję)
            App::getRouter()->redirectTo("hello");
        } else {
            //niezalogowany => pozostań na stronie logowania
            $this->generateView();
        }
    }

    public function action_logout() {
        // 1. zakończenie sesji
        session_destroy();
        // 2. idź na stronę główną - system automatycznie przekieruje do strony logowania
        App::getRouter()->redirectTo("hello");
    }

    public function generateView() {
        App::getSmarty()->assign('formUser', $this->formUser); // dane formUserularza do widoku
        App::getSmarty()->display('loginView.tpl');
    }

}
