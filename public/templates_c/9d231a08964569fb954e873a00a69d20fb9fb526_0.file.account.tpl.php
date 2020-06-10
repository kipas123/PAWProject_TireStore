<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-09 15:06:30
  from 'C:\xampp\htdocs\ProjektPaw\app\views\account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edf8956ec77b5_14660474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d231a08964569fb954e873a00a69d20fb9fb526' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjektPaw\\app\\views\\account.tpl',
      1 => 1591707988,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edf8956ec77b5_14660474 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10788772215edf8956e48d99_94797388', 'headerOffer');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19916773115edf8956e4f472_57468346', 'offers');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "offerTempl.tpl");
}
/* {block 'headerOffer'} */
class Block_10788772215edf8956e48d99_94797388 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerOffer' => 
  array (
    0 => 'Block_10788772215edf8956e48d99_94797388',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="col-xs-10 col-centered">         <header class="page-header">
                            <span class="material-icons" style=" font-size: 120px;">
                    account_box
                            </span>
        </header>


    <?php
}
}
/* {/block 'headerOffer'} */
/* {block 'offers'} */
class Block_19916773115edf8956e4f472_57468346 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'offers' => 
  array (
    0 => 'Block_19916773115edf8956e4f472_57468346',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <div class="col-sm-6" style="text-align: justify;font-size:20px;">


            <table class="table table-borderless">

                <tbody>
                <tr>
                    <td style="font-family: 'Oswald', sans-serif;">Nazwa użytkownika:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['formUser']->value->login;?>
</td>
                </tr>

                </tbody>
            </table>
            <div class="col-sm-8">
                <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
changePassword" method="post">
                <label for="id_password">Stare hasło <span class="text-danger">*</span></label>
                <input id="id_password" type="password" name="password" value="" class="form-control">
            </div>
            <div class="col-sm-8">
                <label for="id_password_new">Nowe hasło <span class="text-danger">*</span></label>
                <input id="id_password_new" type="password" name="password_new" value="" class="form-control">
            </div>
            <div class="col-sm-8">
                <label for="id_confirmPass_new">Powtórz hasło <span class="text-danger">*</span></label>
                <input id="id_confirmPass_new" type="password" name="confirmPass_new" value="" class="form-control">
            </div>
            <br>
             <div class="text-right" style="clear:both; margin-top: 12px; margin-right: 10px; ">
                 <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
changePassword">
                     <button class="btn btn-action" style=" background-color: #66b0ff; background: #0069D9;" type="submit">Zmień hasło</button></a>
                        </div> 
    </form>
                      <hr>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
            <div class="alert <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>alert-success<?php }?>
                 <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>alert-warning<?php }?>
                 <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>alert-danger<?php }?>" role="alert">
                <?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>

            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                     
                     
           
            
        </div>

        <div class="col-sm-6" style="text-align: justify;font-size:20px;">

            <table class="table table-dark">
                <header style=" font-size: 30px;">Adres:</header>
                <tbody>
                    <tr>
                        <td>Imie:</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['formUser']->value->name;?>
</td>

                    </tr>
                    <tr>
                        <td>Nazwisko:</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['formUser']->value->surname;?>
</td>
                    </tr>
                    <tr>
                        <td>Miasto:</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['formUser']->value->city;?>
</td>

                    </tr>
                    <tr>
                        <td>Ulica</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['formUser']->value->street;?>
</td>
                    </tr>
                    <tr>
                        <td>Numer domu:</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['formUser']->value->houseNumber;?>
</td>
                    </tr>
                <hr>
                <tr>
                    <td>Kod pocztowy:</td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['formUser']->value->zipcode;?>
</td>
                </tr>
                <tr>
                    <td>Numer telefonu:</td>
                    <td><?php if ($_smarty_tpl->tpl_vars['formUser']->value->phoneNumber != 0) {
echo $_smarty_tpl->tpl_vars['formUser']->value->phoneNumber;
}?></td>
                </tr>
                </tbody>
            </table>
            <div class="text-right" style="clear:both; margin-top: 12px; margin-right: 10px; ">
                           <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
adressEditView" target="_blank">
                            <button class="btn btn-action" style="background:#0069D9;" type="submit">Zmień adres</button>
                           </a>
                        </div> 
        </div>





       

    <?php
}
}
/* {/block 'offers'} */
}
