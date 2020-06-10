{extends file= "offerTempl.tpl" }

{block name=headerOffer}
    <div class="col-xs-8 col-centered"> {* WIELKOSC OKNA *}
        <div style="text-align: left; clear:both;">
            <a href="{$conf->action_url}offer/{$idtire}">
                <button class="btn btn-action" type="submit"><--- Wróć</button>
            </a>
        </div>
        <header class="page-header" style=' margin-bottom: 40px;'>
            <h1 class="page-title">Podsumowanie: </h1>
        </header>


    {/block}

    {block name=offers}
        <div class="col-sm-6" style="text-align: justify;font-size:20px;">

            <table class="table table-dark">
                <header style=" font-size: 30px;">Adres do wysyłki:</header>
                <tbody>
                    <tr>
                        <td>Imie:</td>
                        <td>{$formUser->name}</td>

                    </tr>
                    <tr>
                        <td>Nazwisko:</td>
                        <td>{$formUser->surname}</td>
                    </tr>
                    <tr>
                        <td>Miasto:</td>
                        <td>{$formUser->city}</td>

                    </tr>
                    <tr>
                        <td>Ulica</td>
                        <td>{$formUser->street}</td>
                    </tr>
                    <tr>
                        <td>Numer domu:</td>
                        <td>{$formUser->houseNumber}</td>
                    </tr>
                <hr>
                <tr>
                    <td>Kod pocztowy:</td>
                    <td> {$formUser->zipcode}</td>
                </tr>
                <tr>
                    <td>Numer telefonu:</td>
                    <td>{if $formUser->phoneNumber!=0}{$formUser->phoneNumber}{/if}</td>
                </tr>
                </tbody>
            </table>
            <div class="text-right" style="clear:both; margin-top: 12px; margin-right: 10px; ">
                <p>Adres możesz zmienić w zakładce <a href="{$conf->action_url}accountShow">'konto'</a></p>
            </div> 
            <hr>
        </div>
        <div class="col-sm-6" style="text-align: justify;font-size:20px;">

            <table class="table table-dark">
                <header style=" font-size: 30px;"><img src="{$conf->app_url}/assets/images/{$formOffer->imghref}" class="img-fluid" alt="Responsive image" height="100px" width='100px'></header>
                <tbody>
                    <tr>
                        <td>Firma:</td>
                        <td>{$formTire->brand}</td>

                    </tr>
                    <tr>
                        <td>Model:</td>
                        <td>{$formTire->model}</td>
                    </tr>
                    <tr>
                        <td>Rozmiar:</td>
                        <td>{$formTire->size}</td>

                    </tr>
                    <tr>
                        <td><span style=' color: red;'> szt.</span></td>
                        <td>{$sztuki}</td>
                    </tr>
                    <tr>
                        <td>cena:</td>
                        <td>{$formOffer->price}</td>
                    </tr>
                <hr>

                </tbody>
            </table>
             <div style="margin-top: 50px;clear:both">
        <form action="{$conf->action_root}buyProduct/{$formTire->id}" method="post">
            <div style=" float: right;"><span style="margin-right: 10px;font-size:20px; color: #ff3333; font-weight: 800">Razem: {$sumPrice}zł</span>
                <button class="btn btn-action" type="submit">Kup</button>
            </div>
    </div> 
        </div>      
    </div>

                    


</div>

{foreach $msgs->getMessages() as $msg}
    <div class="alert {if $msg->isInfo()}alert-success{/if}
         {if $msg->isWarning()}alert-warning{/if}
         {if $msg->isError()}alert-danger{/if}" role="alert">
        {$msg->text}
    </div>
{/foreach}

{/block}
