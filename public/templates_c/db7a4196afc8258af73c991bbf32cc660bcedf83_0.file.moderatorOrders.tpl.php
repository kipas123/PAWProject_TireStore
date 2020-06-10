<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-10 17:52:12
  from 'C:\xampp\htdocs\ProjektPaw\app\views\moderatorOrders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee101acd850a9_24771609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db7a4196afc8258af73c991bbf32cc660bcedf83' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjektPaw\\app\\views\\moderatorOrders.tpl',
      1 => 1591804330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee101acd850a9_24771609 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17016160555ee101acced697_94064217', 'headerOffer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5610539005ee101accf4225_56105154', 'offers');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "offerTempl.tpl");
}
/* {block 'headerOffer'} */
class Block_17016160555ee101acced697_94064217 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerOffer' => 
  array (
    0 => 'Block_17016160555ee101acced697_94064217',
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
class Block_5610539005ee101accf4225_56105154 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'offers' => 
  array (
    0 => 'Block_5610539005ee101accf4225_56105154',
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
if ($_prefixVariable1 == 0) {?>W trakcie realizacji<?php } else { ?>"Zrealizowany"<?php }?> 
                           <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
adressEditView" target="_blank">
                            <button type="button" class="btn btn-info" style="height:30px;  background: #46C012;">Realizuj</button>
                           </a>
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
