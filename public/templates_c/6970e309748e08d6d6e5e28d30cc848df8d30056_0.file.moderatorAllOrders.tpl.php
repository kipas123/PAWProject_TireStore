<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-26 11:34:06
  from 'C:\xampp\htdocs\ProjektPaw\app\views\moderatorAllOrders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef5c10ea10863_21196593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6970e309748e08d6d6e5e28d30cc848df8d30056' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjektPaw\\app\\views\\moderatorAllOrders.tpl',
      1 => 1593164005,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef5c10ea10863_21196593 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8523060805ef5c10e8f3f88_60074690', 'headerOffer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10877200495ef5c10e8fa0c7_97023450', 'offers');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_frame.tpl");
}
/* {block 'headerOffer'} */
class Block_8523060805ef5c10e8f3f88_60074690 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerOffer' => 
  array (
    0 => 'Block_8523060805ef5c10e8f3f88_60074690',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
     <div class="col-xs-8 col-centered">     <header class="page-header">
        <h1 class="page-title">Orders:</h1>
    </header>


<?php
}
}
/* {/block 'headerOffer'} */
/* {block 'offers'} */
class Block_10877200495ef5c10e8fa0c7_97023450 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'offers' => 
  array (
    0 => 'Block_10877200495ef5c10e8fa0c7_97023450',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
allOrders/" method="get">
    <div class="col-sm-4" style=" margin-bottom: 30px;">
        <input class="form-control" type="text" placeholder="Nickname/Idorder" name="filtr">
    </div>
    <div class="col-sm-2" style="margin-bottom:30px;">
        <button class="btn btn-action" type="submit">Filtruj</button>
    </div>
</form>
    <div class="col-sm-12" style="overflow-x:auto;">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th>#</th>
      <th>Nr.zamowienia</th>
      <th>Nr.Produktu</th>
      <th>szt.</th>
      <th>Do_zapłaty</th>
      <th>dataZamowienia</th>
      <th>status</th>
      <th>Nazwa_uzytkownika</th>
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
echo $_smarty_tpl->tpl_vars['page']->value*10;
$_prefixVariable1 = ob_get_clean();
echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration'] : null)+$_prefixVariable1-10;?>
</th>
      <td><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
orderDetailsView/<?php echo $_smarty_tpl->tpl_vars['data']->value["idorder"];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['data']->value["idorder"];?>
</a></td>
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
if ($_prefixVariable2 == 2) {?><span style="color: red;"><?php echo $_smarty_tpl->tpl_vars['data']->value["status_name"];?>
</span><?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['data']->value["orderstatus_idorderstatus"];
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == 1) {?> <span style="color: green;"><?php echo $_smarty_tpl->tpl_vars['data']->value["status_name"];?>
</span><?php } else { ?><span style="color: #0066ff;"><?php echo $_smarty_tpl->tpl_vars['data']->value["status_name"];?>
</span><?php }}?>
       </td>
       <td><?php echo $_smarty_tpl->tpl_vars['data']->value["login"];?>
</td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>
</table>
<?php if ($_smarty_tpl->tpl_vars['orderForm']->value != null) {?><div style="clear:both; margin: 0 auto; text-align: center; font-size: 25px;"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
 z <?php echo $_smarty_tpl->tpl_vars['lastPage']->value;?>
</div><?php } else { ?>
                <div style="clear:both; margin: 0 auto; text-align: center; font-size: 25px;">Brak wyników</div><?php }?>
                <ul class="pager">
                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4 > 1) {?><li class="previous"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
allOrders/<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
">&larr; Poprzednia</a></li><?php }?>
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['search']->value;
$_prefixVariable5 = ob_get_clean();
if ($_prefixVariable5 == null) {?>
                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable6 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['lastPage']->value;
$_prefixVariable7 = ob_get_clean();
if ($_prefixVariable6 < $_prefixVariable7) {?><li class="next"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
allOrders/<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
/?filtr=<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
">Następna &rarr;</a></li><?php }?>
                        <?php } else { ?>
                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable8 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['lastPage']->value;
$_prefixVariable9 = ob_get_clean();
if ($_prefixVariable8 < $_prefixVariable9) {?><li class="next"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
allOrders/<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
/?filtr=<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
">Następna &rarr;</a></li><?php }?>
                        <?php }?>
                </ul>
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
