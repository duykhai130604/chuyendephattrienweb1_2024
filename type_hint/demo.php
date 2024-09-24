<?php
// Kích hoạt strict mode
declare(strict_types=1);

// Nhúng các file chứa class và interface
require_once 'A.php';
require_once 'B.php';
require_once 'C.php';
require_once 'I.php';

/*
// Khởi tạo class A và gọi các phương thức của nó
$a = new A();
$a->f();
$a->a1();

// Khởi tạo class B và gọi phương thức của nó
$b = new B();
$b->b1();
*/

class Demo {
    // Trường hợp 1: type A, return A -> True
    public function typeA_ReturnA(): A {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    // Trường hợp 2: type A, return B -> Flase
    public function typeA_ReturnB(): A {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    // Trường hợp 3: type A, return C -> False
    public function typeA_ReturnC(): A {
        echo __FUNCTION__ . "<br>";
        return new C(); 
    }

    // Trường hợp 4: type A, return I  -> False
    public function typeA_ReturnI(): A {
        echo __FUNCTION__ . "<br>";
        return new I();
    }

    // Trường hợp 5: type A, return Null -> False
    public function typeA_ReturnNull(): A {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    
    // Trường hợp 6: type B, return A -> False
    public function typeB_ReturnA(): B {
        echo __FUNCTION__ . "<br>";
        return new A(); 
    }

    // Trường hợp 7: type B, return B -> True
    public function typeB_ReturnB(): B {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    // Trường hợp 8: type B, return C -> False
    public function typeB_ReturnC(): B {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    // Trường hợp 9: type B, return I -> False
    public function typeB_ReturnI(): B {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    // Trường hợp 10: type B, return Null -> False
    public function typeB_ReturnNull(): B {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    // Trường hợp 11: type C, return A -> False
    public function typeC_ReturnA(): C {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    // Trường hợp 12: type C, return B  -> False
    public function typeC_ReturnB(): C {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    // Trường hợp 13: type C, return C -> True
    public function typeC_ReturnC(): C {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    // Trường hợp 14: type C, return I -> False
    public function typeC_ReturnI(): C {
        echo __FUNCTION__ . "<br>";
        return new I();
    }

    // Trường hợp 15: type C, return Null -> False
    public function typeC_ReturnNull(): C {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    // Trường hợp 16: type I, return A -> True
    public function typeI_ReturnA(): I {
        echo __FUNCTION__ . "<br>";
        return new A(); 
    }

    // Trường hợp 17: type I, return B -> False
    public function typeI_ReturnB(): I {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    // Trường hợp 18: type I, return C -> True
    public function typeI_ReturnC(): I {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    // Trường hợp 19: type I, return I -> True
    public function typeI_ReturnI(): I {
        echo __FUNCTION__ . "<br>";
        return new I();
    }

    // Trường hợp 20: type I, return Null -> False
    public function typeI_ReturnNull(): I {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    // Trường hợp 21: type Null, return A -> False
    public function typeNull_ReturnA(): null {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    // Trường hợp 22: type Null, return B -> False
    public function typeNull_ReturnB(): null {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    // Trường hợp 23: type Null, return C -> False
    public function typeNull_ReturnC(): null {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    // Trường hợp 24: type Null, return I -> False
    public function typeNull_ReturnI(): null {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    // Trường hợp 25: type Null, return Null -> True
    public function typeNull_ReturnNull(): null {
        echo __FUNCTION__ . "<br>";
        return null; 
    }
    
}

$demo = new Demo();
$demo->typeC_ReturnB();

