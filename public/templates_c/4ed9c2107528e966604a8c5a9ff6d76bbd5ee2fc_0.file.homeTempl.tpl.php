<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-11 23:15:19
  from 'C:\xampp\htdocs\ProjektPaw\app\views\templates\homeTempl.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee29ee744a170_14088049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ed9c2107528e966604a8c5a9ff6d76bbd5ee2fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjektPaw\\app\\views\\templates\\homeTempl.tpl',
      1 => 1591910117,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee29ee744a170_14088049 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport"    content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">

        <title>TireStore</title>

        <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/gt_favicon.png">

        <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/font-awesome.min.css">

        <!-- Custom styles for our template -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/bootstrap-theme.css" media="screen" >
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <?php echo '<script'; ?>
 src="assets/js/html5shiv.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="assets/js/respond.min.js"><?php echo '</script'; ?>
>
        <![endif]-->
    </head>

    <body>
        <!-- Fixed navbar -->
        <div class="navbar navbar-inverse navbar-fixed-top headroom" >
            <div class="container">
                <div class="navbar-header">
                    <!-- Button for smallest screens -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/logo.png" alt="Progressus HTML5 template"></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav pull-right">
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Opony <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
offerList/car">Opony osobwe</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
offerList/truck">Opony ciezarowe</a></li>
                            </ul>
                        </li>
                        <?php if (\core\RoleUtils::inRole("admin")) {?>
                            <li><a href="contact.html">Admin</a></li>
                            <?php }?>
                            <?php if (\core\RoleUtils::inRole("moderator")) {?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Moderator <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
moderatorOrders">Zamówienia do realizacji</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
moderatorAllOrders">Wszystkie zamowienia</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
addProductView">Dodaj Produkt/Ogłoszenie</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
moderatorAllProductsView">Zarządzaj produktami</a></li>
                                </ul>
                            </li>
                        <?php }?>
                        <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
                            <li class="dropdown active">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Konto <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
userOrders">Moje zamówienia</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
accountShow">Ustawienia konta</a></li>
                                </ul>
                            </li>   
                            <li><a href="about.html">O nas</a></li>
                            <li><a href="contact.html">Kontakt</a></li>
                            <li><a class="btn" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout">Wyloguj</a></li>
                            <?php } else { ?>
                            <li><a href="about.html">O nas</a></li>
                            <li><a href="contact.html">Kontakt</a></li>
                            <li><a class="btn" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
loginShow">SIGN IN / SIGN UP</a></li>
                            <?php }?>

                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div> 

        <header id="head" class="secondary"></header>
        <!-- Fixed navbar -->

        <!-- container -->
        <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
                                                <div class="alert <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>alert-success<?php }?>
                                                     " role="alert" style="margin-top: 10px;">
                                                    <?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>

                                                </div>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php }?>
        <div class="row" style="background-color: white; padding:10px;">
            <br></br><br>

            <div class="col-lg-4 col-md-4">

                <div class="menuTable">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
offerList/car">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/osobowy_2.png" class="img-fluid" alt="Responsive image"> 
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="menuTable">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
offerList/truck">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/tir.png" class="img-fluid" alt="Responsive image">
                    </a>
                </div>
            </div>


            <div class="col-lg-4 col-md-4">
                <div class="menuTable">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/about_us.png" class="img-fluid" alt="Responsive image">
                </div>
            </div>
        </div>
        <!-- /container -->





        <footer id="footer" class="top-space">

            <div class="footer1">
                <div class="container">
                    <div class="row">

                        <div class="col-md-3 widget">
                            <h3 class="widget-title">Contact</h3>
                            <div class="widget-body">
                                <p>+234 23 9873237<br>
                                    <a href="mailto:#">some.email@somewhere.com</a><br>
                                    <br>
                                    234 Hidden Pond Road, Ashland City, TN 37015
                                </p>	
                            </div>
                        </div>

                        <div class="col-md-3 widget">
                            <h3 class="widget-title">Follow me</h3>
                            <div class="widget-body">
                                <p class="follow-me-icons clearfix">
                                    <a href=""><i class="fa fa-twitter fa-2"></i></a>
                                    <a href=""><i class="fa fa-dribbble fa-2"></i></a>
                                    <a href=""><i class="fa fa-github fa-2"></i></a>
                                    <a href=""><i class="fa fa-facebook fa-2"></i></a>
                                </p>	
                            </div>
                        </div>

                        <div class="col-md-6 widget">
                            <h3 class="widget-title">Text widget</h3>
                            <div class="widget-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, dolores, quibusdam architecto voluptatem amet fugiat nesciunt placeat provident cumque accusamus itaque voluptate modi quidem dolore optio velit hic iusto vero praesentium repellat commodi ad id expedita cupiditate repellendus possimus unde?</p>
                                <p>Eius consequatur nihil quibusdam! Laborum, rerum, quis, inventore ipsa autem repellat provident assumenda labore soluta minima alias temporibus facere distinctio quas adipisci nam sunt explicabo officia tenetur at ea quos doloribus dolorum voluptate reprehenderit architecto sint libero illo et hic.</p>
                            </div>
                        </div>

                    </div> <!-- /row of widgets -->
                </div>
            </div>

            <div class="footer2">
                <div class="container">
                    <div class="row">

                        <div class="col-md-6 widget">
                            <div class="widget-body">
                                <p class="simplenav">
                                    <a href="#">Home</a> | 
                                    <a href="sidebar-right.html">O nas</a> |
                                    <a href="contact.html">Kontakt</a> |
                                    <b><a href="signup.html">Zaloguj</a></b>
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 widget">
                            <div class="widget-body">
                                <p class="text-right">
                                    Copyright &copy; 2014, Your name. Designed by <a href="http://gettemplate.com/" rel="designer">gettemplate</a> 
                                </p>
                            </div>
                        </div>

                    </div> <!-- /row of widgets -->
                </div>
            </div>
        </footer>	





        <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
        <?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->root_path;?>
/assets/js/headroom.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jQuery.headroom.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/template.js"><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
