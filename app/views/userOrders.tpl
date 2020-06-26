{extends file= "main_frame.tpl" }

{block name=headerOffer}
    
     <div class="col-xs-8 col-centered"> {* WIELKOSC OKNA *}

    {foreach $msgs->getMessages() as $msg}
        <div class="alert {if $msg->isInfo()}alert-success{/if}
             {if $msg->isWarning()}alert-warning{/if}
             {if $msg->isError()}alert-danger{/if}" role="alert">
            {$msg->text}
        </div>
    {/foreach}
    <header class="page-header">
        <h1 class="page-title">Twoje zamowienia:</h1>
    </header>


{/block}

{block name=offers}

    <div class="col-sm-12" style="overflow-x:auto;">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th>#</th>
      <th>Nr.zamowienia</th>
      <th>Nr.Produktu</th>
      <th>szt.</th>
      <th>Do zapłaty</th>
      <th>dataZamowienia</th>
      <th>status</th>
    </tr>
  </thead>
  <tbody>
      {foreach from=$orderForm item=data name=foo}
    <tr>
      <th scope="row">{$smarty.foreach.foo.iteration +{$page*5} - 5}</th>
      <td>{$data["idorder"]}</td>
      <td><a href="{$conf->action_url}offer/{$data["tireproduct_idtire"]}" target="_blank">{$data["tireproduct_idtire"]}</a></td>
      <td>{$data["quantity"]}</td>
      <td>{$data["totalprice"]}zł</td>
       <td>{$data["orderdata"]}</td>
       <td>{if {$data["orderstatus_idorderstatus"]} == 2}<span style="color: red;">{$data["name"]}</span>{else if {$data["orderstatus_idorderstatus"]} == 1} <span style="color: green;">{$data["name"]}</span>{else} <span style="color: #0066ff;">{$data["name"]}</span>{/if}</td>
    </tr>
    {/foreach}
  </tbody>
</table>
  <div style="clear:both; margin: 0 auto; text-align: center; font-size: 25px;">{$page} z {$lastPage}</div>
  <ul class="pager">
    {if {$page} > 1}<li class="previous"><a href="{$conf->action_url}userOrders/{$page-1}">&larr; Poprzednia</a></li>{/if}
  {if {$page} < {$lastPage}}<li class="next"><a href="{$conf->action_url}userOrders/{$page+1}">Następna &rarr;</a></li>{/if}
</ul>
    </div>



{/block}
