<?php session_start();
if(!isset($_SESSION['AdminLoginId'])){
  header("location:adminLogin.php");
}
?>
<html>
<head>
<title>Admin panel</title>
<link rel="stylesheet" type:text/css href="admPanel.css">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/jquery.min.js"></script>
<style>
div.header{
  text-align: center;
  font-family: poppins;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 14px 60px;
  background-color: #990066;
}

div.header button{
  background-color: #f0f0f0;
  font-size: 16px;
  font-weight: 550;
  padding: 8px 12px;
  border:2px solid black;
  border-radius: 5px;
}
</style>
</head>
<body>
  <div class="header">
  <h1>Welcome to admin panel- <?php echo $_SESSION['AdminLoginId']?></h1>
<form method="POST">
  <button name="Logout">Log out</button>
</form>
  </div>
<div class="sidebar">
<header>Menu</header>
<ul>
<li><button><i class="fas fa-qrcode"></i> Home</button></li>
<li><button onclick="adminLogin/adminUser.php id="users" class="users""><i class="fas fa-sliders-h"></i> Users</button></li>
<li><button href="#"><i class="fas fa-gift"></i> Product</button></li>
<li><button href="#"><i class="fas fa-handshake"></i> Transactions</button></li>
</ul>
</div

<?php
if(isset($_POST['Logout'])){
  session_destroy();
  header("location:adminLogin.php");
}
?>

<script type="text/javascript">
  d
  };
</script>
</body>
</html>
