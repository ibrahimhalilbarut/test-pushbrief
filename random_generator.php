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

?>
