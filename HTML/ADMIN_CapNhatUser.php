<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        require_once "../PHP/connect.php";

        $user = $_POST['txtUser'];
        $pass = $_POST['txtPass'];
        $name = $_POST['txtName'];
        $email = $_POST['txtEmail'];
        $role = $_POST['txtRole'];
        
        if (isset($_POST['isUpdate'])){
            $id = $_POST['isUpdate'];
            $query = "UPDATE user SET user='$user', pass='$pass', name='$name',
                email='$email', role='$role' 
                WHERE maphim='$id'";
        }
        else{
            $query = "INSERT INTO user(user, pass, name, email, role) 
            VALUES ('$user', '$pass', '$name', '$email', '$role')";
        }

        if ($connect->query($query)){
            header('Location: ADMIN_User.php');
        }
        else{
            echo "Lỗi: " . $sql . "<br/>" . $connect->error;
        }

    ?>
</body>
</html>