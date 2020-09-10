
        <div class="register">
            <form action="" id="registerForm" method="post">
                <div><label for="nickName">Felhasználónév:</label> </div>
                <input type="text" id="nickName" name="nickName">
                <div><label for="pwd">Jelszó:</label></div>
                <input type="password" id="pwd" name="pwd" onkeyup="pwdCheck()">
                <div> <label for="pwdr">Jelszó megerősítése:</label></div>
                <input type="password" id="pwdr" name="pwdr" onkeyup="pwdCheck()">
                <div><label for="secWord1">Biztonsági szó #1:</label></div>
                <input type="password" id="secWord1" name="secWord1">
                <div> <label for="secWord2">Biztonsági szó #2:</label></div>
                <input type="password" id="secWord2" name="secWord2">
                <div id="regsubmit"><input type="submit" value="Regisztráció" id="Submit"></div>
                <div>
<label>Ha van felhasználód <a href='?Page=login'>itt tudsz bejelentkezni</a></label>
</div>  
            </form>
        </div>
    </div>
