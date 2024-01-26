<?php
require_once "./client/Models/Auth.php";
class AuthController
{

    protected $auth;
    public function __construct()
    {
        $this->auth = new Auth();
    }

    public function LogIn()
    {
        if (isset($_POST["dangnhapbtn"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];
            $data = $this->auth->GetAllUser($username, $password);
            if (empty($data)) {
                echo "<script>alert('Tài khoản hoặc mật khẩu không đúng, thử lại');</script>";
                echo "<script>window.location.href='?url=login'</script>";
            } else {
                $_SESSION["username"] = $username;
                echo "<script>alert('Đăng nhập thành công !');</script>";
                echo "<script>window.location.href='?url=/';</script>";
            }
        }
    }

    public function Register()
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $rePassword = $_POST["rePassword"];
        $pattern = '/^[a-z0-9]+$/';
        if ($password !== $rePassword) {
            echo "<script>alert('Mật khẩu không khớp !')</script>";
            echo "<script>window.location.href='?url=login'</script>";
        } elseif (strlen($username) < 4 || strlen($username) > 10 || preg_match($pattern, $username) == 0) {
            echo "<script>alert('Tên tài khoản không ngắn hơn 4 kí tự và không dài quá 10 và chỉ chấp nhận kí tự a-z,0-9 !')</script>";
            echo "<script>window.location.href='?url=login'</script>";
        } else {
            $flag = $this->auth->GetUserDetails($username);
            if (empty($flag)) {
                $this->auth->InsertUser($username, $password);
                echo "<script>alert('Đăng ký thành công, hãy đăng nhập');</script>";
                echo "<script>window.location.href='?url=login'</script>";
            } else {
                echo "<script>alert('Tài khoản đã tồn tại.');</script>";
                echo "<script>window.location.href='?url=login'</script>";
            }
        }
    }

    public function LogOut()
    {
        session_destroy();
        echo "<script>alert('Bạn đã đăng xuất');</script>";
        echo "<script>window.location.href='?url=/'</script>";
    }
}
