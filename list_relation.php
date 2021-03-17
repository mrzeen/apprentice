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

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "insertmaterial")) {

  $insertGoTo = "test_1.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}


mysql_select_db($database_conitmaterial, $conitmaterial);
$query_Recordset1 = "SELECT user_name, materials.material_name, relations.disburse FROM relations, materials WHERE relations.material_name = materials.material_ID";
$Recordset1 = mysql_query($query_Recordset1, $conitmaterial) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

mysql_select_db($database_conitmaterial, $conitmaterial);
$query_relation = "SELECT * FROM relations";
$relation = mysql_query($query_relation, $conitmaterial) or die(mysql_error());
$row_relation = mysql_fetch_assoc($relation);
$totalRows_relation = mysql_num_rows($relation);


$colname_Recordset4 = "-1";
if (isset($_POST['word2'])) {
  $colname_Recordset4 = $_POST['word2'];

}

unset($_POST['word2']);

mysql_select_db($database_conitmaterial, $conitmaterial);
$query_Recordset4 = sprintf("select DISTINCT m.material_name, m.budget from materials m inner join relations r on m.material_ID = r.material_name where m.material_name LIKE %s ORDER BY r.date DESC", GetSQLValueString("%" . $colname_Recordset4 . "%", "text"));
$Recordset4 = mysql_query($query_Recordset4, $conitmaterial) or die(mysql_error());
$row_Recordset4 = mysql_fetch_assoc($Recordset4);
$totalRows_Recordset4 = mysql_num_rows($Recordset4);
//echo $query_Recordset4


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ทะเบียนวัสดุเทคโนโลยีสารสนเทศ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 3500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4><a href="index.php">วัสดุเทคโนโลยีสารสนเทศ</a></h4>
      <ul class="nav nav-pills nav-stacked">
        <li><a href="insertuser.php">เพิ่มผู้ใช้</a></li>
        <li><a href="insertmaterial.php">เพิ่มข้อมูลวัสดุ</a></li>
        <li><a href="insertbudget.php">เพิ่มข้อมูลงบประมาณ</a></li>
        <li><a href="prerelation.php">ข้อมูลคำขอเบิก</a></li>
        <li><a href="insertrelation.php">เบิกวัสดุ</a></li>
        <li ><a href="showrelation.php">ข้อมูลการเบิก</a></li>
        <li class="active"><a href="list_relation.php">รายการการเบิก</a></li>
        <li><a href="<?php echo $logoutAction ?>">ออกจากระบบ</a></li>
      </ul><br>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Blog..">
        <span class="input-group-btn">
         <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
        </button>
        </span></div>
</div>
    <div class="col-sm-9">
      <h4><small>ข้อมูลการเบิก</small></h4>
      <hr>
       <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
        <p>
          <label for="word">ค้นหารหัสงบประมาณ</label>
          <input type="text" name="word2" id="word">
          <input type="submit" name="btnGo" id="btnGo" value="ค้นหา">
        </p>
      </form>
      <a target="_blank" href="reportrelation.php"><input name="btnPrint" type="button" class="btn btn-primary" value="พิมพ์"></a>
      
        <form action="test_1.php" method="post" enctype="multipart/form-data" name="form2" id="form2">
      <table class="table table-condensed" width="700" border="0">
        <tr>
          <th scope="col">วัสดุ</th>
          <th scope="col">งบประมาณ</th>
        <?php do { ?>
        <tr>
        <td><input type="checkbox" id="check" name="check[]" value="<?php  echo $row_Recordset4['material_name']; ?>" > <?php  echo $row_Recordset4['material_name']; ?></td>
          <td><?php  echo $row_Recordset4['budget']; ?></td>
  </tr>

<?php } while($row_Recordset4=mysql_fetch_assoc($Recordset4)); ?>
      </table>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <div class="row"></div>
        <div class="form-group">        
              <div class=div class="col-sm-3">
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>
              <input type="hidden" name="MM_insert" value="showrelationmaterial">
      <div class="row"></div>
    </div>
    <p>&nbsp;</p>
  </div>
</div>

<footer class="container-fluid">
  <p>Power by Phongsatorn&nbsp; Taithong</p>
</footer>
</body>
</html>
<?php
mysql_free_result($Recordset1);

mysql_free_result($relation);

mysql_free_result($Recordset4);
?>

mysql_free_result($relation);

mysql_free_result($Recordset4);
?>
