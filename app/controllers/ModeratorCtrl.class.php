<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;
use core\App;
use core\Utils;
/**
 * Description of ModeratorCtrl
 *
 * @author kipas
 */
class ModeratorCtrl {
   public function action_moderatorOrders() {
            try {
                $record = App::getDB()->select("order",[
                    "[>]user" => ["user_iduser" => "iduser"],
                    "[>]tireproduct_has_order" => ["idorder" => "order_idorder"]],[
                        "login",
                        "idorder",
                        "quantity",
                        "totalprice",
                        "orderdata",
                        "status",
                        "tireproduct_idtire"],[
                            "status" => 0
                        ]);
               
                App::getSmarty()->assign('orderForm', $record); // dane formularza dla widoku
                $this->generateView("moderatorOrders.tpl");
                
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
    }
    public function action_moderatorAllOrders() {
            try {
                $record = App::getDB()->select("order",[
                    "[>]user" => ["user_iduser" => "iduser"],
                    "[>]tireproduct_has_order" => ["idorder" => "order_idorder"]],[
                        "login",
                        "idorder",
                        "quantity",
                        "totalprice",
                        "orderdata",
                        "status",
                        "tireproduct_idtire"]);
               
                App::getSmarty()->assign('orderForm', $record); // dane formularza dla widoku
                $this->generateView("moderatorAllOrders.tpl");
                
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
    }
    
    
    
    
    
        public function generateView($templ) {
        App::getSmarty()->display($templ);
    }
}
