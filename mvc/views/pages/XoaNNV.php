
<!DOCTYPE html>
<html>
<head>
	<title></title>
    
<script type="text/javascript">        
			var str = "http://localhost/quanlynhansu/XoaNhieuNV/Deletes";
		   function push(){
		   	//console.log("cac");
               var checkboxes = document.querySelectorAll('input[name="delete"]:checked');
			   //let values = [];
			   checkboxes.forEach((checkbox) => {
				//values.push(checkbox.value);
				str = str + "/" + checkbox.value; 
				});               
				//str = str + "/" + values;
				window.location.href = str;
            }
</script>
</head>
<body>
	
		<table border = "1" width = "100%">
			<TR>
					<TD>IDNV</TD>
					<TD>Ho ten</TD>
					<TD>IDPB</TD>
					<TD>Dia Chi</TD>
					<TD>Xoa</TD>
				</TR>
			<?php 
				
		        while ($row = mysqli_fetch_array($data["result"], MYSQLI_ASSOC)){
				echo
					'<TR>
						<TD>'.$row["IDNV"].'</TD>
						<TD>'.$row["Hoten"].'</TD>
						<TD>'.$row["IDPB"].'</TD>
						<TD>'.$row["Diachi"].'</TD>
						<TD> <input type="checkbox" name="delete" id='.$row["IDNV"].'  value= '.$row["IDNV"].'  </TD>
					</TR>';
				}
			 ?>

			 <tr align="center">
 				<td colspan="1">
                    <button onclick="push()">Xóa</button>
 				
 				</td>
 			</tr>
		 </table>

	
</body>
</html>