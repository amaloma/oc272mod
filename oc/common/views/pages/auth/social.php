<?if (Theme::get('premium')!=1):?>
<?//if (Theme::get('premium')==1):?>
    <?if (count($providers = Social::enabled_providers()) > 0) :?>
        <!-- <br><br> -->
        <hr>
        <fieldset>
            <legend align="center"><?=__('Social Login')?></legend>
            <ul align="center" class="list-inline social-providers">
                <?foreach ($providers as $key => $provider) :?>     
                    <?if(strtolower($key) == 'live')$key='windows'?>
                   <li >
                        <a class="zocial <?=strtolower($key)?> social-btn" href="<?=Route::url('default',array('controller'=>'social','action'=>'login','id'=>strtolower($key)))?>">
                            <?=$key?>
                        </a>
                    </li>
                <?endforeach?>
            </ul>
        </fieldset>

    <?endif?>
<?endif?>
