<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_POST['copy-buf']))
{
    $buffile = fopen("buffer.txt", "w") or die("Unable to open file!");
    fwrite($buffile, $_POST['copy-buf']);
    fclose($buffile);
    $url = shell_exec('cstd buffer.txt');
    echo "<a href=\"$url\">$url</a><br>";
}
?>
<form action="index.php" method="post">
    <input type="text" name="copy-buf">
</form>
</body>
</html>
