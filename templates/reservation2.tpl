{include file="head.tpl"}

<div class="row w-50 mx-auto pt-3">
    <form action="index.php" method="post">
        <input type="hidden" name="action" value="accept">

        <div class="row">
            <div class="mb-3 col-4">
                <label for="date" class="form-label">Data</label>
                <input type="date" name="date" class="form-control" value={$date} min={date("Y-m-d")} max={date('Y-m-d', strtotime("+13 day"))} id="date" required disabled>   
            </div>
            <div class="mb-3 col-3">
                <label for="time" class="form-label">Godzina</label>
                <input type="time" name="time" class="form-control" id="time" value={$time} min="14:00" max="22:00" required disabled>   
            </div>
            <div class="mt-4 pt-2 col-3">
                   <button type="submit" name="action" value="back" class="btn btn-primary w-100" href="index.php?action=back">Zmień</button>
            </div>
        </div>


         <div class="row mb-4 p-2">
         <label for="tables" class="form-label">Wybierz stolik:</label>
            <select class="form-select" aria-label="Default select example" id="tables" name="tables">
                {foreach from=$tables item=table}
                    <option value="{$table.id}">Nr {$table.id} --- max liczba: {$table.max_liczba} --- {$table.rodzaj}</option>
                {/foreach}
              </select> 
        </div>
        <div class="mb-3">
       <label for="tel" class="col-4 col-form-label">Numer telefonu</label>
        <input class="form-control" type="text" name="tel" value="" id="tel" >
        </div>
        <div class="row mb-3">
        <div class="mb-3 col-4 mx-auto">
            <button type="submit" class="btn btn-primary w-100">Zarezerwuj</button>
        </div>
    </form>

</div>

{include file="foot.tpl"}
