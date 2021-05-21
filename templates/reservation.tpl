{include file="head.tpl"}


<div class="box">
<h2> Rezerwacja stolika</h2>
    <form action="index.php" method="post">
        <input type="hidden" name="action" value="processReservation">
        
        <div class="box-row">
            <div class="box-row-bottom">
                <label for="date" class="form-label">Data</label>
                <input type="date" name="date" class="form-control" min={date("Y-m-d")} max={date('Y-m-d', strtotime("+13 day"))} id="date" required>   
            </div>
            <div class="box-row-bottom">
                <label for="time" class="form-label">Godzina</label>
                <input type="time" name="time" class="form-control" id="time" min="14:00" max="22:00" required>   
            </div>
        
        
            <div class="box-row-bottom">
                <button type="submit" href='index.php?accept'>Sprawdź</button>
            </div>
        </div>
    </form>
</div>


{include file="foot.tpl"}
