<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-10 18:02:23
  from 'C:\xampp\htdocs\ProjektPaw\app\views\userOrders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee1040fec8f99_08450876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ad9730a84c0a06af3bd36b3dec46a9bef52fc64' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjektPaw\\app\\views\\userOrders.tpl',
      1 => 1591804319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee1040fec8f99_08450876 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1852817825ee1040fe452d0_61118241', 'headerOffer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16834026095ee1040fe4b1b9_57783519', 'offers');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "offerTempl.tpl");
}
/* {block 'headerOffer'} */
class Block_1852817825ee1040fe452d0_61118241 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerOffer' => 
  array (
    0 => 'Block_1852817825ee1040fe452d0_61118241',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
     <div class="col-xs-8 col-centered">     <header class="page-header">
        <h1 class="page-title">Twoje zamowienia:</h1>
    </header>


<?php
}
}
/* {/block 'headerOffer'} */
/* {block 'offers'} */
class Block_16834026095ee1040fe4b1b9_57783519 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'offers' => 
  array (
    0 => 'Block_16834026095ee1040fe4b1b9_57783519',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="col-sm-4" style=" margin-bottom: 30px;">
        <input class="form-control" type="text" placeholder="Name">
    </div>
    <div class="col-sm-2" style="margin-bottom:30px;">
        <button class="btn btn-action" type="submit">Filtruj</button>
    </div>
    <div class="col-sm-12" style="overflow-x:auto;">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th>#</th>
      <th>Nr.zamowienia</th>
      <th>Nr.Produktu</th>
      <th>szt.</th>
      <th>Do zapłaty</th>
      <th>dataZamowienia</th>
      <th>status</th>
    </tr>
  </thead>
  <tbody>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orderForm']->value, 'data', false, NULL, 'foo', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration']++;
?>
    <tr>
      <th scope="row"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration'] : null);?>
</th>
      <td><?php echo $_smarty_tpl->tpl_vars['data']->value["idorder"];?>
</td>
      <td><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
offer/<?php echo $_smarty_tpl->tpl_vars['data']->value["tireproduct_idtire"];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['data']->value["tireproduct_idtire"];?>
</a></td>
      <td><?php echo $_smarty_tpl->tpl_vars['data']->value["quantity"];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['data']->value["totalprice"];?>
zł</td>
       <td><?php echo $_smarty_tpl->tpl_vars['data']->value["orderdata"];?>
</td>
       <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value["status"];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 0) {?><span style=" color: #ff3333;">W trakcie realizacji</span><?php } else { ?><span style=" color: #009933;">Zrealizowany</span><?php }?></td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>
</table>
    </div>





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

<?php
}
}
/* {/block 'offers'} */
}
