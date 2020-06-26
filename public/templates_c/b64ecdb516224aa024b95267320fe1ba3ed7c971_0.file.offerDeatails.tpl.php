<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-21 19:57:04
  from 'C:\xampp\htdocs\ProjektPaw\app\views\offerDeatails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eef9f7076cd36_56195473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b64ecdb516224aa024b95267320fe1ba3ed7c971' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjektPaw\\app\\views\\offerDeatails.tpl',
      1 => 1592762220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eef9f7076cd36_56195473 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14040177845eef9f706c3721_93517466', 'headerOffer');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8742683105eef9f706c9bf7_70971692', 'offers');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_frame.tpl");
}
/* {block 'headerOffer'} */
class Block_14040177845eef9f706c3721_93517466 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerOffer' => 
  array (
    0 => 'Block_14040177845eef9f706c3721_93517466',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="col-xs-8 col-centered"> 
        <header class="page-header" style=' margin-bottom: 40px;'>
            <h1 class="page-title">Podsumowanie: </h1>
        </header>


    <?php
}
}
/* {/block 'headerOffer'} */
/* {block 'offers'} */
class Block_8742683105eef9f706c9bf7_70971692 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'offers' => 
  array (
    0 => 'Block_8742683105eef9f706c9bf7_70971692',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="col-sm-6" style="text-align: justify;font-size:20px;">

            <table class="table table-dark">
                <header style=" font-size: 30px;">Adres do wysyłki:</header>
                <tbody>
                    <tr>
                        <td>Imie:</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['recordOrder']->value["name"];?>
</td>

                    </tr>
                    <tr>
                        <td>Nazwisko:</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['recordOrder']->value["surname"];?>
</td>
                    </tr>
                    <tr>
                        <td>Miasto:</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['recordOrder']->value["city"];?>
</td>

                    </tr>
                    <tr>
                        <td>Ulica</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['recordOrder']->value["street"];?>
</td>
                    </tr>
                    <tr>
                        <td>Numer domu:</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['recordOrder']->value["houseNumber"];?>
</td>
                    </tr>
                <hr>
                <tr>
                    <td>Kod pocztowy:</td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['recordOrder']->value["zipcode"];?>
</td>
                </tr>
                <tr>
                    <td>Numer telefonu:</td>
                    <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['recordOrder']->value["phoneNumber"];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 != null) {
echo $_smarty_tpl->tpl_vars['recordOrder']->value["phoneNumber"];
}?></td>
                </tr>
                </tbody>
            </table>
            <hr>
        </div>
        <div class="col-sm-6" style="text-align: justify;font-size:20px;">

            <table class="table table-dark">
                <header style=" font-size: 30px;"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/<?php echo $_smarty_tpl->tpl_vars['recordOrder']->value['imghref'];?>
" class="img-fluid" alt="Responsive image" height="100px" width='100px'></header>
                <tbody>
                    <tr>
                        <td>Firma:</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['recordOrder']->value["brand"];?>
</td>

                    </tr>
                    <tr>
                        <td>Model:</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['recordOrder']->value["model"];?>
</td>
                    </tr>
                    <tr>
                        <td>Rozmiar:</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['recordOrder']->value["size"];?>
</td>

                    </tr>
                    <tr>
                        <td>szt.</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['recordOrder']->value["quantity"];?>
</td>
                    </tr>
                    <tr>
                        <td>cena:</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['recordOrder']->value["price"];?>
 zł</td>
                    </tr>
                    <tr>
                        <td><span style=' color: red;'>Suma</span></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['recordOrder']->value["totalprice"];?>
 zł</td>
                    </tr>
                    <tr>
                        <td>Data zamowienia:</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['recordOrder']->value["orderdata"];?>
</td>
                    </tr>
                <hr>

                </tbody>
            </table>
        </div>      
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
