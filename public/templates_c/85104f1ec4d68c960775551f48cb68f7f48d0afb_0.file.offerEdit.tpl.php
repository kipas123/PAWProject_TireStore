<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-25 22:39:55
  from 'C:\xampp\htdocs\ProjektPaw\app\views\offerEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef50b9b1d6263_25074995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85104f1ec4d68c960775551f48cb68f7f48d0afb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjektPaw\\app\\views\\offerEdit.tpl',
      1 => 1593117571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef50b9b1d6263_25074995 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
    

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_814407195ef50b9b13b2a1_14641311', 'headerContent');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21334348955ef50b9b149e87_29982367', 'headerOffer');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7111596125ef50b9b154849_46033344', 'main');
?>
                             
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_clear.tpl");
}
/* {block 'headerContent'} */
class Block_814407195ef50b9b13b2a1_14641311 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerContent' => 
  array (
    0 => 'Block_814407195ef50b9b13b2a1_14641311',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="row">

        <!-- Article main content -->
        <header class="page-header">
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
addProductView">
                <button class="btn btn-action" type="submit"><--- Wróć</button>
            </a>
            <h1 class="page-title">Edytuj oferte</h1>
        </header>
    <?php
}
}
/* {/block 'headerContent'} */
/* {block 'headerOffer'} */
class Block_21334348955ef50b9b149e87_29982367 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerOffer' => 
  array (
    0 => 'Block_21334348955ef50b9b149e87_29982367',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">User access</li>
        </ol>

        <div class="row">

            <!-- Article main content -->
            <header class="page-header">
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
allProductsView">
                    <button class="btn btn-action" type="submit"><--- Wróć</button>
                </a>
                <h1 class="page-title">Edytuj ofertę</h1>
            </header>
        <?php
}
}
/* {/block 'headerOffer'} */
/* {block 'main'} */
class Block_7111596125ef50b9b154849_46033344 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_7111596125ef50b9b154849_46033344',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="thin text-center">Oferta/<?php echo $_smarty_tpl->tpl_vars['formOffer']->value["tireproduct_idtire"];?>
:</h3>
                        <hr>
                        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
offerEdit/<?php echo $_smarty_tpl->tpl_vars['formOffer']->value["tireproduct_idtire"];?>
" method="post">

                            <div class="top-margin">
                                <label for="id_shortdescription">Krótki opis oferty <span class="text-danger">*</span></label>
                                <textarea id="id_shortdescription" class="form-control" rows="3" name="shortdescription"><?php echo $_smarty_tpl->tpl_vars['formOffer']->value["shortdescription"];?>
</textarea>
                            </div>
                            <div class="top-margin">
                                <label for="id_description">Opis oferty <span class="text-danger">*</span></label>
                                <textarea id="id_description" class="form-control" rows="3" name="description"><?php echo $_smarty_tpl->tpl_vars['formOffer']->value["description"];?>
</textarea>
                            </div>
                            <div class="top-margin">
                                <label for="id_imghref">Odnośnik do zdj <span class="text-danger">*</span></label>
                                <input id="id_imghref" type="text" name="imghref" value="<?php echo $_smarty_tpl->tpl_vars['formOffer']->value["imghref"];?>
" class="form-control">
                            </div>
                            <div class="top-margin">
                                <label for="id_price">Cena <span class="text-danger">*</span></label>
                                <input id="id_price" type="text" name="price" value="<?php echo $_smarty_tpl->tpl_vars['formOffer']->value["price"];?>
" class="form-control">
                            </div>
                            <div class="top-margin">
                                <label for="id_quantity" style=" font-size: 20px;">Ilość sztuk <span class="text-danger">*</span></label>
                                <input style="height:25px;"id="id_quantity" type="number" min="1" name="quantity" value="<?php echo $_smarty_tpl->tpl_vars['formOffer']->value["quantity"];?>
" class="form-control">
                            </div>
                            <div class="top-margin">
                                <label for="id_quantity" style=" font-size: 20px;">Status oferty <span class="text-danger">*</span></label>
                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['formOffer']->value["active"];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 1) {?><span class="dot-active" style="clear:both;"></span><?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['formOffer']->value["active"];
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == 0) {?><span class="dot" style=" background-color: red;"></span><?php }}?>
                            </div>
                            <div class="top-margin">
                                <label for="idSelect">Aktywne ogłoszenie <span class="text-danger">*</span></label>
                                <select class="form-control"  id="idSelect" name="active">
                                    <option value="0">nie</option>
                                    <option value="1">tak</option>
                                </select>
                            </div>
                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
                            <div class="alert <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>alert-success<?php }?>
                                 <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>alert-warning<?php }?>
                                 <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>alert-danger<?php }?>" role="alert" style="margin-top: 10px;">
                                <?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>

                            </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>

                    <hr>
                    <div style="text-align: right; clear: both;">

                        <button class="btn btn-action text-right" style=" background:#0069D9;" type="submit">Zapisz</button>

                    </div>
                    </form>
                </div>
            </div>

        </div>
    <?php
}
}
/* {/block 'main'} */
}
