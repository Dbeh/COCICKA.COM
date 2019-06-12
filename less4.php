<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


if(empty($_POST['tuk'])) {
    $res = 'Заполните поля и нажмите "Результат"';
} else {
     if($res = calc()){
        $o1 = floatval($_POST['operand1']);
        $o2 = floatval($_POST['operand2']);
        $or = $_POST['operator'];
    }
}

function calc(){

    $par = ['operand1', 'operand2', 'operator'];

    foreach ($par as $p) {
        if (empty($_POST[$p])) {
           return 'Не найден элемент' . $p;
        }
    }

    $o1 = floatval($_POST['operand1']);
    $o2 = floatval($_POST['operand2']);
    $or = $_POST['operator'];

    switch ($or) {
        case '+':
            $result = $o1 + $o2;
            break;
        case '-':
            $result = $o1 - $o2;
            break;
        case '*':
            $result = $o1 * $o2;
            break;
        case '/':
            $result = $o1 / $o2;
            break;
        default:
            $result = 'Неверный оператор:' . $or;
    }

    return $result;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Урок 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<ul class="nav">
    <li><a href="index.html">Главная</a></li> |
    <li><a href="table.html">Табличка</a></li> |
    <li><a href="form.html">Форма</a></li> |
    <li><a href="php.php">ПЫХА</a></li> |
</ul>
<form method="post">
    <label for="q">Операнд1</label>
    <input id="q" name="operand1" value="<?php echo empty($_POST['operand1'])?'':floatval($_POST['operand1'])?>" placeholder="операнд1">
<select name="operator">
    <option value="+" <?php echo empty($_POST['operator'])== '+'?'selected':'';?>>+</option>
    <option value="-" <?php echo empty($_POST['operator'])== '-'?'selected':'';?>>-</option>
    <option value="*" <?php echo empty($_POST['operator'])== '*'?'selected':'';?>>*</option>
    <option value="/" <?php echo empty($_POST['operator'])== '/'?'selected':'';?>>/</option>
</select>
   <label for="q">Операнд2</label>
    <input id="q" name="operand2"  value="<?php echo empty($_POST['operand2'])?'':floatval($_POST['operand2'])?>" placeholder="операнд1">
    <input type="submit" name="tuk" value="Результат"></input>

</form>

<?php echo isset($res)?'<p class="result">'.$res.'</p>':'';?>
</body>
</html>