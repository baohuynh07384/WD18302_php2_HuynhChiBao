<div class="section">

    <div class="container">

        <div class="row">
        <a href="./">
                <div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="images/All.png" style="height: 300px;">
                        </div>
                        <div class="shop-body">
                            <h3>All product</h3>
                            <a href="./" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </a>
            <?
            foreach ($listcategory as $item) {
                echo '<div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="images/' . $item['image'] . '.png" alt=""style="height: 300px;">
                        </div>
                        <div class="shop-body">
                            <h3>' . $item['name_cate'] . '</h3>
                            <a href="" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>
</div>