<?php
echo '<table border = "1" width = "100%" ';
	echo "<TR>
				<TD>IDPB</TD>
				<TD>Tên phòng ban</TD>
				<TD>Mô tả</TD>
                <TD>Xem nhân viên</TD>
			</TR>
			";

	while ($row = mysqli_fetch_array($data["result"], MYSQLI_ASSOC)){

		echo
			'<TR>
				<TD>'.$row["IDPB"].'</TD>
				<TD>'.$row["tenpb"].'</TD>
				<TD>'.$row["mota"].'</TD>
                <TD><a href="http://localhost/quanlynhansu/XemNVPBB/XemNVPBBB/'.$row["IDPB"].'">XXX</a></TD>
			</TR>';
	}
echo '</table>';
?>