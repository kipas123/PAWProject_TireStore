<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

use core\App;
use app\forms\UserForm;
use core\ParamUtils;
use core\Utils;
/**
 * Description of AdminTools
 *
 * @author kipas
 */
class AdminTools {

    public function __construct() {
        $this->formUser = new UserForm();
    }

    public function action_userManagement() {
        try {
            $search = ParamUtils::getFromGet("filtr", $required = false);
                        
            $select = App::getDB()->select("roles", "*", [
                	"ORDER" => [
		"sequence" => "ASC"],"idroles[>]" => 1 
            ]);
            
            
            if ($search != null) {
                $record = App::getDB()->select("user",["[>]roles(role)" => ["roles_idroles" => "idroles"]] ,[
                    "iduser",
                    "login",
                    "role.name"
                        ], [
                    "OR" => [
                        "iduser" => $search,
                        "login" => $search
                    ]
                ]);
            } else {
                $record = App::getDB()->select("user",["[>]roles(role)" => ["roles_idroles" => "idroles"]] ,[
                    "iduser",
                    "login",
                    "role.name"
                        ], [
                    "idroles" => [2]
                ]);
            }
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
        App::getSmarty()->assign('formUser', $record); // dane formularza dla widoku
        App::getSmarty()->assign('select', $select); // dane formularza dla widoku
        $this->generateView("userManagement.tpl");
    }
    
    public function action_roleChange() {
        try {
            $role = ParamUtils::getFromRequest('role');
            $idUser = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
            if($idUser!=null){
            // wstawianie danych do bazy
            App::getDB()->update("user", [
                "roles_idroles" => $role
                    ], [
                "iduser" => $idUser
            ]);
            Utils::addInfoMessage("Zmieniono rolę!", $index = null);
            }
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
        App::getRouter()->forwardTo("userManagement");
    }

    public function generateView($templ) {

        App::getSmarty()->display($templ);
    }

}
