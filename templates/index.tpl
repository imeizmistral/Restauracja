{include file="head.tpl"}
        {if isset($accept)}
        <div class="box">
        <div class="info">
          <h2>Udana Rezerwacja</h2>
            <div class="info-info">Dzień<br>{$row.date}</div>
            <div class="info-info">Godzina<br>{$row.time}</div>
            <div class="info-info">Stolik nr<br>{$row.id_table}</div><br><br><br>
            <div>Kod potwierdzenia rezerwacji<br>{$row.random}</div>
        </div>
        </div>
        {else}
        <div class= info>Strona posiada system rezerwacji oraz logowowanie do przeglądu rezerwacji.<br>
                        Rezerwacji można dokonać jedynie na 14 dni do przodu.

        </div>
            <div class="content">
                <img src="style/grafika/aktualności.png" class="img">
                <img src="style/grafika/reklama.png" class="img">
                <img src="style/grafika/aktualności.png" class="img">
            </div>
        {/if}
{include file="foot.tpl"}