<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../lib/Database.php');
include_once($filepath . '/../helpers/Format.php');

?>

<?php
 /* CLASS SETUP STARS HERE --->  */
class Slider
{

  private $db;
  private $fm;

  public    function __construct()
  {
    $this->db   = new Database();
    $this->fm   = new Format();
  }
 /* CLASS SETUP ENDS HERE --->  */

 /* STRTS HERE---> INSERTING SLIDER STARTS */
  public function SliderInsert($data, $file)
  {


    $productName    =  mysqli_real_escape_string($this->db->link, $data['productName']);
    $body           =  mysqli_real_escape_string($this->db->link, $data['body']);
    $price          =  mysqli_real_escape_string($this->db->link, $data['price']);
 

    $permited = array('jpg', 'png', 'jpeg', 'gif');
    $file_name = $file['image']['name'];
    $file_size = $file['image']['size'];
    $file_temp = $file['image']['tmp_name'];

    $div = explode('.', $file_name);
    $file_ext = strtolower(end($div));
    $unique_image = substr(md5(time()), 0, 10) . '.' . $file_ext;
    $uploaded_image = "upload/" . $unique_image;
    if ($productName == "" || $body == "" || $price == "") {
      $msg = "<span class='error'>Field Must Not be empty .</span> ";
      return $msg;
    } else {
      move_uploaded_file($file_temp, $uploaded_image);
      $query = "INSERT INTO tbl_slider(productName,  body, price, image) 
          VALUES ('$productName','$body','$price','$uploaded_image')";

      $inserted_row = $this->db->insert($query);
      if ($inserted_row) {
        $msg = "<span class='success'>Slider Inserted Successfully.</span> ";
        return $msg;
      } else {
        $msg = "<span class='error'>Slider Not Inserted .</span> ";
        return $msg;
      }
    }
  }


/* ENDS HERE---> SHOING IN HOME PAGE IN SLIDER AREA */
  public function getAllimage(){
$query = "SELECT * FROM tbl_slider ";
         $result = $this->db->select($query);
         return $result;
}
/* Starts HERE---> SHOING IN HOME PAGE IN SLIDER AREA */

/* ENDS HERE---> INSERTING SLIDER ENDS */
 
  public function getProById($id)
  {
    $query = "SELECT * FROM tbl_slider WHERE productId ='$id' ";
    $result = $this->db->select($query);
    return $result;
  }


  public function productUpdate($data, $file, $id) {
    $productName    =  mysqli_real_escape_string($this->db->link, $data['productName']);
    $body           =  mysqli_real_escape_string($this->db->link, $data['body']);
    $price          =  mysqli_real_escape_string($this->db->link, $data['price']);
  

    $permited = array('jpg', 'png', 'jpeg', 'gif');
    $file_name = $file['image']['name'];
    $file_size = $file['image']['size'];
    $file_temp = $file['image']['tmp_name'];

    $div = explode('.', $file_name);
    $file_ext = strtolower(end($div));
    $unique_image = substr(md5(time()), 0, 10) . '.' . $file_ext;
    $uploaded_image = "upload/" . $unique_image;
    if ($productName == "" || $body == "" || $price == "" ) {
      $msg = "<span class='error'>Field Must Not be empty .</span> ";
      return $msg;
    } else {
      if (!empty($file_name)) {


        if ($file_size > 1054589) {
          echo "<span class='error'>Image Size should be less then 1MB .</span>";
        } elseif (in_array($file_ext, $permited) === false) {
          echo "<span class='error'> You can Upload Only" . implode(',', $permited) . "</span>";
        } else {
          move_uploaded_file($file_temp, $uploaded_image);
          $query = "UPDATE tbl_slider
          SET 
          productName   = '$productName',
       
          body      = '$body',
          price     = '$price',
          image     = '$uploaded_image'
        
          WHERE productId = '$id' ";


          $updated_row = $this->db->update($query);
          if ($updated_row) {
            $msg = "<span class='success'>Product Updated Successfully.</span> ";
            return $msg;
          } else {
            $msg = "<span class='error'>Product Not Updated .</span> ";
            return $msg;
          }
        }
      } else {
        $query = "UPDATE tbl_slider
          SET 
          productName   = '$productName',
      
          body      = '$body',
          price     = '$price',
          
          image     = '$uploaded_image'
          WHERE productId = '$id' ";


        $updated_row = $this->db->update($query);
        if ($updated_row) {
          $msg = "<span class='success'>Product Updated Successfully.</span> ";
          return $msg;
        } else {
          $msg = "<span class='error'>Product Not Updated .</span> ";
          return $msg;
        }
      }
    }
  }




  public function delPorById($id)
  {
    $query = "SELECT * FROM tbl_slider WHERE productId = '$id' ";
    $getData = $this->db->select($query);
    if ($getData) {
      while ($delImg = $getData->fetch_assoc()) {
        $dellink = $delImg['image'];
        unlink($dellink);
      }
    }

    $delquery = "DELETE FROM tbl_slider WHERE productId = '$id' ";
    $deldata = $this->db->delete($delquery);
    if ($deldata) {
      $msg = "<span class='success'>Product Deleted Successfully.</span> ";
      return $msg;
    } else {
      $msg = "<span class='error'>Product Not Deleted .</span> ";
      return $msg;
    }
  }


}
?>