{include file="head.tpl"}


<div class="box">
<h2>Rezerwacja stolika</h2>
    <form action="index.php" method="post">
        <input type="hidden" name="action" value="accept">

        <div class="box-row">
            <div class="box-row-bottom">
                <label for="date" class="form-label">Data</label>
                <input type="date" name="date" class="form-control" value={$date} min={date("Y-m-d")} max={date('Y-m-d', strtotime("+13 day"))} id="date" required readonly="readonly">   
            </div>
            <div class="box-row-bottom">
                <label for="time" class="form-label">Godzina</label>
                <input type="time" name="time" class="form-control" id="time" value={$time} min="14:00" max="22:00" required readonly="readonly">   
            </div>
        
        
            <div class="box-row-bottom">
                 <button class="button" type="submit" name="action" value="back" href="index.php?action=back">Zmień</button>
            </div>
        </div>
          <div class="box-row">
           <div class="box-row-bottom">
         <label for="tables" class="form-label">Wybierz stolik:</label>
            <select class="form-select" aria-label="Default select example" id="tables" name="tables">
                {foreach from=$tables item=table}
                    <option value="{$table.id}">Nr {$table.id} --- max liczba: {$table.max_liczba} --- {$table.rodzaj}</option>
                {/foreach}
              </select> 
        </div>
        </div>
        <div class="box-row">
           <div class="box-row-bottom">
       <label for="tel" class="col-4 col-form-label">Numer telefonu</label>
        <input class="form-control" type="text" name="tel" value="" id="tel" >
        </div>
        </div>
        <div class="box-row">
            <button  class="button" type="submit" class="btn">Zarezerwuj</button>
    </form>
</div>


{include file="foot.tpl"}
