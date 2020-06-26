<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

use core\App;
use core\Message;
use core\Messages;
use core\ParamUtils;
use core\Utils;
use app\forms\TireForm;
use app\forms\OfferForm;

/**
 * Description of OfferList
 *
 * @author kipas
 */
class OfferViewCtrl {

    private $form;
    private $formTire;
    private $formOffer;
    private $choice;
    private $page;
    private $lastPage;
    private $search;

    public function __construct() {
        $this->formTire = new TireForm();
        $this->formOffer = new OfferForm();
    }

    private function validateEdit() {
        //pobierz parametry na potrzeby wyswietlenia danych do edycji
        //z widoku listy osób (parametr jest wymagany)
        $this->choice = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        $this->page = ParamUtils::getFromCleanURL(2, false, 'Błędne wywołanie aplikacji');
        $this->search = ParamUtils::getFromGet("filtr", $required = false, $required_message = null, $index = null);

        return !App::getMessages()->isError();
    }

    private function getParamsOffer() {
        try {
            //odczyt z bazy danych osoby o podanym ID (tylko jednego rekordu)
            $record = App::getDB()->get("tireproduct", ["[>]offer" => ["idtire" => "tireproduct_idtire"],
                "[>]tiretype" => ["tiretype_idtiretype" => "idtiretype"]], "*", [
                "idtire" => $this->choice
            ]);
            //jeśli osoba istnieje to wpisz dane do obiektu formularza
            $this->formTire->id = $record['idtire'];
            $this->formTire->tireType = $record['name'];
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
    
        private function getFromDBOffers($tiretype) {

        try {
            (int) $count = App::getDB()->count("tireproduct", [
                "has_offer" => 1,
                "tiretype_idtiretype" => $tiretype
            ]);
            $this->lastPage = ceil(($count / 4));
            if($this->lastPage<1) $this->lastPage = 1;
            if ($this->page == null || $this->page > $this->lastPage || $this->page < 1)
                $this->page = 1;
            $this->form = App::getDB()->select("tireproduct", ["[>]offer" => ["idtire" => "tireproduct_idtire"],
                "[>]tiretype" => ["tiretype_idtiretype" => "idtiretype"]
                    ], "*", [
                "name" => $this->choice,
                "active" => 1,
                'LIMIT' => [$this->page * 4 - 4, 4]
            ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
    }

    private function getFromDBOffers_filtered($tiretype) {
        try {
            (int) $count = App::getDB()->count("tireproduct", [
                "has_offer" => 1,
                "tiretype_idtiretype" => $tiretype,
                "OR" => [
		"model" => $this->search,
		"brand" => $this->search
	]
            ]);

            $this->lastPage = ceil(($count / 4));
            if($this->lastPage<1) $this->lastPage = 1;
            if ($this->page == null || $this->page > $this->lastPage || $this->page < 1 || (is_numeric($this->page) == false))
                $this->page = 1;

            $this->form = App::getDB()->select("tireproduct", ["[>]offer" => ["idtire" => "tireproduct_idtire"],
                "[>]tiretype" => ["tiretype_idtiretype" => "idtiretype"]
                    ], "*", [
                "name" => $this->choice,
                "active" => 1,
                "OR" => [
		"model" => $this->search,
		"brand" => $this->search
	],
                'LIMIT' => [$this->page * 4 - 4, 4]
            ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
    }


    private function validateOffer() {
        $this->formOffer->shortdescription = ParamUtils::getFromRequest('shortdescription');
        $this->formOffer->description = ParamUtils::getFromRequest('description');
        $this->formOffer->imghref = ParamUtils::getFromRequest('imghref');
        $this->formOffer->price = ParamUtils::getFromRequest('price');

        if (empty($this->formOffer->imghref) || empty($this->formOffer->price)) {
            Utils::addErrorMessage('Wypełnij wszystkie wymagane pola!');
        }


        return !App::getMessages()->isError();
    }

    public function action_offerList() {
        if ($this->validateEdit()) {

            if ($this->search != null) {
                if ($this->choice == "car") {
                    $this->getFromDBOffers_filtered(1);
                } else if ($this->choice == "truck") {
                    $this->getFromDBOffers_filtered(2);
                }
            } else {
                if ($this->choice == "car") {
                    $this->getFromDBOffers(1);
                } else if ($this->choice == "truck") {
                    $this->getFromDBOffers(2);
                }
            }
            App::getSmarty()->assign('tiretype', $this->choice); // dane formularza dla widoku
            App::getSmarty()->assign('search', $this->search); // dane formularza dla widoku
            $this->generateView("offerList.tpl");
            //Wygenerowanie widoku
        }else App::getRouter()->forwardTo("home");
    }

    public function action_offer() {
        // 1. walidacja id osoby do edycji
        if ($this->validateEdit()) {
            $this->getParamsOffer();
        }
        App::getSmarty()->assign('idtire', $this->choice); // dane formularza dla widoku
        App::getSmarty()->assign('formTire', $this->formTire); // dane formularza dla widoku
        App::getSmarty()->assign('formOffer', $this->formOffer); // dane formularza dla widoku

        $this->generateView("offer.tpl");
    }

    public function generateView($templ) {
        App::getSmarty()->assign('baza', $this->form); // dane formularza dla widoku
        App::getSmarty()->assign('lastPage', $this->lastPage); // dane formularza dla widoku
        App::getSmarty()->assign('page', $this->page); // dane formularza dla widoku

        App::getSmarty()->display($templ);
    }

}
