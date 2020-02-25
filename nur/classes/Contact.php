<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath."/../lib/Database.php");
include_once($filepath."/../helpers/Format.php");

?>


<?php

class Contact {

  private $db;
  private $fm;

  public  function __construct()
  {
    $this->db   = new Database();
    $this->fm   = new Format();
  }


  public function customerContact($data)
  {
    $firstname  =  mysqli_real_escape_string($this->db->link, $data['firstname']);

    $lastname   =  mysqli_real_escape_string($this->db->link, $data['lastname']);

    $phone      =  mysqli_real_escape_string($this->db->link, $data['phone']);

    $email     =  mysqli_real_escape_string($this->db->link, $data['email']);

    $body      =  mysqli_real_escape_string($this->db->link, $data['body']);


    if ($firstname == "" || $lastname == "" || $phone == "" || $email == "" || $body == "") {
      $msg = "<span class='error'>Field Must Not be empty .</span> ";
      return $msg; 
    
    } else { 

    $query = "  INSERT INTO tbl_contact (firstname, lastname, phone, email, body) 

  VALUES ('$firstname','$lastname','$phone','$email','$body')";


      $inserted_row = $this->db->insert($query);

      if ($inserted_row) {

        $msg = "<span class='success'>hay boddy we got your message we will shortly reach you .</span> ";
        return $msg;

      } else {

        $msg = "<span class='error'>Opps like like you missed a field .</span> ";
        return $msg;

      }
    }
  }

  /*this code wsa  4 sending message from contact page*/
  public function GetAllUnreadMessagesForInBox(){
     $query = "SELECT * FROM tbl_contact WHERE STATUS='0' ORDER BY id DESC ";
     $result = $this->db->select($query);
     return $result;

 }
 /*this code wsa 4 unread messages*/


   public function GetReadMessagesForBelow(){
     $query = "SELECT * FROM tbl_contact WHERE STATUS='1' ORDER BY id DESC ";
     $result = $this->db->select($query);
     return $result;

 }


public function getMessageForViewPageInTheFields($id){
  $query = " SELECT * FROM tbl_contact WHERE id ='$id' ";
  $result = $this->db->select($query);
  return $result;
  }

  public function getCustomerDataForReplayPage($id){
  $query = " SELECT * FROM tbl_contact WHERE id ='$id' ";
  $result = $this->db->select($query);
  return $result;
  }


  public function DeleteReadMessage($id){
  $id =  mysqli_real_escape_string($this->db->link, $id ); 

  $query = "DELETE FROM tbl_contact WHERE id = '$id'";
        $deldata = $this->db->delete($query);
        if ($deldata) {
          $msg = "<span class='success'>Data Deleted Successfully.</span> ";
        return $msg;
        }else {
          $msg = "<span class='error'>Data Not Deleted .</span> ";
             return $msg;
          }


 }


 public function MarkAsReadMesage($id){
  $id =  mysqli_real_escape_string($this->db->link, $id ); 


  $query = "UPDATE tbl_contact
                SET
                status = '1'
                WHERE id = '$id'";
                $update_row  = $this->db->update($query);
                if ($update_row) {
                   $msg = "<span class='success'>Updated Successfully.</span> ";
              return $msg;
                }else {
                  $msg = "<span class='error'>Not Updated .</span> ";
              return $msg;
                } 
 
 }
  public function productShifted($id){
  $id =  mysqli_real_escape_string($this->db->link, $id ); 
  
  $query = "UPDATE tbl_contact
                SET
                status = '1'
                WHERE id = '$id'";
                $update_row  = $this->db->update($query);
                if ($update_row) {
                   $msg = "<span class='success'>Updated Successfully.</span> ";
              return $msg;
                }else {
                  $msg = "<span class='error'>Not Updated .</span> ";
              return $msg;
                } 
 
 }

 



}
?>