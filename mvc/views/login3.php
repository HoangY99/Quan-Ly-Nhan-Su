<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style>
		body{
			background-image: url("http://sv.dut.udn.vn/Styles/images/SlideShow01.png");
			background-repeat: no-repeat;
			background-size: cover;
  			background-attachment: fixed;
		}
	</style>
</head>
<body bgcolor="#BBFFCC">
	<form action="http://localhost/live2/Login/Kiemtra" method="post">
		<table border="0">
			<caption>Login</caption>
			<tr>
				<td>UserName</td>
				<td><input type="text" size="20" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" size="20" name="password"></td>
			</tr>
			<tr align="center">
				<td colspan="2">
					<input type="submit" value="OK">
					<input type="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>

</body>
</html>