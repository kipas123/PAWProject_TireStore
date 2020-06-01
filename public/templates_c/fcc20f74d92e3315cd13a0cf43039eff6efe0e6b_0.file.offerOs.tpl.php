<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-22 15:57:49
  from 'C:\xampp\htdocs\ProjektPaw\app\views\offerOs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec7da5db894c7_83706161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcc20f74d92e3315cd13a0cf43039eff6efe0e6b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjektPaw\\app\\views\\offerOs.tpl',
      1 => 1590155803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec7da5db894c7_83706161 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16791016335ec7da5db60676_54669580', 'headerOffer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6977592215ec7da5db66462_16097093', 'offers');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "offerTempl.tpl");
}
/* {block 'headerOffer'} */
class Block_16791016335ec7da5db60676_54669580 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerOffer' => 
  array (
    0 => 'Block_16791016335ec7da5db60676_54669580',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header class="page-header">
        <h1 class="page-title">Opony osobowe:</h1>
    </header>


<?php
}
}
/* {/block 'headerOffer'} */
/* {block 'offers'} */
class Block_6977592215ec7da5db66462_16097093 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'offers' => 
  array (
    0 => 'Block_6977592215ec7da5db66462_16097093',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
	<div class="col-12 col-sm-12 offer">
	<div class="col-sm-3 imgPlace"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/indeks.png" class="img-fluid" alt="Responsive image" height="150px"></div>
	<div class="col-sm-8 offerText"><p style="font-size:20px;">Continental PremiumContact 6:</p><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, laborumLorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
	<div class="offerInfo"> Brand:Continental Model:PremiumContact Size:16/50s Prize:150zl</div>
	</div>
	
	<div class="col-12 col-sm-12 offer">
	<div class="col-sm-3 imgPlace"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/indeks.png" class="img-fluid" alt="Responsive image" height="150px"></div>
	<div class="col-sm-8 offerText"><p style="font-size:20px;">Continental PremiumContact 6:</p><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, laborumLorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
	<div class="offerInfo"> Brand:Continental Model:PremiumContact Size:16/50s Prize:150zl</div>
	</div>
	
	
	<div class="col-12 col-sm-12 offer">
	<div class="col-sm-3 imgPlace"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/indeks.png" class="img-fluid" alt="Responsive image" height="150px"></div>
	<div class="col-sm-8 offerText"><p style="font-size:20px;">Continental PremiumContact 6:</p><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, laborumLorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
	<div class="offerInfo"> Brand:Continental Model:PremiumContact Size:16/50s Prize:150zl</div>
	</div>
    
        <div class="col-12 col-sm-12 offer">
	<div class="col-sm-3 imgPlace"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/indeks.png" class="img-fluid" alt="Responsive image" height="150px"></div>
	<div class="col-sm-8 offerText"><p style="font-size:20px;">Continental PremiumContact 6:</p><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, laborumLorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
	<div class="offerInfo"> Brand:Continental Model:PremiumContact Size:16/50s Prize:150zl</div>
	</div>
    
        <div class="col-12 col-sm-12 offer">
	<div class="col-sm-3 imgPlace"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/indeks.png" class="img-fluid" alt="Responsive image" height="150px"></div>
	<div class="col-sm-8 offerText"><p style="font-size:20px;">Continental PremiumContact 6:</p><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, laborumLorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
	<div class="offerInfo"> Brand:Continental Model:PremiumContact Size:16/50s Prize:150zl</div>
	</div>

<?php
}
}
/* {/block 'offers'} */
}
