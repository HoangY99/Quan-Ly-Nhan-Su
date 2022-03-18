<?php

 class XemNV extends Controller{
     function XemNV(){
         //call Models
         $Xemnv = $this->model("SinhVienModel");
         $result = $Xemnv->GetNVList();
         //call Views
         $this->view($Xemnv->CheckLog(), [
            "Page"=>"XemNV",
            "result"=>$result
        ]);
     }
}
?>