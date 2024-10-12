<?php
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

// Kiểm tra token CSRF
if (!empty($_POST['csrf_token']) && hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
    // Kiểm tra nếu có ID của người dùng cần xóa
    if (!empty($_POST['id'])) {
        // Xóa người dùng
        $userModel->deleteUserById($_POST['id']);
    }

    // Xóa token sau khi sử dụng để tránh tấn công reuse
    unset($_SESSION['csrf_token']);
} else {
    // Nếu token không hợp lệ, đưa ra thông báo lỗi hoặc chuyển hướng
    die('Invalid CSRF token');
}

// Chuyển hướng về danh sách người dùng
header('location: list_users.php');
exit;
?>
