<!DOCTYPE html>
<html>
<head>
	<title>Thêm nhân viên</title>
    <script type="text/javascript">          
		   function func(){
			 var IDNV = document.getElementById("IDNV").value;
			 var hoten = document.getElementById("hoten").value;
			 var IDPB = document.getElementById("IDPB").value;
			 var diachi = document.getElementById("diachi").value;

			var url = "http://localhost/quanlynhansu/ThemNV/Add/" + IDNV + "/" + hoten + "/" + IDPB + "/" + diachi ;
			window.location.href = url;
		 }
		 </script>
</head>
<body bgcolor="#BBFFCC">
	
		<table width="100%" border="0">
			<caption>Thêm nhân viên</caption>
			<tr>
				<td>Mã nhân viên:</td>
				<td><input type="text" size="20" id="IDNV"></td>
			</tr>
			<tr>
				<td>Họ tên:</td>
				<td><input type="text" size="20" id="hoten"></td>
			</tr>
			<tr>
				<td>Mã phòng ban:</td>
				<td><input type="text" size="20" id="IDPB"></td>
			</tr>
			<tr>
				<td>Địa chỉ:</td>
				<td><input type="text" size="20" id="diachi"></td>
			</tr>
			<tr align="center">
				<td colspan="2">
                    <button onclick="func()">OK</button>
					<input type="reset" value="Reset">
				</td>
			</tr>
		</table>


</body>
</html>