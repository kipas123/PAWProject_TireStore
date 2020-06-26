<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-25 22:36:52
  from 'C:\xampp\htdocs\ProjektPaw\app\views\moderatorOrders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef50ae4dc60f3_72271411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db7a4196afc8258af73c991bbf32cc660bcedf83' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjektPaw\\app\\views\\moderatorOrders.tpl',
      1 => 1593117410,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef50ae4dc60f3_72271411 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6135309545ef50ae4ca5a01_29766595', 'headerOffer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12801159345ef50ae4cdb333_85090917', 'offers');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_frame.tpl");
}
/* {block 'headerOffer'} */
class Block_6135309545ef50ae4ca5a01_29766595 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerOffer' => 
  array (
    0 => 'Block_6135309545ef50ae4ca5a01_29766595',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
     <div class="col-xs-8 col-centered">     <header class="page-header">
        <h1 class="page-title">Zamówienia do realizacji:</h1>
    </header>
      <div style='float:right;'>
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


<?php
}
}
/* {/block 'headerOffer'} */
/* {block 'offers'} */
class Block_12801159345ef50ae4cdb333_85090917 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'offers' => 
  array (
    0 => 'Block_12801159345ef50ae4cdb333_85090917',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
unRealizedOrders/" method="get">
    <div class="col-sm-4" style=" margin-bottom: 30px;">
        <input class="form-control" type="text" placeholder="Nickname/Idorder" name="filtr">
    </div>
    <div class="col-sm-2" style="margin-bottom:30px;">
        <button class="btn btn-action" type="submit">Filtruj</button>
    </div>
    </form>
    <div class="col-sm-12" style="overflow-x:auto;">
<table class="table" style=" font-size: 13px">
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
      <th style = " text-align: center;">Zmien status zamowienia</th>
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
          <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value["orderstatus_idorderstatus"];
$_prefixVariable1 = ob_get_clean();
if (($_prefixVariable1 > 2)) {?>
    <tr>
      <th scope="row"><?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value*5;
$_prefixVariable2 = ob_get_clean();
echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration'] : null)+$_prefixVariable2-5;?>
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
       <td><span style="color: #0066ff; font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['data']->value["status_name"];?>
</span>
                         </td>
       <td style = " text-align: center;" ><?php echo $_smarty_tpl->tpl_vars['data']->value["login"];?>
</td>
       <td>     <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
statusChange/<?php echo $_smarty_tpl->tpl_vars['data']->value["idorder"];?>
" method="post">
                    <select class="form-control" id="idSelect" name="status">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['statusChoice']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value["idorderstatus"];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value["name"];?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
           
       <button style="float:left; margin-top: 3px; text-align: center; background: #1249B6;" type="submit" class="btn btn-info btn-xs">Zmień</button></td>
       </form>
    </tr>
    <?php }?>
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
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 > 1) {?><li class="previous"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
unRealizedOrders/<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
">&larr; Poprzednia</a></li><?php }?>
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['search']->value;
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4 == null) {?>
                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable5 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['lastPage']->value;
$_prefixVariable6 = ob_get_clean();
if ($_prefixVariable5 < $_prefixVariable6) {?><li class="next"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
unRealizedOrders/<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
/?filtr=<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
">Następna &rarr;</a></li><?php }?>
                        <?php } else { ?>
                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable7 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['lastPage']->value;
$_prefixVariable8 = ob_get_clean();
if ($_prefixVariable7 < $_prefixVariable8) {?><li class="next"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
unRealizedOrders/<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
/?filtr=<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
">Następna &rarr;</a></li><?php }?>
                        <?php }?>
                </ul>
    </div>

<?php
}
}
/* {/block 'offers'} */
}
