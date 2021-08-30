<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- css link -->
    <link rel="stylesheet" href="css/login.css">
    <!-- font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar">
            <ul>
                <li><a href="index.php"class='links'>Home</a> </li>
                <li><a href="#" class='links'> About</a></li>
                <li><a href="#" class='links'> Credits</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div id="login_box">
        <h1>Register: </h1>

        <!-- input -->
        <input type="text" name="name" id="name" placeholder= "Name" required>
        <input type="email" name="email" id="email" placeholder="E-MAIL" required>
        <input type="tel" name="tel" id="tel" pattern="[0-9]{2} [0-9]{5}-[0-9]{4}"
        placeholder="00 00000-0000" required>
        <!-- button -->
        <button type="submit">Enviar</button>

        <h5>Welcome! register on my site</h5>
        </div>
    </main>
</body>

</html>