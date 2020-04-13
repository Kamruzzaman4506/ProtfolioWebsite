<?php 
include_once 'config.php';
 if(isset($_POST['Message']))
          {
              $name=$_POST["name"];
              $email=$_POST["email"];
              $messege=$_POST["messege"];
              

              $sql = "INSERT INTO cv (name,email,messege)
              VALUES ('$name','$email', '$messege')";

              
                    if ($result = mysqli_query($con,$sql)) {
                      
                          echo "
                          <script>alert ('Message sent..');
                          window.location.href='contact.html';
                          </script>";
                        } else{
                          echo "not insert";
                        }
}

?>