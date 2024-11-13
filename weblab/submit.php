<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $question1 = htmlspecialchars($_POST['question1']);
    $question2 = htmlspecialchars($_POST['question2']);
    $question3 = isset($_POST['question3']) ? $_POST['question3'] : [];

    // Форматування дати та часу
    $timestamp = date("Y-m-d_H-i-s");

    // Створення текстового файлу
    $filename = "survey/survey_$timestamp.txt";
    $content = "Ім'я: $name\n Email: $email\n Хобі: $question1\n Улюблений колір: $question2\n Улюблені фрукти: " . implode(", ", $question3) . "\n Дата та час заповнення: $timestamp\n";
    
    // Перевірка наявності папки та створення, якщо її немає
    if (!file_exists('survey')) {
        mkdir('survey', 0777, true);
    }

    file_put_contents($filename, $content);

    echo "<h1>Дякуємо за вашу відповідь!</h1>";
    echo "<p>Дата та час заповнення: $timestamp</p>";
}
?>