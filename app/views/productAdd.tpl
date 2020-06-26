{extends file= "main_frame.tpl" }

{block name=headerOffer}
    <div class="col-xs-10 col-centered"> {* WIELKOSC OKNA *}
        <header class="page-header">
            <span style=" font-size: 30px;">Dodaj produkt/ogłoszenie</span>
        </header>


    {/block}

    {block name=offers}

<form action="{$conf->action_url}addProductView/" method="get">
        <div class="col-sm-8" style="text-align: justify;font-size:20px;">
            <div style="overflow-x:auto;">
                    <div class="col-sm-4" style=" margin-bottom: 30px;">
        <input class="form-control" type="text" placeholder="idtire/brand/model" name="filtr">
    </div>
                </form>
    <div class="col-sm-2" style="margin-bottom:30px;">
        <button class="btn btn-action" type="submit">Filtruj</button>
    </div>
                <table class="table" style="font-size:16px;">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>idtire</th>
                            <th>tireType</th>
                            <th>brand</th>
                            <th>model</th>
                            <th>size</th>
                            <th>Ogłoszenie</th>
                        </tr>
                    </thead>
                    <tbody>
      {foreach from=$tireForm item=data name=foo}
    <tr>
      <th scope="row">{$smarty.foreach.foo.iteration +{$page*4} - 4}</th>
      <td>{$data["idtire"]}</td>
      <td>{$data["name"]}</td>
      <td>{$data["brand"]}</td>
      <td>{$data["model"]}</td>
      <td>{$data["size"]}</td>
      <td><a href="{$conf->app_url}/offerAddView/{$data["idtire"]}"><button type="button" class="btn btn-primary" style=" height: 33px;background:#2db1d2;">+ Oferta</button></td>
      
    </tr>
    {/foreach}
  </tbody>

                </table>
  {if $tireForm!=null}<div style="clear:both; margin: 0 auto; text-align: center; font-size: 25px;">{$page} z {$lastPage}</div>{else}
                <div style="clear:both; margin: 0 auto; text-align: center; font-size: 25px;">Brak wyników</div>{/if}
  
                <ul class="pager">
                    {if {$page} > 1}<li class="previous"><a href="{$conf->action_url}addProductView/{$page-1}">&larr; Poprzednia</a></li>{/if}
                        {if {$search}==null}
                            {if {$page} < {$lastPage}}<li class="next"><a href="{$conf->action_url}addProductView/{$page+1}/?filtr={$search}">Następna &rarr;</a></li>{/if}
                        {else}
                            {if {$page} < {$lastPage}}<li class="next"><a href="{$conf->action_url}addProductView/{$page+1}/?filtr={$search}">Następna &rarr;</a></li>{/if}
                        {/if}
                </ul>
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
                    <label for="idSelect" style="font-size: 20px;">Rodzaj opony <span class="text-danger">*</span></label>
                    <select class="form-control" id="idSelect" name="tireType">
                        {foreach from=$tireType item=data}
                            <option value="{$data["idtiretype"]}">{$data["name"]}</option>
                        {/foreach}
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
