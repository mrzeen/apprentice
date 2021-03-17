<?php 
//initialize the session
if (!isset($_SESSION)) {
	session_start();
	if($_SESSION['MM_Username'] != 'itmaterial') {
	header( "location: showsub.php" );
	exit(0);
	}
  }
  
  // ** Logout the current user. **
  $logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
  if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
	$logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
  }
  
  if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
	//to fully log out a visitor we need to clear the session varialbles
	$_SESSION['MM_Username'] = NULL;
	$_SESSION['MM_UserGroup'] = NULL;
	$_SESSION['PrevUrl'] = NULL;
	unset($_SESSION['MM_Username']);
	unset($_SESSION['MM_UserGroup']);
	unset($_SESSION['PrevUrl']);
	
	$logoutGoTo = "index.php";
	if ($logoutGoTo) {
	  header("Location: $logoutGoTo");
	  exit;
	}
  }
  ?>
<?php require_once('Connections/conitmaterial.php'); ?>
<?php
  if (!function_exists("GetSQLValueString")) {
  function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
  {
	if (PHP_VERSION < 6) {
	  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
	}
  
	$theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);
  
	switch ($theType) {
	  case "text":
		$theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
		break;    
	  case "long":
	  case "int":
		$theValue = ($theValue != "") ? intval($theValue) : "NULL";
		break;
	  case "double":
		$theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
		break;
	  case "date":
		$theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
		break;
	  case "defined":
		$theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
		break;
	}
	return $theValue;
  }
  }
						$checked_arr = $_POST['check'];
						$count = count($checked_arr);
			switch ($count) {
				case 1:
					for($i=0;$i<count($_POST["check"]);$i++)
					{
						if(trim($_POST["check"][$i]) != "")
						{
										$colname_Recordset0=$_POST["check"][0];
						}
					}
					
					break;
				case 2:
					for($i=0;$i<count($_POST["check"]);$i++)
					{
						if(trim($_POST["check"][$i]) != "")
						{
										$colname_Recordset0=$_POST["check"][0];
										$colname_Recordset1=$_POST["check"][1];
								
						}
					}
				
					break;

				case 3:
					//echo "i is cake";
					for($i=0;$i<count($_POST["check"]);$i++)
				{
							if(trim($_POST["check"][$i]) != "")
					{
										$colname_Recordset0=$_POST["check"][0];
										$colname_Recordset1=$_POST["check"][1];
										$colname_Recordset2=$_POST["check"][2];
					
					}
			  //$colname_Recordset0
				}
				  break;

				case 4:
				  for($i=0;$i<count($_POST["check"]);$i++)
				  {
					  if(trim($_POST["check"][$i]) != "")
					  {
										$colname_Recordset0=$_POST["check"][0];
										$colname_Recordset1=$_POST["check"][1];
										$colname_Recordset2=$_POST["check"][2];
										$colname_Recordset3=$_POST["check"][3];
				  
					  }
				  }
				  break;

				  case 5:
					for($i=0;$i<count($_POST["check"]);$i++)
					{
						if(trim($_POST["check"][$i]) != "")
						{
										$colname_Recordset0=$_POST["check"][0];
										$colname_Recordset1=$_POST["check"][1];
										$colname_Recordset2=$_POST["check"][2];
										$colname_Recordset3=$_POST["check"][3];
										$colname_Recordset4=$_POST["check"][4];
					
						}
					}
					break;

					
					case 6:
						for($i=0;$i<count($_POST["check"]);$i++)
						{
							if(trim($_POST["check"][$i]) != "")
							{
										$colname_Recordset0=$_POST["check"][0];
										$colname_Recordset1=$_POST["check"][1];
										$colname_Recordset2=$_POST["check"][2];
										$colname_Recordset3=$_POST["check"][3];
										$colname_Recordset4=$_POST["check"][4];
										$colname_Recordset5=$_POST["check"][5];
						
							}
						}
						break;

						case 7:
							for($i=0;$i<count($_POST["check"]);$i++)
							{
								if(trim($_POST["check"][$i]) != "")
								{
										$colname_Recordset0=$_POST["check"][0];
										$colname_Recordset1=$_POST["check"][1];
										$colname_Recordset2=$_POST["check"][2];
										$colname_Recordset3=$_POST["check"][3];
										$colname_Recordset4=$_POST["check"][4];
										$colname_Recordset5=$_POST["check"][5];
										$colname_Recordset6=$_POST["check"][6];
							
								}
							}
							break;

							case 8:
								for($i=0;$i<count($_POST["check"]);$i++)
								{
									if(trim($_POST["check"][$i]) != "")
									{
										$colname_Recordset0=$_POST["check"][0];
										$colname_Recordset1=$_POST["check"][1];
										$colname_Recordset2=$_POST["check"][2];
										$colname_Recordset3=$_POST["check"][3];
										$colname_Recordset4=$_POST["check"][4];
										$colname_Recordset5=$_POST["check"][5];
										$colname_Recordset6=$_POST["check"][6];
										$colname_Recordset7=$_POST["check"][7];
								
									}
								}
								break;

								case 9:
									for($i=0;$i<count($_POST["check"]);$i++)
									{
										if(trim($_POST["check"][$i]) != "")
										{
										$colname_Recordset0=$_POST["check"][0];
										$colname_Recordset1=$_POST["check"][1];
										$colname_Recordset2=$_POST["check"][2];
										$colname_Recordset3=$_POST["check"][3];
										$colname_Recordset4=$_POST["check"][4];
										$colname_Recordset5=$_POST["check"][5];
										$colname_Recordset6=$_POST["check"][6];
										$colname_Recordset7=$_POST["check"][7];
										$colname_Recordset8=$_POST["check"][8];
									
										}
									}
									break;

									case 10:
										for($i=0;$i<count($_POST["check"]);$i++)
										{
											if(trim($_POST["check"][$i]) != "")
									{
										$colname_Recordset0=$_POST["check"][0];
										$colname_Recordset1=$_POST["check"][1];
										$colname_Recordset2=$_POST["check"][2];
										$colname_Recordset3=$_POST["check"][3];
										$colname_Recordset4=$_POST["check"][4];
										$colname_Recordset5=$_POST["check"][5];
										$colname_Recordset6=$_POST["check"][6];
										$colname_Recordset7=$_POST["check"][7];
										$colname_Recordset8=$_POST["check"][8];
										$colname_Recordset9=$_POST["check"][9];
										
									}
										}
										break;
				}
  				 ;
//echo "There are ".$count." checkboxe(s) are checked";

switch ($count) {
		case 1:
			mysql_select_db($database_conitmaterial, $conitmaterial);
			$query_Recordset4 = sprintf("SELECT materials.material_name, relations.user_name, budget.budget_ID, relations.disburse, relations.date, relations.note, materials.amount, materials.budget FROM materials, relations, budget WHERE (materials.material_name = %s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name)  ORDER BY relations.date DESC", GetSQLValueString($colname_Recordset0, "text"));
		
			$Recordset4 = mysql_query($query_Recordset4, $conitmaterial) or die(mysql_error());
				$row_Recordset4 = mysql_fetch_assoc($Recordset4);
				$totalRows_Recordset4 = mysql_num_rows($Recordset4);
				
		
		break;

		case 2:
			mysql_select_db($database_conitmaterial, $conitmaterial);
			$query_Recordset4 = sprintf("SELECT materials.material_name, relations.user_name, budget.budget_ID, relations.disburse, relations.date, relations.note, materials.amount, materials.budget FROM materials, relations, budget WHERE (materials.material_name = %s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name) or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name) ORDER BY relations.date DESC", GetSQLValueString($colname_Recordset0, "text"),GetSQLValueString($colname_Recordset1, "text"));
			
			$Recordset4 = mysql_query($query_Recordset4, $conitmaterial) or die(mysql_error());
							$row_Recordset4 = mysql_fetch_assoc($Recordset4);
							$totalRows_Recordset4 = mysql_num_rows($Recordset4);
				
	
		
		break;
			
		case 3:
			mysql_select_db($database_conitmaterial, $conitmaterial);
			$query_Recordset4 = sprintf("SELECT materials.material_name, relations.user_name, budget.budget_ID, relations.disburse, relations.date, relations.note, materials.amount, materials.budget FROM materials, relations, budget WHERE (materials.material_name = %s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name) or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name)  or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name) ORDER BY relations.date DESC", GetSQLValueString($colname_Recordset0, "text"),GetSQLValueString($colname_Recordset1, "text"),GetSQLValueString($colname_Recordset2, "text"));
			
			$Recordset4 = mysql_query($query_Recordset4, $conitmaterial) or die(mysql_error());
			$row_Recordset4 = mysql_fetch_assoc($Recordset4);
			$totalRows_Recordset4 = mysql_num_rows($Recordset4);
			
			//echo $query_Recordset4;
		
		break;
		case 4:
			mysql_select_db($database_conitmaterial, $conitmaterial);
			$query_Recordset4 = sprintf("SELECT materials.material_name, relations.user_name, budget.budget_ID, relations.disburse, relations.date, relations.note, materials.amount, materials.budget FROM materials, relations, budget WHERE (materials.material_name = %s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name) or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name)  or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name) or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name)  ORDER BY relations.date DESC", GetSQLValueString($colname_Recordset0, "text"),GetSQLValueString($colname_Recordset1, "text"),GetSQLValueString($colname_Recordset2, "text"),GetSQLValueString($colname_Recordset3, "text"));
			
			$Recordset4 = mysql_query($query_Recordset4, $conitmaterial) or die(mysql_error());
					$row_Recordset4 = mysql_fetch_assoc($Recordset4);
					$totalRows_Recordset4 = mysql_num_rows($Recordset4);
			
			//echo $query_Recordset4;
		
		break;
		
		case 5:
			mysql_select_db($database_conitmaterial, $conitmaterial);
			$query_Recordset4 = sprintf("SELECT materials.material_name, relations.user_name, budget.budget_ID, relations.disburse, relations.date, relations.note, materials.amount, materials.budget FROM materials, relations, budget WHERE (materials.material_name = %s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name) or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name)  or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name) or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name)  or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name)  ORDER BY relations.date DESC", GetSQLValueString($colname_Recordset0, "text"),GetSQLValueString($colname_Recordset1, "text"),GetSQLValueString($colname_Recordset2, "text"),GetSQLValueString($colname_Recordset3, "text"),GetSQLValueString($colname_Recordset4, "text"));
		
			$Recordset4 = mysql_query($query_Recordset4, $conitmaterial) or die(mysql_error());
						$row_Recordset4 = mysql_fetch_assoc($Recordset4);
						$totalRows_Recordset4 = mysql_num_rows($Recordset4);
						
			//echo $query_Recordset4;
		
		break;
			
		case 6:
			mysql_select_db($database_conitmaterial, $conitmaterial);
			$query_Recordset4 = sprintf("SELECT materials.material_name, relations.user_name, budget.budget_ID, relations.disburse, relations.date, relations.note, materials.amount, materials.budget FROM materials, relations, budget WHERE (materials.material_name = %s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name) or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name)  or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name) or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name)  or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name)  or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name)  ORDER BY relations.date DESC", GetSQLValueString($colname_Recordset0, "text"),GetSQLValueString($colname_Recordset1, "text"),GetSQLValueString($colname_Recordset2, "text"),GetSQLValueString($colname_Recordset3, "text"),GetSQLValueString($colname_Recordset4, "text"),GetSQLValueString($colname_Recordset5, "text"));
			
			$Recordset4 = mysql_query($query_Recordset4, $conitmaterial) or die(mysql_error());
			$row_Recordset4 = mysql_fetch_assoc($Recordset4);
			$totalRows_Recordset4 = mysql_num_rows($Recordset4);
			
			//echo $query_Recordset4;
		
		break;
			
			
		case 7:
			mysql_select_db($database_conitmaterial, $conitmaterial);
			$query_Recordset4 = sprintf("SELECT materials.material_name, relations.user_name, budget.budget_ID, relations.disburse, relations.date, relations.note, materials.amount, materials.budget FROM materials, relations, budget WHERE (materials.material_name = %s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name) or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name)  or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name) or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name)  or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name)  or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name)  or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name) ORDER BY relations.date DESC", GetSQLValueString($colname_Recordset0, "text"),GetSQLValueString($colname_Recordset1, "text"),GetSQLValueString($colname_Recordset2, "text"),GetSQLValueString($colname_Recordset3, "text"),GetSQLValueString($colname_Recordset4, "text"),GetSQLValueString($colname_Recordset5, "text"),GetSQLValueString($colname_Recordset6, "text"));
			
			$Recordset4 = mysql_query($query_Recordset4, $conitmaterial) or die(mysql_error());
			$row_Recordset4 = mysql_fetch_assoc($Recordset4);
			$totalRows_Recordset4 = mysql_num_rows($Recordset4);
			//echo $query_Recordset4;
		
		break;
			

		case 8:
			mysql_select_db($database_conitmaterial, $conitmaterial);
			$query_Recordset4 = sprintf("SELECT materials.material_name, relations.user_name, budget.budget_ID, relations.disburse, relations.date, relations.note, materials.amount, materials.budget FROM materials, relations, budget WHERE (materials.material_name = %s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name) or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name)  or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name) or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name)  or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name)  or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name)  or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name)  or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name)  ORDER BY relations.date DESC", GetSQLValueString($colname_Recordset0, "text"),GetSQLValueString($colname_Recordset1, "text"),GetSQLValueString($colname_Recordset2, "text"),GetSQLValueString($colname_Recordset3, "text"),GetSQLValueString($colname_Recordset4, "text"),GetSQLValueString($colname_Recordset5, "text"),GetSQLValueString($colname_Recordset6, "text"),GetSQLValueString($colname_Recordset7, "text"));
			
			$Recordset4 = mysql_query($query_Recordset4, $conitmaterial) or die(mysql_error());
			$row_Recordset4 = mysql_fetch_assoc($Recordset4);
			$totalRows_Recordset4 = mysql_num_rows($Recordset4);
			//echo $query_Recordset4;
		
		break;
			

		case 9:
			mysql_select_db($database_conitmaterial, $conitmaterial);
			$query_Recordset4 = sprintf("SELECT materials.material_name, relations.user_name, budget.budget_ID, relations.disburse, relations.date, relations.note, materials.amount, materials.budget FROM materials, relations, budget WHERE (materials.material_name = %s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name) or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name)  or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name) or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name)  or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name)  or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name)  or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name)  or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name) or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name) ORDER BY relations.date DESC", GetSQLValueString($colname_Recordset0, "text"),GetSQLValueString($colname_Recordset1, "text"),GetSQLValueString($colname_Recordset2, "text"),GetSQLValueString($colname_Recordset3, "text"),GetSQLValueString($colname_Recordset4, "text"),GetSQLValueString($colname_Recordset5, "text"),GetSQLValueString($colname_Recordset6, "text"),GetSQLValueString($colname_Recordset7, "text"),GetSQLValueString($colname_Recordset8, "text"));
			
			$Recordset4 = mysql_query($query_Recordset4, $conitmaterial) or die(mysql_error());
			$row_Recordset4 = mysql_fetch_assoc($Recordset4);
			$totalRows_Recordset4 = mysql_num_rows($Recordset4);
			//echo $query_Recordset4;
		
		break;
			
		case 10:
			mysql_select_db($database_conitmaterial, $conitmaterial);
			$query_Recordset4 = sprintf("SELECT materials.material_name, relations.user_name, budget.budget_ID, relations.disburse, relations.date, relations.note, materials.amount, materials.budget FROM materials, relations, budget WHERE (materials.material_name = %s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name) or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name)  or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name) or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name)  or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name)  or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name)  or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name)  or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name) or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name)  or (materials.material_name =%s AND materials.material_ID = relations.material_name AND materials.budget = budget.budget_name)  ORDER BY relations.date DESC", GetSQLValueString($colname_Recordset0, "text"),GetSQLValueString($colname_Recordset1, "text"),GetSQLValueString($colname_Recordset2, "text"),GetSQLValueString($colname_Recordset3, "text"),GetSQLValueString($colname_Recordset4, "text"),GetSQLValueString($colname_Recordset5, "text"),GetSQLValueString($colname_Recordset6, "text"),GetSQLValueString($colname_Recordset7, "text"),GetSQLValueString($colname_Recordset8, "text"),GetSQLValueString($colname_Recordset9, "text"));
			
			$Recordset4 = mysql_query($query_Recordset4, $conitmaterial) or die(mysql_error());
			$row_Recordset4 = mysql_fetch_assoc($Recordset4);
			$totalRows_Recordset4 = mysql_num_rows($Recordset4);
			//echo $query_Recordset4;
		
		break;
		}

 ?>
<html lang="en">
<?php

require_once __DIR__ . '/vendor/autoload.php';

	$defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
	$fontDirs = $defaultConfig['fontDir'];
	
	$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
	$fontData = $defaultFontConfig['fontdata'];
	$mpdf = new \Mpdf\Mpdf([
		'pagenumPrefix' => 'Page number ',
		'pagenumSuffix' => ' - ',
		'nbpgPrefix' => ' out of ',
		'nbpgSuffix' => ' pages'
	]);
	$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);  //"L" for Landscape
	$mpdf = new \Mpdf\Mpdf([
		'fontDir' => array_merge($fontDirs, [
			__DIR__ . '/tmp',
		]),
		'fontdata' => $fontData + [
			'sarabun' => [
				'R' => 'THSarabunNew.ttf',
				'I' => 'THSarabunNew Italic.ttf',
				'B' => 'THSarabunNew Bold.ttf',
				'BI' => 'THSarabunNew Bolditalic.ttf',
			]
		],
		'default_font' => 'sarabun'
	]);
ob_start();

?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	<style>
	p {
  font-size: 21.5px; /* 40px/16=2.5em */
}
	div.a {
  line-height: 1;
}

div.b {
  line-height: 1.6;
}
#customers
 {
	border: 0;
  width: 100%;
}

#customers td, #customers th
 {
 border-style: none;
  padding: 2px;
}

#customers tr:nth-child(even)
{background-color: 
white;}

#customers tr:hover {background-color: white;}

#customers th 
{
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: white;
  color: red;
  
}
</style>
</head>
<body>
<div class="container-fluid">
	</div>
<table id="customers">
  <tr>

   <td colspan="6" align="center" ><h1>บัญชีจ่ายวัสดุ</h1></td>
  </tr>
  <tr>
   <td colspan="6" align="right" > <div class="a"><p>ส่วนราชการ มหาวิทยาลัยราชภัฎพิบูลสงคราม</p></div></td>
  </tr>
  <tr>
   <td colspan="6" align="right" > <div class="a"><p>หน่วยงาน คณะวิทยาศาสตร์และเทคโนโลยี</p></div></td>
  </tr>
  <tr>
    <td><p>แผ่นที่</p></td>
  </tr>
  <tr>
	  
    <td colspan="2" ><p>ประเภท</p></td>  
    <td  colspan="3" align="left" ><p>ชนิดวัสดุ &nbsp; <?php echo $row_Recordset4['material_name']; ?></p></td></div>
    <td><p>รหัส</p> </td>
  </tr>
  <tr>
    <td colspan="5" align="left" ><p>ขนาดหรือลักษณะ</p></td>
    <td><p>จำนวนอย่างสูง</p></td>
  </tr>
  <tr>
    <td colspan="2" ><p>หน่วยที่นับ</p></td>
    
    <td colspan="3" align="left"><p>ที่เก็บ</p></td>
    
    <td><p>จำนวนอย่างต่ำ</p></td>
  </tr>
  
</table>
	<style>
		table,
		td,
		th {
			font-size: 21.5px;;
			border: 1px solid black;
		}

		table {
			border-collapse: collapse;
			width: 100%;
		}

		th {
			font-size: 21.5px;;
			text-align: cente;
		}
	</style>
	</head>
	<body>
    <br>

		<table>
		<a  href="Reportlist.pdf">  <button type="button" class="btn btn-outline-success">โหลดเอกสาร</button></a>
			<tr>
			<?php
				$str= $row_Recordset4
			?>

				<th rowspan="3"><p>วัน เดือน ปี</p></th>
				<th rowspan="3"><p>จ่ายให้</p></th>
				<th rowspan="3">เลขเอกสาร</th>
				<th rowspan="3">ราคาต่อหน่วย(บาท)</th>
				<th colspan="3">จำนวน</th>
				<th rowspan="3">จำนวนเงินคงเหลือ</th>
				<th rowspan="3">หมายเหตุ</th>
			</tr>

			<tr>
				<td align="center">รับ</td>
				<td align="center">จ่าย</td>
				<td align="center">คงเหลือ</td>
			</tr>
			<tr>
				<?php do { ?>
			<tr>
				<td align="center"><?php $str =$row_Recordset4['date']; echo substr($str,0,11);?>
				<td align="left"><?php echo $row_Recordset4['user_name']; ?></td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td align="center"><?php echo $row_Recordset4['disburse']; ?></td>
				<td align="center"><?php echo $row_Recordset4['amount']; ?></td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<?php } while($row_Recordset4=mysql_fetch_assoc($Recordset4)); ?>
		</table>
		
	<?php
	error_reporting( error_reporting() & ~E_NOTICE );
		$html=ob_get_contents();
		$mpdf->AddPage('L');
		$mpdf->setHeader('{PAGENO}');
		$mpdf->WriteHTML($html);

		$mpdf->output("ReportList.pdf");
		ob_end_flush();
		
	?>
		</tr>
		<tr>

		</tr>
		</table>

</html>