
<?php

if(isset($_POST['username'])){

    echo $_POST['username'];
}
?>


<div id="login"><form method="post" autocomplete="off">
    <div>
<label>Felhasználónév</label>
    </div>
<input type="text" name="username" id="username" >
<div>
<label>Jelszó</label>
</div>
<input type="password" name="password" name="password">
<div id="logsubmit"><input type="submit" value="Bejelentkezés"/></div>
<div>
<label>Ha nincs felhasználód <a href='?Page=registration'>itt hozhatsz létre</a></label>
</div>
</form>
</div>