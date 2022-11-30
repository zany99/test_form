<?php
   
    // Database connection
    include('src.php');
    
    // Error & success messages
    global $success_msg, $email_exist, $emptyError1, $emptyError2, $emptyError3, $emptyError4, $emptyError5;
    
    if(isset($_POST["btn"])) {
        $firstname     = $_POST["firstname"];
        $lastname      = $_POST["lastname"];
        $email         = $_POST["email"];
        $phone         = $_POST["phone"];
        // verify if email exists
        $emailCheck = $connection->query( "SELECT * FROM dt WHERE email = '{$email}' ");
        $rowCount = $emailCheck->fetchColumn();
        // PHP validation
        if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($phone)){
            
            // check if user email already exist
            if($rowCount > 0) {
                $email_exist = '
                    <div class="alert alert-danger" role="alert">
                        User with email already exist!
                    </div>
                ';
            } else {
            // Password hash
            $password_hash = password_hash($password, PASSWORD_BCRYPT);
            $sql = $connection->query("INSERT INTO dt (firstname, lastname, email, phone) 
            VALUES ('{$firstname}','{$lastname}','{$email}','{$phone}')");
            
                if(!$sql){
                    die("MySQL query failed!" . mysqli_error($connection));
                } else {
                    $success_msg = '<div class="alert alert-success">
                        User registered successfully!
                </div>';
                }
            }
        } else {
            if(empty($firstname)){
                $emptyError1 = '<div class="alert alert-danger">
                    First name is required.
                </div>';
            }
            if(empty($lastname)){
                $emptyError2 = '<div class="alert alert-danger">
                    Last name is required.
                </div>';
            }
            if(empty($email)){
                $emptyError3 = '<div class="alert alert-danger">
                    Email is required.
                </div>';
            }
            if(empty($phone)){
                $emptyError4 = '<div class="alert alert-danger">
                    Phone is required.
                </div>';
            }     
        }
    }
?>