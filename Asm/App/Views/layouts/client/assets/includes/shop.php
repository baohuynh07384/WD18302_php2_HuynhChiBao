<!DOCTYPE html>
<html lang="en">
<?
include("./shop/includes/stylesheet.php");
?>

<body>
    <?
    include("./shop/includes/header.php");
    include "./shop/includes/nav.php";
    if (isset($_GET['action'])) {
        switch ($_GET['action']) {
            case "home":
                $cate = new Category;
                $listcategory = $cate->getcategory();
                $pro = new Products;
                $listpronew = $pro->listpronew();
                $listproducts = $pro->listpro();
                include "./shop/includes/Home.php";
                break;
            case "product":
                $pro = new Products();
                $listproducts = $pro->listpro();
                $cate = new Category;
                $listcategory = $cate->getcategory();
                include "./shop/includes/product.php";
                break;
            case "account":
                include "./shop/includes/account.php";
                break;
            case "update-account":
                include "./shop/includes/update-account.php";
                break;
            case "product-detail":
                $id = isset($_GET['id']) ? $_GET['id'] : '';
                $comment = new Comment();
                $pro = new Products();
                $productdetail = $pro->productdetail($id);
                include "./shop/includes/product-detail.php";
                break;
            case "cart":
                include "./shop/includes/cart.php";
                break;

        }
    } else {

        $cate = new Category;
        $listcategory = $cate->getcategory();
        $pro = new Products;
        $listpronew = $pro->listpronew();
        $listproducts = $pro->listpro();
        include "./shop/includes/Home.php";

    }
    include("./shop/includes/footer.php");
    include("./shop/includes/jquery.php");

    ?>
</body>

</html>