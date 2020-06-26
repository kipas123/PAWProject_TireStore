<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-26 01:43:02
  from 'C:\xampp\htdocs\ProjektPaw\app\views\userManagement.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef53686bee554_87413454',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b52c6816f9cc2b9866c43edc92224d85b17b6d8e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjektPaw\\app\\views\\userManagement.tpl',
      1 => 1593128569,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef53686bee554_87413454 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21160015505ef53686b56576_37298548', 'headerOffer');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17427577025ef53686b5ca84_15829995', 'offers');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_frame.tpl");
}
/* {block 'headerOffer'} */
class Block_21160015505ef53686b56576_37298548 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerOffer' => 
  array (
    0 => 'Block_21160015505ef53686b56576_37298548',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="col-xs-10 col-centered">         <header class="page-header">
            <span style=" font-size: 30px;">Zarządzaj użytkownikami</span>
        </header>


    <?php
}
}
/* {/block 'headerOffer'} */
/* {block 'offers'} */
class Block_17427577025ef53686b5ca84_15829995 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'offers' => 
  array (
    0 => 'Block_17427577025ef53686b5ca84_15829995',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



        <div class="col-sm-8 col-centered" style="text-align: justify;font-size:20px;">
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
userManagement/" method="get">
            <div class="col-sm-4" style=" margin-bottom: 30px;">
                <input class="form-control" type="text" placeholder="Iduser/Nickname" name="filtr">
            </div>
            <div class="col-sm-2" style="margin-bottom:30px;">
                <button class="btn btn-action" type="submit">Filtruj</button>
            </div>
        </form>
            <div style="clear:both"></div>
            <div style="overflow-x:auto;">
                <table class="table" style="font-size:16px;">
                    <thead class="thead-dark">
                        <tr>
                            <th>iduser</th>
                            <th>login</th>
                            <th>role</th>
                            <th>roleChange</th>
                        </tr>
                    </thead>
                    <tbody>
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formUser']->value, 'data', false, NULL, 'foo', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>                   
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['data']->value["iduser"];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['data']->value["login"];?>
</td>
      <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value["role"];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 != "user") {?><span style="color: red;"><?php echo $_smarty_tpl->tpl_vars['data']->value["name"];?>
</span><?php } else {
echo $_smarty_tpl->tpl_vars['data']->value["role"];
}?></td>
     <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
roleChange/<?php echo $_smarty_tpl->tpl_vars['data']->value["iduser"];?>
" method="post">
      <td><select class="form-control" id="idSelect" name="role">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['select']->value, 'data', false, NULL, 'foo', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>  
                            <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value["idroles"];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value["name"];?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select> <button style="float:left; margin-top: 3px; text-align: center; background: #1249B6;" type="submit" class="btn btn-info btn-xs">Zmień</button></td></td>
     </form>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>

                </table>
            </div>
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


    <?php
}
}
/* {/block 'offers'} */
}
