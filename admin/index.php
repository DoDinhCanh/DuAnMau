<?php
    include "header.php";

    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
            case 'addsp':
                include "sanpham/addProduct.php";
                break;
            case 'adddm':
                include "danhmuc/addCategory.php";
                break;
            default:
                break;
        }
    }

    include "home.php";
    include "footer.php";

?>