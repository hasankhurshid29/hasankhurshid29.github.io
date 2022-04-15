<?php
session_start();
if ($_SESSION["Login"] != "YES") {
    header("Location: form.php");
}
?>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Protected Document</h1>
    <p>You can only see it if you are logged in.</p>
</body>
</html>