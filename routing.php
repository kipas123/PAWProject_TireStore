<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('hello'); #default action
//kontroler:

Utils::addRoute('hello', 'HelloCtrl');
Utils::addRoute('about', 'HelloCtrl');
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
Utils::addRoute('offerSummary', 'BuyCtrl', ['user','admin','moderator']);
Utils::addRoute('buyProduct', 'BuyCtrl', ['user','admin','moderator']);
Utils::addRoute('unRealizedOrders', 'OrdersCtrl', ['admin','moderator']);
Utils::addRoute('allOrders', 'OrdersCtrl', ['admin','moderator']);
Utils::addRoute('orderDetailsView', 'OrdersCtrl', ['admin','moderator']);
Utils::addRoute('statusChange', 'OrdersCtrl', ['admin','moderator']);
Utils::addRoute('allProductsView', 'ProductCtrl', ['admin','moderator']);
Utils::addRoute('addProduct', 'ProductCtrl', ['admin','moderator']);
Utils::addRoute('addProductView', 'ProductCtrl', ['admin','moderator']);
Utils::addRoute('offerList', 'OfferViewCtrl');
Utils::addRoute('offer', 'OfferViewCtrl');
Utils::addRoute('offerAddView', 'OfferManagmentCtrl', ['admin','moderator']);
Utils::addRoute('offerEditView', 'OfferManagmentCtrl', ['admin','moderator']);
Utils::addRoute('offerAdd', 'OfferManagmentCtrl', ['admin','moderator']);
Utils::addRoute('offerEdit', 'OfferManagmentCtrl', ['admin','moderator']);
Utils::addRoute('userManagement', 'AdminTools', ['admin','moderator']);
Utils::addRoute('roleChange', 'AdminTools', ['admin']);
//Utils::addRoute('action_name', 'controller_class_name');