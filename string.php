<!DOCTYPE html>
<html lang="en">
<head>
    <title>STRING</title>
</head>
<body>
    <?php
    $sentence="the main of a book";
    echo strtoupper($sentence);
    echo strtolower($sentence);
    echo str_replace("book","college",$sentence);
    echo strlen($sentence);
    echo $sentence[3];
     ?>
</body>
</html>