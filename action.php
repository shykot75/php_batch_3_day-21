<?php

session_start();

require_once('vendor/autoload.php');
use App\classes\Home;
use App\classes\Product;
use App\classes\Auth;
use App\classes\Dashboard;
use App\classes\UploadFile;
use App\classes\User;

if(isset($_GET['pages'])){

    if($_GET['pages'] == 'product'){
        $product = new Product();
        $products = $product->getProduct();
        include 'pages/product.php';
    }

    elseif($_GET['pages'] == 'product-details'){
        $products = new Product();
        $result = $products->getProductsById($_GET['id']);
        include 'pages/product-details.php';
    }

    elseif($_GET['pages'] == 'search'){

        $product = new Product();
        $products = $product->getProduct();
        include 'pages/search-product.php';
    }


    elseif($_GET['pages'] == 'login'){

        if(isset($_SESSION['id'])){
            $dashboard = new Dashboard();
            $dashboard->dashboard();
        }
        else{
            include 'pages/login.php';
        }
    }
    elseif($_GET['pages'] == 'dashboard'){

        if(isset($_SESSION['id'])){
            include 'pages/dashboard.php';
        }
        else{
            $auth = new Auth();
            $auth->login();
        }
    }

    elseif($_GET['pages'] == 'view-product'){

        if(isset($_SESSION['id'])){
            $product = new Product();
            $products = $product->getProduct();
            include 'pages/user-view-product.php';
        }
        else{
            $auth = new Auth();
            $auth->login();
        }
    }


    elseif($_GET['pages'] == 'file-upload'){

        if(isset($_SESSION['id'])){
            include 'pages/file-upload.php';
        }
        else{
            $auth = new Auth();
            $auth->login();
        }
    }

    elseif($_GET['pages'] == 'view-user'){

        if(isset($_SESSION['id'])){
            $user = new User();
            $result = $user->getAllUser();
            include 'pages/view-user.php';
        }
        else{
            $auth = new Auth();
            $auth->login();
        }
    }

    elseif($_GET['pages'] == 'show-image'){

        if(isset($_SESSION['id'])){
            $upImage = new UploadFile();
            $allProducts =  $upImage->getAllUploadProduct();
            include 'pages/show-image.php';
        }
        else{
            $auth = new Auth();
            $auth->login();
        }
    }


    elseif($_GET['pages'] == 'logout'){

        $auth = new Auth();
        $auth->logout();
    }


    else{
        if(isset($_SESSION['id'])){
            $home = new Dashboard();
            $home->dashboard();
        }
        else {
            $home = new Home();
            $home->index();
        }
    }



}


elseif(isset( $_POST['search_btn'] )){
    $search = new Product($_POST);
    $result = $search->searchID();
    include 'pages/search_result.php';
}

elseif(isset($_POST['login_btn'])){
    $login = new Auth($_POST);
    $message = $login->verify();
    include 'pages/login.php';
}

elseif(isset($_POST['upload_image'])){
    $upload = new UploadFile($_POST);
    $messege = $upload->index();
    include 'pages/file-upload.php';
}






else {
    $home = new Home();
    $home->index();
}
