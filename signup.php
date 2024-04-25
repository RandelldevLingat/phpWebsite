<?php
    include("connection.php");
    if(isset($_POST["signup-btn"])){
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $cpassword = $_POST["confirm-password"];

        // THIS PART IS FOR THE USERNAME 

        //  this checks wheather the name and email is already in the database
        // the signup is the table name in the database 
        $sql = "select * from signup where username = '$username'";

        // THIS FETCH or "GETS"THE NUMBER OF ROW PRESENT IN THE DATABASE 
        // AND STORE IT IN A VARIABLE NAMED $result
        $result = mysqli_query($conn, $sql);
        // THIS COUNTS THE NUMBER OF ROWS BY STORING IT IN $count_user 
        $count_user = mysqli_num_rows($result);


        // THIS PART IS FOR THE EMAIL OF THE USER 
        $sql = "select * from signup where email = '$email'";
        $result = mysqli_query($conn,$sql);
        $count_email = mysqli_num_rows($result);

        if($count_user == 0 && $count_email == 0){
            if($password == $cpassword){
                // THIS "hash" KEYWORD IS USE TO MAKE THE PASSWORD SAFE AND ENCRIPT THE
                // PASSWORDS
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO signup(username, email, password) VALUES('$username','$email','$hash')";
                $result = mysqli_query($conn,$sql);
                if($result){
                    header("Location: welcome.php");
                }
            }
        }
        // THIS PART GIVES AN ALERT MESSAGE WHEN THE USERNAME AND EMAIL ALREADY EXIST IN
        // THE DATABASE
        else{
            if($count_user > 0){
                echo "<script>
                window.location.href='index.php';
                alert('Username already exist!!');
                </script>";
            }

            if($count_email > 0){
                echo "<script>
                window.location.href='index.php';
                alert('Email already exist!!');
                </script>";
            }
        }

    }
?>