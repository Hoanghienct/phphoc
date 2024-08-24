<?php
require_once ("ex01.php");
$obj= new Pheptinh();
$a=isset($_POST["txta"])?$_POST["txta"]:0;
$b=isset($_POST["txtb"])?$_POST["txtb"]:0;
if(isset($_POST["btnTinh"])){
  switch ($_POST["btnTinh"]){
    case "Cong":
      $obj->cong($a,$b);
      break;

      case "Tru":
        $obj->tru($a,$b);
        break;
      
      case "Nhan":
        $obj->nhan($a,$b);
        break;
            
      case "Chia":
        $obj->chia($a,$b);
        break;
      }
          
}
?>
<form method="post">
    <table> 
    <tr>
           <td colspan="2"> Phep tinh </td>  
    </tr>
    <tr>
            <td>Nhap a</td>
            <td><input type="number" name="txta" value="<?php echo $a?>"/></td>
    </tr>
    <tr>
            <td>Nhap b</td>
            <td><input type="number" name="txtb"value="<?php echo $b?>"/></td>
    </tr>
    <tr>
            <td>kết quả</td>
            <td><input type="readonly" name="ketqua" value="<?php $obj->getkq()?>"/></td>
    </tr>
    <tr>
           <td colspan="2"> <input type="submit" name="btnTinh" value="Cong">
                            <input type="submit" name="btnTinh" value="Tru">
                            <input type="submit" name="btnTinh" value="Nhan">
                            <input type="submit" name="btnTinh" value="Chia">
        </td>
           
    </tr>
    </table>
</form>
