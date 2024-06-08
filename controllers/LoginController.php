<?php
class LoginController
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function index()
    {
        // Mengatur judul halaman
        $title = "Login Page";

        // Mengatur konten view yang akan dimuat
        $content = 'views/login.php';

        // Menggunakan layout login
        require_once 'views/layouts/login.php';
    }

    public function save()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $id = "";
            $username = "";
            $hashed_password = "";

            $stmt = $this->conn->prepare("SELECT id, email, password FROM users WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows > 0) {
                $stmt->bind_result($id, $username, $hashed_password);
                $stmt->fetch();

                if (password_verify($password, $hashed_password)) {
                    $_SESSION['user_id'] = $id;
                    $_SESSION['email'] = $email;
                    $_SESSION['is_login'] = true;
                    header("Location: /marketplace/");
                    exit();
                } else {
                    header("Location: /marketplace/login?error=Invalid password.");
                    exit();
                }
            } else {
                header("Location: /marketplace/login?error=No user found with that username.");
                exit();
            }
            $stmt->close();
            $this->conn->close();
        }
    }
}