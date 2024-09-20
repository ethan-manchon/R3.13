<?php
class A {
    public function render() {
        echo "A";
    }
}
class B extends A {
    public function render() {
        parent::render();
        echo "B";
    }
}   
class C extends A {
    public function render() {
        echo "C";
    }
}

$a = new A();
$b = new B();
$c = new C();

$a->render();
$b->render();
$c->render();

?>