<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

$connection = mysqli_connect($servername, $username, $password, $dbname);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["login_btn"])) {
    $username = $_POST["text"]; // Change "text" to the actual name attribute of the email input
    $password = $_POST["password"];

    if (!empty($username) && !empty($password)) {
        $query = "SELECT * FROM tbl_user WHERE username = '$username' AND password_hash = '$password'";
        $result = mysqli_query($connection, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
            $branch = $user["branch"];
    

            switch ($branch) {
                case 'lipa-branch':
                    header('Location: lipa_dashboard.php');
                    break;
                case 'tanauan-branch':
                    header('Location: tanauan_dashboard.php');
                    break;
                case 'nasugbu-branch':
                    header('Location: nasugbu_dashboard.php');
                    break;
                case 'batangas-branch':
                    header('Location: batangas_dashboard.php');
                    break;
                default:
                    header('Location: admin_dashboard.php');
                    break;
                }
            } else {
                $_SESSION['status'] = "Invalid email or password!";
                header("Location: login.php");
                exit(0);
            }
        }
    }
?>



// if(isset($_POST['login_btn']))
// {
//     if(!empty(trim($_POST['email'])) && !empty(trim($_POST['email'])))
//     {
//         $email = mysqli_real_escape_string($con, $_POST['email']);
//         $password = mysqli_real_escape_string($con, $_POST['password']);

//         $login_query = "SELECT * FROM tbl_user WHERE email = '$email' AND password = '$password' LIMIT 1";
//         $login_query_run = mysqli_query($con, $login_query);

//         if(mysqli_num_rows($login_query_run) > 0)
//         {
//             $row = mysqli_fetch_array($login_query_run);
           
//             if($row['verify_status'] == "1")
//             {
//                 $_SESSION['authenticated'] = TRUE;
//                 $_SESSION['auth_user'] = [
//                     'username' => $row['username'],
//                     'email' => $row['email']
//                 ];
//                 $_SESSION['status'] = "Logged in successfully!";
//                 header("Location: branches.php");
//                 exit(0);

//             }
//             else
//             {
//                 $_SESSION['status'] = "Verify your email address first! Please check your email.";
//                 header("Location: login.php");
//                 exit(0);
//             }

//         }
//         else
//         {
//             $_SESSION['status'] = "Invalid email or password!";
//             header("Location: login.php");
//             exit(0);
//         }

//     }
//     else
//     {
//         $_SESSION['status'] = "Field should not be empty!";
//         header("Location: login.php");
//         exit(0);
//     }
// }

