<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asesoris Pinky</title>
</head>
<body>
    <?php
    if(isset($_GET['error'])){
        echo $_GET['error'];
    }
    ?>
        <h1>Asesoris Pinky</h1>
        <form action="proses_login.php" method="post">
            <div class="user">
                username :
                <input type="text" name="username">
            </div>
            <div class="pas">
                password :
                <input type="password" name="password">
            </div>
            <div class="log">
                <input type="submit" name="login" value="login">
            </div>
        </form>
</body>
</html>