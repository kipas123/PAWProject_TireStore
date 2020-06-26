<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-25 23:22:55
  from 'C:\xampp\htdocs\ProjektPaw\app\views\loginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef515afad1521_76042947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46983363d6c3a690afbf033bcc842e929687bba1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjektPaw\\app\\views\\loginView.tpl',
      1 => 1593120172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef515afad1521_76042947 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15461144025ef515afa7d638_50888087', 'headerContent');
?>






<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17892103375ef515afa83953_01018497', 'main');
?>
                                    <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_clear.tpl");
}
/* {block 'headerContent'} */
class Block_15461144025ef515afa7d638_50888087 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerContent' => 
  array (
    0 => 'Block_15461144025ef515afa7d638_50888087',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="row">

                <!-- Article main content -->
                <header class="page-header">
                    <h1 class="page-title">Logowanie</h1>
                </header>
<?php
}
}
/* {/block 'headerContent'} */
/* {block 'main'} */
class Block_17892103375ef515afa83953_01018497 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_17892103375ef515afa83953_01018497',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h3 class="thin text-center">Logowanie</h3>
                                <p class="text-center text-muted">Jeżeli nie masz konta <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
registerShow">Zarejestruj</a> się. </p>
                                <hr>

                                <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post">
                                    <div class="top-margin">
                                        <label for="id_login">Nazwa użytkownika <span class="text-danger">*</span></label>
                                        <input id="id_login" type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['formUser']->value->login;?>
" class="form-control">
                                    </div>
                                    <div class="top-margin">
                                        <label for="id_pass">Hasło <span class="text-danger">*</span></label>
                                        <input id="id_pass" type="password" name="pass" class="form-control">
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
                                            <b><a href="">Forgot password?</a></b>
                                        </div>
                                        <div class="col-lg-4 text-right">
                                            <button class="btn btn-action" type="submit">Sign in</button>
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
