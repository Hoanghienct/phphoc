<?php
require_once ("ex01.php");

// Khởi tạo biến kết quả
$result = "";
$input ="";
// Nhận giá trị từ form
$name = isset($_POST["txthvt"]) ? $_POST["txthvt"] : "";
$t = isset($_POST["txtt"]) ? $_POST["txtt"] : 0;
$l = isset($_POST["txtl"]) ? $_POST["txtl"] : 0;
$h = isset($_POST["txth"]) ? $_POST["txth"] : 0;

if(isset($_POST["btnTinh"])) {
    // Khởi tạo đối tượng Student
    $objs = new Student($name, $t, $l, $h);
    // Lưu kết quả tổng điểm
    $result = $objs->Tongdiem();
    if ($result>=22.6){
        $input=" sv trúng tuyển";
    }
    else{
        $input=" sv trượt ";
    }
}
?>

<form method="post">
    <table> 
        <tr>
            <td >Họ và tên sinh viên</td>  
            <td><input type="text" name="txthvt" value="<?php echo $name; ?>"/></td>
        </tr>
        <tr>
            <td>Nhập Toán</td>
            <td><input type="number" name="txtt" value="<?php echo $t; ?>"/></td>
        </tr>
        <tr>
            <td>Nhập Lý</td>
            <td><input type="number" name="txtl" value="<?php echo $l; ?>"/></td>
        </tr>
        <tr>
            <td>Nhập Hóa</td>
            <td><input type="number" name="txth" value="<?php echo $h; ?>"/></td>
        </tr>
        <tr>
            <td>Kết quả</td>
            <td><input type="text" name="ketqua" readonly value="<?php echo $result;?>"/></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="btnTinh" value="Tính tổng điểm"></td>
        </tr>
    </table>
</form>
<p >
<?php echo $input; ?>  
</p>
