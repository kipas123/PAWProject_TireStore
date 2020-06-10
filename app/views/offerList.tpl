{extends file= "offerTempl.tpl" }

{block name=headerOffer}
    
     <div class="col-xs-8 col-centered"> {* WIELKOSC OKNA *}
    <header class="page-header">
        <h1 class="page-title">Opony osobowe:</h1>
    </header>


{/block}

{block name=offers}

    <div class="col-sm-4" style=" margin-bottom: 30px;">
        <input class="form-control" type="text" placeholder="Name">
    </div>
    <div class="col-sm-2" style="margin-bottom:30px;">
        <button class="btn btn-action" type="submit">Filtruj</button>
    </div>
    {foreach from=$baza item=data}
        {if $data["tireproduct_idtire"]!=null}
        <div class="col-12 col-sm-12 offer">
            <div class="col-sm-3 imgPlace"><img src="{$conf->app_url}/assets/images/{$data["imghref"]}" class="img-fluid" alt="Responsive image" height="150px"></div>
            <div class="col-sm-8 offerText"><p style="font-size:20px;">{$data["brand"]} {$data["model"]}</p><br>{$data["shortdescription"]}
                <div style="text-align: right; clear:both; margin: 5px 0;">
                    <a href="{$conf->action_url}offer/{$data["idtire"]}" target="_blank">
                        <button class="btn btn-action" type="submit">Przejdz ---></button>
                    </a>
                </div>
            </div>
            <div class="offerInfo"> Brand:{$data["brand"]} Model:{$data["model"]} Size:{$data["size"]} Prize:{$data["price"]}zł</div>
        </div>
        {/if}
    {/foreach}





    {foreach $msgs->getMessages() as $msg}
        <div class="alert {if $msg->isInfo()}alert-success{/if}
             {if $msg->isWarning()}alert-warning{/if}
             {if $msg->isError()}alert-danger{/if}" role="alert">
            {$msg->text}
        </div>
    {/foreach}

{/block}
