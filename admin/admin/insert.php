<?php
    if (isset($_REQUEST['submit'])) {  
        if ($_SERVER["REQUEST_METHOD"] == "POST") {  
            // Attempt insert query execution
            $name = $_REQUEST['name'];
            $mobile = $_REQUEST['mobile'];
            $email = $_REQUEST["email"];
            $password = md5($_REQUEST['password']);
            
            // check if e-mail address is well-formed
            // query email
            $data = $connection->query("SELECT email FROM admin WHERE email='$email'");
            $show = mysqli_fetch_assoc($data);
            if ($show['email'] == $email) {
                echo '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                        <strong>Email already exists!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
                return ' ';
                // return die();
            }

            $create = "INSERT INTO admin (`name`, `mobile`, `email`, `password`) VALUES ('$name', '$mobile', '$email', '$password')";
            
            if(mysqli_query($connection, $create)){
                echo '<div class="alert alert-success alert-dismissible fade show text-center " role="alert">
                        <strong>Success: Created Admin
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
            } else{
                echo '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                        <strong>Error: Please check your input!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
            }
            mysqli_close($connection);

        }  
    }

?>