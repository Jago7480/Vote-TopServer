<?php
    $server_token = 'IYTIE1QABS'; // Renseignez la token de votre serveur présente sur votre fiche Top-Serveurs
    $response = @file_get_contents("https://api.top-serveurs.net/v1/servers/$server_token/players-ranking?type=lastMonth");
    $json = json_decode($response);
    if (!$json || $json->code !== 200) {
        echo 'Erreur lors la récupération des données';
        die;
    }
    
    print_r($json->players);