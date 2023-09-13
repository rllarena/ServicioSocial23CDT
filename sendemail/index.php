<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>SEND EMAIL</title>



    <style>
        .button {
            border: none;
            color: green;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        </style>

</head>
<body>

<form class="" action="send.php" method="post">
    Email <input type="email" name="email" value=""> <br>
    Subject <input type="text" name="subject" value=""> <br>
    Message <input type="text" name="message" value=""> <br>
    <button type="submit" name="send">Enviar</button>
</form>

</body>
</html>
