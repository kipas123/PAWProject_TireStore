{extends file= "main_frame.tpl" }

{block name=headerOffer}
    <div class="col-xs-10 col-centered"> {* WIELKOSC OKNA *}
        <header class="page-header">
            <span style=" font-size: 30px;">Zarządzaj użytkownikami</span>
        </header>


    {/block}

    {block name=offers}


        <div class="col-sm-8 col-centered" style="text-align: justify;font-size:20px;">
            <form action="{$conf->action_url}userManagement/" method="get">
            <div class="col-sm-4" style=" margin-bottom: 30px;">
                <input class="form-control" type="text" placeholder="Iduser/Nickname" name="filtr">
            </div>
            <div class="col-sm-2" style="margin-bottom:30px;">
                <button class="btn btn-action" type="submit">Filtruj</button>
            </div>
        </form>
            <div style="clear:both"></div>
            <div style="overflow-x:auto;">
                <table class="table" style="font-size:16px;">
                    <thead class="thead-dark">
                        <tr>
                            <th>iduser</th>
                            <th>login</th>
                            <th>role</th>
                            <th>roleChange</th>
                        </tr>
                    </thead>
                    <tbody>
     {foreach from=$formUser item=data name=foo}                   
    <tr>
      <td>{$data["iduser"]}</td>
      <td>{$data["login"]}</td>
      <td>{if {$data["role"]}!="user"}<span style="color: red;">{$data["name"]}</span>{else}{$data["role"]}{/if}</td>
     <form action="{$conf->action_root}roleChange/{$data["iduser"]}" method="post">
      <td><select class="form-control" id="idSelect" name="role">
                            {foreach from=$select item=data name=foo}  
                            <option value="{$data["idroles"]}">{$data["name"]}</option>
                            {/foreach}
                    </select> <button style="float:left; margin-top: 3px; text-align: center; background: #1249B6;" type="submit" class="btn btn-info btn-xs">Zmień</button></td></td>
     </form>
    </tr>
    {/foreach}
  </tbody>

                </table>
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


    {/block}
