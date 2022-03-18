<?php

 class CapNhatPB extends Controller{
     function display(){
          //call Models
          $displaypb = $this->model("SinhVienModel");
          $result = $displaypb->GetPBList();
          //call Views
          $this->view($displaypb->CheckLog(), [
            "Page"=>"CapNhatPB",
            "result"=>$result
        ]);
     }
     function formUpdate($IDPB){
          //call Models
          $form = $this->model("SinhVienModel");
          $result = $form->GetPB($IDPB);
          //call Views
         while( $row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
             $IDPB = $row["IDPB"];
             $tenpb = $row["tenpb"];
             $mota = $row["mota"];
         }
         $this->view($form->CheckLog(), [
            "Page"=>"formCapNhat",
            "IDPB"=>$IDPB,
            "tenpb"=>$tenpb,
            "mota"=>$mota
        ]);
     }
     function update( $IDPB, $tenpb, $mota ){
         //call Models
         $updatepb = $this->model("SinhVienModel");
         $result = $updatepb->UpdatePB( $IDPB, $tenpb, $mota );
         //call Views
         $this->view($updatepb->CheckLog(), [
            "Page"=>"CapNhatPB",
            "result"=>$result
        ]);
     }
}
?>