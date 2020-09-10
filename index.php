<!DOCTYPE html>
<html>
    <head>
    
        <link rel="stylesheet" href="stilus.css">
        <link href="https://fonts.googleapis.com/css2?family=Changa:wght@200;600&display=swap" rel="stylesheet">
        <script>
    function pwdCheck(){
        console.log("das");
    if(document.getElementById("pwd").value!=document.getElementById("pwdr").value){
        document.getElementById("pwdr").style.backgroundColor="#ff6161";
        document.getElementById("Submit").disabled=true;
        console.log("das");
    }
    else{
        document.getElementById("pwdr").style.backgroundColor="#61ff9b";
    }
    }
</script>
        
    </head>
    <body>
        <?php
        session_start();
        ?>
        <div id="view">
            <header>
                <ul>
                    <li>
                        <img src="ikon/explore-white-18dp.svg" onclick="window.location='?'"/>
                    </li>
                    
                    <li>
                        <img src="ikon/face-white-18dp.svg" onclick="window.location='?Page=login'"/>
                    </li>
                    
                    <li>
                        <img src="ikon/exit_to_app-white-18dp.svg"/>
                    </li>
                </ul>
            </header>
            <div id="tartalom">
                <?php
                if(isset($_GET['Page'])){
                include($_GET['Page'].".php");
                }
                else{

                    include("memes.php");

                }
                ?>
            </div>

            </div>
            <footer>

            </footer>
       
    </body>
        
</html>