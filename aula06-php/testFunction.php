<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $mystring = 'abc';
        $findme = 'a';
        $pos = strpos($mystring, $findme);

        echo "strpos: $pos <br>";

        
        $email  = 'name@example.com';
        $domain = strstr($email, '@');
        echo "$domain <br>"; // prints @example.com

        $user = strstr($email, '@', true); // A partir do PHP 5.3.0
        echo "User: $user"; // prints name

        $str = 'abcdef';
        $tamanhoStr = strlen($str);
        echo "strlen: $tamanhoStr <br>";

        
    ?>
</body>
</html>