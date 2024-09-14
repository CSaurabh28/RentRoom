<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <?php include 'head.php';?>
</head>
<body>
<?php include 'menu.php';?>

<?php
if(isset($_POST['btnaddproperty'])){
  
    extract($_POST);
   
    include 'fileupload.php';

    pg_query("INSERT INTO tblproperty(prooms,pname, pprice, pimage, pdesc, cid, uid,paddress) VALUES ('$txtrooms','$txtpname','$txtpprice','$target_file','$txtdesc','$cmbcname','".$_SESSION['uid']."','$txtaddress')");

    
}

?>
<div class="row">
    <div class="col-md-8">
<form method="post" enctype="multipart/form-data">
    <table class="table">
        <tr>
            <Td>
                Choose Category
            </Td>
            <td>
                <select name="cmbcname" class="form-control">
                    <?php
                    $q=pg_query("select * from tblcategory");
                    while ($r=pg_fetch_array($q)) {
                        ?>
                        <option value="<?php echo $r['cid'];?>"><?php echo $r['cname'];?></option>
                        <?php
                    }
                    ?>

                </select>
            </td>
        </tr>
        <Tr>
            <td>
                Property Name
            </td>
            <td>
                <input type="text" name="txtpname" class="form-control" required>
            </td>
        </Tr>
        <Tr>
            <td>
                Property Price
            </td>
            <td>
                <input type="text" name="txtpprice" class="form-control" required>
            </td>
        </Tr>
        <Tr>
            <td>
                Property Image
            </td>
            <td>
                <input type="file" name="fileToUpload" class="form-control">
            </td>
        </Tr>
        <Tr>
            <td>
                Room Type
            </td>
            <td>
                <input type="text" name="txtrooms" class="form-control" placeholder="(1BHK/2BHK)" required>
            </td>
        </Tr>
        <Tr>
        <Tr>
            <td>
                Property Description
            </td>
            <td>
                <textarea name="txtdesc" class="form-control"></textarea>
            </td>
        </Tr>
 <Tr>
          <Td>
           Address
          </Td>
          <td>
           <textarea name="txtaddress" class="form-control"></textarea>
          </td>
        </Tr>
        <Tr>
            <td>
                <input type="submit" class="btn btn-success" value="Add Property" name="btnaddproperty">
            </td>
        </Tr>
    </table>
</form>
</div>
</div>
<?php include 'footer.php';?>
</body>
</html>