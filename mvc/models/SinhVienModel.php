<?php
class SinhVienModel extends DB{
    public function GetSV(){
        return "Nguyen Van Hoa";
    }

    public function Tong($n, $m){
        return $n + $m;
    }

    public function SinhVien(){
        $qr = "SELECT * FROM sinhvien";
        return mysqli_query($this->con, $qr);
    }
    
    public function GetNews($which){
        $qr2 = "SELECT * FROM tintuc WHERE id = '$which' ";
        return mysqli_query($this->con, $qr2);
    }

    public function GetSP($which){
        $qr3 = "SELECT * FROM sanpham WHERE id = '$which' ";
        return mysqli_query($this->con, $qr3);
    }

    //Login
    public function CheckAccount($username, $password){    
        $qr4 = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($this->con, $qr4);
         if(mysqli_num_rows($result) == 0){
             return false;
         }else return true;
    }

    public function UpdateLog($action){
        if( $action ){
            $qr = "update logstatus set status = '1'";
            return mysqli_query($this->con, $qr);
        }else {
            $qr = "update logstatus set status = '0'";
            return mysqli_query($this->con, $qr);
        }
    }
    public function CheckLog(){
        $qr = "select * from logstatus";   
        $result = mysqli_query($this->con, $qr);
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $status = $row["status"];
        }
        return  $status;
    }
    
    //XemNV
    public function GetNVList(){
        $qr = "select * from nhanvien";
        return mysqli_query($this->con, $qr);
    }

    //XemPB
    public function GetPBList(){
        $qr = "select * from phongban";
        return mysqli_query($this->con, $qr);
    }

     //XemNVPB
     public function GetNVPBList($mapb){
        $qr = "select * from nhanvien  where IDPB = '$mapb' ";
        return mysqli_query($this->con, $qr);
    }

    //TimNV
    public function GetNV($tieuChi, $info){
        if($tieuChi == "maNV"){
        return mysqli_query($this->con, "select * from nhanvien where IDNV= '$info'");
        }
            else{
                return mysqli_query($this->con, "select * from nhanvien where hoten= '$info'");
            }
       
    }

    //AddNV
    public function AddNV( $IDNV, $hoten, $IDPB, $diachi ){
        $qr =  "INSERT INTO nhanvien (IDNV, hoten, IDPB, diachi) VALUES ('$IDNV', '$hoten', '$IDPB','$diachi')";
        mysqli_query($this->con, $qr);
        $qr2 = "select * from nhanvien";
        return mysqli_query($this->con, $qr2);
    }

    //CapNhatPB
    public function GetPB($IDPB){
        $qr = "select * from phongban where IDPB= '$IDPB'";
        return mysqli_query($this->con, $qr);
    }
    public function UpdatePB( $IDPB, $tenpb, $mota ){
        $qr =  "UPDATE phongban SET tenpb = '$tenpb', mota = '$mota' WHERE IDPB = '$IDPB'";
        mysqli_query($this->con, $qr);
        $qr2 = "select * from phongban";
        return mysqli_query($this->con, $qr2);
    }

    //XoaNV
    public function DeleteNV( $IDNV ){
        $qr =  "DELETE FROM nhanvien WHERE IDNV='$IDNV'";
        mysqli_query($this->con, $qr);
        $qr2 = "select * from nhanvien";
        return mysqli_query($this->con, $qr2);
    }

    //XoaNhieuNV
    public function DeleteNVs( $IDNVs = array() ){
        foreach($IDNVs as $IDNV) {
            //Xử lý các phần tử được chọn
           mysqli_query($this->con, "DELETE FROM nhanvien WHERE IDNV = '$IDNV' ");
        }
           $qr2 = "select * from nhanvien";
           return mysqli_query($this->con, $qr2);
    }
    
}
?>