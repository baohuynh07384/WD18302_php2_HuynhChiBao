<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
			
				<div class="col-md-5 col-md-push-2">
					<div id="product-main-img">
						<?
						$listImg = $pro->getImgIdProduct($id);
						foreach($listImg as $value){
						echo'<div class="product-preview">
							<img src="./images/'.$value['path'].'" alt="">
						</div>';
						}
						?>
					</div>
				</div>
				<div class="col-md-2  col-md-pull-5">
					<div id="product-imgs">
					<?
						$listImg = $pro->getImgIdProduct($id);
						foreach($listImg as $value){
						echo'<div class="product-preview">
							<img src="./images/'.$value['path'].'" alt="">
						</div>';
						}
						?>
					</div>
				</div>
				<?
				foreach ($productdetail as $item) {
				echo'<div class="col-md-5">
					<div class="product-details">
						<h2 class="product-name">'.$item['name'].'</h2>
						<!-- <div>
							<div class="product-rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o"></i>
							</div>
							<a class="review-link" href="#">10 Review(s) | Add your review</a>
						</div> -->
						<div>
							<h3 class="product-price"></h3>
						</div>
						<p>'.$item['description'].'</p>
						<div class="product-options">
							<label>
								Size
								<select class="input-select">
									<option value="0">1</option>
									<option value="1">2</option>
									<option value="2">3</option>
									<option value="3">4</option>
								</select>
							</label>
							<label>
								Qty
								<input type="number" id="quantity" name="quantity" min="1" class="input-select">
							</label>
						</div>
						<div class="add-to-cart">
							<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
						</div>

						<!-- <ul class="product-btns">
							<li><a href="#"><i class="fa fa-heart-o"></i> add to wishlist</a></li>
							<li><a href="#"><i class="fa fa-exchange"></i> add to compare</a></li>
						</ul> -->
						<ul class="product-links">
							<li>Category:</li>
							<li><a href="#">'.$item['category_name'].'</a></li>
						</ul>
						<!-- <ul class="product-links">
							<li>Share:</li>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-envelope"></i></a></li>
						</ul> -->
					</div>
				</div>';}
				?>
			<div class="col-md-12">
				<div id="product-tab">
					<ul class="tab-nav">
						<li><a data-toggle="tab" href="#tab3">Reviews</a></li>
					</ul>
					<div class="tab-content">
						<div id="tab3" class="">
							<div class="row">
								<div class="col-md-6">
									<div id="reviews">
										<?
										$select = $comment->getList($id);
										?>

										<?
										foreach ($select as $item) {
											echo '
													<ul class="reviews">
											<li>
													<div class="review-heading">
														<h5 class="name">' . $item['username'] . '</h5>
														<p class="date">' . $item['date'] . '</p>
														


													</div>
													<div class="review-body">
														<p>' . $item['content'] . '</p>
														<a>Xóa</a>
														<a style="margin-left:10px;">Cập nhập</a>
													</div>
													</li>
										</ul>';

										}
										?>

										<ul class="reviews-pagination">
											<li class="active">1</li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
										</ul>
									</div>
								</div>
								<?

								if (isset($_POST['submit'])) {
									$content = $_POST['content'];
									$iduser = $_SESSION['username']['id'];
									$id = $_POST['idpro'];
									if (isset($_SESSION['username'])) {
										$comment->addcomment($content, $iduser, $id);
										if (empty($content)) {
											$errorcontent = "Tên không được để trống";
										}
									
									} else {
										echo "<script>document.location='?page=login';</script>";
									}
									echo "<script>document.location='?action=product-detail&id=" . $id . "';</script>";

								}

								?>
								<div class="col-md-3">
									<div id="review-form">
										<form action="index.php?action=product-detail&id=<?= $id ?>"
											enctype="multipart/form-data" class="review-form" method="post">
											<input type="hidden" id="idpro" name="idpro" value="<?= $id ?>">
											<textarea class="input" name="content" placeholder="Your Review"></textarea>
											<?
											if (!empty($errorcontent)) {
												echo '<p class="text-danger">' . $errorcontent . '</p>';
											}
											?>
											<button name="submit" class="primary-btn">Submit</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="section">
	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<div class="section-title text-center">
					<h3 class="title">Related Products</h3>
				</div>
			</div>
			<div class="col-md-3 col-xs-6">
				<div class="product">
					<div class="product-img">
						<img src="./img/product01.png" alt="">
					</div>
					<div class="product-body">
						<p class="product-category">Category</p>
						<h3 class="product-name"><a href="#">product name goes here</a></h3>
						<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
						<div class="product-rating">
						</div>
						<!-- <div class="product-btns">
								<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add
										to wishlist</span></button>
								<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add
										to compare</span></button>
								<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick
										view</span></button>
							</div> -->
					</div>
					<div class="add-to-cart">
						<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>