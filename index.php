<?php
include_once "views/layouts/header.php";

if(isset($_GET['act'])) {
    $act=$_GET['pg'];
    switch($act) {
        case 'about':
            include_once "controller/pageController.php";
            $ctrl_page=new PageController();
            $ctrl_page->set_vew("about");
            $ctrl_page->view();
            break;
        case 'contact':
            include_once "controller/pageController.php";
            $ctrl_page=new PageController();
            $ctrl_page->set_vew("contact");
            $ctrl_page->view();
            break;
        case 'product':
            include_once "controller/productController.php";
            $ctrl_page=new ProductController();
            $ctrl_page->set_vew("product");
            $ctrl_page->view();
            break;
        default :
            include_once "controller/HomeController.php";
            $ctrl_home=new HomeController();
            $ctrl_home->set_view("home");
            $ctrl_home->view();
            break;
    }
}else{
    include_once "controller/HomeController.php";
    include_once "models/config.php";
    include_once "models/connectDB.php";
    include_once "models/productModel.php";
    $conn=new ConnectDB(SERVER_NAME, DB_NAME, USERNAME, PASSWORD);

    $ProModel=new ProductModel(SERVER_NAME, DB_NAME, USERNAME, PASSWORD);
    $dssp=$ProModel->get_product_all();

    $ctrl_home=new HomeController();
    $ctrl_home->set_view("home");
    $ctrl_home->view();
}

include_once "views/layouts/footer.php";

?>