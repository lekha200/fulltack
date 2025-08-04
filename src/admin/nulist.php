<?php   
include "header.php";
include "slider.php";
include "class/nu_class.php";
?> <?php 
// Tạo đối tượng từ class 'nu'
$nu = new nu();

// Biến để lưu trữ thông báo, mặc định rỗng
$notification = "";

// Kiểm tra khi form được submit
$show_nu = $nu->show_nu();
    
// Thêm thông báo thành công hoặc thất bại
if($show_nu) {
    $notification = "Hiển thị dữ liệu thành công!";
} else {
    $notification = "Hiển thị dữ liệu thất bại!";
}

?> <div class="admin-content-right">
    <div class="admin-content-right-nu-list">
        <h1>Danh sách danh mục</h1>

        <!-- Hiển thị thông báo -->
        <?php if(!empty($notification)) { ?>
        <p id="notification" style="color: green; font-weight: bold;">
            <?php echo $notification; ?>
        </p>
        <?php } ?>

        <table>
            <tr>
                <th>STT</th>
                <th>ID</th>
                <th>Danh Mục</th>
                <th>Tùy Chọn</th>
            </tr>
            <?php if($show_nu): ?>
            <?php 
            $stt = 1;
            foreach ($show_nu as $result): // Thay fetch_assoc() bằng lặp qua mảng
            ?>
            <tr>
                <td><?php echo $stt++; ?></td>
                <td><?php echo $result['nu_id']; ?></td>
                <td><?php echo $result['nu_name']; ?></td>
                <td>
                    <a href="nuedit.php?nu_id=<?php echo $result['nu_id']?>">Sửa</a> | <a
                        href="nudelete.php?nu_id=<?php echo $result['nu_id']?>">Xóa</a>
                </td>
            </tr>
            <?php endforeach; ?>
            <?php endif; ?>

        </table>
    </div>
</div>

</section>
</body>

</html>