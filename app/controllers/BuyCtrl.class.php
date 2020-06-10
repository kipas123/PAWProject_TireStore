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
use app\controllers\AccountCtrl;
use app\forms\TireForm;
use app\forms\OfferForm;

/**
 * Description of BuyCtrl
 *
 * @author kipas
 */
class BuyCtrl {

    private $formUser;
    private $formTire;
    private $formOffer;
    private $choice;

    public function __construct() {
        $this->formTire = new TireForm();
        $this->formOffer = new OfferForm();
        $this->formUser = new UserForm();
    }

    public function validateEdit() {
        //pobierz parametry na potrzeby wyswietlenia danych do edycji
        //z widoku listy osób (parametr jest wymagany)
        $this->choice = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }

    private function getAccountParam() {
        $this->formUser->iduser = SessionUtils::load("iduser", $keep = true);
        try {
            //odczyt z bazy danych osoby o podanym ID (tylko jednego rekordu)
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

    private function getParamsOffer() {
        try {
            //odczyt z bazy danych osoby o podanym ID (tylko jednego rekordu)
            $record = App::getDB()->get("tireproduct", ["[>]offer" => ["idtire" => "tireproduct_idtire"]], "*", [
                "idtire" => $this->choice
            ]);
            // jeśli osoba istnieje to wpisz dane do obiektu formularza
            $this->formTire->id = $record['idtire'];
            $this->formTire->tireType = $record['tireType'];
            $this->formTire->quantity = $record['quantity'];
            $this->formTire->brand = $record['brand'];
            $this->formTire->model = $record['model'];
            $this->formOffer->price = $record['price'];
            $this->formTire->size = $record['size'];
            $this->formOffer->imghref = $record['imghref'];
            $this->formOffer->description = $record['description'];
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
    }

    public function action_offerSummary() {
        $sztuki = ParamUtils::getFromRequest("sztuki", $required = false, $required_message = null, $index = null);
        if (!is_numeric($sztuki)) {
            $this->validateEdit();
            $this->getParamsOffer();
            Utils::addErrorMessage("Podaj ilość sztuk!", $index = null);
            $this->generateView("offer.tpl");
            exit();
        }

        $this->validateEdit();
        $this->getParamsOffer();

        $this->getAccountParam();
        $sumPrice = $sztuki * ($this->formOffer->price);
        SessionUtils::store("sumPrice", $sumPrice);
        SessionUtils::store("sztuki", $sztuki);
        App::getSmarty()->assign('sztuki', $sztuki); // dane formularza dla widoku
        App::getSmarty()->assign('sumPrice', $sumPrice); // dane formularza dla widoku
        $this->generateView("offerSummary.tpl");
    }

    
    
    public function action_buyProduct() {
            
                try {
               $this->validateEdit();
               
               $this->formUser->iduser = SessionUtils::load("iduser", $keep = true);
               $sumPrice = SessionUtils::load("sumPrice", $keep = false);
               $sztuki = SessionUtils::load("sztuki", $keep = false);
            //odczyt z bazy danych osoby o podanym ID (tylko jednego rekordu)
            
                $record = App::getDB()->insert("order",[
                    "quantity" => $sztuki,
                    "totalprice" => $sumPrice,
                    "orderdata" => date("Y-m-d H:i:s"),
                    "status" => 0,
                    "user_iduser" => $this->formUser->iduser,
                ]);
                $idorder = App::getDB()->id();
                
                App::getDB()->insert("tireproduct_has_order",[
                    "tireproduct_idtire" => $this->choice,
                    "order_idorder" => $idorder,
                ]);
                Utils::addInfoMessage("Kupiono produkt!", $index = null);
                $this->generateView("home.tpl");
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
    }
    
    
    
    
    
    public function generateView($templ) {
        // dane formularza dla widoku
        App::getSmarty()->assign('idtire', $this->choice);
        App::getSmarty()->assign('formTire', $this->formTire);
        App::getSmarty()->assign('formOffer', $this->formOffer);
        App::getSmarty()->assign('formUser', $this->formUser);
        App::getSmarty()->display($templ);
    }

}
