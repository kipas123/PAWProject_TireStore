<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-09 17:27:52
  from 'C:\xampp\htdocs\ProjektPaw\app\views\offerSummary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edfaa78d3a722_81399143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b90289e6a34cf0aaa7acd114b3865cb43f032a89' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjektPaw\\app\\views\\offerSummary.tpl',
      1 => 1591716467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edfaa78d3a722_81399143 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20607914815edfaa78c8bcd8_16112338', 'headerOffer');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13353744305edfaa78c9c696_19606130', 'offers');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "offerTempl.tpl");
}
/* {block 'headerOffer'} */
class Block_20607914815edfaa78c8bcd8_16112338 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerOffer' => 
  array (
    0 => 'Block_20607914815edfaa78c8bcd8_16112338',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="col-xs-8 col-centered">         <div style="text-align: left; clear:both;">
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
offer/<?php echo $_smarty_tpl->tpl_vars['idtire']->value;?>
">
                <button class="btn btn-action" type="submit"><--- Wróć</button>
            </a>
        </div>
        <header class="page-header" style=' margin-bottom: 40px;'>
            <h1 class="page-title">Podsumowanie: </h1>
        </header>


    <?php
}
}
/* {/block 'headerOffer'} */
/* {block 'offers'} */
class Block_13353744305edfaa78c9c696_19606130 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'offers' => 
  array (
    0 => 'Block_13353744305edfaa78c9c696_19606130',
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
                        <td><?php echo $_smarty_tpl->tpl_vars['formUser']->value->name;?>
</td>

                    </tr>
                    <tr>
                        <td>Nazwisko:</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['formUser']->value->surname;?>
</td>
                    </tr>
                    <tr>
                        <td>Miasto:</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['formUser']->value->city;?>
</td>

                    </tr>
                    <tr>
                        <td>Ulica</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['formUser']->value->street;?>
</td>
                    </tr>
                    <tr>
                        <td>Numer domu:</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['formUser']->value->houseNumber;?>
</td>
                    </tr>
                <hr>
                <tr>
                    <td>Kod pocztowy:</td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['formUser']->value->zipcode;?>
</td>
                </tr>
                <tr>
                    <td>Numer telefonu:</td>
                    <td><?php if ($_smarty_tpl->tpl_vars['formUser']->value->phoneNumber != 0) {
echo $_smarty_tpl->tpl_vars['formUser']->value->phoneNumber;
}?></td>
                </tr>
                </tbody>
            </table>
            <div class="text-right" style="clear:both; margin-top: 12px; margin-right: 10px; ">
                <p>Adres możesz zmienić w zakładce <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
accountShow">'konto'</a></p>
            </div> 
            <hr>
        </div>
        <div class="col-sm-6" style="text-align: justify;font-size:20px;">

            <table class="table table-dark">
                <header style=" font-size: 30px;"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/<?php echo $_smarty_tpl->tpl_vars['formOffer']->value->imghref;?>
" class="img-fluid" alt="Responsive image" height="100px" width='100px'></header>
                <tbody>
                    <tr>
                        <td>Firma:</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['formTire']->value->brand;?>
</td>

                    </tr>
                    <tr>
                        <td>Model:</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['formTire']->value->model;?>
</td>
                    </tr>
                    <tr>
                        <td>Rozmiar:</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['formTire']->value->size;?>
</td>

                    </tr>
                    <tr>
                        <td><span style=' color: red;'> szt.</span></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['sztuki']->value;?>
</td>
                    </tr>
                    <tr>
                        <td>cena:</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['formOffer']->value->price;?>
</td>
                    </tr>
                <hr>

                </tbody>
            </table>
             <div style="margin-top: 50px;clear:both">
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
buyProduct/<?php echo $_smarty_tpl->tpl_vars['formTire']->value->id;?>
" method="post">
            <div style=" float: right;"><span style="margin-right: 10px;font-size:20px; color: #ff3333; font-weight: 800">Razem: <?php echo $_smarty_tpl->tpl_vars['sumPrice']->value;?>
zł</span>
                <button class="btn btn-action" type="submit">Kup</button>
            </div>
    </div> 
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
