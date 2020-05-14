

<?php
include "db_povezivanje.php";

class class_user {

    public $db;

    public function __construct() {
        $this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        if (mysqli_connect_errno()) {
           //header("location:index.php");
            echo "Error: Could not connect to database.";
            exit;
        } else {
            echo "conneection established";
        }
    }

    /*     * * for registration process ** */

    public function reg_user($username, $password) {
        $password = md5($password);
        $sql = "SELECT * FROM user WHERE username='$username'";
        //checking if the username available in db
        $check = $this->db->query($sql);
        $count_row = $check->num_rows;
        //if the username is not in db then insert to the table
        if ($count_row == 0) {
            $sql1 = "INSERT INTO user SET username='$username', password='$password'";
            $result = mysqli_query($this->db, $sql1) or die(mysqli_connect_errno() . "Data cannot inserted");
            return $result;
        } else {
            return false;
        }
    }

    /*     * * for login process ** */

    public function check_login($username, $password) {
        $password = md5($password);
        $sql2 = "SELECT id from user WHERE username='$username' and password='$password'";
        //checking if the username is available in the table
        $result = mysqli_query($this->db, $sql2);
        $user_data = mysqli_fetch_array($result);
        $count_row = $result->num_rows;
        if ($count_row == 1) {
            // this login var will use for the session thing
            $_SESSION['login'] = true;
            $_SESSION['id'] = $user_data['id'];
            return true;
        } else {
            return false;
        }
    }

    /*     * * for showing the username ** */
     public function get_username($uid){
         header("location:firme.php");
      $sql3="SELECT username FROM user WHERE id = $uid";
      $result = mysqli_query($this->db,$sql3);
      $user_data = mysqli_fetch_array($result);
      echo $user_data['username'];
      }
     



    /*     * * starting the session ** */

    public function get_session() {
        return $_SESSION['login'];
    }

    public function user_logout() {
        $_SESSION['login'] = FALSE;
        session_destroy();
    }

}
