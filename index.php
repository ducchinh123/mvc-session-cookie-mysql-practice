<?php
ob_start();
session_start();
require_once './config/db.php';
require_once './config/global.php';
require_once './config/masterFunct.php';

if (isset($_COOKIE['info_user']) && !isset($_SESSION['info_user'])) {
    $cookie_user = json_decode($_COOKIE['info_user'], true);
    $_SESSION['info_user']['username'] = $cookie_user['username'];
    $_SESSION['info_user']['password'] = $cookie_user['password'];
    $_SESSION['info_user']['email'] = $cookie_user['email'];
}
require_once './components/header.php';

?>

<?php
$mod = isset($_GET['mod']) ? $_GET['mod'] : '/';
$act = isset($_GET['act']) ? $_GET['act'] : '';
switch ($mod) {
    case '/':
        require_once './modules/home/controllers/indexHome.php';
        index_home();
        break;

    case 'products':
        require_once './modules/product/controllers/productController.php';
        if ($act) {
            $act();
        }
        break;

    case 'auth':
        require_once './modules/auth/controllers/authController.php';
        if ($act) {
            $act();
        }


    default:
        break;
}


// $request = home&indexHome 
?>
<?php
require_once './components/footer.php';
?>