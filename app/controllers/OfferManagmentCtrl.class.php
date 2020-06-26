<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;
use core\App;
use core\ParamUtils;
use core\Utils;
use app\forms\OfferForm;

/**
 * Description of OfferManagmentCtrl
 *
 * @author kipas
 */
class OfferManagmentCtrl {
    private $formOffer;
    private $choice;

    public function __construct() {
        $this->formOffer = new OfferForm();
    }
    
     private function validateEdit() {
        //pobierz parametry na potrzeby wyswietlenia danych do edycji
        //z widoku listy osób (parametr jest wymagany)
        $this->choice = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }
           private function validateOffer() {
        $this->formOffer->shortdescription = ParamUtils::getFromRequest('shortdescription');
        $this->formOffer->description = ParamUtils::getFromRequest('description');
        $this->formOffer->imghref = ParamUtils::getFromRequest('imghref');
        $this->formOffer->price = ParamUtils::getFromRequest('price');
        $this->formOffer->active = ParamUtils::getFromRequest('active');
        $this->formOffer->quantity = ParamUtils::getFromRequest('quantity');

        if (empty($this->formOffer->quantity) || empty($this->formOffer->imghref) || empty($this->formOffer->price) || empty($this->formOffer->description) || empty($this->formOffer->shortdescription) ) {
            Utils::addErrorMessage('Wypełnij wszystkie wymagane pola!');
        }
        
        if (!is_numeric($this->formOffer->quantity)) {
            Utils::addErrorMessage('Ilość sztuk musi być liczbą!');
        }

        return !App::getMessages()->isError();
    }
       
    public function action_offerAddView() {
        if($this->validateEdit()){
            try {
                $record = App::getDB()->get("tireproduct",[
                    "idtire"
                ],[
                    "idtire" => $this->choice,
                ]);

            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
            if($record==null){
                 App::getRouter()->forwardTo("hello");
                 exit();
            }
            App::getSmarty()->assign('idtire', $record); // dane formularza dla widoku
            $this->generateView("offerAdd.tpl");
            
        }
    }
    
    public function action_offerEditView() {
        if($this->validateEdit()){
            try {
                $record = App::getDB()->get("offer","*",[
                    "tireproduct_idtire" => $this->choice
                ]);

            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
            if($record==null){
                 App::getRouter()->forwardTo("hello");
                 exit();
            }
            App::getSmarty()->assign('formOffer', $record); // dane formularza dla widoku
            $this->generateView("offerEdit.tpl");
            
        }
    }
    
    
    public function action_offerAdd() {
        
        
        if($this->validateEdit() && $this->validateOffer()){
             try {
                // wstawianie danych do bazy
                $this->record = App::getDB()->insert("offer",[
                    "tireproduct_idtire" => $this->choice,
                    "shortdescription" => $this->formOffer->shortdescription,
                    "description" => $this->formOffer->description,
                    "price" => $this->formOffer->price,
                    "imghref" => $this->formOffer->imghref,
                    "active" => $this->formOffer->active,
                    "quantity" => $this->formOffer->quantity
                ]);
                Utils::addInfoMessage("Dodano produkt!", $index = null);
                App::getDB()->update("tireproduct",[
                    "has_offer" => "1"
                ],[
                    "idtire" => $this->choice
                ]);
                
                App::getRouter()->forwardTo("addProductView");
                
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
            
        }else{
            $this->generateView("offerAdd.tpl");
        }

    }
    
    public function action_offerEdit() {
        
        
        if($this->validateEdit() && $this->validateOffer()){
             try {
                // wstawianie danych do bazy
                $this->record = App::getDB()->update("offer",[
                    "shortdescription" => $this->formOffer->shortdescription,
                    "description" => $this->formOffer->description,
                    "price" => $this->formOffer->price,
                    "imghref" => $this->formOffer->imghref,
                    "active" => $this->formOffer->active,
                    "quantity" => $this->formOffer->quantity
                ],["tireproduct_idtire" => $this->choice]);
                Utils::addInfoMessage("Zmieniono ofertę produktu nr.".$this->choice, $index = null);
                App::getRouter()->forwardTo("allProductsView");
                
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
            
        }else{
            App::getRouter()->forwardTo("allProductsView");
        }

    }
    
        public function generateView($templ) {
        App::getSmarty()->assign('idtire', $this->choice); // dane formularza dla widoku
        App::getSmarty()->display($templ);
    }
    
}
