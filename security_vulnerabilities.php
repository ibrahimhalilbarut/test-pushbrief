<?php

// 1. SQL Injection Açığı Örneği
function unsafeQuery($username) {
    $query = "SELECT * FROM users WHERE username = '$username'";
    echo "Güvensiz sorgu: " . $query . "\n";
    // Saldırgan input: admin' OR '1'='1
}

// Güvenli versiyonu
function safeQuery($username) {
    $safeUsername = mysqli_real_escape_string($conn, $username);
    $query = "SELECT * FROM users WHERE username = ?";
    echo "Güvenli sorgu (Prepared Statement kullanımı)\n";
}

// 2. XSS Açığı Örneği
function unsafeOutput($userInput) {
    echo "Güvensiz çıktı: " . $userInput . "\n";
    // Saldırgan input: <script>alert('Hacklendi!')</script>
}

function safeOutput($userInput) {
    echo "Güvenli çıktı: " . htmlspecialchars($userInput, ENT_QUOTES, 'UTF-8') . "\n";
}

// 3. Güvensiz Şifre Depolama
function unsafePasswordStorage($password) {
    $hashedPassword = md5($password); // MD5 güvensizdir!
    echo "Güvensiz hash: " . $hashedPassword . "\n";
}

function safePasswordStorage($password) {
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    echo "Güvenli hash: " . $hashedPassword . "\n";
}

// Örneklerin kullanımı
echo "=== Güvenlik Açıkları Örnekleri ===\n\n";

// SQL Injection Test
unsafeQuery("admin' OR '1'='1");

// XSS Test
unsafeOutput("<script>alert('Hacklendi!')</script>");
safeOutput("<script>alert('Hacklendi!')</script>");

// Şifre Güvenliği Test
$password = "123456";
unsafePasswordStorage($password);
safePasswordStorage($password);

// Güvenlik Önerileri
echo "\n=== Güvenlik Önerileri ===\n";
echo "1. Her zaman prepared statements kullanın\n";
echo "2. Kullanıcı girdilerini htmlspecialchars() ile temizleyin\n";
echo "3. Şifreleri password_hash() ile hashleyin\n";
echo "4. HTTPS kullanın\n";
echo "5. CSP (Content Security Policy) uygulayın\n";
?>
