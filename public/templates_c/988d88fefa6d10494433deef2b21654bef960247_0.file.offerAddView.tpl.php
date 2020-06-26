<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-21 22:03:20
  from 'C:\xampp\htdocs\ProjektPaw\app\views\offerAddView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eefbd08546f15_62546565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '988d88fefa6d10494433deef2b21654bef960247' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjektPaw\\app\\views\\offerAddView.tpl',
      1 => 1592769797,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eefbd08546f15_62546565 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
    

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15503252585eefbd084e7c02_19252179', 'headerContent');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20877723135eefbd084f6677_36912417', 'headerOffer');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19214249875eefbd08501d60_30828176', 'main');
?>
                             
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_clear.tpl");
}
/* {block 'headerContent'} */
class Block_15503252585eefbd084e7c02_19252179 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerContent' => 
  array (
    0 => 'Block_15503252585eefbd084e7c02_19252179',
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
            <h1 class="page-title">Dodaj oferte</h1>
        </header>
    <?php
}
}
/* {/block 'headerContent'} */
/* {block 'headerOffer'} */
class Block_20877723135eefbd084f6677_36912417 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerOffer' => 
  array (
    0 => 'Block_20877723135eefbd084f6677_36912417',
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
addProductView">
                    <button class="btn btn-action" type="submit"><--- Wróć</button>
                </a>
                <h1 class="page-title">Dodaj ofertę</h1>
            </header>
        <?php
}
}
/* {/block 'headerOffer'} */
/* {block 'main'} */
class Block_19214249875eefbd08501d60_30828176 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_19214249875eefbd08501d60_30828176',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="thin text-center">Oferta:</h3>
                        <hr>
                        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
offerAdd/<?php echo $_smarty_tpl->tpl_vars['idtire']->value;?>
" method="post">

                            <div class="top-margin">
                                <label for="id_shortdescription">Krótki opis oferty <span class="text-danger">*</span></label>
                                <textarea id="id_shortdescription" class="form-control" rows="3" name="shortdescription"></textarea>
                            </div>
                            <div class="top-margin">
                                <label for="id_description">Opis oferty <span class="text-danger">*</span></label>
                                <textarea id="id_description" class="form-control" rows="3" name="description"></textarea>
                            </div>
                            <div class="top-margin">
                                <label for="id_imghref">Odnośnik do zdj <span class="text-danger">*</span></label>
                                <input id="id_imghref" type="text" name="imghref" value="" class="form-control">
                            </div>
                            <div class="top-margin">
                                <label for="id_price">Cena <span class="text-danger">*</span></label>
                                <input id="id_price" type="text" name="price" value="" class="form-control">
                            </div>
                            <div class="top-margin">
                                <label for="id_quantity" style=" font-size: 20px;">Ilość sztuk <span class="text-danger">*</span></label>
                                <input style="height:25px;"id="id_quantity" type="number" min="1" name="quantity" value="1" class="form-control">
                            </div>
                            <div class="top-margin">
                                <label for="idSelect">Aktywne ogłoszenie <span class="text-danger">*</span></label>
                                <select class="form-control" id="idSelect" name="active">
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
