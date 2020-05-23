<?php
    if (isset($_SESSION['popup'])) {

        echo $_SESSION['popup']->display();
        unset($_SESSION['popup']);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./Public/assets/css/popup.css">
    <script src="./Public/assets/js/popup.js" defer></script>

    <script src="https://kit.fontawesome.com/b18ab37082.js" crossorigin="anonymous"></script>
</head>
<body>

    <form action="" method="post">
        <input type="email" name="mailInput" id="" placeholder="Email">

        <input type="text" name="firstnameInput" id="" placeholder="prenom">
        <input type="text" name="lastnameInput" id="" placeholder="nom">


        <input type="password" name="passwordInput" id="" placeholder="pwd">
        <input type="password" name="RpasswordInput" id="" placeholder="répeter pwd">

        <button type="submit" name="submit" value="submit">
            Inscription
        </button>
    </form>
    
</body>
</html>