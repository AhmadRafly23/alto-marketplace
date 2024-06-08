<?php
class CartController {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function index() {
        // Mengatur judul halaman
        $title = "Cart Page";

        // Mengatur konten view yang akan dimuat
        $content = 'views/cart.php';

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

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user_id = $_SESSION['user_id'];
            $product_id = $_POST['product_id'];
            $quantity = $_POST['quantity'];
            $cart_id = "";
            $existing_quantity = "";

            // Periksa apakah produk sudah ada di keranjang
            $stmt = $this->conn->prepare("SELECT id, quantity FROM carts WHERE user_id = ? AND product_id = ?");
            $stmt->bind_param("ii", $user_id, $product_id);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows > 0) {
                $stmt->bind_result($cart_id, $existing_quantity);
                $stmt->fetch();
                $new_quantity = $existing_quantity + $quantity;
                $stmt->close();

                // Perbarui jumlah produk di keranjang
                $stmt = $this->conn->prepare("UPDATE carts SET quantity = ? WHERE id = ?");
                $stmt->bind_param("ii", $new_quantity, $cart_id);
            } else {
                $stmt->close();
                // Tambahkan produk baru ke keranjang
                $stmt = $this->conn->prepare("INSERT INTO carts (user_id, product_id, quantity) VALUES (?, ?, ?)");
                $stmt->bind_param("iii", $user_id, $product_id, $quantity);
            }

            if ($stmt->execute()) {
                echo json_encode(['success' => true, 'message' => 'Product added to cart']);
            } else {
                echo json_encode(['success' => false, 'message' => 'Failed to add product to cart']);
            }

            $stmt->close();
            $this->conn->close();
        } else {
            echo json_encode(['success' => false, 'message' => 'Invalid request method']);
        }
    }
}
?>