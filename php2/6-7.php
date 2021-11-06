<?php 
 //Задание №6
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A();
$b1 = new B();
echo $a1->foo(); 
echo $b1->foo(); 
echo $a1->foo(); 
echo $b1->foo();

// в классе А переменная увеличивается на +1 и, т.к. класс В - наследник, то он наследует значение родителя

?>