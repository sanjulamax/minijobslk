
<?php 

    include "index.html" ;


    if(isset($_POST["conform"])) {

        if(!empty($_POST["username"]) && !empty($_POST["password"])) {

           $username = $_POST["username"] ;
           $password = $_POST["password"] ;

          

           $db_name = "if0_35581740_logpannel";
           $db_server = "sql105.infinityfree.com" ;
           $db_password = "bcPOade6kFdZli";
           $db_user = "if0_35581740" ;

           $conn = mysqli_connect($db_server , $db_user , $db_password , $db_name) ;

           if($conn){

            echo "DATABASE BINDING SUCCSESSFULLY DONE !<br><br>" ;

            $query = mysqli_query($conn , "SELECT password FROM loging_creadits WHERE username = '$username' ") ;

            $logpsw = mysqli_fetch_assoc($query) ;

            

            if($logpsw == null) {

                


                echo  "<div class='alert alert-primary' role='alert' mt--5>
                USERNAME OR PASSWORD INCORRECT ! 
              </div>"  ;
                 

            }
            

            else {

                $psw = $logpsw["password"] ;

                if($psw == $password) {

                    echo  "<div class='alert alert-primary' role='alert' mt--5>
                    YOU ARE LOGGED IN SUCCESSFYLLY ! 
                  </div>" 
             ;
;
    
                }

                else {

                    echo  "<div class='alert alert-primary' role='alert' mt--5>
                    USERNAME OR PASSWORD INCORRECT ! 
                  </div>"  ;
                    
                }

                

            }



           }

           else {

            echo "ENCONTERED AN ERRO WHILE CONNECTING TO DATABASE ! " ;

           }



        }

        else {

            echo "USERNAME AND PASSWORD MUST FILL" ;
        }
    }

?>

