<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bill</title>
</head>

<body>

<?php
		include_once('assets/script.php');
		$billno=$_GET['billno'];
		$bill=get_by_id("`order`","orderid",$billno);
		$cust=get_by_id("`customer`","emailid",$bill['custid']);
 ?>

<div style="margin:0px auto;width:650px;">
<table width="643" height="188" border="0">
  <tr>
    <td width="217" valign="top"><p><h1>FlipCart</h1>,</p>
    </td>
    <td width="410" Valign="top" align="right"><p>Invoice no :- <?php echo $bill['orderid'] ?></p>
    <p>Customer name :- <?php echo $cust['name'] ?></p>
    <p>Address :- <?php echo $cust['address'] ?></p>
    <p>Contact no :- <?php echo $cust['contactno'] ?></p>
    <p>Email_id :- <?php echo $cust['emailid'] ?> </p></td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="647" border="1" cellpadding="10">
  <tr>
    <th width="68" >Sl no</th>
    <th width="155">Product name</th>
    <th width="111">Price</th>
    <th width="91">Quantity</th>
    <th width="188">Amount</th>
  </tr>
  <?php
  		$odets=get_all("orderdetails od,product p","od.pcode=p.pcode and od.orderid='$billno'");
		
		$slno=0;
		$total=0;
		foreach($odets as $od)
		{
			echo '
				<tr>
					<td>'.++$slno.'</td>
					<td>'.$od['pname'].'</td>
					<td>'.$od['price'].'</td>
					<td>'.$od['quantity'].'</td>
					<td>'.$od['price']*$od['quantity'].'</td>
				</tr>
			';
			$total+=($od['price']*$od['quantity']);
		}
		echo '<tr><td colspan="4" align="center">Total Amount</td><td>'.$total.'</td></tr>'
  ?>
</table>
</div>
<h1>&nbsp;</h1>
</body>
</html>