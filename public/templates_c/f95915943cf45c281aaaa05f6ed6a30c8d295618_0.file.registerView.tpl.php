<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-25 23:22:58
  from 'C:\xampp\htdocs\ProjektPaw\app\views\registerView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef515b2eba093_90251528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f95915943cf45c281aaaa05f6ed6a30c8d295618' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjektPaw\\app\\views\\registerView.tpl',
      1 => 1593120118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef515b2eba093_90251528 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8007561095ef515b2e43fc1_54909874', 'headerContent');
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19708833515ef515b2e4a605_77940233', 'main');
?>
                             
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_clear.tpl");
}
/* {block 'headerContent'} */
class Block_8007561095ef515b2e43fc1_54909874 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerContent' => 
  array (
    0 => 'Block_8007561095ef515b2e43fc1_54909874',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="row">

                <!-- Article main content -->
                <header class="page-header">
                    <h1 class="page-title">Rejestracja</h1>
                </header>
<?php
}
}
/* {/block 'headerContent'} */
/* {block 'main'} */
class Block_19708833515ef515b2e4a605_77940233 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_19708833515ef515b2e4a605_77940233',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-default">
            <div class="panel-body">
                <h3 class="thin text-center">Rejestracja</h3>
                <hr>

                <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register" method="post">
                    <div class="top-margin">
                        <label for="id_login">Nazwa użytkownika <span class="text-danger">*</span></label>
                        <input id="id_login" type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['formUser']->value->login;?>
" class="form-control">
                    </div>
                    <div class="top-margin">
                        <label for="id_pass">Hasło <span class="text-danger">*</span></label>
                        <input id="id_pass" type="password" name="pass" value="" class="form-control">
                    </div>
                    <div class="top-margin">
                        <label for="id_confirmpass">Powtórz hasło <span class="text-danger">*</span></label>
                        <input id="id_confirmpass" type="password" name="confirmPass" value="" class="form-control">
                    </div>

                    <hr>
                    <p style="font-family: 'Oswald', sans-serif;font-size: 25px;">Dane do wysyłki:</p>
                    <div class="row">
                        
                        <div class="col-lg-4 text-right">
                            
                        </div>
                    </div>
               
                    <div class="top-margin">
                        <label for="id_name">imie <span class="text-danger">*</span></label>
                        <input id="id_name" type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['formUser']->value->name;?>
" class="form-control">
                    </div>
                    <div class="top-margin">
                        <label for="id_surname">Nazwisko <span class="text-danger">*</span></label>
                        <input id="id_surname" type="text" name="surname" value="<?php echo $_smarty_tpl->tpl_vars['formUser']->value->surname;?>
" class="form-control">
                    </div>
                    <div class="top-margin">
                        <label for="id_city">Miasto <span class="text-danger">*</span></label>
                        <input id="id_city" type="text" name="city" value="<?php echo $_smarty_tpl->tpl_vars['formUser']->value->city;?>
" class="form-control">
                    </div>
                    <div class="top-margin">
                        <label for="id_street">Ulica <span class="text-danger">*</span></label>
                        <input id="id_street" type="text" name="street" value="<?php echo $_smarty_tpl->tpl_vars['formUser']->value->street;?>
" class="form-control">
                    </div>
                    <div class="top-margin">
                        <label for="id_houseNumber">Numer domu <span class="text-danger">*</span></label>
                        <input id="id_houseNumber" type="text" name="houseNumber" value="<?php echo $_smarty_tpl->tpl_vars['formUser']->value->houseNumber;?>
" class="form-control">
                    </div>
                    <div class="top-margin">
                        <label for="id_zipcode">Kod pocztowy <span class="text-danger">*</span></label>
                        <input id="id_zipcode" type="text" name="zipcode" value="<?php echo $_smarty_tpl->tpl_vars['formUser']->value->zipcode;?>
" class="form-control">
                    </div>
                    <div class="top-margin">
                        <label for="id_phoneNumber">Telefon </label>
                        <input id="id_phoneNumber" type="text" name="phoneNumber" value="<?php echo $_smarty_tpl->tpl_vars['formUser']->value->phoneNumber;?>
" class="form-control">
                    </div>
                    
                    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
                                                <div class="alert <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>alert-success<?php }?>
                                                     <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>alert-warning<?php }?>
                                                     <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>alert-danger<?php }?>" role="alert" style="margin-top: 10px;">
                                                    <?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>

                                                </div>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php }?>

                    <hr>

                    <div class="row">
                        <div class="col-lg-8">
                            <label class="checkbox">
                                <input type="checkbox"> 
                                Zapoznałem się z <a href="page_terms.html">regulaminem</a>
                            </label>                        
                        </div>
                        <div class="col-lg-4 text-right">
                            <button class="btn btn-action" type="submit">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
<?php
}
}
/* {/block 'main'} */
}
