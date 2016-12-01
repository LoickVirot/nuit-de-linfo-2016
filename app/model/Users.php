<?php
/**
 * Example of model
 */
class Users extends Database
{

  function __construct()
  {

  }

  //For test
  public function getAllMembers()
  {
    return $this->select("SELECT * FROM members");
  }


  public function isUserExists($usename, $password)
  {
    return $this->select("SELECT * FROM members
      WHERE username=$usernamen
      AND password=$password");
  }
}
 ?>
