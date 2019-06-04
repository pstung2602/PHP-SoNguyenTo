<?php
function checkNumber($n){
    for($i=2;$i<$n;$i++){
        if($n%$i==0){
            return false;
        }
    }
    return true;
}
for ($i=2;$i<100;$i++){
    if (checkNumber($i)){
        echo $i . ",";
    }
}

?>
