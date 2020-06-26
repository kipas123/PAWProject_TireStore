{extends file= "main_frame.tpl" }

{block name=headerOffer}
    
     <div class="col-xs-8 col-centered"> {* WIELKOSC OKNA *}
    <header class="page-header">
        <h1 class="page-title">Orders:</h1>
    </header>


{/block}

{block name=offers}
<form action="{$conf->action_url}allOrders/" method="get">
    <div class="col-sm-4" style=" margin-bottom: 30px;">
        <input class="form-control" type="text" placeholder="Nickname/Idorder" name="filtr">
    </div>
    <div class="col-sm-2" style="margin-bottom:30px;">
        <button class="btn btn-action" type="submit">Filtruj</button>
    </div>
</form>
    <div class="col-sm-12" style="overflow-x:auto;">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th>#</th>
      <th>Nr.zamowienia</th>
      <th>Nr.Produktu</th>
      <th>szt.</th>
      <th>Do_zapłaty</th>
      <th>dataZamowienia</th>
      <th>status</th>
      <th>Nazwa_uzytkownika</th>
    </tr>
  </thead>
  <tbody>
      {foreach from=$orderForm item=data name=foo}
    <tr>
      <th scope="row">{$smarty.foreach.foo.iteration +{$page*10} - 10}</th>
      <td><a href="{$conf->action_url}orderDetailsView/{$data["idorder"]}" target="_blank">{$data["idorder"]}</a></td>
      <td><a href="{$conf->action_url}offer/{$data["tireproduct_idtire"]}" target="_blank">{$data["tireproduct_idtire"]}</a></td>
      <td>{$data["quantity"]}</td>
      <td>{$data["totalprice"]}zł</td>
       <td>{$data["orderdata"]}</td>
       <td>{if {$data["orderstatus_idorderstatus"]} ==2}<span style="color: red;">{$data["status_name"]}</span>{else if {$data["orderstatus_idorderstatus"]} == 1} <span style="color: green;">{$data["status_name"]}</span>{else}<span style="color: #0066ff;">{$data["status_name"]}</span>{/if}
       </td>
       <td>{$data["login"]}</td>
    </tr>
    {/foreach}
  </tbody>
</table>
{if $orderForm!=null}<div style="clear:both; margin: 0 auto; text-align: center; font-size: 25px;">{$page} z {$lastPage}</div>{else}
                <div style="clear:both; margin: 0 auto; text-align: center; font-size: 25px;">Brak wyników</div>{/if}
                <ul class="pager">
                    {if {$page} > 1}<li class="previous"><a href="{$conf->action_url}allOrders/{$page-1}">&larr; Poprzednia</a></li>{/if}
                        {if {$search}==null}
                            {if {$page} < {$lastPage}}<li class="next"><a href="{$conf->action_url}allOrders/{$page+1}/?filtr={$search}">Następna &rarr;</a></li>{/if}
                        {else}
                            {if {$page} < {$lastPage}}<li class="next"><a href="{$conf->action_url}allOrders/{$page+1}/?filtr={$search}">Następna &rarr;</a></li>{/if}
                        {/if}
                </ul>
    </div>




    {foreach $msgs->getMessages() as $msg}
        <div class="alert {if $msg->isInfo()}alert-success{/if}
             {if $msg->isWarning()}alert-warning{/if}
             {if $msg->isError()}alert-danger{/if}" role="alert">
            {$msg->text}
        </div>
    {/foreach}

{/block}
