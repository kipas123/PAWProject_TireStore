{extends file= "offerTempl.tpl" }

{block name=headerOffer}
    <div class="col-xs-10 col-centered"> {* WIELKOSC OKNA *}
        <header class="page-header">
            <span style=" font-size: 30px;">Dodaj produkt/ogłoszenie</span>
        </header>


    {/block}

    {block name=offers}


        <div class="col-sm-8" style="text-align: justify;font-size:20px;">
            <div style="overflow-x:auto;">
                <table class="table" style="font-size:16px;">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>idtire</th>
                            <th>tireType</th>
                            <th>brand</th>
                            <th>model</th>
                            <th>quantity</th>
                            <th>size</th>
                            <th>Ogłoszenie</th>
                        </tr>
                    </thead>

                </table>
            </div>
        </div>

        <div class="col-sm-4" style="text-align: justify;font-size:20px;">


            <table class="table table-borderless">

                <tbody>
                    <tr>
                        <td style="font-family: 'Oswald', sans-serif;">Dodaj produkt:</td>
                        <td></td>
                    </tr>

                </tbody>
            </table>
            <form action="{$conf->action_root}addProduct" method="post">
                <div class="col-sm-8">
                    <label for="id_brand" style=" font-size: 20px;">Firma <span class="text-danger">*</span></label>
                    <input style="height:25px;"id="id_brand" type="text" name="brand" value="" class="form-control">
                </div>
                <div class="col-sm-8">
                    <label for="id_model" style=" font-size: 20px;">Model <span class="text-danger">*</span></label>
                    <input style="height:25px;"id="id_model" type="text" name="model" value="" class="form-control">
                </div>
                <div class="col-sm-8">
                    <label for="id_size" style=" font-size: 20px;">Rozmiar <span class="text-danger">*</span></label>
                    <input style="height:25px;"id="id_size" type="text" name="size" value="" class="form-control">
                </div>
                <div class="col-sm-8">
                    <label for="id_quantity" style=" font-size: 20px;">Ilość sztuk <span class="text-danger">*</span></label>
                    <input style="height:25px;"id="id_quantity" type="number" min="1" name="quantity" value="1" class="form-control">
                </div>
                <div class="col-sm-8">
                    <label for="idSelect" style="font-size: 20px;">Rodzaj opony <span class="text-danger">*</span></label>
                    <select class="form-control" id="idSelect" name="tireType">
                        <option value="car">car</option>
                        <option value="truck">truck</option>
                    </select>
                </div>
                <br>
                <div class="text-right" style="clear:both; margin-top: 12px; margin-right: 10px; ">
                    <button class="btn btn-action" style="background-color: #66b0ff; background: #0069D9;" type="submit">Dodaj produkt</button>
                </div> 
            </form>
            <hr>
            {foreach $msgs->getMessages() as $msg}
                <div class="alert {if $msg->isInfo()}alert-success{/if}
                     {if $msg->isWarning()}alert-warning{/if}
                     {if $msg->isError()}alert-danger{/if}" role="alert">
                    {$msg->text}
                </div>
            {/foreach}




        </div>





    {/block}
