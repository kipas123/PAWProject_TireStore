<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

use app\forms\TireForm;
use core\ParamUtils;
use core\App;
use core\Utils;
use core\Validator;

/**
 * Description of ProductCtrl
 *
 * @author kipas
 */
class ProductCtrl {

    private $page;
    private $lastPage;
    private $search;

    public function __construct() {
        $this->formTire = new TireForm();
    }

    private function validateProduct() {
        $this->formTire->quantity = ParamUtils::getFromRequest('quantity');
        $this->formTire->brand = ParamUtils::getFromRequest('brand');
        $this->formTire->model = ParamUtils::getFromRequest('model');
        $this->formTire->size = ParamUtils::getFromRequest('size');
        $this->formTire->tireType = ParamUtils::getFromRequest('tireType');
        if (empty($this->formTire->brand) || empty($this->formTire->model) || empty($this->formTire->size) || empty($this->formTire->tireType)) {
            Utils::addErrorMessage('Wypełnij wszystkie pola!');
            return false;
        }

        return !App::getMessages()->isError();
    }

    public function action_addProductView() {
        $this->page = ParamUtils::getFromCleanURL(1, false, 'Błędne wywołanie aplikacji');
        $this->search = ParamUtils::getFromGet("filtr", false, 'Błędne wywołanie aplikacji');
        try {
                 if ($this->search != null) {
                (int) $count = App::getDB()->count("tireproduct", [
                    "OR" => [
		"model" => $this->search,
		"idtire" => $this->search,
                "brand" => $this->search,        
	],"has_offer" => 0
                ]);
                $this->lastPage = ceil(($count / 4));
                if ($this->page == null || $this->page > $this->lastPage || $this->page < 1)
                    $this->page = 1;
            
            $record = App::getDB()->select("tireproduct", [
                "[>]tiretype" => ["tiretype_idtiretype" => "idtiretype"]
                    ], "*", [
                "has_offer" => 0,
                'LIMIT' => [$this->page * 4 - 4, 4],
                "OR" => [
		"model" => $this->search,
		"idtire" => $this->search,
                "brand" => $this->search   
	]        
                        
            ]);
                 }else{
                     (int) $count = App::getDB()->count("tireproduct", [
                    "has_offer" => 0
                ]);
                $this->lastPage = ceil(($count / 4));
                if ($this->page == null || $this->page > $this->lastPage || $this->page < 1)
                    $this->page = 1;
            
            $record = App::getDB()->select("tireproduct", [
                "[>]tiretype" => ["tiretype_idtiretype" => "idtiretype"]
                    ], "*", [
                "has_offer" => 0,
                'LIMIT' => [$this->page * 4 - 4, 4]
                        
            ]);
                     
                 }
            $this->getTiretypePar();
            App::getSmarty()->assign('tireForm', $record); // dane formularza dla widoku
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        $this->generateView("productAdd.tpl");
    }

    public function action_addProduct() {
        if ($this->validateProduct()) {
            try {
                // wstawianie danych do bazy
                $this->record = App::getDB()->insert("tireProduct", [
                    "brand" => $this->formTire->brand,
                    "model" => $this->formTire->model,
                    "size" => $this->formTire->size,
                    "tiretype_idtiretype" => $this->formTire->tireType,
                ]);
                Utils::addInfoMessage("Dodano produkt!", $index = null);
                $this->action_addProductView();
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
                App::getRouter()->forwardTo("addProductView");
            }
        }else {
            App::getRouter()->forwardTo("addProductView");
        }
    }

    public function action_allProductsView() {
        $this->page = ParamUtils::getFromCleanURL(1, false, 'Błędne wywołanie aplikacji');
        $this->search = ParamUtils::getFromGet("filtr", false, 'Błędne wywołanie aplikacji');



        try {
            if ($this->search != null) {
                (int) $count = App::getDB()->count("tireproduct", [
                    "OR" => [
		"model" => $this->search,
		"idtire" => $this->search,
                "brand" => $this->search        
	]
                ]);
                $this->lastPage = ceil(($count / 10));
                if ($this->page == null || $this->page > $this->lastPage || $this->page < 1)
                    $this->page = 1;

                $record = App::getDB()->select("tireproduct", [
                    "[>]tiretype" => ["tiretype_idtiretype" => "idtiretype"],
                    "[>]offer" => ["idtire" => "tireproduct_idtire"],
                        ], [
                    "idtire",
                    "name",
                    "quantity",
                    "brand",
                    "model",
                    "size",
                    "has_offer",
                    "active"
                        ], [
                    'LIMIT' => [$this->page * 10 - 10, 10],
                    "OR" => [
		"model" => $this->search,
		"idtire" => $this->search,
                "brand" => $this->search
	]
                ]);
            }else {
                (int) $count = App::getDB()->count("tireproduct", [
                ]);
                $this->lastPage = ceil(($count / 10));
                if ($this->page == null || $this->page > $this->lastPage || $this->page < 1)
                    $this->page = 1;

                $record = App::getDB()->select("tireproduct", [
                    "[>]tiretype" => ["tiretype_idtiretype" => "idtiretype"],
                    "[>]offer" => ["idtire" => "tireproduct_idtire"],
                        ], [
                    "idtire",
                    "name",
                    "quantity",
                    "brand",
                    "model",
                    "size",
                    "has_offer",
                    "active"
                        ], [
                    'LIMIT' => [$this->page * 10 - 10, 10],
                ]);
            }
            App::getSmarty()->assign('tireForm', $record); // dane formularza dla widoku
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        $this->generateView("productManagement.tpl");
    }

    private function getTiretypePar() {
        try {
            $tiretype = App::getDB()->select("tiretype", "*", [
            ]);
            App::getSmarty()->assign('tireType', $tiretype); // dane formularza dla widoku
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
    }

    public function generateView($templ) {
        App::getSmarty()->assign('lastPage', $this->lastPage); // dane formularza dla widoku
        App::getSmarty()->assign('page', $this->page); // dane formularza dla widoku
        App::getSmarty()->assign('search', $this->search); // dane formularza dla widoku
        App::getSmarty()->display($templ);
    }

}
