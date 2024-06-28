<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");

$path = "https://playercave.000webhostapp.com/assets/";

$games = [
    [
        "id" => 1,
        "nome" => "Time Sprint",
        "descricao" => "<p>Em Time Sprint, os jogadores mergulham em uma emocionante corrida contra o tempo
                           em um mundo futurista cheio de desafios tecnológicos. Assuma o papel de um corredor
                           intrépido em busca de atravessar uma cidade distópica cheia de obstáculos cibernéticos.
                           Com um design simples e envolvente, o jogo oferece uma experiência viciante e memorável,
                           perfeita para quem busca diversão em meio a tecnologia.</p>",
        "poster" => "{$path}postertimesprint.png",
        "banner" => "{$path}bannertimesprint.png",
        "fotosjogo1" => "{$path}printtm1.jpg",
        "fotosjogo2" => "{$path}printtm2.jpg"
    ],

    [
        "id" => 2,
        "nome" => "Escape From Space",
        "descricao" => "<p>Esse jogo vai demandar de suas habilidades e reflexos para conseguir sobreviver nessa atmosfera!
                           Controlando seu foguete, desviando de obstáculos e ganhando armamento para enfrentá-los, você só 
                           pode e deve contar com suas habilidades. Prepare-se, piloto!</p>",
        "poster" => "{$path}posterescapefromspace.png",
        "banner" => "{$path}bannerescapefromspace.png",
        "fotosjogo1" => "{$path}printefs1.png",
        "fotosjogo2" => "{$path}printefs2.png"
    ],

    [
        "id" => 3,
        "nome" => "Wild West",
        "descricao" => "<p></p>",
        "poster" => "{$path}posterwildwest.png",
        "banner" => "{$path}bannerwildwest.png",
        "fotosjogo1" => "{$path}bannerwildwest.jpeg",
        "fotosjogo2" => "{$path}WhatsApp Image 2024-06-11 at 19.58.54.jpeg"
    ],

    [
        "id" => 4,
        "nome" => "Birdy",
        "descricao" => "<p></p>",
        "poster" => "{$path}posterbirdy.png",
        "banner" => "{$path}bannerbirdy.png",
        "fotosjogo1" => "{$path}",
        "fotosjogo2" => "{$path}"
    ],

    [
        "id" => 5,
        "nome" => "Galactic Attack",
        "descricao" => "<p></p>",
        "poster" => "{$path}postergalacticattack.png",
        "banner" => "{$path}bannergalacticattack.png",
        "fotosjogo1" => "{$path}Foto Fase3(1).png",
        "fotosjogo2" => "{$path}Foto Fase3"
    ],

    [
        "id" => 6,
        "nome" => "Souls in the Dark",
        "descricao" => "<p></p>",
        "poster" => "{$path}postertsoulsinthedarck.png",
        "banner" => "{$path}bannersoulsinthedarck.png",
        "fotosjogo1" => "{$path}",
        "fotosjogo2" => "{$path}"
    ],

    [
        "id" => 7,
        "nome" => "Submarine Adventure",
        "descricao" => "<p></p>",
        "poster" => "{$path}postersubmarineadventure.png",
        "banner" => "{$path}bannersubmarineadventure.png",
        "fotosjogo1" => "{$path}shared-0-sheet1",
        "fotosjogo2" => "{$path}"
    ]
];

echo json_encode($games);
?>

