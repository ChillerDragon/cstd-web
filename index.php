<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <div class="content">
            <h1>cstd web paste service</h1>
            <span>
                Insert text into text box and click submit!<br>
                This will generate a paste and give you a unique url to it.<br>
                <br>
                THERE IS NO WAY TO DELETE THE PASTE!<br>
                AND THERE IS ALSO NO GURANTEE PASTES WILL STAY UP FOR EVER!<br>
                <br>
                on questions send me a mail at chillerdragon@gmail.com
            </span>
            <form action="index.php" method="post">
                <textarea name="copy-buf" cols="120" rows="20"></textarea>
                <br>
                <input type="submit" value="Submit">
            </form>
<?php
                if (isset($_POST['copy-buf']))
                {
                    $buffile = fopen("buffer.txt", "w") or die("Unable to open file!");
                    fwrite($buffile, $_POST['copy-buf']);
                    fclose($buffile);
                    $url = shell_exec('/usr/local/bin/cstd buffer.txt');
                    echo "<br><a href=\"$url\" target=\"_blank\">$url</a><br>";
                }
?>
        </div>
    </div>
</body>
</html>
