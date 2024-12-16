<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include '../cgi-bin/head.php';?>
    </head>
    <body>
        <h1>home</h1>
        <?php include '../cgi-bin/quote.php';?>
        <?php include '../cgi-bin/navbar.php';?>
        <?php
            $posts = scandir('./posts', SCANDIR_SORT_DESCENDING);
            foreach ($posts as &$value) {
                if($value !== '.' and $value !== '..') {
                    echo("<p><a href=\"posts/$value\">$value</a></p>");
                }
            }
        ?>
    </body>
</html>