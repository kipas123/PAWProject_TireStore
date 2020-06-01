<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('hello'); #default action
//App::getRouter()->setLoginRoute('login'); #action to forward if no permissions
Utils::addRoute('hello', 'HelloCtrl');
Utils::addRoute('loginShow',     'LoginCtrl');
Utils::addRoute('login',         'LoginCtrl');
Utils::addRoute('logout',        'LoginCtrl');
Utils::addRoute('registerShow',        'RegisterCtrl');
Utils::addRoute('registerAdress',        'RegisterCtrl');
Utils::addRoute('register',        'RegisterCtrl');
Utils::addRoute('accountShow','AccountCtrl');
Utils::addRoute('adressEditView','AccountCtrl');
Utils::addRoute('adressEdit','AccountCtrl');
Utils::addRoute('changePassword','AccountCtrl');
Utils::addRoute('offerList', 'OfferCtrl');
Utils::addRoute('offer', 'OfferCtrl');
//Utils::addRoute('action_name', 'controller_class_name');