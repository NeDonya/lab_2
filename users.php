<?php
session_start();
$users = [
    ['login' => 'Vasisualiy', 'password' => '12345', 'lang' => 'ru'],
    ['login' => 'Afanasiy', 'password' => '54321', 'lang' => 'en'],
    ['login' => 'Petro', 'password' => 'EkUC42nzmu', 'lang' => 'ua'],
    ['login' => 'Pedrolus', 'password' => 'Cogito_ergo_sum', 'lang' => 'it'],
    ['login' => 'Sasha', 'password' => 'Ignorantia_non_excusat'],
    ['login' => '123', 'password' => '123']
];
if (empty($_POST['login']) && empty($_POST['password'])) {
    include('index.php'); ?>
    <br>
    Enter login and password
    <?php return;
}
foreach ($users as $value) {
    if ($value['login'] == $_POST['login'] && $value['password'] == $_POST['password']) {
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['lang'] = $value['lang'];
        break;
    }
}
if (isset($_SESSION['login'])) {
    if (empty($_SESSION['lang'])) {
        include('lang.php');
    } else {
        include('hello.php');
    }
} else {
    include('index.php'); ?>
    <h4 align="center">Incorrect login or password.</h4>
<?php
}?>