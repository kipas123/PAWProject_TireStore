{extends file= "signTempl.tpl" }

{block name = main}
<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h3 class="thin text-center">Zaloguj się do konta</h3>
                                <p class="text-center text-muted">Lorem ipsum dolor sit amet, <a href="{$conf->action_url}registerShow">Register</a> adipisicing elit. Quo nulla quibusdam cum doloremque incidunt nemo sunt a tenetur omnis odio. </p>
                                <hr>

                                <form action="{$conf->action_root}login" method="post">
                                    <div class="top-margin">
                                        <label for="id_login">Nazwa użytkownika <span class="text-danger">*</span></label>
                                        <input id="id_login" type="text" name="login" value="{$form->login}" class="form-control">
                                    </div>
                                    <div class="top-margin">
                                        <label for="id_pass">Hasło <span class="text-danger">*</span></label>
                                        <input id="id_pass" type="password" name="pass" class="form-control">
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
                                            <b><a href="">Forgot password?</a></b>
                                        </div>
                                        <div class="col-lg-4 text-right">
                                            <button class="btn btn-action" type="submit">Sign in</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
{/block}                                    