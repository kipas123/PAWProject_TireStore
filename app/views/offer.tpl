{extends file= "offerTempl.tpl" }

{block name=headerOffer}
    <div class="col-xs-8 col-centered"> {* WIELKOSC OKNA *}
    <div style="text-align: left; clear:both;">
        {if $formTire->tireType == car}
        <a href="{$conf->action_url}offerList/car">
        {elseif $formTire->tireType == truck}
            <a href="{$conf->action_url}offerList/truck">
        {else}
            <a href="{$conf->action_url}">
            {/if}
        <button class="btn btn-action" type="submit"><--- Wróć</button>
        </a>
    </div>
    <header class="page-header">
        <h1 class="page-title">{$formTire->brand} {$formTire->model}</h1>
    </header>


{/block}

{block name=offers}

    <div class="col-sm-4">
        <div class="first">
            <img src="{$conf->app_url}/assets/images/{$formOffer->imghref}" class="img-fluid" alt="Responsive image">
        </div>
    </div>
    <div class="col-sm-6" style="text-align: justify;font-size:20px;">

        <table class="table table-dark">
            <tbody>
                <tr>
                    <td>Marka:</td>
                    <td>{$formTire->brand}</td>

                </tr>
                <tr>
                    <td>Model:</td>
                    <td>{$formTire->model}</td>
                </tr>
                <tr>
                    <td>Rodzaj opony:</td>
                    <td>{$formTire->tireType}</td>

                </tr>
                <tr>
                    <td>Wielkosc:</td>
                    <td>{$formTire->size}</td>
                </tr>
                <tr>
                    <td>Cena:</td>
                    <td>{$formTire->prize} zł</td>
                </tr>
            <hr>
                <tr>
                    <td>Magazyn:</td>
                    <td>{$formTire->quantity} szt.</td>
                </tr>
            </tbody>
        </table>
                
                <div style="margin-top: 50px;clear:both">
                    <form action="{$conf->action_root}" method="post">
                      <div style=" float: right;">
                    <button class="btn btn-action" type="submit">Kup</button>
        </div>
                    <div style=" float: right;">
                    <input id="id_login" type="text" name="login" value="" style="float: right; margin-right: 20px; width: 20px;" class="form-control">Ilość szt.
                    </form>
                    </div>
                </div>
    </div>
                
<div class="col-sm-12 offerText">{$formOffer->description}</div>
   
    
    </div>

        {foreach $msgs->getMessages() as $msg}
        <div class="alert {if $msg->isInfo()}alert-success{/if}
             {if $msg->isWarning()}alert-warning{/if}
             {if $msg->isError()}alert-danger{/if}" role="alert">
            {$msg->text}
        </div>
    {/foreach}

{/block}
