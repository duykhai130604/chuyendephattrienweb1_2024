<?php  
// Start the session
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL;
$_id = NULL;
$error = '';
$inputName = '';
$inputPassword = '';

// Chuỗi bí mật
$secretKey = 'your_secret_key';

// Hàm encodeUserId
function encodeUserId($id, $secretKey) {
    return base64_encode($id . $secretKey);
}

// Hàm decodeUserId với chuỗi bí mật
function decodeUserId($encoded_id, $secretKey) {
    if (base64_decode($encoded_id, true) === false) {
        return false; // Trả về false nếu không phải base64 hợp lệ
    }
    // Giải mã base64 và loại bỏ chuỗi bí mật
    $decoded = base64_decode($encoded_id);
    $id = str_replace($secretKey, '', $decoded);
    return $id;
}

// Kiểm tra id người dùng được truyền vào
if (!empty($_GET['id'])) {
    $_id = decodeUserId($_GET['id'], $secretKey); 

    if ($_id === false) {
        $error = "User not found!";
    } else {
        $user = $userModel->findUserById($_id);
        if (empty($user)) {
            $error = "User not found!";
        } else {
            // Lưu sẵn thông tin user để hiển thị trong form
            $inputName = $user[0]['name'];
        }
    }
}

// Xử lý khi form được submit
if (!empty($_POST['submit'])) {
    // Lưu lại giá trị người dùng đã nhập vào form
    $inputName = $_POST['name'];
    $inputPassword = $_POST['password'];

    // Kiểm tra và xử lý nếu có lỗi khi update hoặc thêm người dùng
    if (!empty($_id) && !empty($user)) { 
        $result = $userModel->updateUser($_POST);
        if (isset($result['error'])) {
            $error = $result['error'];
        } else {
            header('location: list_users.php');
            exit;
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
        <div class="alert alert-warning" role="alert">
            User form
        </div>
        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $_id ?>">
            <div class="form-group">
                <label for="name">Name</label>
                <!-- Giữ lại giá trị đã nhập nếu có lỗi -->
                <input class="form-control" name="name" placeholder="Name" value="<?php echo htmlspecialchars($inputName) ?>">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <!-- Không hiển thị lại mật khẩu vì lý do bảo mật -->
                <input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo htmlspecialchars($inputPassword) ?>">
            </div>
            
            <!-- Hiển thị thông báo lỗi nếu có -->
            <?php if (!empty($error)) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error; ?>
                </div>
            <?php } ?>
            
            <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
