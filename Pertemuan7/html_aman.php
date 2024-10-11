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
?>
