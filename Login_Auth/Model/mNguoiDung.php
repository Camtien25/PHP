<?php 
    session_start();
    class User{
        public function Register($email,$password,$repassword){
            if ($password != $repassword) {
                $_SESSION['message'] = "Mật khẩu không trùng khớp";
                header('Location: index.php?page=registerview');
            } else {
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                $_SESSION['message'] = "Đăng ký thành công";
                $_SESSION['register'] = true;
                header('Location: index.php');
            }
        }

        public function Login($email,$password){
            if($email == $_SESSION['email'] && $password == $_SESSION['password']){
                $_SESSION['login'] = true;
                $_SESSION['message'] = "Đăng nhập thành công";
                header('Location: index.php');
                return true;
            } else {
                $_SESSION['message'] = "Sai tên đăng nhập hoặc mật khẩu";
                header('Location: index.php?page=loginview');
            }
        }

        public function Upload($file) {
            $file_name = $file['name'];
            $file_tmp = $file['tmp_name'];
            $file_type = $file['type'];

            if ($file_type != "image/jpeg") {
                $_SESSION['message'] = "Ảnh chỉ nhận JPEG";   
            } else {
                $filetemp_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
                $file_name = "TranLeKiet_" . rand(1000,9999) . "." . $filetemp_ext;
                move_uploaded_file($file_tmp, "Image/" . $file_name);
                $_SESSION['file'] = $file_name;
                $_SESSION['message'] = "Upload ảnh thành công";
            }
            header("Location: index.php?page=uploadview");
            exit();
        }
        
    }
?>