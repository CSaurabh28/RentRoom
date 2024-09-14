<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <?php include 'head.php';?>
</head>
<body>
<?php include 'header.php';?>
<?php include 'menu.php';?>


           

        <?php
       $id=$_SESSION['id'];
       $id=$_POST['id'];
        $q=pg_query("Select * from tbluser  WHERE email = '" . $_SESSION['email'] . "'");
              
        while($r=pg_fetch_array($q)){
            ?>
            <div class="col-md-3"></div>
            <div class="col-md-6">
            <table class="table">

             
                   <tR>
                    <Td>
                        Username
                    </Td>
                    <td>
                        <?php echo $r['uname'];?>
                    </td>
                </tR>
                <tR>
                    <Td>
                        Email
                    </Td>
                    <td>
                        <?php echo $r['email'];?>
                    </td>
                </tR>
                <tR>
                    <Td>
                       Mobile No
                    </Td>
                    <td>
                        <?php echo $r['phoneno'];?>
                    </td>
                </tR>
                <!-- <tr>
                    <Td>
                      <a href="details.php"> Add2Cart</a>
                    </Td>

                </tr> -->
            </table> 
        </div>
            <?php
        }
        ?>


<?php include 'footer.php';?>
</body>
</html>