<?php

// http://localhost/live/Home/Show/1/2

class XemNVPBB extends Controller{

    function XemNVPBBB($IDPB){
        //call Models
        $xemnvpb = $this->model("SinhVienModel");
        $result = $xemnvpb->GetNVPBList($IDPB);

        //call Views
        $this->View($xemnvpb->CheckLog(),[
            "Page"=>"XemNV",
            "result"=>$result
        ]);

    }
}
?>
