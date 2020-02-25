
  
<div class="header_bottom">
	<div class="col-md-12">
		<div class="header_bottom">
			<div class="section group">
				<div class="listview_1_of_2 images_1_of_2">



				<?php

$getSpd = $pd->latestFromSamsung();
if ($getSpd){
    while ($result = $getSpd->fetch_assoc()) {
        ?>
					<div class="listimg listimg_2_of_1">
						 <a  href="preview.php?proid=<?php echo $result['productId'];?>"><img src="admin/<?php echo $result['image'];?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2 ><?php echo $result['productName'];?> </h2>
<p><span class="price">$ <?php echo $result['price'];?></span></p>
						 <p><?php echo $fm->textShorten($result['body'],60); ?></p>

						<div class="button"><span><a href="preview.php?proid=<?php echo $result['productId'];?>">Add to cart</a></span></div>
				   </div>
<?php }} ?>	
			   </div>



				<div class="listview_1_of_2 images_1_of_2">

						<?php

$getApd = $pd->latestFromApple();
if ($getApd){
    while ($result = $getApd->fetch_assoc()) {
        ?>
					<div class="listimg listimg_2_of_1">
						  	 <a  href="preview.php?proid=<?php echo $result['productId'];?>"> <img src="admin/<?php echo $result['image'];?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2 ><?php echo $result['productName'];?> </h2>
<p><span class="price">$ <?php echo $result['price'];?></span></p>
						 <p><?php echo $fm->textShorten($result['body'],60); ?></p>

						<div class="button"><span><a href="preview.php?proid=<?php echo $result['productId'];?>">Add to cart</a></span></div>
				   </div>
					<?php }} ?>
				</div>
			</div>
			<div class="section group">
				<div class="listview_1_of_2 images_1_of_2">
<?php

$getapd = $pd->latestFromamazon();
if ($getapd){
    while ($result = $getapd->fetch_assoc()) {
        ?>

					<div class="listimg listimg_2_of_1">
							 <a  href="preview.php?proid=<?php echo $result['productId'];?>"> <img src="admin/<?php echo $result['image'];?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2 ><?php echo $result['productName'];?> </h2>
<p><span class="price">$ <?php echo $result['price'];?></span></p>
						 <p><?php echo $fm->textShorten($result['body'],60); ?></p>

						<div class="button"><span><a href="preview.php?proid=<?php echo $result['productId'];?>">Add to cart</a></span></div>
				   </div>
				   <?php }} ?>
			   </div>			
				<div class="listview_1_of_2 images_1_of_2">

<?php

$getmpd = $pd->latestFrommaclaren();
if ($getmpd){
    while ($result = $getmpd->fetch_assoc()) {
        ?>

					<div class="listimg listimg_2_of_1">
						 <a  href="preview.php?proid=<?php echo $result['productId'];?>"> <img src="admin/<?php echo $result['image'];?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2 ><?php echo $result['productName'];?> </h2>
<p><span class="price">$ <?php echo $result['price'];?></span></p>
						 <p><?php echo $fm->textShorten($result['body'],60); ?></p>

						<div class="button"><span><a href="preview.php?proid=<?php echo $result['productId'];?>">Add to cart</a></span></div>
				   </div>
				   <?php }} ?>
				</div>
			</div>
		  <div class="clear"></div>
		</div>
			  </div>
 <div class="clear"></div>
  </div>