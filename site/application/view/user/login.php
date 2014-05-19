<?PHP
if(!empty($_SESSION['log'])){
  header('Location: /user/dashboard/');
}
include_once "_header.php";

?>

  <div id="main" class="grouping spacing">
    <h1>Login</h1>
   <div class="sb-1 spacing">
      <form method="post" action="" /><table>
       <tr><td>E-mail:</td><td><input type="text" name="username" size="25" value="<?PHP if (isset($_POST['username'])){ echo htmlspecialchars($_POST['username'], ENT_QUOTES); }?>"/></td></tr>
        <tr><td>Password:</td><td><input type="password" name="password" size="25"/></td></tr>
        <tr><td colspan="2"><input type="submit" name="submit" value="Login" /></td></tr>
      </table></form>
    </div>
  </div>