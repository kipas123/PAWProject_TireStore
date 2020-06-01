<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-29 12:40:59
  from 'C:\xampp\htdocs\ProjektPaw\app\views\loginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed0e6bb63e7b9_97649136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46983363d6c3a690afbf033bcc842e929687bba1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjektPaw\\app\\views\\loginView.tpl',
      1 => 1590748846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed0e6bb63e7b9_97649136 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4071259155ed0e6bb5f0a14_22342126', 'main');
?>
                                    <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "signTempl.tpl");
}
/* {block 'main'} */
class Block_4071259155ed0e6bb5f0a14_22342126 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_4071259155ed0e6bb5f0a14_22342126',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h3 class="thin text-center">Zaloguj się do konta</h3>
                                <p class="text-center text-muted">Lorem ipsum dolor sit amet, <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
registerShow">Register</a> adipisicing elit. Quo nulla quibusdam cum doloremque incidunt nemo sunt a tenetur omnis odio. </p>
                                <hr>

                                <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post">
                                    <div class="top-margin">
                                        <label for="id_login">Nazwa użytkownika <span class="text-danger">*</span></label>
                                        <input id="id_login" type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
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
