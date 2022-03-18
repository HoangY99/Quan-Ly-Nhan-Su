<?php

 class XoaNV extends Controller{
     function display(){
          //call Models
          $xoanv = $this->model("SinhVienModel");
          $result = $xoanv->GetNVList();
          //call Views
          $this->view($xoanv->CheckLog(), [
            "Page"=>"XoaNV",
            "result"=>$result
        ]);
     }
     function Delete( $IDNV ){
         //call Models
         $xoanv = $this->model("SinhVienModel");
         $result = $xoanv->DeleteNV( $IDNV );
         //call Views
         $this->view($xoanv->CheckLog(), [
            "Page"=>"XoaNV",
            "result"=>$result
        ]);
     }
}
?>