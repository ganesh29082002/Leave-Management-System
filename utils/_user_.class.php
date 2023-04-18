<!-- Connect database -->
<?php

    define( "DB" , "bit_leave_management_system");
    require ('../includes/_db_conn.php');

?>

<!-- Declare User Class -->

<?php 


    /*
    @class "User"
    @description "User class that will define properties and methods related to user only"
    */


    class User{

        public $email ;
        public $position ;

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
            $this->$email = $email;
            $this->isValidUser($conn , $email); //calling function
        }

        /*
        @function "isValidUser"
        @description "Check Whether the user is valid or not"
        @returns { return true or false} 
        */

        public function isValidUser( $conn , $email ){

            // SQL Query to check whether user with this email exists or not
            $sql = "SELECT * FROM " .DB. ".users WHERE email = 'co.2020.baanandpara@bitwardha.ac.in' ";

            $result =  mysqli_query( $conn , $sql);
            $rows = mysqli_fetch_array($result); // Response

            if( !empty( $rows ) ){

                // set position
                $this.$name = $rows['fullName'];
                $this.$deptId = $rows['deptId'];
                $this.$userType = $rows['userType'];
                $this.$position = $rows['position'];

                return true;
                
            }
            else return false;

        }

        public function getUser(){

            $data = [ $name  , $deptId  , $userType  , $position ];
            return json_encode($data);

        }

    }


?>


