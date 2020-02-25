<?php include 'inc1/nur.php'; ?>


<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {

  $it4showingmsgsend = $con->customerContact($_POST);
}

?>





  
<div id="contact">
			<div class="section-content">
					
				<h1 class="section-header">Get in <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Touch with us</span></h1>
				<h3>Feel free to Contact.</h3>
			</div>
			

			<div class="contact-section">
			<div class="container">
				 <h2>				
 <?php
     if (isset($it4showingmsgsend)){
        echo $it4showingmsgsend;
     }
     ?></h2> 
					<form action="" method="post">
					<div class="col-md-6 form-line">
			  			<div class="form-group">
			  				<label for="exampleInputUsername">Your name</label>
					    	<input  type="text" name="firstname" class="form-control" id="" placeholder=" Enter Name">
				  		</div>
				  		<div class="form-group">
			  				<label for="exampleInputUsername">Last name</label>
					    	<input type="text" name="lastname" class="form-control" id="" placeholder=" Enter Name">
				  		</div>
				  			



				  		<div class="form-group">
					    			<label for="exampleInputEmail">Email Address</label>
					    	<input  type="email"name="email" class="form-control" id="exampleInputEmail" placeholder=" Enter Email id">
					  	</div>	
					  	<div class="form-group">
					  		<label for="telephone">Mobile No.</label>
					    	<input  type="text"name="phone" class="form-control" id="telephone" placeholder=" Enter 10-digit mobile no.">
			  			</div>
			  		</div>
			  		<div class="col-md-6">
			  			<div class="form-group">
			  				<label for ="description"> Message</label>
			  			 	<textarea name="body" class="form-control" id="description" placeholder="Enter Your Message"></textarea>
			  			</div>
			  			<div>


<span><input type="submit" class="btn btn-default submit" name="submit" value="Submit"></span>


			  				
			  				<a style="color: #fff; font-family: 'Oleo Script', cursive;" href="index.php"  class="btn btn-outline-secondary"> Go Back</a>
			  			</div>
			  			
			  			
					</div>
				</form>
			</div>
		</div>
		<style type="text/css">
			/*Contact sectiom*/
.content-header{
  font-family: 'Oleo Script', cursive;
  color:#fcc500;
  font-size: 45px;
}

.section-content{
  text-align: center; 

}
#contact{
	 margin: 0 0 0px 0;
    
    font-family: 'Teko', sans-serif;
  padding-top: 60px;
  width: 100%;
  width: 100vw;
  height: 900px;
  background: #3a6186; /* fallback for old browsers */
  background: -webkit-linear-gradient(to left, #3a6186 , #89253e); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to left, #3a6186 , #89253e); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    color : #fff;    
}
.contact-section{
  padding-top: 40px;
}
.contact-section .col-md-6{
  width: 50%;
}

.form-line{
  border-right: 1px solid #B29999;
}

.form-group{
  margin-top: 10px;
}
label{
  font-size: 1.3em;
  line-height: 1em;
  font-weight: normal;
}
.form-control{
  font-size: 1.3em;
  color: #080808;
}
textarea.form-control {
    height: 135px;
   /* margin-top: px;*/
}

.submit{
  font-size: 1.1em;
  float: right;
  width: 150px;
  background-color: transparent;
  color: #fff;

}


		</style>
		