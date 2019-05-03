<?php
       class QuadraticEquation
       {
         public $a;
         public $b;
         public $c;

         public function __construct($a, $b, $c)
         {
             $this->a = $a;
             $this->b = $b;
             $this->c = $c;
             $this->delta = $this->b*$this->b-4*$this->a*$this->c;
         }
         // public function getter(){
         //    return $this->a, $this->b, $this->c;
         // }
         public function getDiscriminant()
         {
            return  $this->delta;
         }

         public function getRoot()
         {
            if ($this->delta < 0) {
               echo 'Phương trình vô nghiệm';
            } else if ($this->delta == 0) {
               echo 'Phương trình nghiệm kép x1 = x2 = ' . (-$this->b / 2 * $this->a);
            } else {
               echo  'Phương trình có hai nghiệm phân biệt, x1 = ' . ((-$this->b + sqrt($this->delta)) / (2 * $this->a))
               . '  ,   x2 = ' . ((-$this->b - sqrt($this->delta)) / (2 * $this->a));
            }
         }
       } 
   if (isset($_POST['submit'])){
      $NewQua = new QuadraticEquation($_POST['input1'],$_POST['input2'],$_POST['input3']);
      echo "Delta = " .$NewQua->getDiscriminant() ."<br>";
      $NewQua->getRoot()."<br>";
   }
  ?>