<?php  
// Start the session
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL;
$_id = NULL;
$error = '';
function encodeUserId($id) {
    return base64_encode($id);
}

function decodeUserId($encoded_id) {
    $decoded = base64_decode($encoded_id);
    return $decoded;
}

// Check user id
if (!empty($_GET['id'])) {
    $_id = decodeUserId($_GET['id']); 
    $user = $userModel->findUserById($_id); 
}

// Xử lý khi form được submit
if (!empty($_POST['submit'])) {
    if (!empty($_id)) {
        $result = $userModel->updateUser($_POST); // Gọi hàm updateUser

        if (isset($result['error'])) {
            $error = $result['error']; // Lưu thông báo lỗi
        } else {
            header('location: list_users.php'); // Chuyển hướng nếu thành công
            exit; // Thoát để không tiếp tục thực hiện mã phía dưới
        }
    } else {
        $userModel->insertUser($_POST);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>User form</title>
    <?php include 'views/meta.php' ?>
</head>
<body>
    <?php include 'views/header.php'?>
    <div class="container">
        <?php if ($user || !isset($_id)) { ?>
            <div class="alert alert-warning" role="alert">
                User form
            </div>
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo $_id ?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" name="name" placeholder="Name" value='<?php if (!empty($user[0]['name'])) echo $user[0]['name'] ?>'>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                
                <!-- Hiển thị thông báo lỗi nếu có -->
                <?php if (!empty($error)) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error; ?>
                    </div>
                <?php } ?>
                
                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        <?php } else { ?>
            <div class="alert alert-success" role="alert">
                User not found!
            </div>
        <?php } ?>
    </div>
</body>
</html>
