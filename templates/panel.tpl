{include file="head.tpl"}
    
        <main class="row">
            {if isset($user)}
                    <div class="col">
                        
                   

<h2> Dzisiejsze rezerwacje</h2>
                    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Numer telefonu</th>
      <th scope="col">Czas</th>
      <th scope="col">Numer stolika</th>
      <th scope="col">Odwołanie</th>
    </tr>
  </thead>
  <tbody>
    {foreach from=$reservation item=reserved}
        <tr>
            <td>{$reserved.id}</td>
            <td>{$reserved.number_tel}</td>
            <td>{$reserved.time}</td>
            <td>{$reserved.id_table}</td>
            <td>
                <a href="index.php?action=cancelReservation&id={$reserved.id}">
                <button class="btn btn-primary">Odwołaj rezerwację</button>
            </a>
            </td>
        </tr>
        {/foreach}
  </tbody>
</table>
                
           </div>      
                
                
                
                {else}
                    <div class="col">
                possimus veritatis numquam amet accusamus dolorem laboriosam. Aperiam, eos?
                Quia aut fugiat exercitationem dolores commodi in numquam accusantium cupiditate, dolorum asperiores inventore excepturi dignissimos odit similique enim nesciunt. Amet ex nesciunt reprehenderit totam tempore dolores magnam temporibus suscipit modi?
            </div>
    
                {/if}
        </main>

{include file="foot.tpl"}