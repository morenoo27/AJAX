<?php

    $capital = $_REQUEST["capital"];
    $interesMensual = ($_REQUEST["interes"]/100)/12;
    $meses = $_REQUEST["meses"];

    $cuota = ($capital * ($interesMensual*pow(1+$interesMensual,$meses))/(pow(1+$interesMensual,$meses)-1));

    echo $cuota;

?>