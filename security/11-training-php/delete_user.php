<?php
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

if (!empty($_POST['id'])) {
    // Xóa người dùng
    $userModel->deleteUserById($_POST['id']);
}

// Chuyển hướng về danh sách người dùng
header('location: list_users.php');
?>
