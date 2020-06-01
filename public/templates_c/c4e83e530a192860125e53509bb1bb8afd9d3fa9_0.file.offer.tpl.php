<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-01 14:03:49
  from 'C:\xampp\htdocs\ProjektPaw\app\views\offer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed4eea5693911_68090356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4e83e530a192860125e53509bb1bb8afd9d3fa9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjektPaw\\app\\views\\offer.tpl',
      1 => 1591013022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed4eea5693911_68090356 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3849581685ed4eea55e92c1_82557115', 'headerOffer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11404015565ed4eea5624b58_74884615', 'offers');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "offerTempl.tpl");
}
/* {block 'headerOffer'} */
class Block_3849581685ed4eea55e92c1_82557115 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerOffer' => 
  array (
    0 => 'Block_3849581685ed4eea55e92c1_82557115',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="col-xs-8 col-centered">     <div style="text-align: left; clear:both;">
        <?php if ($_smarty_tpl->tpl_vars['formTire']->value->tireType == 'car') {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
offerList/car">
        <?php } elseif ($_smarty_tpl->tpl_vars['formTire']->value->tireType == 'truck') {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
offerList/truck">
        <?php } else { ?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
">
            <?php }?>
        <button class="btn btn-action" type="submit"><--- Wróć</button>
        </a>
    </div>
    <header class="page-header">
        <h1 class="page-title"><?php echo $_smarty_tpl->tpl_vars['formTire']->value->brand;?>
 <?php echo $_smarty_tpl->tpl_vars['formTire']->value->model;?>
</h1>
    </header>


<?php
}
}
/* {/block 'headerOffer'} */
/* {block 'offers'} */
class Block_11404015565ed4eea5624b58_74884615 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'offers' => 
  array (
    0 => 'Block_11404015565ed4eea5624b58_74884615',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="col-sm-4">
        <div class="first">
            <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/<?php echo $_smarty_tpl->tpl_vars['formOffer']->value->imghref;?>
" class="img-fluid" alt="Responsive image">
        </div>
    </div>
    <div class="col-sm-6" style="text-align: justify;font-size:20px;">

        <table class="table table-dark">
            <tbody>
                <tr>
                    <td>Marka:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['formTire']->value->brand;?>
</td>

                </tr>
                <tr>
                    <td>Model:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['formTire']->value->model;?>
</td>
                </tr>
                <tr>
                    <td>Rodzaj opony:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['formTire']->value->tireType;?>
</td>

                </tr>
                <tr>
                    <td>Wielkosc:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['formTire']->value->size;?>
</td>
                </tr>
                <tr>
                    <td>Cena:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['formTire']->value->prize;?>
 zł</td>
                </tr>
            <hr>
                <tr>
                    <td>Magazyn:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['formTire']->value->quantity;?>
 szt.</td>
                </tr>
            </tbody>
        </table>
                
                <div style="margin-top: 50px;clear:both">
                    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
" method="post">
                      <div style=" float: right;">
                    <button class="btn btn-action" type="submit">Kup</button>
        </div>
                    <div style=" float: right;">
                    <input id="id_login" type="text" name="login" value="" style="float: right; margin-right: 20px; width: 20px;" class="form-control">Ilość szt.
                    </form>
                    </div>
                </div>
    </div>
                
<div class="col-sm-12 offerText"><?php echo $_smarty_tpl->tpl_vars['formOffer']->value->description;?>
</div>
   
    
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
