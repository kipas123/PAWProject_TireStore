{extends file= "main_frame.tpl" }

{block name=headerOffer}
    
     <div class="col-xs-8 col-centered"> {* WIELKOSC OKNA *}
    <header class="page-header">
        <h1 class="page-title">Zamówienia do realizacji:</h1>
    </header>
      <div style='float:right;'>
    {foreach $msgs->getMessages() as $msg}
        <div class="alert {if $msg->isInfo()}alert-success{/if}
             {if $msg->isWarning()}alert-warning{/if}
             {if $msg->isError()}alert-danger{/if}" role="alert">
            {$msg->text}
        </div>
    {/foreach}
  </div>


{/block}

{block name=offers}
    <form action="{$conf->action_url}unRealizedOrders/" method="get">
    <div class="col-sm-4" style=" margin-bottom: 30px;">
        <input class="form-control" type="text" placeholder="Nickname/Idorder" name="filtr">
    </div>
    <div class="col-sm-2" style="margin-bottom:30px;">
        <button class="btn btn-action" type="submit">Filtruj</button>
    </div>
    </form>
    <div class="col-sm-12" style="overflow-x:auto;">
<table class="table" style=" font-size: 13px">
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
      <th style = " text-align: center;">Zmien status zamowienia</th>
    </tr>
  </thead>
  <tbody>
      {foreach from=$orderForm item=data name=foo}
          {if ({$data["orderstatus_idorderstatus"]} > 2)}
    <tr>
      <th scope="row">{$smarty.foreach.foo.iteration +{$page*5} - 5}</th>
      <td><a href="{$conf->action_url}orderDetailsView/{$data["idorder"]}" target="_blank">{$data["idorder"]}</a></td>
      <td><a href="{$conf->action_url}offer/{$data["tireproduct_idtire"]}" target="_blank">{$data["tireproduct_idtire"]}</a></td>
      <td>{$data["quantity"]}</td>
      <td>{$data["totalprice"]}zł</td>
       <td>{$data["orderdata"]}</td>
       <td><span style="color: #0066ff; font-weight: bold;">{$data["status_name"]}</span>
                         </td>
       <td style = " text-align: center;" >{$data["login"]}</td>
       <td>     <form action="{$conf->action_url}statusChange/{$data["idorder"]}" method="post">
                    <select class="form-control" id="idSelect" name="status">
                        {foreach from=$statusChoice item=data}
                            <option value="{$data["idorderstatus"]}">{$data["name"]}</option>
                        {/foreach}
                    </select>
           
       <button style="float:left; margin-top: 3px; text-align: center; background: #1249B6;" type="submit" class="btn btn-info btn-xs">Zmień</button></td>
       </form>
    </tr>
    {/if}
    {/foreach}
  </tbody>
</table>
{if $orderForm!=null}<div style="clear:both; margin: 0 auto; text-align: center; font-size: 25px;">{$page} z {$lastPage}</div>{else}
                <div style="clear:both; margin: 0 auto; text-align: center; font-size: 25px;">Brak wyników</div>{/if}
  
                <ul class="pager">
                    {if {$page} > 1}<li class="previous"><a href="{$conf->action_url}unRealizedOrders/{$page-1}">&larr; Poprzednia</a></li>{/if}
                        {if {$search}==null}
                            {if {$page} < {$lastPage}}<li class="next"><a href="{$conf->action_url}unRealizedOrders/{$page+1}/?filtr={$search}">Następna &rarr;</a></li>{/if}
                        {else}
                            {if {$page} < {$lastPage}}<li class="next"><a href="{$conf->action_url}unRealizedOrders/{$page+1}/?filtr={$search}">Następna &rarr;</a></li>{/if}
                        {/if}
                </ul>
    </div>

{/block}
