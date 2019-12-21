<?php session_start();
if ($_SESSION['name'] !== null) {
    header("Location: hello.php");
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>
<body>
<br>
    <form align="center" method="post" action="users.php">
        <label>Username</label>
        <input type="text" name="login" required>
        <br><br>
        <label>Password</label>
        <input type="password" name="password" required>
        <br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>