<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-22 12:49:31
  from 'C:\xampp\htdocs\ProjektPaw\app\views\offerManagment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef08cbbbe2320_72270224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c3c4fb8b4ed29492cdf87b8c17ef6eb0ef1d826' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjektPaw\\app\\views\\offerManagment.tpl',
      1 => 1592822967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef08cbbbe2320_72270224 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14644723385ef08cbbb275c7_42158948', 'headerOffer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12357784735ef08cbbb2ee02_99747146', 'offers');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_frame.tpl");
}
/* {block 'headerOffer'} */
class Block_14644723385ef08cbbb275c7_42158948 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerOffer' => 
  array (
    0 => 'Block_14644723385ef08cbbb275c7_42158948',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
     <div class="col-xs-8 col-centered">     <header class="page-header">
        <h1 class="page-title">Produkty:</h1>
    </header>


<?php
}
}
/* {/block 'headerOffer'} */
/* {block 'offers'} */
class Block_12357784735ef08cbbb2ee02_99747146 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'offers' => 
  array (
    0 => 'Block_12357784735ef08cbbb2ee02_99747146',
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
<table class="table" style=" font-size: 14px;">
  <thead class="thead-dark">
    <tr>
      <th>#</th>
      <th>idTire</th>
      <th>tireType</th>
      <th>quantity</th>
      <th>brand</th>
      <th>model</th>
      <th>size</th>
      <th style=" text-align: center;">offer status</th>
      <th style=" text-align: center;">edit offer</th>
    </tr>
  </thead>
  <tbody>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tireForm']->value, 'data', false, NULL, 'foo', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration']++;
?>
    <tr>
      <th scope="row"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration'] : null);?>
</th>
      <td><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
offer/<?php echo $_smarty_tpl->tpl_vars['data']->value["idtire"];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['data']->value["idtire"];?>
</a></td>
      <td><?php echo $_smarty_tpl->tpl_vars['data']->value["name"];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['data']->value["quantity"];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['data']->value["brand"];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['data']->value["model"];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['data']->value["size"];?>
</td>
      <td style="text-align: center;"><?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value["active"];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 1) {?><span class="dot-active"></span><?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['data']->value["active"];
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == 0) {?><span class="dot"></span><?php }}?></td>
      
      <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value["has_offer"];
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == 0) {?>
      <td style="text-align: center;"><button style=" background: #ff6633;" type="button" class="btn btn-info btn-xs">stworz</button></td>
      <?php } else { ?>
      <td><button type="button" class="btn btn-info btn-xs">edytuj</button></td>   
      <?php }?>
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
