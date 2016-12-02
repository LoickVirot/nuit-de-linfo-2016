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


  public function isUserExists($username)
  {
    $retour = $this->select("SELECT COUNT(*) FROM members WHERE `username` = $username");
    if ($retour == 1) {
      return True;
    }
    else {
      return False;
    }
  }

  public function createNewUser($surname, $firstname, $username, $password, $email, $biography, $role)
  {
    $req = "INSERT INTO `members`(`surname`, `firstname`, `username`, `password`, `email`, `biography`, `role`)
      VALUES ('$surname', '$firstname', '$username', '$password', '$email', '$biography', '$role');";
    return $this->create($req);
  }
}
 ?>
