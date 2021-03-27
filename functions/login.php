<?php
    session_start();
    
    include 'connect.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $pwd = md5($password);

    $username = mysqli_real_escape_string($con,$_POST['username']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
   

    
 
        $query =mysqli_query($con,"SELECT * FROM tbl_user WHERE username = '$username' AND password = '$password' ");
        $num =  mysqli_num_rows($query);
         $time_login = date("Y-m-d h:i:s");
        $time_logout = date("Y-m-d h:i:s");
       
      
       
        $array = mysqli_fetch_array($query);
        session_start();

         $_SESSION['sess_ins_Id'] = $array['ins_Id'];
        $_SESSION['sess_mem_Id'] = $array['member_Id'];
         $_SESSION['sess_user_id'] = $array['user_Id'];
         $user_Id = $_SESSION['sess_user_id'];
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
         $_SESSION['sess_userrole'] = $array['role'];


         if( $_SESSION['sess_userrole'] == "1"){
           header('Location: ../admin/dashboard.php');
            mysql_query("INSERT INTO `tbl_user_logs`(`user_Id`,`time_login`) VALUES ('$user_Id',' $time_login')");
          }
           if( $_SESSION['sess_userrole'] == "2"){
           header('Location: ../user/reservation.php');
            mysql_query("INSERT INTO `tbl_user_logs`(`user_Id`,`time_login`) VALUES ('$user_Id',' $time_login')");
          }
         
           
            
        else{
            echo '<script language="javascript">';
            echo 'alert("Incorrect username or password")';
            echo '</script>';
            echo '<meta http-equiv="refresh" content="0;url=../pages/login.php" />';
        }
    
    
    
        


?>
