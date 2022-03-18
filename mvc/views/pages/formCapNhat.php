<!DOCTYPE html>
 <html>
 <head>
 	<title>Form cap nhat thong tin phong ban</title>

     <script type="text/javascript">          
		   function func(){
			 //var IDNV = document.getElementById("IDNV").value;
			 var IDPB = document.getElementById("IDPB").value;
             var tenpb = document.getElementById("txttenpb").value;
			 var mota = document.getElementById("txtmota").value;

			var url = "http://localhost/quanlynhansu/CapNhatPB/update/" + IDPB + "/" + tenpb + "/" + mota ;
			window.location.href = url;
			console.log(url)
           
		 }                                      
		 </script>
 </head>
 <body>
 		<table width="100%" border="0">'
            <tr>
 				<td>ID phong ban</td>
 				<td><input type="text" size="50" id="IDPB" value="<?php echo $data["IDPB"]; ?>" readonly> </td>
 			</tr>
 			<tr>
 				<td>Ten phong ban</td>
 				<td><input type="text" size="50" id="txttenpb" value="<?php echo $data["tenpb"]; ?>"></td>
 			</tr>
 			<tr>
 				<td>Mo ta</td>
 				<td>
					 
					 <textarea name="txtmota" id="txtmota"  cols="52" rows="10"> <?php echo $data["mota"]; ?> </textarea>

				</td>
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