<?php
require('Model/DbConnection.php');
class LoginData{

    public $username;
    public $password;
    public $adminSQL;
    public $adminData;
    public $customerSQL;
    public $customerData;
    public $conn;

    public function __construct(){
        // Create an instance of ClassA
        $DbConnection_Instance = new DB_Connection();
        $this->conn= $DbConnection_Instance->conn;

        $this->username = $_REQUEST['username'];
        $this->password = $_REQUEST['password'];

        $this->adminSQL = "SELECT * FROM users WHERE username='$this->username' AND password='$this->password' AND type='a'";
        $this->adminData = mysqli_query($this->conn, $this->adminSQL);
    
        $this->customerSQL = "SELECT * FROM users WHERE username='$this->username' AND password='$this->password' AND type='c'";
        $this->customerData = mysqli_query($this->conn, $this->customerSQL);
    }


    public function MainPage(){
        if (mysqli_num_rows($this->customerData) > 0) {
            session_start();
            $_SESSION['Customer'] = "customer";
            require __DIR__ . './../View/CustomerView.php';
        } elseif (mysqli_num_rows($this->adminData) > 0) {
            session_start();
            $_SESSION['Admin'] = "admin";
            require __DIR__ . './../View/AdminView.php';
        } else {
            require __DIR__ . './../View/CustomerView.php';
        }
        // Close connection
        mysqli_close($this->conn);
    }
}

// Create an instance of the LoginData class
$LoginData_Instance = new LoginData();

// Create the table
$LoginData_Instance->MainPage();