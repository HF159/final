<?php

    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://leagueoflegendsstefan-skliarovv1.p.rapidapi.com/getChampions",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "region=%3CREQUIRED%3E",
        CURLOPT_HTTPHEADER => [
            "X-RapidAPI-Host: LeagueOfLegendsstefan-skliarovV1.p.rapidapi.com",
            "X-RapidAPI-Key: 3d59721312msh8a88df6546addeep1f33b8jsnaa4a83d7725a",
            "content-type: application/x-www-form-urlencoded"
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        echo $response;
    }
?>