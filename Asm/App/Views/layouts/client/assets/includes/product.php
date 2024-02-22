<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- ASIDE -->
			<div id="aside" class="col-md-3">
				<!-- aside Widget -->
				<div class="aside">
					<h3 class="aside-title">Categories</h3>
					<div class="checkbox-filter">
					<div class="input-checkbox">
								<label for="category-2">
								<a style="font-size: medium;" href="./?action=product"><strong>ALL</strong></a>
								</label>
							</div>
						
						<?
							foreach($listcategory as $item){
								echo'<div class="input-checkbox">
								<label for="category-2">
									<a style="font-size:medium;"href="./?action=product&id='.$item['id'].'"><strong>'.$item['name_cate'].'</strong></a>
								</label>
							</div>';
							}
						?>	
					</div>
				</div>
				<div class="aside">
					<h3 class="aside-title">Top selling</h3>
					<div class="product-widget">
						<div class="product-img">
							<img src="./img/product01.png" alt="">
						</div>
						<div class="product-body">
							<p class="product-category">Category</p>
							<h3 class="product-name"><a href="#">product name goes here</a></h3>
							<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
						</div>
					</div>

					<div class="product-widget">
						<div class="product-img">
							<img src="./img/product02.png" alt="">
						</div>
						<div class="product-body">
							<p class="product-category">Category</p>
							<h3 class="product-name"><a href="#">product name goes here</a></h3>
							<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
						</div>
					</div>

					<div class="product-widget">
						<div class="product-img">
							<img src="./img/product03.png" alt="">
						</div>
						<div class="product-body">
							<p class="product-category">Category</p>
							<h3 class="product-name"><a href="#">product name goes here</a></h3>
							<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
						</div>
					</div>
				</div>
			</div>
			<div id="store" class="col-md-9">
				<div class="row">
					<?
					$idcate = isset($_GET['id']) ? $_GET['id'] : '';
					if (!empty($idcate)) {
						$prointhecate = $pro->prointhecate($idcate);
						foreach ($prointhecate as $item) {
							echo '<a href="./?action=product-detail&id=' . $item['id'] . '">
					<div class="col-md-4 col-xs-6" style="margin-top: 40px;">
						<div class="product">
							<div class="product-img">';
							$listImg = $pro->getImgIdProduct($item['id']);
							$firtsvalue = $listImg[0];
							echo ' <img src="image/' . $firtsvalue['path'] . ' "alt="">
							</div>';
							echo '<div class="product-body">
							<p class="product-category">' . $item['category_name'] . '</p>
							<h3 class="product-name"><a href="#">' . $item['name'] . '</a></h3>
							<h4 class="product-price">' . $item['price'] . ' VND</h4>
							</div>
					<div class="add-to-cart">
						<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
					</div>
				</div>
			</div>
			</a>';
						}
					} else {
						foreach ($listproducts as $item) {
							echo '<a href="./?action=product-detail&id=' . $item['id'] . '">
					<div class="col-md-4 col-xs-6" style="margin-top: 40px;">
						<div class="product">
							<div class="product-img">';
							$listImg = $pro->getImgIdProduct($item['id']);
							$firtsvalue = $listImg[0];
							echo ' <img src="images/' . $firtsvalue['path'] . ' "alt="">
							</div>';
							echo '<div class="product-body">
							<p class="product-category">' . $item['category_name'] . '</p>
							<h3 class="product-name"><a href="#">' . $item['name'] . '</a></h3>
							<h4 class="product-price">' . $item['price'] . ' VND</h4>
							</div>
					<div class="add-to-cart">
						<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
					</div>
				</div>
			</div>
			</a>';
						}
					}
					?>
					<div class="clearfix visible-lg visible-md"></div>
				</div>
				<!-- /store products -->

				<!-- store bottom filter -->
				<div class="store-filter clearfix">
					<ul class="store-pagination">
						<li class="active">1</li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
					</ul>
				</div>
				<!-- /store bottom filter -->
			</div>
			<!-- /STORE -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>