<?php

 class XemPB extends Controller{
     function XemPB(){
         //call Models
         $Xempb = $this->model("SinhVienModel");
         $result = $Xempb->GetPBList();
         //call Views
         $this->view($Xempb->CheckLog(), [
            "Page"=>"XemPB",
            "result"=>$result
        ]);
     }
}
?>