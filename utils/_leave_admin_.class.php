<?php
//  Connect database 

    define( "DB" , "bit_leave_management_system");
    require ('../../includes/_db_conn.php');

?>

<?php 


    /*
    @class "LeaveAdmin"
    @description "LeaveAdmin class incorporates all the properties and method related to LeaveAdmin"
    */

    class LeaveAdmin{
             

        /*
        @function "getTotalEmployee();"
        @description "returns Total no of Employees"
        @returns { return int} 
        */

        public static function getMasterData() {

            // SQL Query to get the count of all employees
            $sql = "SELECT * FROM " .DB. ".masterdata";


            $conn = sql_conn();
            $result =  mysqli_query( $conn , $sql);

            $rows = array();

            while( $row = mysqli_fetch_array($result) ) {
                $rows[] = $row;
            }

            return $rows ;

        }

                /*
        @function "findUser();"
        @description "returns The Details of User"
        @returns { return Array}
        */

        public static function findUser() {

            // SQL Query to get the count of all employees
            $sql = "SELECT * FROM " .DB. ".masterdata";


            $conn = sql_conn();
            $result =  mysqli_query( $conn , $sql);

            $rows = array();

            while( $row = mysqli_fetch_array($result) ) {
                $rows[] = $row;
            }

            return $rows ;

        }

        

    
    }

?>


<?php

if (isset($_POST['submit'])) {

    $leaveType = $_POST['leaveType'];
    $leaveDesc = $_POST['leaveDesc'];
    $leaveInterval = $_POST['leaveInterval'];
    $increment = $_POST['increment'];
    
    $conn = sql_conn();

    $query = "INSERT INTO masterdata(leaveType, leaveDesc, leaveInterval, increment) VALUES ('$leaveType','$leaveDesc','$leaveInterval','$increment' )";
    $result = mysqli_query($conn, $query);
    
    if ($result) {
        // header("location: ../../pages/LeaveAdmin/manageMasterData.php");
        exit(0);
    } else {
        echo "User Not Added!";
        exit(0);
    }
}



?>





