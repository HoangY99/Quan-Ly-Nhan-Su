<?php

 class ThemNV extends Controller{
     function display(){
          //call Models
          $addnv = $this->model("SinhVienModel");
          //call Views
          $this->view($addnv->CheckLog(), [
            "Page"=>"ThemNV",
        ]);
     }
     function Add( $IDNV, $hoten, $IDPB, $diachi ){
         //call Models
         $addnv = $this->model("SinhVienModel");
         $result = $addnv->AddNV( $IDNV, $hoten, $IDPB, $diachi );
         //call Views
         $this->view($addnv->CheckLog(), [
            "Page"=>"XemNV",
            "result"=>$result
        ]);
     }
}
?>