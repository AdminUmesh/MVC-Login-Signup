<?php
require('Model/DbConnection.php');
class Update_Data{

    public $Conn;
    public $id;
    public $FirstName;
    public $LastName;
    public $Email;
    public $Username;
    public $Password;
    public $Type;

    public function __construct(){
        $DB_Connection_Instance=new DB_Connection();
        $this->Conn=$DB_Connection_Instance->conn;

        $this->id = $_REQUEST['getID'];
        $this->FirstName =  $_POST['fname'];
        $this->LastName = $_POST['lname'];
        $this->Email = $_POST['email'];
        $this->Username = $_POST['username'];
        $this->Password = $_POST['password'];
        $this->Type = $_POST['type'];
    }

    public function Update_User(){
        $sql = "UPDATE users SET first_name='" . $this->FirstName . "',last_name='" . $this->LastName . "', email='" . $this->Email . "',username='" . $this->Username . "',password='" . $this->Password . "',type='" . $this->Type . "' where id='" . $this->id . "'";
    
        if (mysqli_query($this->Conn, $sql)) {
            include_once('View/LoginView.php');
        } else {
            echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
        }
    
        // Close connection
        mysqli_close($conn);
    }
}

// Create an instance of the Update_Data class
$DbConnection = new Update_Data();

// Call Delete_User method
$DbConnection->Update_User();