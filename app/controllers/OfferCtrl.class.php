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
class OfferCtrl {
    private $form;
    private $formTire;
    private $formOffer;
    private $choice;

    public function __construct() {
        $this->formTire = new TireForm();
        $this->formOffer = new OfferForm();
    }
    
     public function validateEdit() {
        //pobierz parametry na potrzeby wyswietlenia danych do edycji
        //z widoku listy osób (parametr jest wymagany)
        $this->choice = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }
    
        public function action_offerList() {
        // 1. walidacja id osoby do edycji
        if($this->validateEdit()){
            
            
            if($this->choice == "car"){
                
                try {
                
                $this->form = App::getDB()->select("tireproduct",["[>]offer" => ["idtire" => "tireproduct_idtire"]],"*", [
                    "tireType" => $this->choice,    
                ]);

            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
                
            }else if($this->choice == "truck"){
                try {
                
                $this->form = App::getDB()->select("tireproduct",["[>]offer" => ["idtire" => "tireproduct_idtire"]],"*", [
                    "tireType" => $this->choice
                ]);

            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
            }else{
                 Utils::addErrorMessage("ERROR! Złe użycie aplikacji!");
            }
          
        }
        
        App::getSmarty()->assign('baza', $this->form); // dane formularza dla widoku

        // 3. Wygenerowanie widoku
        $this->generateView("offerList.tpl");
    }
    
    
    public function action_offer() {
               // 1. walidacja id osoby do edycji
        if ($this->validateEdit()) {
            try {
                // 2. odczyt z bazy danych osoby o podanym ID (tylko jednego rekordu)
                $record =  App::getDB()->get("tireproduct",["[>]offer" => ["idtire" => "tireproduct_idtire"]],"*", [
                    "idtire" => $this->choice   
                ]);
                // 2.1 jeśli osoba istnieje to wpisz dane do obiektu formularza
                $this->formTire->id = $record['idtire'];
                $this->formTire->tireType = $record['tireType'];
                $this->formTire->quantity = $record['quantity'];
                $this->formTire->brand = $record['brand'];
                $this->formTire->model = $record['model'];
                $this->formTire->prize = $record['prize'];
                $this->formTire->size = $record['size'];
                $this->formOffer->imghref = $record['imghref'];
                $this->formOffer->description = $record['description'];
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        // 3. Wygenerowanie widoku
        App::getSmarty()->assign('formTire', $this->formTire); // dane formularza dla widoku
        App::getSmarty()->assign('formOffer', $this->formOffer); // dane formularza dla widoku

        $this->generateView("offer.tpl");
    }

          
        public function generateView($templ) {
        App::getSmarty()->display($templ);
    }
    
    
    
    
    
    
    
}

