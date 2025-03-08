<?php

function generateRandomText($length = 10) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $text = '';
    for ($i = 0; $i < $length; $i++) {
        $text .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $text;
}

$randomNumber = rand(1, 100);
$randomText = generateRandomText();

echo "Rastgele Sayı: " . $randomNumber . "\n";
echo "Rastgele Metin: " . $randomText . "\n";

// Rastgele bir renk seçelim
$colors = ['kırmızı', 'mavi', 'yeşil', 'sarı', 'mor'];
$randomColor = $colors[array_rand($colors)];
echo "Rastgele Renk: " . $randomColor;

// Rastgele şehir seçimi için dizi
$cities = ['İstanbul', 'Ankara', 'İzmir', 'Bursa', 'Antalya', 'Eskişehir', 'Trabzon'];
$randomCity = $cities[array_rand($cities)];

// Rastgele tarih üretimi
$startDate = strtotime("2020-01-01");
$endDate = strtotime("2023-12-31");
$randomTimestamp = mt_rand($startDate, $endDate);
$randomDate = date("Y-m-d", $randomTimestamp);

echo "\nRastgele Şehir: " . $randomCity;
echo "\nRastgele Tarih: " . $randomDate;

?>
