<!DOCTYPE html>
<html>
<head>
	
	<title></title>
<?php include 'head.php';?>
</head>
<body>

<?php include 'menu.php';?>

<div class="row">

<?php

$q=pg_query("Select * from tblproperty,tblcart,tbluser where tbluser.uid=tblcart.uid and tblcart.pid=tblproperty.pid and tblcart.uid!='".$_SESSION['uid']."' and tblproperty.pid=".$_GET['id']);
while($r=pg_fetch_array($q)){
	?>
	<div class="col-md-6">
	<table class="table">
		<Tr>
			
			<Td colspan=2 align=center>
				<img src=<?php
	echo $r['pimage'];?> height=200px width=200px>
			</Td>
		</Tr>
		<Tr>
			<td>
				Property Name:
			</td>
			<Td>
				<?php
	echo $r['pname'];?>
			</Td>
		</Tr>
		<Tr>
			<td>
				Property Price:
			</td>
			<Td>
				₹<?php
	echo $r['pprice'];?>/-
			</Td>
		</Tr>
		<Tr>
			<td>
				Property Description:
			</td>
			<Td>
				<?php
	echo $r['pdesc'];?>
			</Td>
		</Tr>
		
		<Tr>
			<td>
				enquiry Phone No:
			</td>
			<Td>
				<?php
	echo $r['phoneno'];?>
			</Td>
		</Tr>
	
		
	</table>
	</div>
	
	

<?php
}
?>
</div>
<?php include 'footer.php';?>
</body>
</html>