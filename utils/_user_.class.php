<?php
//  Connect database 

    define( "DB" , "bit_leave_management_system");
    require ('../includes/_db_conn.php');

?>


<?php 

//  Declare User Class 

    /*
    @class "User"
    @description "User class that will define properties and methods related to user only"
    */


    class User{

        public $name  ;
        public $deptId  ;
        public $userType  ;
        public $position  ;
        public $email  ;

        /*
        @function "__contruct"
        @description "Contructor 
                        --> Establish connection with database
                        --> set's object's email
                        --> check's user is valid or not"
        */

        public function __construct( $email )
        {
            $conn = sql_conn(); //get connection from database
            $this->email = $email;

            if( $this->isValidUser($conn , $email) ){ //Check's if User is valid or not


                //Starting the Session
                session_start();

                //Defining the values in sessions so that it can be used throughout the project
                $_SESSION['fullname'] = $this->name;
                $_SESSION['deptId'] = $this->deptId;
                $_SESSION['userType'] = $this->userType;
                $_SESSION['position'] = $this->position;

            }
             
        }

        /*
        @function "isValidUser"
        @description "Check Whether the user is valid or not"
        @returns { return true or false} 
        */

        public function isValidUser( $conn , $email ){

            // SQL Query to check whether user with this email exists or not
            $sql = "SELECT * FROM " .DB. ".users WHERE email = '".$email. "'";

            $result =  mysqli_query( $conn , $sql);
            $rows = mysqli_fetch_array($result); // Response


            if( !empty( $rows ) ){

                // set position
                 $this->name = $rows['fullname'];
                 $this->deptId = $rows['deptId'];
                 $this->userType = $rows['userType'];
                 $this->position = $rows['position'];

                return true;
                
            }
            else return false;

        }


    }


?>


<?php  
//Runs the Function to validate and store user information

    function setUser(){

        try{

            // email from POST request
            $email = $_POST['email'];

            // creating a new obj of user
            $newUser = new User($email);
            echo json_encode($newUser);

        }catch(Exception $err){
            return $err;
        }

    }

?>

<?php 

    return setUser();

?>