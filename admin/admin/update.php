<?php 
    if (isset($_REQUEST['submit'])) {  
        if ($_SERVER["REQUEST_METHOD"] == "POST") {  
            // Attempt insert query execution
            $id = $_GET['id'];
            $name = $_REQUEST['name'];
            $mobile = $_REQUEST['mobile'];
            $email = $_REQUEST["email"];
            $password = md5($_REQUEST['password']);
            
            // check if e-mail address is well-formed
            // query email
            $data = $connection->query("SELECT * FROM admin WHERE id='$_GET[id]'");
            $show = mysqli_fetch_assoc($data);
            
            if ($show['email'] == $email) {
                $updated = "UPDATE admin SET name='$name', mobile='$mobile', password='$password' WHERE id='$_GET[id]'";
            }else{
                $check = $connection->query("SELECT email FROM admin WHERE email='$email'");
                $checkShow = mysqli_fetch_assoc($check);
                if ($checkShow['email'] == $email) {
                    echo '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                        <strong>Email already exists!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
                return ' ';
                }else{
                    $updated = "UPDATE admin SET name='$name', mobile='$mobile', email='$email', password='$password' WHERE id='$_GET[id]'";
                }
            }
            
            if(mysqli_query($connection, $updated)){
                echo '<div class="alert alert-success alert-dismissible fade show text-center " role="alert">
                        <strong>Success: Record updated successfully
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
            } else{
                echo '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                        <strong>Error updating record!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
            }
            
            mysqli_close($connection);

        }  
    }

?>