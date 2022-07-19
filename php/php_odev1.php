<?php
function ucgen($satir){
    $result = "" ;
    for($i = 1 ; $i <= $satir ; $i++){
        for($j = 0 ; $j < $i ; $j++){
            $result.="0 " ;
        }
        $result.="<br/>" ;
    }
    return $result ;
}

echo ucgen(15) ;

?>