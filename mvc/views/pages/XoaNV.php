<?php
echo '<table border = "1" width = "100%"> ';
echo "<TR>
            <TD>IDNV</TD>
            <TD>Ho ten</TD>
            <TD>IDPB</TD>
            <TD>Dia Chi</TD>
            <TD>Xoa</TD>
        </TR>
        ";
while ($row = mysqli_fetch_array($data["result"], MYSQLI_ASSOC)){
    echo
        '<TR>
            <TD>'.$row["IDNV"].'</TD>
            <TD>'.$row["Hoten"].'</TD>
            <TD>'.$row["IDPB"].'</TD>
            <TD>'.$row["Diachi"].'</TD>
            <TD><a href="http://localhost/quanlynhansu/XoaNV/Delete/'.$row["IDNV"].' ">XXX</a></TD>
        </TR>';
}

echo '</table>';
?>