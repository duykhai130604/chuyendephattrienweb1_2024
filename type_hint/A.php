<?php
require_once 'C.php'; // Nhúng file chứa class C

// Class A kế thừa class C
class A extends C {
    public function a1() {
        echo "This function a1 from class A.";
    }
}
?>
