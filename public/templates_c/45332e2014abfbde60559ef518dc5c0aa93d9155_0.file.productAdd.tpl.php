<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-26 00:46:36
  from 'C:\xampp\htdocs\ProjektPaw\app\views\productAdd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef5294ceb9085_52150680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45332e2014abfbde60559ef518dc5c0aa93d9155' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjektPaw\\app\\views\\productAdd.tpl',
      1 => 1593125193,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef5294ceb9085_52150680 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10942544505ef5294cdc9fa1_57795407', 'headerOffer');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9692823295ef5294cdcfc56_24829825', 'offers');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_frame.tpl");
}
/* {block 'headerOffer'} */
class Block_10942544505ef5294cdc9fa1_57795407 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerOffer' => 
  array (
    0 => 'Block_10942544505ef5294cdc9fa1_57795407',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="col-xs-10 col-centered">         <header class="page-header">
            <span style=" font-size: 30px;">Dodaj produkt/ogłoszenie</span>
        </header>


    <?php
}
}
/* {/block 'headerOffer'} */
/* {block 'offers'} */
class Block_9692823295ef5294cdcfc56_24829825 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'offers' => 
  array (
    0 => 'Block_9692823295ef5294cdcfc56_24829825',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
addProductView/" method="get">
        <div class="col-sm-8" style="text-align: justify;font-size:20px;">
            <div style="overflow-x:auto;">
                    <div class="col-sm-4" style=" margin-bottom: 30px;">
        <input class="form-control" type="text" placeholder="idtire/brand/model" name="filtr">
    </div>
                </form>
    <div class="col-sm-2" style="margin-bottom:30px;">
        <button class="btn btn-action" type="submit">Filtruj</button>
    </div>
                <table class="table" style="font-size:16px;">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>idtire</th>
                            <th>tireType</th>
                            <th>brand</th>
                            <th>model</th>
                            <th>size</th>
                            <th>Ogłoszenie</th>
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
echo $_smarty_tpl->tpl_vars['page']->value*4;
$_prefixVariable1 = ob_get_clean();
echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration'] : null)+$_prefixVariable1-4;?>
</th>
      <td><?php echo $_smarty_tpl->tpl_vars['data']->value["idtire"];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['data']->value["name"];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['data']->value["brand"];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['data']->value["model"];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['data']->value["size"];?>
</td>
      <td><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/offerAddView/<?php echo $_smarty_tpl->tpl_vars['data']->value["idtire"];?>
"><button type="button" class="btn btn-primary" style=" height: 33px;background:#2db1d2;">+ Oferta</button></td>
      
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
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 > 1) {?><li class="previous"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
addProductView/<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
">&larr; Poprzednia</a></li><?php }?>
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['search']->value;
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == null) {?>
                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable4 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['lastPage']->value;
$_prefixVariable5 = ob_get_clean();
if ($_prefixVariable4 < $_prefixVariable5) {?><li class="next"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
addProductView/<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
/?filtr=<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
">Następna &rarr;</a></li><?php }?>
                        <?php } else { ?>
                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable6 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['lastPage']->value;
$_prefixVariable7 = ob_get_clean();
if ($_prefixVariable6 < $_prefixVariable7) {?><li class="next"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
addProductView/<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
/?filtr=<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
">Następna &rarr;</a></li><?php }?>
                        <?php }?>
                </ul>
            </div>
        </div>

        <div class="col-sm-4" style="text-align: justify;font-size:20px;">


            <table class="table table-borderless">

                <tbody>
                    <tr>
                        <td style="font-family: 'Oswald', sans-serif;">Dodaj produkt:</td>
                        <td></td>
                    </tr>

                </tbody>
            </table>
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
addProduct" method="post">
                <div class="col-sm-8">
                    <label for="id_brand" style=" font-size: 20px;">Firma <span class="text-danger">*</span></label>
                    <input style="height:25px;"id="id_brand" type="text" name="brand" value="" class="form-control">
                </div>
                <div class="col-sm-8">
                    <label for="id_model" style=" font-size: 20px;">Model <span class="text-danger">*</span></label>
                    <input style="height:25px;"id="id_model" type="text" name="model" value="" class="form-control">
                </div>
                <div class="col-sm-8">
                    <label for="id_size" style=" font-size: 20px;">Rozmiar <span class="text-danger">*</span></label>
                    <input style="height:25px;"id="id_size" type="text" name="size" value="" class="form-control">
                </div>
                <div class="col-sm-8">
                    <label for="idSelect" style="font-size: 20px;">Rodzaj opony <span class="text-danger">*</span></label>
                    <select class="form-control" id="idSelect" name="tireType">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tireType']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value["idtiretype"];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value["name"];?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
                <br>
                <div class="text-right" style="clear:both; margin-top: 12px; margin-right: 10px; ">
                    <button class="btn btn-action" style="background-color: #66b0ff; background: #0069D9;" type="submit">Dodaj produkt</button>
                    
                </div> 
            </form>
            <hr>
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




        </div>





    <?php
}
}
/* {/block 'offers'} */
}
