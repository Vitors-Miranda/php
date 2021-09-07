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
                <li><a href="index.php" class='links'>Home</a> </li>
                <li><a href="#" class='links'> About</a></li>
                <li><a href="#" class='links'> Credits</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div id="login_box">
            <?php
                require_once 'lib/conn.php';
                $error= false;
                if(!isset($_POST)||empty($_POST)){
                    //checking if the user entered by URL
                    $error= "Empty data!";
                }
                foreach ($_POST as $index => $value) {
                    $value= trim( strip_tags($value));
                    $$index=$value;
                    //taking data

                    if (empty($value)) {
                    $error .= "$index wasn't used, please fill it. <br>";
                    //back-end empty validation
                    }
                }
                //DATA VERIFICATIONS

                //EMAIL
                if ((!isset($email))|| !filter_var($email,FILTER_VALIDATE_EMAIL) && !$error) {
                    $error .= "Insert a valid format: User@dom.com <br>";
                }

                //telephone
                if((!isset($tel))|| !preg_match("/^[0-9]{2} [0-9]{5}-[0-9]{4}$/", $tel) && !$error) {
                    $error .= "Insert a valid format: 99 99999-9999 <br>";
                }

                if($error){
                    echo $error;
                }else{
                    //separating ddd from tel and taking - out
                    $arrayTel= explode(" ", $tel);
                    $ddd= $arrayTel[0];
                    $cell= str_replace("-","", $arrayTel[1]);
                    
                    //inserting values
                    $sql= "INSERT INTO tb_data VALUES (0, :name, :email, :ddd, :cell)";
                    $stmt= $conn -> prepare($sql);
                    //avoiding sql injection
                    $stmt -> bindParam(':name', $name);
                    $stmt -> bindParam(':email', $email);
                    $stmt -> bindParam(':ddd', $ddd);
                    $stmt -> bindParam(':cell', $cell);
                    $stmt -> execute();
                }
            ?>
        </div>
    </main>
</body>

</html>