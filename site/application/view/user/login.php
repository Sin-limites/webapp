<?PHP
if(!empty($_SESSION['log'])){
  header('Location: /user/dashboard/');
}
?>
  <div id="logincontainer">
    <div id="login">
      <h1>Sin Limites Login</h1>
       <div>
          <form method="post" action="" /><table>
           <tr><td>Username:</td><td><input type="text" name="username" size="25" value="<?PHP if (isset($_POST['username'])){ echo htmlspecialchars($_POST['username'], ENT_QUOTES); }?>"/></td></tr>
            <tr><td>Password:</td><td><input type="password" name="password" size="25"/></td></tr>
            <tr><td colspan="2"><input style="width:100%" type="submit" name="submit" value="Login" /></td></tr>
          </table></form>
      </div>
    </div>
  </div>
  