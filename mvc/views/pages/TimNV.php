<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">        
		   function func(){
			 var tieuchi = document.getElementById("choose").value;
			 var info = document.getElementById("txthoten").value;
			var url = "http://localhost/quanlynhansu/TimNV/search/" + tieuchi + "/" + info;
			window.location.href = url;
		 }
		 </script>
</head>
<body bgcolor = "#BBFFCC">
	

		<table width="100%" border="0">
			
			<tr>
				<td>
					Chọn tiêu chí tìm kiếm:
				</td>
				<td>
					<select id="choose" name="choose">
						<option value="maNV">Tìm kiếm theo mã nhân viên</option>
						<option value="hoten">Tìm kiếm theo họ tên</option>
					</select>	
				</td>
			</tr>
			<tr>
				<td>
					Nhập thông tin:
				</td>
				<td>
					<input id="txthoten" type="text" size="20"  name="txthoten">
				</td>
			</tr>
			<tr align="center">
				<td colspan="2">
					<button onclick="func()">OK</button>
					<input type="reset" value="reset">
				</td>
				
			</tr>
		</table>
	

</body>
</html>