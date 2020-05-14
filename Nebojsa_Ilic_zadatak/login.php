<?phps
session_start();
    include_once 'class_user.php';
    $user = new class_user();
    if (isset($_REQUEST['submit'])) {
        extract($_REQUEST);
        $login = $user->check_login($username, $password);
        if ($login) {
            // Registration Success
           header("location:index.php");
           echo "Welcome";
        } else {
            // Registration Failed
            echo "Wrong username or password";
        }
    }


