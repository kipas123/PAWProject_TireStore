{extends file= "main_frame.tpl" }

{block name=headerOffer}

    <div class="col-xs-8 col-centered"> {* WIELKOSC OKNA *}
        {if {$search!=null}}
            <div style="text-align: left; clear:both;">
                <a href="{$conf->action_url}offerList/{$tiretype}">
                    <button class="btn btn-action" type="submit"><--- Wróć</button>
                </a></div>
            {/if}
        <header class="page-header">
            <h1 class="page-title">{if {$tiretype} == "car"}Opony osobowe:{else}Opony ciężarowe{/if}</h1>
        </header>


    {/block}

    {block name=offers}
        <form action="{$conf->action_url}offerList/{$tiretype}" method="get">
            <div class="col-sm-4" style=" margin-bottom: 30px;">
                <input class="form-control" type="text" placeholder="Brand/Model" name="filtr">
            </div>
            <div class="col-sm-2" style="margin-bottom:30px;">
                <button class="btn btn-action" type="submit">Filtruj</button>
            </div>
        </form>
        {if {$baza ==null}}<div style="clear:both; margin: 0 auto; text-align: center; font-size: 25px;">BRAK PRODUKTU</div>{else}
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
                        <div class="offerInfo"> Brand:{$data["brand"]} Model:{$data["model"]} Size:{$data["size"]} Price:{$data["price"]}zł</div>
                    </div>
                {/if}
            {/foreach}

            <div style="clear:both; margin: 0 auto; text-align: center; font-size: 25px;">{$page} z {$lastPage}</div>
        {/if}
        <ul class="pager">
            {if {$page} > 1}<li class="previous"><a href="{$conf->action_url}offerList/car/{$page-1}">&larr; Poprzednia</a></li>{/if}
                {if {$search}==null}
                    {if {$page} < {$lastPage}}<li class="next">{if $tiretype == car}<a href="{$conf->action_url}offerList/car/{$page+1}">{else}<a href="{$conf->action_url}offerList/truck/{$page+1}">{/if}Następna &rarr;</a></li>{/if}
                {else}
                    {if {$page} < {$lastPage}}<li class="next">{if $tiretype == car}<a href="{$conf->action_url}offerList/car/{$page+1}/?filtr={$search}">{else}<a href="{$conf->action_url}offerList/truck/{$page+1}/?filtr={$search}">{/if}Następna &rarr;</a></li>{/if}
                {/if}

        </ul>

        {foreach $msgs->getMessages() as $msg}
            <div class="alert {if $msg->isInfo()}alert-success{/if}
                 {if $msg->isWarning()}alert-warning{/if}
                 {if $msg->isError()}alert-danger{/if}" role="alert">
                {$msg->text}
            </div>
        {/foreach}

    {/block}
