{extends file= "offerTempl.tpl" }

{block name=headerOffer}
    
     <div class="col-xs-8 col-centered"> {* WIELKOSC OKNA *}
    <header class="page-header">
        <h1 class="page-title">Twoje zamowienia:</h1>
    </header>


{/block}

{block name=offers}

    <div class="col-sm-4" style=" margin-bottom: 30px;">
        <input class="form-control" type="text" placeholder="Name">
    </div>
    <div class="col-sm-2" style="margin-bottom:30px;">
        <button class="btn btn-action" type="submit">Filtruj</button>
    </div>
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
      <th scope="row">{$smarty.foreach.foo.iteration}</th>
      <td>{$data["idorder"]}</td>
      <td><a href="{$conf->action_url}offer/{$data["tireproduct_idtire"]}" target="_blank">{$data["tireproduct_idtire"]}</a></td>
      <td>{$data["quantity"]}</td>
      <td>{$data["totalprice"]}zł</td>
       <td>{$data["orderdata"]}</td>
       <td>{if {$data["status"]} == 0}W trakcie realizacji{else}"Zrealizowany"{/if} 
                           <a href="{$conf->action_url}adressEditView" target="_blank">
                            <button type="button" class="btn btn-info" style="height:30px;  background: #46C012;">Realizuj</button>
                           </a>
                         </td>
       <td>{$data["login"]}</td>
    </tr>
    {/foreach}
  </tbody>
</table>
    </div>




    {foreach $msgs->getMessages() as $msg}
        <div class="alert {if $msg->isInfo()}alert-success{/if}
             {if $msg->isWarning()}alert-warning{/if}
             {if $msg->isError()}alert-danger{/if}" role="alert">
            {$msg->text}
        </div>
    {/foreach}

{/block}
