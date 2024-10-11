<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['input'])) {
        $input = $_POST['input'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    } else {
        echo "Input tidak boleh kosong.";
    }
} else {
    echo "Request tidak valid.";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email : ". $email;
    } else {
        echo "Format email tidak valid";
    }
} else {
    echo "Tidak ada email yang dimasukkan";
}
?>
