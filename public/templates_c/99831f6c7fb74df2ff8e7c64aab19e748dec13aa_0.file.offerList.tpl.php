<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-26 00:42:13
  from 'C:\xampp\htdocs\ProjektPaw\app\views\offerList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef52845493a20_12176357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99831f6c7fb74df2ff8e7c64aab19e748dec13aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjektPaw\\app\\views\\offerList.tpl',
      1 => 1593124925,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef52845493a20_12176357 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5349115835ef528453635f6_44148310', 'headerOffer');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10476527955ef5284538be41_44726083', 'offers');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_frame.tpl");
}
/* {block 'headerOffer'} */
class Block_5349115835ef528453635f6_44148310 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerOffer' => 
  array (
    0 => 'Block_5349115835ef528453635f6_44148310',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="col-xs-8 col-centered">         <?php ob_start();
echo $_smarty_tpl->tpl_vars['search']->value != null;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?>
            <div style="text-align: left; clear:both;">
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
offerList/<?php echo $_smarty_tpl->tpl_vars['tiretype']->value;?>
">
                    <button class="btn btn-action" type="submit"><--- Wróć</button>
                </a></div>
            <?php }?>
        <header class="page-header">
            <h1 class="page-title"><?php ob_start();
echo $_smarty_tpl->tpl_vars['tiretype']->value;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == "car") {?>Opony osobowe:<?php } else { ?>Opony ciężarowe<?php }?></h1>
        </header>


    <?php
}
}
/* {/block 'headerOffer'} */
/* {block 'offers'} */
class Block_10476527955ef5284538be41_44726083 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'offers' => 
  array (
    0 => 'Block_10476527955ef5284538be41_44726083',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
offerList/<?php echo $_smarty_tpl->tpl_vars['tiretype']->value;?>
" method="get">
            <div class="col-sm-4" style=" margin-bottom: 30px;">
                <input class="form-control" type="text" placeholder="Brand/Model" name="filtr">
            </div>
            <div class="col-sm-2" style="margin-bottom:30px;">
                <button class="btn btn-action" type="submit">Filtruj</button>
            </div>
        </form>
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['baza']->value == null;
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3) {?><div style="clear:both; margin: 0 auto; text-align: center; font-size: 25px;">BRAK PRODUKTU</div><?php } else { ?>
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
 Price:<?php echo $_smarty_tpl->tpl_vars['data']->value["price"];?>
zł</div>
                    </div>
                <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            <div style="clear:both; margin: 0 auto; text-align: center; font-size: 25px;"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
 z <?php echo $_smarty_tpl->tpl_vars['lastPage']->value;?>
</div>
        <?php }?>
        <ul class="pager">
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4 > 1) {?><li class="previous"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
offerList/car/<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
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
if ($_prefixVariable6 < $_prefixVariable7) {?><li class="next"><?php if ($_smarty_tpl->tpl_vars['tiretype']->value == 'car') {?><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
offerList/car/<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
"><?php } else { ?><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
offerList/truck/<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
"><?php }?>Następna &rarr;</a></li><?php }?>
                <?php } else { ?>
                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable8 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['lastPage']->value;
$_prefixVariable9 = ob_get_clean();
if ($_prefixVariable8 < $_prefixVariable9) {?><li class="next"><?php if ($_smarty_tpl->tpl_vars['tiretype']->value == 'car') {?><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
offerList/car/<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
/?filtr=<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
"><?php } else { ?><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
offerList/truck/<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
/?filtr=<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
"><?php }?>Następna &rarr;</a></li><?php }?>
                <?php }?>

        </ul>

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
