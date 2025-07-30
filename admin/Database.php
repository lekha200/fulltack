<?php 
Class Database{
    public $host = DB_HOST;
    public $user = DB_USER;
    public $pass = DB_PASS;
    public $dbname = DB_NAME;

    public $link;
    public $error;
    public function __construct(){
        $this->ConnectDB();
    }
    private function ConnectDB(){
        $this->link = mysqli_connect($this->host, $this->user, $this->pass, $this->dbname);
        if(!$this->link){
            $this->error = "Kết nối thất bại: " . mysqli_connect_error();
            return false;
        }
        return true;
    }
    // Hàm select trả về kết quả của truy vấn SELECT
    public function select($query) {
        $result = $this->link->query($query) or die($this->link->error . __LINE__);
        if ($result->num_rows > 0) {
            $rows = array();
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
            return $rows; // Trả về mảng kết quả
        } else {
            return false; // Không có kết quả
        }
    }

    // Hàm update kiểm tra nếu truy vấn UPDATE thành công
    public function update($query) {
        $result = $this->link->query($query) or die($this->link->error . __LINE__);
        if ($this->link->affected_rows > 0) {
            return true; // Trả về true nếu có hàng được cập nhật
        } else {
            return false; // Không có dữ liệu nào được cập nhật
        }
    }

    // Hàm delete kiểm tra nếu truy vấn DELETE thành công
    public function delete($query) {
        $result = $this->link->query($query) or die($this->link->error . __LINE__);
        if ($this->link->affected_rows > 0) {
            return true; // Trả về true nếu có hàng bị xóa
        } else {
            return false; // Không có hàng nào bị xóa
        }
    }
}