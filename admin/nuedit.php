<?php   
include "header.php";
include "slider.php";
include "class/nu_class.php";
?>

<?php 
$nu = new nu();
if (!isset($_GET['nu_id']) || $_GET['nu_id']==NULL ) {
    echo"<script>window.location = 'nulist.php'</script>";
}
else{
    $nu_id = $_GET['nu_id'];
}
$get_nu = $nu->get_nu($nu_id);
if ($get_nu) {
    $result = $get_nu[0]; // Nhận giá trị từ get_nu
} 
?>

<?php 
// Tạo đối tượng từ class 'nu'

$nu = new nu();
// Biến để lưu trữ thông báo, mặc định là rỗng
$notification = "";

// Kiểm tra khi form được submit
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nu_name = $_POST['nu_name'];
    
    // Gọi phương thức insert từ đối tượng $nu
    $update_nu = $nu->update_nu($nu_name,$nu_id); 
    
    // Thêm thông báo thành công hoặc thất bại
    if($update_nu) {
        $notification = "thay đổi dữ liệu thành công!";
    } else {
        $notification = "thay đổi dữ liệu thất bại!";
    }
}
?>
<div class="admin-content-right">
    <div class="admin-content-right-nu">
        <h1>Thêm Danh Mục</h1>
        <form action="" method="post">
            <input name="nu_name" id="nu_name" type="text" placeholder="Nhập tên danh mục" required
                value="<?php echo $result ['nu_name']?>" />
            <button type="submit">Sửa</button>

            <!-- Thông báo sẽ hiển thị nếu biến $notification không rỗng -->
            <?php if(!empty($notification)) { ?>
            <p id=" notification" style="color: green; font-weight: bold;">
                <?php echo $notification; ?>
            </p>
            <?php } ?>
        </form>
    </div>
</div>

</section>
</body>

</html>