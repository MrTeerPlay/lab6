<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Анкета опитування</title>
</head>

<body>
    <h1>Анкета опитування</h1>
    <form action="submit.php" method="POST">
        <label for="name">Ім'я:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="question1">Ваше улюблене хобі:</label><br>
        <textarea id="question1" name="question1" required></textarea><br><br>

        <label for="question2">Який ваш улюблений колір?</label><br>
        <input type="text" id="question2" name="question2" required><br><br>

        <label for="question3">Які фрукти ви любите? (виберіть кілька)</label><br>
        <select id="question3" name="question3[]" multiple>
            <option value="apple">Яблуко</option>
            <option value="banana">Банан</option>
            <option value="orange">Апельсин</option>
            <option value="grape">Виноград</option>
        </select><br><br>

        <input type="submit" value="Відправити">
    </form>
</body>

</html>