
<?php
    include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            border: 3px solid #f1f1f1;
            width: 50%;
            margin: auto;
            padding: 20px;
            background-color: #f3f3f3;
        }
        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        input[type=submit]:hover {
            opacity: 0.5;
        }
        h1 {
            text-align: center;
        }
        body {
            background-color: #bfbfbf;
        }
        label {
            font-size: 20px;
        }
        
    </style>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h1>Welcome to Fakebook</h1>
        <label for="username">Username:</label> <br>
        <input type="text" id="username" name="username" placeholder="Enter Username"><br><br> 
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" placeholder="Enter Password"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = filter_input(INPUT_POST, "username" , FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password" , FILTER_SANITIZE_SPECIAL_CHARS);

    if (empty($username)){
        echo "Username is missing";
    } elseif (empty($password)){
        echo "Password is missing";
    } else {
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $sql = " INSERT INTO users (user, password) 
                        VALUES ('$username', '$hash') ";
        try {
            mysqli_query($conn, $sql);
            echo "registration  successful";
        } catch (mysqli_sql_exception $e) {
            echo "That username is taken";
        }
    }

    mysqli_close($conn);
}
?>
