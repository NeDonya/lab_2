<?php session_start();

if ($_SESSION['name'] == null) {
    header("Location:/index.php");
}
$vocab = [
    'ru' => ['Main' => "Главное меню", 'Hello' => "Здравствуйте!", 'button1' => "Изменить", 'button2' => "Выйти"],
    'en' => ['Main' => "Main menu", 'Hello' => "Hello!", 'button1' => "Change", 'button2' => "Logout"],
    'ua' => ['Main' => "Головне меню", 'Hello' => "Вітаємо!", 'button1' => "Змінити", 'button2' => "Вийти"],
    'it' => ['Main' => "Menu principale", 'Hello' => "Benvenuti!", 'button1' => "Emendare", 'button2' => "Esci"],
];
if (isset($_POST['lang'])) {
    $_SESSION['lang'] = $_POST['lang'];
}
function translate($lang, $vocab)
{
    return $vocab[$_SESSION['lang']][$lang];
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo translate('Hello', $vocab);?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>
<body>
<br>
    <table align="center">
        <td>
            <form method="post" action="hello.php">
                <b><font size="5">
                <?php echo translate('Main', $vocab);?>
                </font></b>
                <select name="lang">
                    <?php foreach ($vocab as $lang => $type) { ?>
                        <option value="<?php echo $lang ?>" <? if ($lang == $_SESSION['lang']) {
                            echo 'selected';
                        } ?>><?php echo $lang ?></option>
                        <?php } ?>
                </select>
                <button type="submit"><?php echo translate('button1', $vocab); ?></button>
            </form>
        </td>
        <td>
            <form action="logout.php">
                <button type="submit"><?php echo translate('button2', $vocab); ?></button>
            </form>
        </td>
    </table>
        <h1 align="center">
            <?php echo $_SESSION['login'];?>, <?php echo translate('Hello', $vocab);?>
        </h1>
</body>
</html>