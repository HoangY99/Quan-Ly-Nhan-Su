<?php
echo '<table border = "1" width = "100%" ';
	echo "<TR>
				<TD>IDNV</TD>
				<TD>Họ tên</TD>
				<TD>IDPB</TD>
				<TD>Địa chỉ</TD>
			</TR>
			";

	while ($row = mysqli_fetch_array($data["result"], MYSQLI_ASSOC)){

		echo
			'<TR>
				<TD>'.$row["IDNV"].'</TD>
				<TD>'.$row["Hoten"].'</TD>
				<TD>'.$row["IDPB"].'</TD>
				<TD>'.$row["Diachi"].'</TD>
			</TR>';
	}
echo '</table>';
?>