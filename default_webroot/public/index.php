<!DOCTYPE html>
<html>
<head>
<title>:)</title>
<style>
    body {
        width: 35em;
        margin: 0 auto;
        font-family: Tahoma, Verdana, Arial, sans-serif;
    }
</style>
</head>
<body>
<h1><?= $_SERVER['HTTP_HOST'] ?></h1>
<h2>IP: <?= $_SERVER['REMOTE_ADDR'] ?> @ <?= $_SERVER['REMOTE_PORT'] ?> <?= $_SERVER['REMOTE_HOST'] ?></h2>
<p>UA: <?= $_SERVER['HTTP_USER_AGENT'] ?></p>
<i><?= gethostname() ?> @ <?= $_SERVER['SERVER_ADDR'] ?></i>
<?php
$a = $_SERVER['REMOTE_ADDR'];
?>
<pre><?= shell_exec("whois $a") ?></pre>
</body>
</html>

