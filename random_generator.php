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

// Kullanıcı giriş senaryosu
$users = [
    'admin' => ['password' => 'admin123', 'last_login' => null],
    'user1' => ['password' => 'test123', 'last_login' => null]
];

$maxLoginAttempts = 3;
$loginAttempt = 0;

// Örnek giriş senaryosu
$username = 'admin';
$password = 'admin123';

echo "\n\n=== Kullanıcı Giriş Senaryosu ===\n";

while ($loginAttempt < $maxLoginAttempts) {
    if (isset($users[$username]) && $users[$username]['password'] === $password) {
        $users[$username]['last_login'] = date('Y-m-d H:i:s');
        echo "Giriş başarılı! Hoş geldiniz {$username}\n";
        echo "Son giriş zamanı: " . $users[$username]['last_login'];
        break;
    } else {
        $loginAttempt++;
        echo "Hatalı giriş denemesi #{$loginAttempt}\n";
        
        if ($loginAttempt == $maxLoginAttempts) {
            echo "Hesap kilitlendi. Lütfen daha sonra tekrar deneyiniz.";
        }
    }
}

?>
