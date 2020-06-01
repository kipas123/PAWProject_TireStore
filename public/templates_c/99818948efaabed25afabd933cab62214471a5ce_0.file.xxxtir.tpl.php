<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-26 14:45:34
  from 'C:\xampp\htdocs\ProjektPaw\app\views\xxxtir.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ecd0f6e810888_63826732',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99818948efaabed25afabd933cab62214471a5ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjektPaw\\app\\views\\xxxtir.tpl',
      1 => 1590497131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ecd0f6e810888_63826732 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20353333875ecd0f6e791664_19984367', 'headerOffer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11773832485ecd0f6e7b1727_67982086', 'offers');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "offerTempl.tpl");
}
/* {block 'headerOffer'} */
class Block_20353333875ecd0f6e791664_19984367 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerOffer' => 
  array (
    0 => 'Block_20353333875ecd0f6e791664_19984367',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div style="text-align: left; clear:both;">
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
offerList/car">
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
class Block_11773832485ecd0f6e7b1727_67982086 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'offers' => 
  array (
    0 => 'Block_11773832485ecd0f6e7b1727_67982086',
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
                    <td>Wielkosc:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['formTire']->value->size;?>
</td>
                </tr>
                <tr>
                    <td>Cena:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['formTire']->value->prize;?>
</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-sm-8 offerText">Lorem ipsum dolor sit Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, laborumLorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
    
    <div style="text-align:right; clear:both;">
        <button class="btn btn-action" type="submit">Kup</button>
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
