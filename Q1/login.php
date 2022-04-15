<html>
<head><title>Login</title></head>
<body>
    <?php
    if ($_POST["username"] == "ali" && $_POST["password"] == "k181268") { 
    session_start();
    $_SESSION["Login"] = "YES";
    echo "<h1>Now Logged In</hl>";
    echo "<p><a href='document.php'>Link to protected file</a><p/>"; 
    } else {
    session_start();
    $_SESSION["Login"] = "NO";
    echo "<h1>Not Logged In</hl>";
    echo "<p><a href='document.php'>Link to protected file</a></p>";
    } 
    ?>
</body>
</html>