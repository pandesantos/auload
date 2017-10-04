<?php

namespace app\models;

class User
{
  public $firstname;
  public $lastname;

  public function __construct($first, $last)
  {
    $this->firstname = $first;
    $this->lastname = $last;
  }

  public function getFullName()
  {
    return ucfirst($this->firstname)." ".ucfirst($this->lastname);
  }

}


 ?>
