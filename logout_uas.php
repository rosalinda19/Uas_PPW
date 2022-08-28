 <?php 
if (!isset($_SESSION['username'])){
    header("Location: menu_uas.php");
}

session_start();
 $_SESSION['username'] = '';
 unset($_SESSION['username']);
 session_destroy();
 header("Location: menu_uas.php");
  ?>