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
            <h1 class="page-title">Produkty:</h1>

        </header>


    {/block}

    {block name=offers}
        <form action="{$conf->action_url}allProductsView/" method="get">
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
                    {foreach from=$tireForm item=data name=foo}
                        <tr>
                            <th scope="row">{$smarty.foreach.foo.iteration +{$page*10} - 10}</th>
                            <td><a href="{$conf->action_url}offer/{$data["idtire"]}" target="_blank">{$data["idtire"]}</a></td>
                            <td>{$data["name"]}</td>
                            <td>{if {$data["quantity"] == 0}}<span style=" color: red; font-weight: bold;">{$data["quantity"]}</span>{else}{$data["quantity"]}{/if}</td>
                            <td>{$data["brand"]}</td>
                            <td>{$data["model"]}</td>
                            <td>{$data["size"]}</td>
                            <td style="text-align: center;">{if {$data["active"]} == 1}<span class="dot-active"></span>{else if {$data["active"]} == 0}<span class="dot"></span>{/if}</td>

                            {if {$data["has_offer"]}==0}
                                <td style="text-align: center;"><a href="{$conf->action_url}offerAddView/{$data["idtire"]}"><button style=" background: #ff6633;" type="button" class="btn btn-info btn-xs">stworz</button></a></td>
                            {else}
                                <td><a href="{$conf->action_url}offerEditView/{$data["idtire"]}"><button type="button" class="btn btn-info btn-xs">edytuj</button></a></td>   
                            {/if}
                        </tr>
                    {/foreach}
                </tbody>
            </table>
            {if $tireForm!=null}<div style="clear:both; margin: 0 auto; text-align: center; font-size: 25px;">{$page} z {$lastPage}</div>{else}
                <div style="clear:both; margin: 0 auto; text-align: center; font-size: 25px;">Brak wyników</div>{/if}
                <ul class="pager">
                    {if {$page} > 1}<li class="previous"><a href="{$conf->action_url}allProductsView/{$page-1}">&larr; Poprzednia</a></li>{/if}
                        {if {$search}==null}
                            {if {$page} < {$lastPage}}<li class="next"><a href="{$conf->action_url}allProductsView/{$page+1}/?filtr={$search}">Następna &rarr;</a></li>{/if}
                        {else}
                            {if {$page} < {$lastPage}}<li class="next"><a href="{$conf->action_url}allProductsView/{$page+1}/?filtr={$search}">Następna &rarr;</a></li>{/if}
                        {/if}
                </ul>


            </div>



            {/block}
