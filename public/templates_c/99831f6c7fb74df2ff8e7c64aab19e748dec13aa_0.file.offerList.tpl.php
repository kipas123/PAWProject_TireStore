<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-29 16:44:56
  from 'C:\xampp\htdocs\ProjektPaw\app\views\offerList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed11fe8e77ec2_19916718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99831f6c7fb74df2ff8e7c64aab19e748dec13aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjektPaw\\app\\views\\offerList.tpl',
      1 => 1590763485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed11fe8e77ec2_19916718 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12921248465ed11fe8de1341_24308745', 'headerOffer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20631927375ed11fe8de9180_39642709', 'offers');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "offerTempl.tpl");
}
/* {block 'headerOffer'} */
class Block_12921248465ed11fe8de1341_24308745 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerOffer' => 
  array (
    0 => 'Block_12921248465ed11fe8de1341_24308745',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
     <div class="col-xs-8 col-centered">     <header class="page-header">
        <h1 class="page-title">Opony osobowe:</h1>
    </header>


<?php
}
}
/* {/block 'headerOffer'} */
/* {block 'offers'} */
class Block_20631927375ed11fe8de9180_39642709 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'offers' => 
  array (
    0 => 'Block_20631927375ed11fe8de9180_39642709',
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
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['baza']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
        <?php if ($_smarty_tpl->tpl_vars['data']->value["tireproduct_idtire"] != null) {?>
        <div class="col-12 col-sm-12 offer">
            <div class="col-sm-3 imgPlace"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/<?php echo $_smarty_tpl->tpl_vars['data']->value["imghref"];?>
" class="img-fluid" alt="Responsive image" height="150px"></div>
            <div class="col-sm-8 offerText"><p style="font-size:20px;"><?php echo $_smarty_tpl->tpl_vars['data']->value["brand"];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value["model"];?>
</p><br><?php echo $_smarty_tpl->tpl_vars['data']->value["shortdescription"];?>

                <div style="text-align: right; clear:both; margin: 5px 0;">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
offer/<?php echo $_smarty_tpl->tpl_vars['data']->value["idtire"];?>
" target="_blank">
                        <button class="btn btn-action" type="submit">Przejdz ---></button>
                    </a>
                </div>
            </div>
            <div class="offerInfo"> Brand:<?php echo $_smarty_tpl->tpl_vars['data']->value["brand"];?>
 Model:<?php echo $_smarty_tpl->tpl_vars['data']->value["model"];?>
 Size:<?php echo $_smarty_tpl->tpl_vars['data']->value["size"];?>
 Prize:<?php echo $_smarty_tpl->tpl_vars['data']->value["prize"];?>
zł</div>
        </div>
        <?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>





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
