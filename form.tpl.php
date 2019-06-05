<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <?php if($message):?>
    <p><?= $message?></p>
    <?php endif;?>

<form method="post" action="form.php">
    <label for="first_name">Имя</label>
    <input type="text" id="first_name" name="first_name">

    <label for="last_name">Фамилия</label>
    <input type="text" id="last_name" name="last_name">

    <label for="email">Email</label>
    <input type="text" id="email" name="email">

    <label for="password">Пароль</label>
    <input type="text" id="password" name="password">

    <button type="submit">Зарегистрироваться</button>

</form>

</body>
</html>