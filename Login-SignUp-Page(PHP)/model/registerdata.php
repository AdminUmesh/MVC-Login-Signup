<?php
require('Model/DbConnection.php');
class Register_Data{
    public $Conn;
    public $FirstName;
    public $LastName;
    public $Gender;
    public $Email;
    public $Username;
    public $Password;
    public $Type;
    
    public function __construct(){
        $DB_Connection_Instance=new DB_Connection();
        $this->Conn=$DB_Connection_Instance->conn;

        $this->FirstName =  $_REQUEST['fname'];
        $this->LastName = $_REQUEST['lname'];
        $this->Gender =  $_REQUEST['gender'];
        $this->Email = $_REQUEST['email'];
        $this->Username = $_REQUEST['username'];
        $this->Password = $_REQUEST['password'];

        if (isset($_REQUEST['type'])) {
            $this->Type = $_REQUEST['type'];
        } else {
            $this->Type = "c";
        }
    }

    public function Register_User(){
        $sql = "INSERT INTO `users`(`first_name`, `last_name`, `gender`, `email`, `username`, `password`, `type`) VALUES ('$this->FirstName','$this->LastName','$this->Gender','$this->Email','$this->Username','$this->Password','$this->Type')";
        
        if (mysqli_query($this->Conn, $sql)) {
            session_start();
            if (isset($_SESSION['Admin'])) {
                include_once('View/AdminView.php');
            } else {
                echo "registered Successfull";
                exit;
            }
        } else {
            echo "ERROR: Hush! Sorry $sql. " . mysqli_error($this->Conn);
        }

        // Close connection
        mysqli_close($conn);
    }
}

// Create an instance of the Register_Data class
$DbConnection = new Register_Data();

// Call Delete_User method
$DbConnection->Register_User();