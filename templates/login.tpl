{include file="head.tpl"}


        <div class="box">
            <h2>Panel Restauratora</h2>
            <form action="index.php" method="post">
                <input type="hidden" name="action" value="processLogin">
                <div class="mb-3">
                    <label for="login" class="form-label">Login</label>
                    <input type="text" name="login" class="form-control" id="login" required>   
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Hasło</label>
                    <input type="password" name="password" class="form-control" id="password" required>   
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary w-100">Zaloguj</button>
                </div>
                {if isset($error)}
                <div class="alert alert-danger" role="alert">
                    {$error}
                </div>
                {/if}
            </form>
        </div>

{include file="foot.tpl"}