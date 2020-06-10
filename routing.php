<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('hello'); #default action
//kontroler:

Utils::addRoute('hello', 'HelloCtrl');
Utils::addRoute('loginShow', 'LoginCtrl');
Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl', ['user','admin','moderator']);
Utils::addRoute('registerShow', 'RegisterCtrl');
Utils::addRoute('register', 'RegisterCtrl');
Utils::addRoute('accountShow', 'AccountCtrl', ['user','admin','moderator']);
Utils::addRoute('adressEditView', 'AccountCtrl', ['user','admin','moderator']);
Utils::addRoute('adressEdit', 'AccountCtrl', ['user','admin','moderator']);
Utils::addRoute('changePassword', 'AccountCtrl', ['user','admin','moderator']);
Utils::addRoute('userOrders', 'AccountCtrl', ['user','admin','moderator']);
Utils::addRoute('moderatorOrders', 'ModeratorCtrl', ['admin','moderator']);
Utils::addRoute('moderatorAllOrders', 'ModeratorCtrl', ['admin','moderator']);
Utils::addRoute('offerList', 'OfferCtrl');
Utils::addRoute('offer', 'OfferCtrl');
Utils::addRoute('offerSummary', 'BuyCtrl', ['user','admin','moderator']);
Utils::addRoute('buyProduct', 'BuyCtrl', ['user','admin','moderator']);
//Utils::addRoute('action_name', 'controller_class_name');