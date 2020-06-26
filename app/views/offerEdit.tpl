{extends file= "main_clear.tpl" }    

{block name= headerContent}
    {*
    <ol class="breadcrumb">
    <li><a href="index.html">Home</a></li>
    <li class="active">User access</li>
    </ol>
    *}
    <div class="row">

        <!-- Article main content -->
        <header class="page-header">
            <a href="{$conf->action_url}addProductView">
                <button class="btn btn-action" type="submit"><--- Wróć</button>
            </a>
            <h1 class="page-title">Edytuj oferte</h1>
        </header>
    {/block}

    {block name=headerOffer}
        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">User access</li>
        </ol>

        <div class="row">

            <!-- Article main content -->
            <header class="page-header">
                <a href="{$conf->action_url}allProductsView">
                    <button class="btn btn-action" type="submit"><--- Wróć</button>
                </a>
                <h1 class="page-title">Edytuj ofertę</h1>
            </header>
        {/block}
        {block name = main}
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="thin text-center">Oferta/{$formOffer["tireproduct_idtire"]}:</h3>
                        <hr>
                        <form action="{$conf->action_root}offerEdit/{$formOffer["tireproduct_idtire"]}" method="post">

                            <div class="top-margin">
                                <label for="id_shortdescription">Krótki opis oferty <span class="text-danger">*</span></label>
                                <textarea id="id_shortdescription" class="form-control" rows="3" name="shortdescription">{$formOffer["shortdescription"]}</textarea>
                            </div>
                            <div class="top-margin">
                                <label for="id_description">Opis oferty <span class="text-danger">*</span></label>
                                <textarea id="id_description" class="form-control" rows="3" name="description">{$formOffer["description"]}</textarea>
                            </div>
                            <div class="top-margin">
                                <label for="id_imghref">Odnośnik do zdj <span class="text-danger">*</span></label>
                                <input id="id_imghref" type="text" name="imghref" value="{$formOffer["imghref"]}" class="form-control">
                            </div>
                            <div class="top-margin">
                                <label for="id_price">Cena <span class="text-danger">*</span></label>
                                <input id="id_price" type="text" name="price" value="{$formOffer["price"]}" class="form-control">
                            </div>
                            <div class="top-margin">
                                <label for="id_quantity" style=" font-size: 20px;">Ilość sztuk <span class="text-danger">*</span></label>
                                <input style="height:25px;"id="id_quantity" type="number" min="1" name="quantity" value="{$formOffer["quantity"]}" class="form-control">
                            </div>
                            <div class="top-margin">
                                <label for="id_quantity" style=" font-size: 20px;">Status oferty <span class="text-danger">*</span></label>
                                {if {$formOffer["active"]} == 1}<span class="dot-active" style="clear:both;"></span>{else if {$formOffer["active"]} == 0}<span class="dot" style=" background-color: red;"></span>{/if}
                            </div>
                            <div class="top-margin">
                                <label for="idSelect">Aktywne ogłoszenie <span class="text-danger">*</span></label>
                                <select class="form-control"  id="idSelect" name="active">
                                    <option value="0">nie</option>
                                    <option value="1">tak</option>
                                </select>
                            </div>
                    </div>

                    {if $msgs->isMessage()}
                        {foreach $msgs->getMessages() as $msg}
                            <div class="alert {if $msg->isInfo()}alert-success{/if}
                                 {if $msg->isWarning()}alert-warning{/if}
                                 {if $msg->isError()}alert-danger{/if}" role="alert" style="margin-top: 10px;">
                                {$msg->text}
                            </div>
                        {/foreach}
                    {/if}

                    <hr>
                    <div style="text-align: right; clear: both;">

                        <button class="btn btn-action text-right" style=" background:#0069D9;" type="submit">Zapisz</button>

                    </div>
                    </form>
                </div>
            </div>

        </div>
    {/block}                             
