<?php
    include "header.php";
?>   
        <br><br>
        <div class="col-md-6" style="margin:0 auto;text-align: center">

        <div class="header-container ">
            <div class="divider"></div>
            <h2>Create your candidate profile</h2>
            <p>Create your candidate profile. Let 300+ technology & product companies like Amazon, Swiggy, Dream11, Gojek and Grab compete to hire you!</p>
        </div>

        <div class="login-container form-container">
            <div class="card">
                <div class="card-body">
                    <form method="post">       
                        <div class="form-group form-group-feedback form-group-feedback-left">
                            <input type="email" name="email" placeholder="Email" autofocus="autofocus" class="form-control" autocomplete="off" required id="id_login">
                            <div class="form-control-feedback">
                                <i class="fas fa-envelope"></i>
                            </div>
                            
                        </div>

                        <div class="form-group form-group-feedback form-group-feedback-left">
                            <input type="text" name="username" placeholder="Username" autofocus="autofocus" class="form-control" autocomplete="off" required id="id_login">
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
                            <button class="btn btn-block  btn-primary" type="submit" name="submit">Create Account <i class="fas fa-arrow-right"></i></button>
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
    if(isset($_POST['submit']))//sign up code
{

   
    include 'conn.php';
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    $username = $_POST['username'];
    $sql_u = "SELECT * FROM registration WHERE email='$email'";
    $sql_e = "SELECT * FROM registration WHERE user_name='$username'";
    $res_u = mysqli_query($con, $sql_u);
    $res_e = mysqli_query($con, $sql_e);
    if (mysqli_num_rows($res_u) > 0) 
    {
      echo "<script>
              swal('Sorry!', 'Email already exsit!Kidnly use a new email or login', 'error');
                setTimeout(function() {
                   window.location.href = 'signup.php';
                }, 5000);
            </script>"; 
    }
    else if(mysqli_num_rows($res_e) > 0)
    {
     echo "<script>
          swal('Sorry!', 'Username already taken!', 'error');
            setTimeout(function() {
               window.location.href = 'signup.php';
            }, 5000);
        </script>";   
    }
    
    else
    {
        $sql="insert into registration(user_name,email,password) values('$username','$email','$password')";  
        $result=$con->query($sql);
        $last_id = mysqli_insert_id($con);
        $_SESSION['id']=$last_id;
        if($result)
        {
        

    
         
            echo "<script>
              swal('Welcome!', 'Account Created', 'success');
                setTimeout(function() {
                   window.location.href = 'index.php';
                }, 2000);
            </script>"; 
        
      }
 
         
        }
        
    }
?>