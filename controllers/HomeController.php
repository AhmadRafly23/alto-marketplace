<?php
class HomeController
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function index()
    {
        // Mengatur judul halaman
        $title = "Home Page";

        // Mengatur konten view yang akan dimuat
        $content = 'views/home.php';

        // Ambil produk dari database
        $queryProducts = "SELECT id, name, description, price, image FROM product";
        $products = $this->conn->query($queryProducts);

        $totalItemsInCart = 0;

        $userId = $_SESSION['user_id'];
        $queryCart = "SELECT SUM(quantity) as total_items FROM carts WHERE user_id = ?";
        $stmt = $this->conn->prepare($queryCart);
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $resultCart = $stmt->get_result();
        $rowCart = $resultCart->fetch_assoc();
        $totalItemsInCart = $rowCart['total_items'] ? $rowCart['total_items'] : 0;

        $stmt->close();
        $this->conn->close();

        // Menggunakan layout utama
        require_once 'views/layouts/main.php';
    }
}