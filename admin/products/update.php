<?php 
    if (isset($_REQUEST['submit'])) {  
        if ($_SERVER["REQUEST_METHOD"] == "POST") {  
            // Attempt insert query execution
            $name = $_REQUEST['name'];
            $price = $_REQUEST['price'];
            $category = $_REQUEST["category"];
            $admin_id = $_REQUEST['admin_id'];
            
            // If upload button is clicked ...
            $filename  = $_FILES["img"]["name"];
            $tempname = $_FILES["img"]["tmp_name"];   
            $folder = "../assets/img/products/".$filename ;
                
            if (move_uploaded_file($tempname, $folder))  {
                $msg = "Image uploaded successfully";
            }else{
                $msg = "Failed to upload image";
            }
            
            // check if e-mail address is well-formed
            $updated = "UPDATE products SET name='$name', img='$folder', price='$price', category='$category', admin_id='$admin_id' WHERE id='$_GET[id]'";
            
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