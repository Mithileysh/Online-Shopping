<?php
		session_start();		
		$pcode=$_REQUEST['pcode'];
		
		if(isset($_REQUEST['qty']))
		{
			$qty=$_REQUEST['qty'];
		}
		else
		{
			$qty=1;
		}
		
		if(!isset($_SESSION['cart']))
		{
			$cart=array();
		}
		else
		{
			$cart=$_SESSION['cart'];
		}
		
		if(array_key_exists($pcode,$cart))
		{
			$cart[$pcode]+=$qty;
		}
		else
		{
			$cart[$pcode]=$qty;
		}
		
		$_SESSION['cart']=$cart;
		
		//print_r($cart);
		header("location:index.php");
?>