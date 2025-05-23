
<?php
include('components.php')
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ფეხსაცმელი</title>
    <link rel="shortcut icon" href="./assets/shoes.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <link href="https://fonts.cdnfonts.com/css/noto-serif-georgian" rel="stylesheet">
</head>
<body>
    
<header>
<?php
icons($icons);
?>

    </header>






    <footer>


<?php
lastsection($navigations,$helps,$categories);
last($rules,$logos);
?>


</footer>
</body>
</html>