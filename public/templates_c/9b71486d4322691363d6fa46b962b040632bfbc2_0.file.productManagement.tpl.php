<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-26 11:34:00
  from 'C:\xampp\htdocs\ProjektPaw\app\views\productManagement.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef5c1088a1fd9_01148677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b71486d4322691363d6fa46b962b040632bfbc2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjektPaw\\app\\views\\productManagement.tpl',
      1 => 1593164038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef5c1088a1fd9_01148677 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8416345505ef5c10876a265_41705968', 'headerOffer');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6753278575ef5c1087a12c1_12482348', 'offers');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_frame.tpl");
}
/* {block 'headerOffer'} */
class Block_8416345505ef5c10876a265_41705968 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerOffer' => 
  array (
    0 => 'Block_8416345505ef5c10876a265_41705968',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="col-xs-8 col-centered">         <?php
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

        <header class="page-header">
            <h1 class="page-title">Produkty:</h1>

        </header>


    <?php
}
}
/* {/block 'headerOffer'} */
/* {block 'offers'} */
class Block_6753278575ef5c1087a12c1_12482348 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'offers' => 
  array (
    0 => 'Block_6753278575ef5c1087a12c1_12482348',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
allProductsView/" method="get">
            <div class="col-sm-4" style=" margin-bottom: 30px;">
                <input class="form-control" type="text" placeholder="idtire/brand/model" name="filtr">
            </div>
            <div class="col-sm-2" style="margin-bottom:30px;">
                <button class="btn btn-action" type="submit">Filtruj</button>
            </div>
        </form>
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
                            <th scope="row"><?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value*10;
$_prefixVariable1 = ob_get_clean();
echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration'] : null)+$_prefixVariable1-10;?>
</th>
                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
offer/<?php echo $_smarty_tpl->tpl_vars['data']->value["idtire"];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['data']->value["idtire"];?>
</a></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['data']->value["name"];?>
</td>
                            <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value["quantity"] == 0;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2) {?><span style=" color: red; font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['data']->value["quantity"];?>
</span><?php } else {
echo $_smarty_tpl->tpl_vars['data']->value["quantity"];
}?></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['data']->value["brand"];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['data']->value["model"];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['data']->value["size"];?>
</td>
                            <td style="text-align: center;"><?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value["active"];
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == 1) {?><span class="dot-active"></span><?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['data']->value["active"];
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4 == 0) {?><span class="dot"></span><?php }}?></td>

                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value["has_offer"];
$_prefixVariable5 = ob_get_clean();
if ($_prefixVariable5 == 0) {?>
                                <td style="text-align: center;"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
offerAddView/<?php echo $_smarty_tpl->tpl_vars['data']->value["idtire"];?>
"><button style=" background: #ff6633;" type="button" class="btn btn-info btn-xs">stworz</button></a></td>
                            <?php } else { ?>
                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
offerEditView/<?php echo $_smarty_tpl->tpl_vars['data']->value["idtire"];?>
"><button type="button" class="btn btn-info btn-xs">edytuj</button></a></td>   
                            <?php }?>
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
            <?php if ($_smarty_tpl->tpl_vars['tireForm']->value != null) {?><div style="clear:both; margin: 0 auto; text-align: center; font-size: 25px;"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
 z <?php echo $_smarty_tpl->tpl_vars['lastPage']->value;?>
</div><?php } else { ?>
                <div style="clear:both; margin: 0 auto; text-align: center; font-size: 25px;">Brak wyników</div><?php }?>
                <ul class="pager">
                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable6 = ob_get_clean();
if ($_prefixVariable6 > 1) {?><li class="previous"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
allProductsView/<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
">&larr; Poprzednia</a></li><?php }?>
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['search']->value;
$_prefixVariable7 = ob_get_clean();
if ($_prefixVariable7 == null) {?>
                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable8 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['lastPage']->value;
$_prefixVariable9 = ob_get_clean();
if ($_prefixVariable8 < $_prefixVariable9) {?><li class="next"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
allProductsView/<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
/?filtr=<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
">Następna &rarr;</a></li><?php }?>
                        <?php } else { ?>
                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable10 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['lastPage']->value;
$_prefixVariable11 = ob_get_clean();
if ($_prefixVariable10 < $_prefixVariable11) {?><li class="next"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
allProductsView/<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
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
