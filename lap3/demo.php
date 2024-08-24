<?php
$result = ""; // Biến để lưu kết quả

if (isset($_POST["btnCheck"])) {
    $diem = isset($_POST["diem"]) ? $_POST["diem"] : 0;

    if ($diem >= 22.6) {
        $result = "Đạt";
    } else {
        $result = "Trượt";
    }
}
?>

<form method="post">
    <table>
        <tr>
            <td>Nhập điểm:</td>
            <td><input type="number" step="0.1" name="diem" value="<?php echo isset($_POST['diem']) ? $_POST['diem'] : ''; ?>"></td>
        </tr>
        <tr>
            <td>Kết quả:</td>
            <td><input type="text" name="ketqua" readonly value="<?php echo $result; ?>"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="btnCheck" value="Kiểm tra"></td>
        </tr>
    </table>
</form>
