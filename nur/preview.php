





<?php include 'inc1/header4.php'; ?>
<?php
  if (isset($_GET['proid'])) {

    $id = $_GET['proid'];
  }

  ?>



  <?php

  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $quantity = $_POST['quantity'];

    $addCart = $ct->addToCart($quantity, $id);
  }

  ?>

  <?php

  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['campare'])) {
    $productId = $_POST['productId'];
    $insertCom = $pd->inserCompareDate($productId, $cmrId);
  }

  ?>

  <?php

  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['wlist'])) {
    $saveWlist = $pd->saveWishListData($id, $cmrId);
  }

  ?>
  <style>
    .mybutton {
      width: 100px;
      float: left;
      margin-right: 45px;
    }
  </style>

<div style="font-size: 15px;" class="container">
		<div class="card">
			<div class="container-fliud">


				<div class="wrapper row">

					<div class="preview col-md-6">
							<?php
          $getPd = $pd->getSingleProduct($id);
          if ($getPd) {
            while ($result = $getPd->fetch_assoc()) {


              ?>
						<div class="preview-pic tab-content">


						  <div class="tab-pane active" id="pic-1"> <img src="admin/<?php echo $result['image']; ?>" alt="" /></div>
						  
						</div>
						
						
					</div>
					<div class="details col-md-6">
						<h2 class="product-title"><?php echo $result['productName']; ?> </h2>
						
						<p class="product-description">
						 <?php echo $result['body']; ?></p>
						 <div class="price">
                  <p>Price: <span>$<?php echo $result['price']; ?></span></p>
                  <p>Category: <span><?php echo $result['catName']; ?></span></p>
                  <p>Brand:<span><?php echo $result['brandName']; ?></span></p>
                </div>
                 <div class="add-cart">
                  <form action=" " method="post">
                    <input type="number" class="buyfield" name="quantity" value="1" />
                    <input type="submit" class="buysubmit" name="submit" value="Add to Cart" />
                  </form>
                </div>

                 <span >

                  <?php

                      if (isset($addCart)) {
                        echo $addCart;
                      }
                      ?>

                </span>
                <?php

                    if (isset($insertCom)) {
                      echo $insertCom;
                    }


                    if (isset($saveWlist)) {
                      echo $saveWlist;
                    }
                    ?>


                <?php
                    $login =  Session::get("cuslogin");
                    if ($login == true) { ?>




                  <div class="add-cart">
                    <div class="action">
                      <form action=" " method="post">
                        <input type="hidden" class="buyfield" name="productId" value="<?php echo $result['productId']; ?>" />
                        <input type="submit" class="buysubmit" name="campare" value="Add to Campare" />
                      </form>
                    </div>
						
						<div class="mybutton">
      <form action=" " method="post">

            <input type="submit" class="buysubmit" name="wlist" value="Wish List" />
      </form>
    </div>
 </div>

                <?php  } ?>
              </div>
              <div class="product-desc">
                <h2>Product Details</h2>
                <?php echo $result['body']; ?>
              </div>
          <?php }
          } ?>
        </div>
       
					</div>
				</div>
			</div>
		</div>
	</div>
	<style type="text/css">
		
/*****************globals*************/
body {
  font-family: 'open sans';
  overflow-x: hidden; }

img {
  max-width: 100%; }

.preview {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }
  @media screen and (max-width: 996px) {
    .preview {
      margin-bottom: 20px; } }

.preview-pic {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.preview-thumbnail.nav-tabs {
  border: none;
  margin-top: 15px; }
  .preview-thumbnail.nav-tabs li {
    width: 18%;
    margin-right: 2.5%; }
    .preview-thumbnail.nav-tabs li img {
      max-width: 100%;
      display: block; }
    .preview-thumbnail.nav-tabs li a {
      padding: 0;
      margin: 0; }
    .preview-thumbnail.nav-tabs li:last-of-type {
      margin-right: 0; }

.tab-content {
  overflow: hidden; }
  .tab-content img {
    width: 100%;
    -webkit-animation-name: opacity;
            animation-name: opacity;
    -webkit-animation-duration: .3s;
            animation-duration: .3s; }

.card {
  margin-top: 50px;
  background: #eee;
  padding: 3em;
  line-height: 1.5em; }

@media screen and (min-width: 997px) {
  .wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex; } }

.details {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }

.colors {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.product-title, .price, .sizes, .colors {
  text-transform: UPPERCASE;
  font-weight: bold; }

.checked, .price span {
  color: #ff9f1a; }

.product-title, .rating, .product-description, .price, .vote, .sizes {
  margin-bottom: 15px; }

.product-title {
  margin-top: 0; }

.size {
  margin-right: 10px; }
  .size:first-of-type {
    margin-left: 40px; }

.color {
  display: inline-block;
  vertical-align: middle;
  margin-right: 10px;
  height: 2em;
  width: 2em;
  border-radius: 2px; }
  .color:first-of-type {
    margin-left: 20px; }

.add-to-cart, .like {
  background: #ff9f1a;
  padding: 1.2em 1.5em;
  border: none;
  text-transform: UPPERCASE;
  font-weight: bold;
  color: #fff;
  -webkit-transition: background .3s ease;
          transition: background .3s ease; }
  .add-to-cart:hover, .like:hover {
    background: #b36800;
    color: #fff; }

.not-available {
  text-align: center;
  line-height: 2em; }
  .not-available:before {
    font-family: fontawesome;
    content: "\f00d";
    color: #fff; }

.orange {
  background: #ff9f1a; }

.green {
  background: #85ad00; }

.blue {
  background: #0076ad; }

.tooltip-inner {
  padding: 1.3em; }

@-webkit-keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

@keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

/*# sourceMappingURL=style.css.map */
	</style>