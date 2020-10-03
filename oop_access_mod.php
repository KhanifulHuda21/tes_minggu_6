<?php

/** 
 * 
 * poin 2
 * 
 * - 1 || Buatlah sebuah class dengan menginplementasikan access modifier pada method maupun properties
 * - 1 || invoke/call method yang kalian buat dengan visibilitas static maupun non static
 */

// class names {
//     public static function name() {
//       echo "Ahmad Khaniful Huda";
//     }
  
//     public function __construct() {
//       self::name();
//     }
//   }
  
//   new names();

class Nama{

  //PROPERTIES
  public $name;
  private $address;

  //METHOD
  public function name()
  {
      echo "\nKhaniful Huda";
  }

  // STATIC METHOD
  public static function names()
  {
      echo "\nSMK M BANDONGAN\n";
  }

  //SETTERS
  public function setAddress($address)
  {
      $this->address=$address;
  }

  //GETTERS
  public function getAddress()
  {
      return $this->address;
  }
}


$student=new Nama();// INSTANTIATED CLASS

$student->name();// INVOKE METHOD

// INVOKE STATIC METHOD

Nama::names();

// INVOKE SETTERS & GETTERS

$student->setAddress("Magelang,Indonesia"); // set

echo $student->getAddress();  //get