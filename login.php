<?php
    include "header.php";
?> 
        <br><br>
        <div class="col-md-6" style="margin:0 auto;text-align: center">

        <div class="header-container ">
            <div class="divider"></div>
            <h2>Sign in to TopHire</h2>
            <p>Don't have an account? Sign up as
                
                    <a href="signup.php">a candidate </a> or
                
                <a href="#">an employer. </a></p>
        </div>

        <div class="login-container form-container">
            <div class="card">
                <div class="card-body">
                    <form method="post">
                       
                        
                    
                        <div class="form-group form-group-feedback form-group-feedback-left">
                            <input type="email" name="email" placeholder="Email" autofocus="autofocus" icon="fas fa-envelope" class="form-control data-hj-whitelist " autocomplete="off" required id="id_login">
                            <div class="form-control-feedback">
                                <i class="fas fa-envelope"></i>
                            </div>
                            
                        </div>
        
                        <div class="form-group form-group-feedback form-group-feedback-left">
                            <input type="password" name="password" placeholder="Password" icon="fas fa-lock" class="form-control " autocomplete="off" required id="id_password">
                            <div class="form-control-feedback">
                                <i class="fas fa-lock"></i>
                            </div>
                            
                        </div>
                    

    
                        <div class="form-group">
                            <button class="btn btn-block  btn-primary" name="login" type="submit">Sign in <i class="fas fa-arrow-right"></i></button>
                        </div>
                        <div class="form-group text-center">
                            <span class="help-block "><a
                                href="#">Forgot Password?</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
        

</body>
</html>
<?php
if(isset($_POST['login'])) //login code
  {
    include 'conn.php';
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $sql="SELECT * from registration WHERE email='$email' AND password='$pass'";
    $result= mysqli_query($con, $sql);
    $num= mysqli_num_rows($result);
    $results=mysqli_fetch_assoc($result);
    $id= $results['id'];
    $email_a=$results['email'];
    $password=$results['password'];
    
      if($num==1)
      {
      
        $_SESSION['id']=$id;
        echo"<script>
               window.location.href = 'index.php';
            
        </script>";  
       
      }
    
    else {
      echo "<script>
              swal('Sorry!', 'Kindly check your details', 'error');
                setTimeout(function() {
                   window.location.href = 'login.php';
                }, 2000);
            </script>"; 
    }
  }
?>
