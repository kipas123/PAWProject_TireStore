{extends file= "signTempl.tpl" }

{block name = main}
    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-default">
            <div class="panel-body">
                <h3 class="thin text-center">Zmień adres:</h3>
                <hr>
                <form action="{$conf->action_root}adressEdit" method="post">
               
                    <div class="top-margin">
                        <label for="id_name">imie <span class="text-danger">*</span></label>
                        <input id="id_name" type="text" name="name" value="{$formUserData->name}" class="form-control">
                    </div>
                    <div class="top-margin">
                        <label for="id_surname">Nazwisko <span class="text-danger">*</span></label>
                        <input id="id_surname" type="text" name="surname" value="{$formUserData->surname}" class="form-control">
                    </div>
                    <div class="top-margin">
                        <label for="id_city">Miasto <span class="text-danger">*</span></label>
                        <input id="id_city" type="text" name="city" value="{$formUserData->city}" class="form-control">
                    </div>
                    <div class="top-margin">
                        <label for="id_street">Ulica <span class="text-danger">*</span></label>
                        <input id="id_street" type="text" name="street" value="{$formUserData->street}" class="form-control">
                    </div>
                    <div class="top-margin">
                        <label for="id_houseNumber">Numer domu <span class="text-danger">*</span></label>
                        <input id="id_houseNumber" type="text" name="houseNumber" value="{$formUserData->houseNumber}" class="form-control">
                    </div>
                    <div class="top-margin">
                        <label for="id_zipcode">Kod pocztowy <span class="text-danger">*</span></label>
                        <input id="id_zipcode" type="text" name="zipcode" value="{$formUserData->zipcode}" class="form-control">
                    </div>
                    <div class="top-margin">
                        <label for="id_phoneNumber">Telefon </label>
                        <input id="id_phoneNumber" type="text" name="phoneNumber" value="{if $formUserData->phoneNumber!=0}{$formUserData->phoneNumber}{/if}" class="form-control">
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