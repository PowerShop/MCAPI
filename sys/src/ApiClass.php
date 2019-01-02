<?php

    namespace Min;

    Class MinMin
    {
        #This Class Is Example!
        public function Test($a,$b)
        {
            $c = $a + $b;
            echo "$a + $b = $c";
            return false;
        }

        public function Login($username,$password)
        {
            include('../sys/config.php');
            $sql = " SELECT * FROM `user` WHERE `username` = '$username' AND `password` = '$password'";

            $query = mysqli_query($conn,$sql);

            $count = mysqli_num_rows($query);

            if ($count == "1")
            {
                session_start();
                $_SESSION['user'] = $username;
                echo '<script type="text/javascript">
                        swal("Success","Login Success!","success");
                      </script>';
            }else{
                echo '<script type="text/javascript">
                swal("Error","Login Failed!","error");
              </script>';
            }
            return false;
        }

        public function Connect($host,$port)
        {
            include_once('../sys/config.php');


        }
    }


?>