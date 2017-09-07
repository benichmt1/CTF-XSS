<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Profile Pages</title>
</head>
<body bgcolor="#C3C3C3">
    <h3>
      &gt; Profile Pages Log-In
    </h3>
    <table width="80%">
      <tr>
        <td width="50%">
          <fieldset>
            <legend>About Profile Pages</legend>
            Create your own account on Profile Pages!<br><br>
            Profile pages is a site that allows you to post HTML and Javascript on your profile.<br><br>
            For purposes of this challenge, we have created a button to force an Administrator to view your profile.
            Anything you successfully "alert()" in the admin's browser will be passed along to you! See if you can steal the Administrator's session...<br><br>
          </fieldset>
        </td>
        <td>
          <fieldset>
            <legend>Login</legend>
            <form action="authenticate.php" method="post" name="login" id="login">
              Username: <input type="text" name="username" /><br />
              Password: <input type="password" name="password" /><br />
              <input type="submit" value="Submit" />
            </form>
          </fieldset>
        </td>
      </tr>
    </table><br />
    <h3>
      <a href='register.php'>REGISTER NOW!</a>
    </h3><br />
  </body>
</html>
