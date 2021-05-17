{include file="head.tpl"}

<div class="row w-50 mx-auto pt-3">
    <form action="index.php" method="post">
        <input type="hidden" name="action" value="processReservation">
        

        <div class="row">
            <div class="mb-3 col-4">
                <label for="date" class="form-label">Data</label>
                <input type="date" name="date" class="form-control" min={date("Y-m-d")} max={date('Y-m-d', strtotime("+13 day"))} id="date" required>   
            </div>
            <div class="mb-3 col-3">
                <label for="time" class="form-label">Godzina</label>
                <input type="time" name="time" class="form-control" id="time" min="14:00" max="22:00" required>   
            </div>
        </div>
        <div class="mb-3 col-4 mx-auto">
            <button type="submit" class="btn btn-primary w-100" href='index.php?accept'>Sprawdź</button>
        </div>
    
    </form>
      {if isset($error)}
                <div class="alert alert-danger" role="alert">
                    {$error}
                </div>
                {/if}

</div>

{include file="foot.tpl"}
