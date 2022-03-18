<?php

 class TimNV extends Controller{
     function display(){
          //call Models
          $timnv = $this->model("SinhVienModel");
          //call Views
          $this->view($timnv->CheckLog(), [
            "Page"=>"TimNV",
        ]);
     }
     function search( $tieuchi, $info ){
         //call Models
         $timnv = $this->model("SinhVienModel");
         $result = $timnv->GetNV($tieuchi, $info );
         //call Views
         $this->view($timnv->CheckLog(), [
            "Page"=>"XemNV",
            "result"=>$result
        ]);
     }
}
?>