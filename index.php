<?php
require 'config/db_connection.php';

session_start();
 
// Tangkap URL
$url = isset($_GET['url']) ? $_GET['url'] : '/';

// Hapus tanda '/' di awal dan akhir URL
$url = trim($url, '/');

// Pisahkan URL menjadi array berdasarkan '/'
$urlSegments = explode('/', $url);

// Tentukan controller dan metode berdasarkan segmen URL
$controllerName = !empty($urlSegments[0]) ? ucfirst($urlSegments[0]) . 'Controller' : 'HomeController';
$methodName = isset($urlSegments[1]) ? $urlSegments[1] : 'index';

$authPages = ['HomeController', 'CartController'];

// Periksa apakah pengguna telah login sebelum mengakses halaman yang memerlukan otentikasi
if (in_array($controllerName, $authPages) && !isset($_SESSION['user_id'])) {
    // Jika belum login, arahkan ke halaman login
    header("Location: /marketplace/login");
    exit();
}

// Path ke controller
$controllerPath = 'controllers/' . $controllerName . '.php';

// Cek apakah file controller ada
if (file_exists($controllerPath)) {
    require_once $controllerPath;

    // Cek apakah kelas controller ada
    if (class_exists($controllerName)) {
        $controller = new $controllerName($conn);

        // Cek apakah metode ada dalam controller
        if (method_exists($controller, $methodName)) {
            $controller->{$methodName}();
        } else {
            require_once 'views/404.php';
        }
    } else {
        require_once 'views/404.php';
    }
} else {
    require_once 'views/404.php';
}

?>