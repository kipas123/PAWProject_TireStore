<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace core;

/**
 * Description of Functions
 *
 * @author kipas
 */
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

class Functions {

    public static function getParamsOffer(&$formTire, &$formOffer, $idTire) {
        try {
            //odczyt z bazy danych osoby o podanym ID (tylko jednego rekordu)
            $record = App::getDB()->get("tireproduct", ["[>]offer" => ["idtire" => "tireproduct_idtire"],
                "[>]tiretype" => ["tiretype_idtiretype" => "idtiretype"]], "*", [
                "idtire" => $idTire
            ]);
            // jeśli osoba istnieje to wpisz dane do obiektu formularza
            $formTire->id = $record['idtire'];
            $formTire->tireType = $record['tiretype'];
            $formTire->quantity = $record['quantity'];
            $formTire->brand = $record['brand'];
            $formTire->model = $record['model'];
            $formOffer->price = $record['price'];
            $formTire->size = $record['size'];
            $formOffer->imghref = $record['imghref'];
            $formOffer->description = $record['description'];
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
    }

    public static function getAccountParam(&$formUser, $iduser) {
        try {
            //odczyt z bazy danych osoby o podanym ID (tylko jednego rekordu)
            $record = App::getDB()->get("user", ["login", "name", "surname", "city", "street", "housenumber", "zipcode", "phoneNumber"], [
                "iduser" => $iduser
            ]);
            // jeśli osoba istnieje to wpisz dane do obiektu formularza
            $formUser->login = $record['login'];
            $formUser->name = $record['name'];
            $formUser->surname = $record['surname'];
            $formUser->city = $record['city'];
            $formUser->street = $record['street'];
            $formUser->houseNumber = $record['housenumber'];
            $formUser->zipcode = $record['zipcode'];
            $formUser->phoneNumber = $record['phoneNumber'];
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
    }

    public static function getOrderParam($idOrder, &$recordOrder) {
        try {
            $recordOrder = App::getDB()->get("order", [
                "[>]user(user)" => ["user_iduser" => "iduser"],
                "[>]tireproduct_has_order" => ["idorder" => "order_idorder"],
                "[>]orderstatus(status)" => ["orderstatus_idorderstatus" => "idorderstatus"],
                "[>]tireproduct" => ["tireproduct_has_order.tireproduct_idtire" => "idtire"],
                "[>]offer" => ["tireproduct.idtire" => "tireproduct_idtire"]],
                ["user.name",
                "surname",
                "city",
                "street",
                "houseNumber",
                "zipcode",
                "phoneNumber",
                "brand",
                "model",
                "size",
                "order.quantity",
                "price",
                "totalprice",
                "orderdata",
                 "imghref",
                    ], [
                "idorder" => $idOrder,
            ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
            
        }
        return !App::getMessages()->isError();
    }

}
