<?php


    include "register.html" ;

    if(isset($_POST["register"])) {

        if(!empty($_POST["username"]) && !empty($_POST["password"]) ){

            $db_server = "127.0.0.1:3308" ;
            $db_name ="login";
            $db_user = "root";
            $db_password ="" ;

            $userename = $_POST["username"] ;
            $password = $_POST["password"] ; 


            $conn = mysqli_connect($db_server , $db_name , $db_password , $db_name) ;

            if($conn) {

                $query = "INSERT INTO loging_creadits (username , password) VALUES ('$userename' , '$password')" ;

                $connquery = mysqli_query($conn,$query) ;

                if($connquery) {

                    echo "<script>
                            alert('REGISTRATION SUCCESS')
                            </script>" 
                     ;

                }

                else {

                    echo "REGISTRATION ERROR ! " ;

                }

                

            }

            else {

                echo "DATABASE CONNECTION FAILED ! " ;

            }


        }

        else{

            echo " YOU MUST FILL BOTH USERNAME AND PASSWORD ! "  ;

        }
    }

?>