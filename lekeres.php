<?php

$file = fopen("users.ikek","r");

$filetart = fread($file,filesize("users.ikek"));

$filetart = explode("\n",$filetart);
$elemek = [];
for($i = 0; $i < count($filetart);$i++){
$elemek[$i] = explode("|",$filetart[$i]);
print_r($elemek[$i]);
echo"<br>";
}



?>