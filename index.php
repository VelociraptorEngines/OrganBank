<?php

    require_once './vendor/autoload.php';
    
    use Kreait\Firebase\Factory;
    use Kreait\Firebase\ServiceAccount;
    
    $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/secret/organbank-219903-575252758dec.json');
    
    $firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    ->create();
    
    $database = $firebase->getDatabase();
    
?>
