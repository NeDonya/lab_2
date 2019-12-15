<?php session_start();
$lang = [
    'ru' => "Русский",
    'en' => "English",
    'ua' => "Ukrainian",
    'it' => "Italiano",
];
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lab2-Hello</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>
<body>
        <h2 align="center">
            <?php echo $_SESSION['login']; ?>
            , Welcome!<br><br>
            <form method="post" action="hello.php">
                <label>
                    Choose your language
                </label><br><br>
                    <select name="lang">
                        <?php foreach ($lang as $l => $type) { ?>
                            <option value="<?php echo $l ?>"><?php echo $type ?></option>
                        <?php } ?>
                    </select>
                <button type="submit">Change</button>
            </form>
        </h2>
</body>
</html>