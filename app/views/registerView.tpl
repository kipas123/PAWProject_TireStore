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
                    <h1 class="page-title">Rejestracja</h1>
                </header>
{/block}



{block name = main}
    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-default">
            <div class="panel-body">
                <h3 class="thin text-center">Rejestracja</h3>
                <hr>

                <form action="{$conf->action_root}register" method="post">
                    <div class="top-margin">
                        <label for="id_login">Nazwa użytkownika <span class="text-danger">*</span></label>
                        <input id="id_login" type="text" name="login" value="{$formUser->login}" class="form-control">
                    </div>
                    <div class="top-margin">
                        <label for="id_pass">Hasło <span class="text-danger">*</span></label>
                        <input id="id_pass" type="password" name="pass" value="" class="form-control">
                    </div>
                    <div class="top-margin">
                        <label for="id_confirmpass">Powtórz hasło <span class="text-danger">*</span></label>
                        <input id="id_confirmpass" type="password" name="confirmPass" value="" class="form-control">
                    </div>

                    <hr>
                    <p style="font-family: 'Oswald', sans-serif;font-size: 25px;">Dane do wysyłki:</p>
                    <div class="row">
                        
                        <div class="col-lg-4 text-right">
                            
                        </div>
                    </div>
               
                    <div class="top-margin">
                        <label for="id_name">imie <span class="text-danger">*</span></label>
                        <input id="id_name" type="text" name="name" value="{$formUser->name}" class="form-control">
                    </div>
                    <div class="top-margin">
                        <label for="id_surname">Nazwisko <span class="text-danger">*</span></label>
                        <input id="id_surname" type="text" name="surname" value="{$formUser->surname}" class="form-control">
                    </div>
                    <div class="top-margin">
                        <label for="id_city">Miasto <span class="text-danger">*</span></label>
                        <input id="id_city" type="text" name="city" value="{$formUser->city}" class="form-control">
                    </div>
                    <div class="top-margin">
                        <label for="id_street">Ulica <span class="text-danger">*</span></label>
                        <input id="id_street" type="text" name="street" value="{$formUser->street}" class="form-control">
                    </div>
                    <div class="top-margin">
                        <label for="id_houseNumber">Numer domu <span class="text-danger">*</span></label>
                        <input id="id_houseNumber" type="text" name="houseNumber" value="{$formUser->houseNumber}" class="form-control">
                    </div>
                    <div class="top-margin">
                        <label for="id_zipcode">Kod pocztowy <span class="text-danger">*</span></label>
                        <input id="id_zipcode" type="text" name="zipcode" value="{$formUser->zipcode}" class="form-control">
                    </div>
                    <div class="top-margin">
                        <label for="id_phoneNumber">Telefon </label>
                        <input id="id_phoneNumber" type="text" name="phoneNumber" value="{$formUser->phoneNumber}" class="form-control">
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

                    <div class="row">
                        <div class="col-lg-8">
                            <label class="checkbox">
                                <input type="checkbox"> 
                                Zapoznałem się z <a href="page_terms.html">regulaminem</a>
                            </label>                        
                        </div>
                        <div class="col-lg-4 text-right">
                            <button class="btn btn-action" type="submit">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
{/block}                             
