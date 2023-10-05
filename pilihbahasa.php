<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Bahasa</title>
</head>

<body>
<?php
if(isset($_POST['bahasa'])){

    setcookie("lenguage", $_POST['bahasa'], time() + (86400 * 30));
    require("lang-".$_POST['bahasa'].".php");
}
else{
    if(isset($_COOKIE['language'])){
        require("lang-".$_COOKIE['language'].".php");
    }
    else{
        // default language id (Indonesia)
        setcookie("language","id", time() + (86400*30));
        require("lang-id.php");
    }
}
echo  "<h1>$judul</h1>";
?>


    Pilih Bahasa Yang Anda Inginkan
    <form action="" method="post">
        <label for="lang">Language</label> <br> <br>
        <select name="bahasa">
            <option value="en">English</option>
            <option value="id">Indonesia</option>
        </select>
        <br>
        <br>
        <button type="submit"> Pilih Bahasa</button>

    </form>


</body>

</html>