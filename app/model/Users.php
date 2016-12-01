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


  public function isUserExists($usename)
  {
    return $this->select("SELECT * FROM members
      WHERE username=$usernamen
      AND password=$password");
  }

  public function createNewUser($username, $password, $mail, $name, $lastname)
  {
    //TODO
  }
}
 ?>
