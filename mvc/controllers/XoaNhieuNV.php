<?php

 class XoaNhieuNV extends Controller{
     function display(){
          //call Models
          $xoannv = $this->model("SinhVienModel");
          $result = $xoannv->GetNVList();
          //call Views
          $this->view($xoannv->CheckLog(), [
            "Page"=>"XoaNNV",
            "result"=>$result
        ]);
     }
     function Deletes( $IDNVs = array() ){
         //call Models
         $xoannv = $this->model("SinhVienModel");
         $result = $xoannv->DeleteNVs( $IDNVs );
         //call Views
         $this->view($xoannv->CheckLog(), [
            "Page"=>"XoaNNV",
            "result"=>$result
        ]);
     }
}
?>