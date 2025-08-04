<?php
include "Database.php" ;
?>
<?php
class nu{
    private $db;
    function __construct() {
        $this->db = new Database();
        
    }  
    public function insert_nu($nu_name) {
        $query = "INSERT INTO tbl_nu (nu_name) VALUES('$nu_name')";
        $result = $this ->db->insert($query);
        return $result;
    }
    public function show_nu() {
        $query = "SELECT * FROM tbl_nu ORDER BY nu_id DESC";
        $result = $this->db->select($query);
        
       return $result;
    }
    public function get_nu($nu_id) {
        $query = "SELECT * FROM tbl_nu WHERE nu_id = '$nu_id'";
        $result = $this->db->select($query);
        
       return $result;
    }
    public function update_nu($nu_name,$nu_id){
        $query = " UPDATE tbl_nu SET nu_name = '$nu_name' WHERE nu_id = '$nu_id'";
        $result = $this->db->update($query);
        header('location:nulist.php');
       return $result;
    }
    public function delete_nu($nu_id) {
        $query = " DELETE FROM tbl_nu WHERE nu_id = '$nu_id'";
        $result = $this->db->delete($query);
        header('location:nulist.php');
       return $result;
    }
}
?>