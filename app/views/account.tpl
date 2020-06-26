{extends file= "main_frame.tpl" }

{block name=headerOffer}
    <div class="col-xs-10 col-centered"> {* WIELKOSC OKNA *}
        <header class="page-header">
                            <span class="material-icons" style=" font-size: 120px;">
                    account_box
                            </span>
        </header>


    {/block}

    {block name=offers}

        <div class="col-sm-6" style="text-align: justify;font-size:20px;">


            <table class="table table-borderless">

                <tbody>
                <tr>
                    <td style="font-family: 'Oswald', sans-serif;">Nazwa użytkownika:</td>
                    <td>{$formUser->login}</td>
                </tr>

                </tbody>
            </table>
            <div class="col-sm-8">
                <form action="{$conf->action_root}changePassword" method="post">
                <label for="id_password">Stare hasło <span class="text-danger">*</span></label>
                <input id="id_password" type="password" name="password" value="" class="form-control">
            </div>
            <div class="col-sm-8">
                <label for="id_password_new">Nowe hasło <span class="text-danger">*</span></label>
                <input id="id_password_new" type="password" name="password_new" value="" class="form-control">
            </div>
            <div class="col-sm-8">
                <label for="id_confirmPass_new">Powtórz hasło <span class="text-danger">*</span></label>
                <input id="id_confirmPass_new" type="password" name="confirmPass_new" value="" class="form-control">
            </div>
            <br>
             <div class="text-right" style="clear:both; margin-top: 12px; margin-right: 10px; ">
                 <a href="{$conf->action_url}changePassword">
                     <button class="btn btn-action" style=" background-color: #66b0ff; background: #0069D9;" type="submit">Zmień hasło</button></a>
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

        <div class="col-sm-6" style="text-align: justify;font-size:20px;">

            <table class="table table-dark">
                <header style=" font-size: 30px;">Adres:</header>
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
                           <a href="{$conf->action_url}adressEditView" target="_blank">
                            <button class="btn btn-action" style="background:#0069D9;" type="submit">Zmień adres</button>
                           </a>
                        </div> 
        </div>





       

    {/block}
