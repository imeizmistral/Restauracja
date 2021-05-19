{include file="head.tpl"}
    
        <main class="row">
            
            {if isset($user)}
                    <div class="col">
                        Witaj {$user}
                    </div>
                {else}
                    <div class="col">
                possimus veritatis numquam amet accusamus dolorem laboriosam. Aperiam, eos?
                Quia aut fugiat exercitationem dolores commodi in numquam accusantium cupiditate, dolorum asperiores inventore excepturi dignissimos odit similique enim nesciunt. Amet ex nesciunt reprehenderit totam tempore dolores magnam temporibus suscipit modi?
            </div>
    
                {/if}
        </main>

{include file="foot.tpl"}