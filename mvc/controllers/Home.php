<?php

// http://localhost/live/Home/Show/1/2

class Home extends Controller{
    function SayHi(){
        //call Models
        $Hi = $this->model("SinhVienModel");
        //checkLog
        //call Views
        $this->view($Hi->CheckLog(), [
            "Page"=>"about",
            
        ]);

    }
   

    function Show($a, $b){        
        // Call Models
        $teo = $this->model("SinhVienModel");
        $tong = $teo->Tong($a, $b); // 3

        // Call Views
        $this->view([
            "Page"=>"news",
            "Number"=>$tong,
            "Mau"=>"red",
            "SoThich"=>["A", "B", "C"],
            "SV" => $teo->SinhVien()
        ]);
    }
}
?>