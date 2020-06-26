<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-25 23:18:49
  from 'C:\xampp\htdocs\ProjektPaw\app\views\userOrders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef514b9c83a30_66460632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ad9730a84c0a06af3bd36b3dec46a9bef52fc64' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjektPaw\\app\\views\\userOrders.tpl',
      1 => 1593119927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef514b9c83a30_66460632 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15700754145ef514b9babbb2_32288752', 'headerOffer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9997435415ef514b9be3584_49521132', 'offers');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_frame.tpl");
}
/* {block 'headerOffer'} */
class Block_15700754145ef514b9babbb2_32288752 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerOffer' => 
  array (
    0 => 'Block_15700754145ef514b9babbb2_32288752',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
     <div class="col-xs-8 col-centered"> 
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
    <header class="page-header">
        <h1 class="page-title">Twoje zamowienia:</h1>
    </header>


<?php
}
}
/* {/block 'headerOffer'} */
/* {block 'offers'} */
class Block_9997435415ef514b9be3584_49521132 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'offers' => 
  array (
    0 => 'Block_9997435415ef514b9be3584_49521132',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


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
      <th scope="row"><?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value*5;
$_prefixVariable1 = ob_get_clean();
echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration'] : null)+$_prefixVariable1-5;?>
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
echo $_smarty_tpl->tpl_vars['data']->value["orderstatus_idorderstatus"];
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == 2) {?><span style="color: red;"><?php echo $_smarty_tpl->tpl_vars['data']->value["name"];?>
</span><?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['data']->value["orderstatus_idorderstatus"];
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == 1) {?> <span style="color: green;"><?php echo $_smarty_tpl->tpl_vars['data']->value["name"];?>
</span><?php } else { ?> <span style="color: #0066ff;"><?php echo $_smarty_tpl->tpl_vars['data']->value["name"];?>
</span><?php }}?></td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>
</table>
  <div style="clear:both; margin: 0 auto; text-align: center; font-size: 25px;"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
 z <?php echo $_smarty_tpl->tpl_vars['lastPage']->value;?>
</div>
  <ul class="pager">
    <?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4 > 1) {?><li class="previous"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
userOrders/<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
">&larr; Poprzednia</a></li><?php }?>
  <?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable5 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['lastPage']->value;
$_prefixVariable6 = ob_get_clean();
if ($_prefixVariable5 < $_prefixVariable6) {?><li class="next"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
userOrders/<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
">Następna &rarr;</a></li><?php }?>
</ul>
    </div>



<?php
}
}
/* {/block 'offers'} */
}
