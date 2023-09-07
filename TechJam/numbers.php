<?php

for($i= 33; $i <= 543; $i++){
    if($i % 2 == 0){
        echo "<b>$i</b> <br>";
        //als het getal even is maak het dan dikgerukt 
    }
    elseif($i % 5 == 0 && $i % 9 == 0){
        echo "Web" . "<br>";;
        // als je deelt door 5 en deelt door 9 en op 0 uitkomt 
    }
    elseif($i % 5 == 0){
        echo "Software" . "<br>";
        // als het getal kan delen door 5 maak er software van
    }
   
    elseif($i % 9 == 0){
        echo "Developer" . "<br>";;
        //als het getal kan delen door 9 maak er dan developer van
    }
   
    else{
        echo $i .  "<br>";
        // laat de cijfer zien

    }

    
}

?>