<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

use app\forms\TireForm;
use app\forms\OfferForm;
use core\ParamUtils;
use core\App;
use core\Utils;
use core\Functions;

/**
 * Description of ModeratorCtrl
 *
 * @author kipas
 */
class OrdersCtrl {

    private $page;
    private $lastPage;
    private $search;
    private $formTire;
    private $formOffer;
    private $idOrder;

    public function __construct() {
        $this->formTire = new TireForm();
        $this->formOffer = new OfferForm();
    }

    public function action_unRealizedOrders() {
        $this->page = ParamUtils::getFromCleanURL(1, false, 'Błędne wywołanie aplikacji');
        try {            
            $this->search = ParamUtils::getFromGet("filtr", $required = false);
            if ($this->search != null) {
                
                $count = App::getDB()->count("order",[
                    "[>]user" => ["user_iduser" => "iduser"]
                ],"idorder", [
                'orderstatus_idorderstatus' => [3, 4],
                "OR" => [
		"idorder" => $this->search,
		"login" => $this->search
	]    
            ]);
                $this->lastPage = ceil(($count / 5));
                if($this->lastPage<1) $this->lastPage = 1;
                if ($this->page == null || $this->page > $this->lastPage || $this->page < 1)
                $this->page = 1;

            $record = App::getDB()->select("order", [
                "[>]user" => ["user_iduser" => "iduser"],
                "[>]tireproduct_has_order" => ["idorder" => "order_idorder"],
                "[>]orderstatus(status)" => ["orderstatus_idorderstatus" => "idorderstatus"]], [
                "iduser",
                "login",
                "idorder",
                "quantity",
                "totalprice",
                "orderdata",
                "orderstatus_idorderstatus",
                "status.name(status_name)",
                "tireproduct_idtire"], [
                'orderstatus_idorderstatus' => [3, 4],
                'LIMIT' => [$this->page * 5 - 5, 5],
                    "OR" => [
		"idorder" => $this->search,
		"login" => $this->search
	],
                "ORDER" => [
                    "orderdata" => "DESC"
                ]
            ]);
            }else{
            (int) $count = App::getDB()->count("order", [
                'orderstatus_idorderstatus' => [3, 4]
            ]);
            $this->lastPage = ceil(($count / 5));
            if($this->lastPage<1) $this->lastPage = 1;
                if ($this->page == null || $this->page > $this->lastPage || $this->page < 1)
                $this->page = 1;

            $record = App::getDB()->select("order", [
                "[>]user" => ["user_iduser" => "iduser"],
                "[>]tireproduct_has_order" => ["idorder" => "order_idorder"],
                "[>]orderstatus(status)" => ["orderstatus_idorderstatus" => "idorderstatus"]], [
                "iduser",
                "login",
                "idorder",
                "quantity",
                "totalprice",
                "orderdata",
                "orderstatus_idorderstatus",
                "status.name(status_name)",
                "tireproduct_idtire"], [
                'orderstatus_idorderstatus' => [3, 4],
                'LIMIT' => [$this->page * 5 - 5, 5],
                "ORDER" => [
                    "orderdata" => "DESC"
                ]
            ]);
            }
            $statusChoice = App::getDB()->select("orderstatus", "*", [
                "ORDER" => [
                    "sequence" => "ASC"
                ]
            ]);
            $this->lastPage = ceil(($count / 5));
            App::getSmarty()->assign('statusChoice', $statusChoice); // dane formularza dla widoku
            App::getSmarty()->assign('orderForm', $record); // dane formularza dla widoku
            $this->generateView("moderatorOrders.tpl");
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
    }

    public function action_allOrders() {
        try {
            $this->page = ParamUtils::getFromCleanURL(1, false, 'Błędne wywołanie aplikacji');

            $this->search = ParamUtils::getFromGet("filtr", $required = false);
            if ($this->search != null) {
               $count = App::getDB()->count("order",[
                    "[>]user" => ["user_iduser" => "iduser"]
                ],"idorder", [
                'orderstatus_idorderstatus' => [3, 4],
                "OR" => [
		"idorder" => $this->search,
		"login" => $this->search
	]    
            ]);
                
             $this->lastPage = ceil(($count / 10));
             if($this->lastPage<1) $this->lastPage = 1;
            if ($this->page == null || $this->page > $this->lastPage || $this->page < 1)
                $this->page = 1;   
            $record = App::getDB()->select("order", [
                "[>]user" => ["user_iduser" => "iduser"],
                "[>]tireproduct_has_order" => ["idorder" => "order_idorder"], "[>]orderstatus(status)" => ["orderstatus_idorderstatus" => "idorderstatus"]], [
                "iduser",
                "login",
                "idorder",
                "quantity",
                "totalprice",
                "orderdata",
                "orderstatus_idorderstatus",
                "status.name(status_name)",
                "tireproduct_idtire"], [
                'LIMIT' => [$this->page * 10 - 10, 10],
                "ORDER" => [
                    "orderdata" => "DESC",
                ],
                    "OR" => [
		"idorder" => $this->search,
		"login" => $this->search
	]
            ]);
                
                
                
                
            }else{
                
                
            (int) $count = App::getDB()->count("order", [
            ]);
            $this->lastPage = ceil(($count / 10));
            if($this->lastPage<1) $this->lastPage = 1;
            if ($this->page == null || $this->page > $this->lastPage || $this->page < 1)
                $this->page = 1;
            
            $record = App::getDB()->select("order", [
                "[>]user" => ["user_iduser" => "iduser"],
                "[>]tireproduct_has_order" => ["idorder" => "order_idorder"], "[>]orderstatus(status)" => ["orderstatus_idorderstatus" => "idorderstatus"]], [
                "iduser",
                "login",
                "idorder",
                "quantity",
                "totalprice",
                "orderdata",
                "orderstatus_idorderstatus",
                "status.name(status_name)",
                "tireproduct_idtire"], [
                'LIMIT' => [$this->page * 10 - 10, 10],
                "ORDER" => [
                    "orderdata" => "DESC"
                ]
            ]);
            }
            App::getSmarty()->assign('orderForm', $record); // dane formularza dla widoku
            $this->generateView("moderatorAllOrders.tpl");
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
    }
    

    private function validateEdit() {
        //pobierz parametry na potrzeby wyswietlenia danych do edycji
        //z widoku listy osób (parametr jest wymagany)
        $this->idOrder = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');

        return !App::getMessages()->isError();
    }

    public function action_orderDetailsView() {
        $recordOrder = null;
        if ($this->validateEdit() && Functions::getOrderParam($this->idOrder, $recordOrder)) {
            App::getSmarty()->assign('recordOrder', $recordOrder);
            $this->generateView("offerDeatails.tpl");
        } else
            $this->generateView("moderatorOrders.tpl");
    }

    public function action_statusChange() {
        try {
            $status = ParamUtils::getFromRequest('status');
            $this->idOrder = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
            // wstawianie danych do bazy
            $this->record = App::getDB()->update("order", [
                "orderstatus_idorderstatus" => $status
                    ], [
                "idorder" => $this->idOrder
            ]);
            Utils::addInfoMessage("Zmieniono status!", $index = null);
            $this->action_unRealizedOrders();
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
