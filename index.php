<?php

include "KPSSoapClient.php";

header("Content-Type: text/plain");

$username = "username";
$password = "password";
$wsdl = "https://kpsbasvuru.nvi.gov.tr/Services/Wsdl.ashx?Service=BilesikKutukSorgulaKimlikNoServis&Version=2023/02/01";

$kpsClient = new KPSSoapClient($username, $password, $wsdl);

try {
    $result = $kpsClient->Sorgula(
        array(
            'kriterListesi' => array(
                'BilesikKutukSorgulaKimlikNoSorguKriteri' => array(
                    'DogumAy' 	=> "Your Month Number Of Birthday",
                    'DogumGun' 	=> "Your Day Number Of Birthday",
                    'DogumYil' 	=> "Your Year Number Of Birthday",
                    'KimlikNo' 	=> "Your Identity Number"
                )
            )
        )
    );

    echo json_encode($result);



} catch (Exception $e)
{
    print_r($e);
}