<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-26 13:04:13
  from 'C:\xampp\htdocs\ProjektPaw\app\views\templates\main_clear.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef5d62dc13fe7_24381795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5776da66feecc6eaf3731c6a365ea735cd71c7a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjektPaw\\app\\views\\templates\\main_clear.tpl',
      1 => 1593169411,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef5d62dc13fe7_24381795 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
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
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
userManagement">Użytkownicy</a></li>
                                </ul>
                            </li>
                            <?php }?>
                            <?php if (\core\RoleUtils::inRole("moderator") || \core\RoleUtils::inRole("admin")) {?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Moderator <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
unRealizedOrders">Zamówienia do realizacji</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
allOrders">Wszystkie zamowienia</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
addProductView">Dodaj Produkt/Ogłoszenie</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
allProductsView">Zarządzaj produktami</a></li>
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
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
about">O nas</a></li>
                            <li><a class="btn" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout">Wyloguj</a></li>
                            <?php } else { ?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
about">O nas</a></li>
                            <li><a class="btn" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
loginShow">SIGN IN / SIGN UP</a></li>
                            <?php }?>

                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div> 

        <header id="head" class="secondary"></header>

        <!-- container -->
        <div class="container">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5782308925ef5d62dbfa4f7_02843655', 'headerContent');
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9037455305ef5d62dbff558_38757388', 'main');
?>


            <!-- /Article -->

        </div>

    </div>	<!-- /container -->


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
                                <a href="about.html">About</a> |
                                <a href="sidebar-right.html">Sidebar</a> |
                                <a href="contact.html">Contact</a> |
                                <b><a href="signup.html">Sign up</a></b>
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
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
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
/* {block 'headerContent'} */
class Block_5782308925ef5d62dbfa4f7_02843655 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerContent' => 
  array (
    0 => 'Block_5782308925ef5d62dbfa4f7_02843655',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'headerContent'} */
/* {block 'main'} */
class Block_9037455305ef5d62dbff558_38757388 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_9037455305ef5d62dbff558_38757388',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'main'} */
}
