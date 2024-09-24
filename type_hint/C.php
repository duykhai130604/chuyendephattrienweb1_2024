<?php
require_once 'I.php'; // Nhúng file chứa interface I

// Class C hiện thực Interface I
class C implements I {
    public function f() {
        echo "Method f() from class C\n";
    }
}
?>
