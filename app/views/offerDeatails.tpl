{extends file= "main_frame.tpl" }

{block name=headerOffer}
    <div class="col-xs-8 col-centered"> {* WIELKOSC OKNA *}

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
                        <td>{$recordOrder["name"]}</td>

                    </tr>
                    <tr>
                        <td>Nazwisko:</td>
                        <td>{$recordOrder["surname"]}</td>
                    </tr>
                    <tr>
                        <td>Miasto:</td>
                        <td>{$recordOrder["city"]}</td>

                    </tr>
                    <tr>
                        <td>Ulica</td>
                        <td>{$recordOrder["street"]}</td>
                    </tr>
                    <tr>
                        <td>Numer domu:</td>
                        <td>{$recordOrder["houseNumber"]}</td>
                    </tr>
                <hr>
                <tr>
                    <td>Kod pocztowy:</td>
                    <td> {$recordOrder["zipcode"]}</td>
                </tr>
                <tr>
                    <td>Numer telefonu:</td>
                    <td>{if {$recordOrder["phoneNumber"]}!=null}{$recordOrder["phoneNumber"]}{/if}</td>
                </tr>
                </tbody>
            </table>
            <hr>
        </div>
        <div class="col-sm-6" style="text-align: justify;font-size:20px;">

            <table class="table table-dark">
                <header style=" font-size: 30px;"><img src="{$conf->app_url}/assets/images/{$recordOrder['imghref']}" class="img-fluid" alt="Responsive image" height="100px" width='100px'></header>
                <tbody>
                    <tr>
                        <td>Firma:</td>
                        <td>{$recordOrder["brand"]}</td>

                    </tr>
                    <tr>
                        <td>Model:</td>
                        <td>{$recordOrder["model"]}</td>
                    </tr>
                    <tr>
                        <td>Rozmiar:</td>
                        <td>{$recordOrder["size"]}</td>

                    </tr>
                    <tr>
                        <td>szt.</td>
                        <td>{$recordOrder["quantity"]}</td>
                    </tr>
                    <tr>
                        <td>cena:</td>
                        <td>{$recordOrder["price"]} zł</td>
                    </tr>
                    <tr>
                        <td><span style=' color: red;'>Suma</span></td>
                        <td>{$recordOrder["totalprice"]} zł</td>
                    </tr>
                    <tr>
                        <td>Data zamowienia:</td>
                        <td>{$recordOrder["orderdata"]}</td>
                    </tr>
                <hr>

                </tbody>
            </table>
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
