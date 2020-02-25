<?php include'inc1/header2.php';?>

<?php include'inc1/slider.php';?>




<style type="text/css">
	html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,dl,dt,dd,ol,nav ul,nav li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
article, aside, details, figcaption, figure,footer, header, hgroup, menu, nav, section {display: block;}
ol,ul{list-style:none;margin:0;padding:0;}
blockquote,q{quotes:none;}
blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}
table{border-collapse:collapse;border-spacing:0;}
/* start editing from here */
a{text-decoration:none;}
.txt-rt{text-align:right;}/* text align right */
.txt-lt{text-align:left;}/* text align left */
.txt-center{text-align:center;}/* text align center */
.float-rt{float:right;}/* float right */
.float-lt{float:left;}/* float left */
.clear{clear:both;}/* clear float */
.pos-relative{position:relative;}/* Position Relative */
.pos-absolute{position:absolute;}/* Position Absolute */
.vertical-base{	vertical-align:baseline;}/* vertical align baseline */
.vertical-top{	vertical-align:top;}/* vertical align top */
.underline{	padding-bottom:5px;	border-bottom: 1px solid #eee; margin:0 0 20px 0;}/* Add 5px bottom padding and a underline */
nav.vertical ul li{	display:block;}/* vertical menu */
nav.horizontal ul li{	display: inline-block;}/* horizontal menu */
img{max-width:100%;}
/*end reset*/
body{
	font-family:Arial, Helvetica, sans-serif;
	background:url(../images/body_bg3.jpg);
}
.wrap{
	width:78%;
	margin:0 auto;
	padding:0 1%;
	background:#FFF;
}
.header{
	background:#FFF;
}
.header_top{
	padding:20px 0;
}
.logo{
	float:left;
	width:33%;
}
/**** Header Top Right ****/
.header_top_right{
	float:left;
	width:67%;
	margin-top:35px;
}
.search_box{
	float:left;
	border: 1px solid #DBDBDB;
	position:relative;
	width:47%;
}
.search_box input[type="text"]{
	width:74%;
	padding:9px 8px;
	outline:none;
	border:none;
	background:none;
	font-size:14px;
	color:#a5a5a5;
	font-family:Arial;
	outline:none;
	margin:0;
}
.search_box input[type="submit"]{
	border:none;
	cursor:pointer;
	color:#FFF;
	font-size:12px;
	padding:10px 15px;
	height: 36px;
	margin:0;
	background: -webkit-gradient(linear,left top,left bottom,from(#70389C),to(#602D8D));
	background: -moz-linear-gradient(top,#70389C,#602D8D);
	background: -o-linear-gradient(top,#70389C,#602D8D);
	background: -ms-linear-gradient(top,#70389C,#602D8D);
	-webkit-transition: all .9s;
	-moz-transition: all .9s;
	-o-transition: all .9s;
	-ms-transition: all .9s;
	transition: all .9s;
	position:absolute;
	right:0;
	top:0;
}
.search_box input[type="submit"]:hover{
	background:#444;
}
.shopping_cart{
	float:left;
	width: 202px;
	position:relative;
	margin-left:15px;
	padding: 0 0 0 46px;
	background: url(../images/header_cart.png) 0 0 no-repeat;
	z-index: 99;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	cursor:pointer;
}
.cart{
	height: 38px;
	padding: 0 0 0 10px;
	background: #EDEDED;
	border: 1px solid #CECECE;
	border-left: none;
	line-height: 36px;
	-webkit-border-radius: 0 2px 2px 0;
	border-radius: 0 2px 2px 0;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}
.shopping_cart .cart .opencart {
	width: 7px;
	height: 5px;
	display: block;
	background: url(../images/header_arrow.png) 0 0 no-repeat;
	position: absolute;
	right: 11px;
	top: 16px;
}
.shopping_cart span.cart_title{
	font-size:13px;
	font-weight:bold;
	color: #4F4F4F;
}
.shopping_cart span.no_product{
	font-size:13px;
	font-weight:bold;
	color: #DD0F0E;
}
input[type="number"] {
  border: 1px solid #b8b8b8;
  border-radius: 3px;
  padding: 7px;
}
.buysubmit{
	background: #602d8d url("../images/large-button-overlay.png") repeat scroll 0 0;
	border: 1px solid rgba(0, 0, 0, 0.1);
	border-radius: 5px;
	color: #fff;
	font-family: Arial,"Helvetica Neue","Helvetica",Tahoma,Verdana,sans-serif;
	font-size: 0.8em;
	padding: 7px 15px;
	text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.25);
	cursor:pointer;
	outline:none;
}
.wrapper-dropdown.active .dropdown{
	border-bottom: 1px solid rgba(0, 0, 0, 0.2);
	max-height: 400px;
	width: 95px;
	z-index: 1;
	background: #70389C;
}
.login {
  background: rgba(0, 0, 0, 0) url("../images/gradient_light-1.png") repeat-x scroll 0 0;
  border: 1px solid #cecece;
  box-sizing: border-box;
  color: #444;
  display: block;
  float: left;
  font-size: 27px;
  height: 38px;
  margin-left: 10px;
  text-align: center;
  width: 144px;
}
.login a {
	color:#333;
}
/*** Login ***/
.register_account h3,.login_panel h3{
	font-size: 22px;
	color: #6C6C6C;
	font-family: 'Monda', sans-serif;
	padding-bottom:.4em;
}
.register_account {
  background: #fff none repeat scroll 0 0;
  border: 1px solid #c0bebe;
  border-radius: 3px;
  float: left;
  height: 284px;
  padding: 20px;
  width: 712px;
}
.register_account form input[type="text"],.register_account form select{
	font-size:12px;
	color:#B3B1B1;
	padding:8px;
	outline:none;
	margin:5px 0;
	width:340px;
}
.register_account form select{
	width:360px;
	color:#666;
}
.register_account form input[type="text"].code{
	width:15%;
}
.register_account form input[type="text"].number{
	width:69.8%;
}
.register_account table td{
	width:100%;
}
.register_account p{
	font-size:12px;
	color:#666;
}
.search{
	float:left;
	margin-top:3px;
}

.login_panel{
	float:left;
	width: 245px;
	margin-right: 10px;
	padding:20px;
	background:#FFF;
	border:1px solid #C0BEBE;
    -moz-border-radius: 3px; -webkit-border-radius: 3px; border-radius: 3px;
}
.login_panel input[type="text"],.login_panel input[type="password"]{
	font-size:12px;
	color:#B3B1B1;
	padding:8px;
	outline:none;
	margin:6px 0;
	width:92%;
}
.login_panel form{
	margin:15px 0;
}
.login_panel p{
	font-size:12px;
	color:#888;
}
p.terms{
	float:left;
	font-size:12px;
	padding:15px 0 0 15px;
}
p.terms a,p.note a{
	text-decoration:underline;
	color:#7C2DC5;
}
p.terms a:hover,p.note a:hover{
	text-decoration:none;
}
p.note{
	font-size:15px;
	color:#666;
	padding:5px;
	line-height:1.6em;
}
.buttons button,.search button.grey{
	    padding:10px 15px;
	    font-size:15px;
	    font-weight:bold;
	    color             : #fff;
	    -webkit-box-shadow: 0 1px rgba(255,255,255,0.2) inset, 0 2px 2px -1px rgba(0,0,0,0.3);
        -moz-box-shadow   : 0 1px rgba(255,255,255,0.2) inset, 0 2px 2px -1px rgba(0,0,0,0.3);
        box-shadow        : 0 1px rgba(255,255,255,0.2) inset, 0 2px 2px -1px rgba(0,0,0,0.3);
        -moz-border-radius: 3px; -webkit-border-radius: 3px; border-radius: 3px;  
        cursor:pointer;   
}
.search button{
	padding:12px 30px;
}
 button.grey,.search button.grey{
	 	border            : 1px solid #303030;
        background        : #3f4040;
        background        : -moz-linear-gradient(top,  #3f4040 0%, #303131 100%);
        background        : -webkit-gradient(linear, left top, left bottom, color-stop(0%,#3f4040), color-stop(100%,#303131));
        background        : -webkit-linear-gradient(top,  #3f4040 0%,#303131 100%);
        background        : -o-linear-gradient(top,  #3f4040 0%,#303131 100%);
        background        : -ms-linear-gradient(top,  #3f4040 0%,#303131 100%);
        background        : linear-gradient(top,  #3f4040 0%,#303131 100%);
        filter            : progid:DXImageTransform.Microsoft.gradient( startColorstr='#3f4040', endColorstr='#303131',GradientType=0 );
        text-shadow       : 0 1px 0 rgba(0, 0, 0, 0.4);
}
 button.grey:hover,.search button.grey:hover{
	        border            : 1px solid #303030;
        background        : #525252;
        background        : -moz-linear-gradient(top,  #525252 0%, #454646 100%);
        background        : -webkit-gradient(linear, left top, left bottom, color-stop(0%,#525252), color-stop(100%,#454646));
        background        : -webkit-linear-gradient(top,  #525252 0%,#454646 100%);
        background        : -o-linear-gradient(top,  #525252 0%,#454646 100%);
        background        : -ms-linear-gradient(top,  #525252 0%,#454646 100%);
        background        : linear-gradient(top,  #525252 0%,#454646 100%);
        filter            : progid:DXImageTransform.Microsoft.gradient( startColorstr='#525252', endColorstr='#454646',GradientType=0 );
        text-shadow       : 0 1px 0 rgba(0, 0, 0, 0.4);  
}
/** End Login ***/
.wrapper-dropdown{
    /* Size & position */
 	float: left;
	width:61px;
	height: 38px;
	position: relative;
	margin-left: 10px;
	padding: 0 0 0 12px;
    /* Styles */
   background: url(../images/gradient_light-1.png) 0 0 repeat-x;
	font: bold 13px/36px "Arial";
	color: #4F4F4F;
    border: 1px solid #CECECE;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
    cursor: pointer;
    outline: none;
    -webkit-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -ms-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
}
.wrapper-dropdown .opencart{
	width: 7px;
	height: 5px;
	display: block;
	background: url(../images/header_arrow.png) 0 0 no-repeat;
	position: absolute;
	right: 11px;
	top: 16px;
}
.wrapper-dropdown .dropdown{
    /* Size & position */
    position: absolute;
    top:38px;
    left: 0;
    right: 0;
    /* Styles */
    border-radius: 0 0 5px 5px;
    border: 1px solid rgba(0,0,0,0.2);
    border-top: none;
    border-bottom: none;
    list-style: none;
    -webkit-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -ms-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
    /* Hiding */
    max-height: 0;
    overflow: hidden;
}
.wrapper-dropdown .dropdown li a{
    font-size:13px;
    color:#FFF;
	font-weight: bold;
	padding:10px 23px;
    border-bottom: 1px solid #7D60AA;
    text-align:center;
}
.wrapper-dropdown .dropdown li a span.lang{
	  font-size:13px;
      color:#FFF;
	 font-weight: bold;
	 padding:0px 0px;
}
.wrapper-dropdown .dropdown li a span.lang:hover{
	 color:#DD0F0E;
}
.wrapper-dropdown .dropdown li a span img{
	padding-right:5px;
	margin-bottom:-8px;
}
.wrapper-dropdown .dropdown li a span{
	padding-right:5px;
}
.wrapper-dropdown .dropdown li:last-of-type a{
    border: none;
}
.wrapper-dropdown .dropdown li i {
    margin-right: 5px;
    color: inherit;
    vertical-align: middle;
}
/* Hover state */
.wrapper-dropdown .dropdown li:hover a {
    color:#DD0F0E;
}
/* Active state */
.wrapper-dropdown.active {
    border-radius: 5px 5px 0 0;
    box-shadow: none;
    border-bottom: none;
}
.wrapper-dropdown.active .dropdown {
    border-bottom: 1px solid rgba(0,0,0,0.2);
    max-height: 400px;
    width:95px;
    z-index:1;
    background:#70389C;
}
.wrapper-dropdown.active .languges{
	border-bottom: 1px solid rgba(0,0,0,0.2);
    max-height: 400px;
    width:135px;
    z-index:11;
    background:#70389C;
}
.header_bottom{margin-bottom:10px;}
/**** Header Botttom Left ****/
.header_bottom_left{
	float:left;
	width:50%;
	padding-top:6px;
}
.header_bottom_img{
	float:left;
	width: 46.2%;
}
.pic{
	float:left;
	width: 46.2%;
}
.header_bottom_img2{
	float:left;
	width: 46.2%;
	margin-left:1.6%;
}
.header_bottom_left_images{
	position:relative;
	margin-top:10px;
	box-shadow: 0px 0px 3px rgb(150, 150, 150);
}
.section {
	clear: both;
	padding: 0px;
	margin: 0px;
}
.group:before,
.group:after {
    content:"";
    display:table;
}
.group:after {
    clear:both;
}
.group {
    zoom:1;
}
.listview_1_of_2{
	display: block;
	float:left;
	margin: 1.4% 0 0% 1.6%;
	box-shadow: 0px 0px 3px rgb(150, 150, 150);
}
.listimg{
	text-align:center;
	float:left;
}
.text{
	display: block;
	float:left;
	margin: 2% 0 0% 3.6%;
}
.listview_1_of_2:first-child { margin-left: 0; } 
.images_1_of_2 {
	width: 46.2%;
	padding:1.5%; 
}
.listimg_2_of_1 {
	width: 48.2%;
}
.list_2_of_1 {
	width: 48.2%;
}
.images_1_of_2 img {
  height: 133px;
  width: 90px;
}
.list_2_of_1  h2 {
	color:#CC3636;
	font-size:1.2em;
	font-family: 'Monda', sans-serif;
	font-weight : normal;
	text-transform:uppercase;
}
.list_2_of_1  p{
	font-size:0.8125em;	
	color: #333;
	line-height: 1.6em;
	font-family : verdana, arial, helvetica, helve, sans-serif;
	padding:0; 	
}
.list_2_of_1 .button{
	line-height:1.9em;
	margin-top:0.5em;
}
.list_2_of_1 .button a{
	padding:7px 15px;
		font-size:0.8em;
		font-family: Arial, "Helvetica Neue", "Helvetica", Tahoma, Verdana, sans-serif;
		border: 1px solid rgba(0,0,0,0.1);
        background:#602D8D url(../images/large-button-overlay.png);       
        color             : #fff;
        text-shadow:0 -1px 1px rgba(0, 0, 0, 0.25);
		-moz-border-radius:5px;
		-webkit-border-radius:5px;
		border-radius:5px;
}
.list_2_of_1 .button a:hover{
	    border: 1px solid #4D00A0;
        background:#70389C;
        text-decoration:none; 
}
.header_bottom_right_images{
	float:left;
	width:49%;
	margin-left:1%;
	padding-top: 15px;
}
.content{
	padding:20px 0;
	background:#FFF;
}
.content h2{ 
	font-size:23px;
	color:#6C6C6C;
	font-family: 'Monda', sans-serif;
}
.content_top{
	padding:15px 20px;
	border:1px solid #EBE8E8;
	border-radius:3px;
}
.content_bottom{
	padding:15px 20px;
	border:1px solid #EBE8E8;
	border-radius:3px;
	margin-top:2.6%;
}
.heading{
	float:left;
	margin-right:10%;
}
.heading h3{
	font-family: 'Monda', sans-serif;
	font-size:22px;
	color:#602D8D;
	text-transform:uppercase;
}
.sort,.show{
	float:left;
	width:14%;
	margin-left:1.6%;
	padding-top:5px;
}
.sort p,.show p{
	display:inline;
	font-size:0.8125em;
	color: #333;
}
.sort select,.show select{
	display:inline;
	font-size:1.1em;
	color: #333;
	margin-left:2px;
}
.page-no{
	float:right;
	padding-top:5px;
}
.page-no p{
	display:inline;
	font-size:0.8125em;
	padding:0.3em 0;
	color: #333;
}
.page-no ul{
	display:inline;
}
.page-no li{
	display:inline;
}
.page-no li a{
	font-size:0.8125em;
	color: #333;
	line-height: 1.6em;
	font-family : verdana, arial, helvetica, helve, sans-serif;
	padding:5px 5px;
}
.page-no li a:hover,.page-no li.active{
	color:#602D8D;
	text-decoration:underline;
}
/**** Grid 1_0f_4 ****/
.grid_1_of_4{
	display: block;
	float:left;
	margin: 1% 0 1% 1.6%;
	box-shadow: 0px 0px 3px rgb(150, 150, 150);
}
.grid_1_of_4:first-child { 
	margin-left: 0; 
} 
.images_1_of_4 {
	width: 20.8%;
	padding:1.5%;
	text-align:center;
	position:relative; 
}
.images_1_of_4  img{
	max-width:100%;
}
.discount{
	background:url(../images/discount-img.png) no-repeat 0 0;
	position: absolute;
	top: 30px;
	width: 42px;
	height: 42px;
}
.discount span.percentage{
	color: #FFF;
	font-size: 1em;
	font-weight: bold;
	line-height: 40px;
}
.images_1_of_4  h2 {
	color: #CC3636;
	font-family: 'Monda', sans-serif;
	font-size:0.9em;
	font-weight : normal;
}
.images_1_of_4  p {
	font-size:0.8125em;
	padding:0.4em 0;
	color: #333;	
}
.images_1_of_4  p span.strike{
	font-size:18px;
	font-family: 'Monda', sans-serif;
	color:#444;
	text-decoration:line-through;
}
.images_1_of_4  p span.price{
	font-size:18px;
	font-family: 'Monda', sans-serif;
	color: #CC3636;
	margin-left:15px;
}
.images_1_of_4 .button {
  float: left;
  line-height: 1.9em;
  margin-top: 0.3em;
  width: 100%;
}
.images_1_of_4 .button a{
		padding:7px 20px;
		font-size:0.8em;
}
.images_1_of_4 .button a{
	font-family: "Trebuchet MS",Arial,Helvetica,sans-serif;
	font-size: 14px;
	line-height: 15px;
	text-transform: none;
	color: #737370;
	text-decoration: none!important;
	background: url(../images/button-bg.png) repeat-x 0 0 #E8E8E8;
	display: inline-block;
	border-left: 1px solid #D4D4D4!important;
	border-right: 1px solid #ADADAD!important;
	border-top: 1px solid #E0E0E0!important;
	border-bottom: 1px solid #9C9C9C!important;
	cursor: pointer!important;
	margin: 0 2px;
	border-radius: 2px;
	-moz-border-radius: 2px;
	-webkit-border-radius: 2px;
	-webkit-transition: all 0.5s ease;
		-moz-transition: all 0.5s ease;
		-o-transition: all 0.5s ease;
		transition: all 0.5s ease;
}
.images_1_of_4 .button a:hover{
     color:#70389C;
     background: #E8E8E8;
}
.images_1_of_4 .button span img{
	position:absolute;
}
.images_1_of_4 .button a.cart-button{
	padding:7px 5px 7px 38px; 
}
/*** Footer ***/
.wrapper{	
	width:78%;
	margin:0 auto;
	padding:0 1%;
}
.footer{
	position:relative;
	background: #414045; 
	background: -moz-linear-gradient(top,  #414045 55%, #2f2e33 100%); 
	background: -webkit-gradient(linear, left top, left bottom, color-stop(55%,#414045), color-stop(100%,#2f2e33));
	background: -webkit-linear-gradient(top,  #414045 55%,#2f2e33 100%); 
	background: -o-linear-gradient(top,  #414045 55%,#2f2e33 100%); 
	background: -ms-linear-gradient(top,  #414045 55%,#2f2e33 100%); 
	background: linear-gradient(to bottom,  #414045 55%,#2f2e33 100%); 
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#414045', endColorstr='#2f2e33',GradientType=0 );
	box-shadow: inset 0px 1px 8px #222;
}
.section {
	clear: both;
	padding: 0px;
	margin: 0px;
}
.group:before,
.group:after {
    content:"";
    display:table;
}
.group:after {
    clear:both;
}
.group {
    zoom:1;
}
.col_1_of_4{
	display: block;
	float:left;
	margin: 0% 0 1% 1.6%;
	border-right: 2px groove #555;
}
.col_1_of_4:first-child { margin-left: 0; } /* all browsers except IE6 and lower */
.col_1_of_4:last-child {
	border:none;
}
.span_1_of_4 {
	width: 20.5%;
	padding:1.5%; 
}
.span_1_of_4  h4 {
	color:#ccc;
	margin-bottom: .5em;
	font-size:1.2em;
	line-height: 1.2;
	font-family:'Doppio One', sans-serif;
	font-weight : normal;
	margin-top: 0px;
	letter-spacing: -1px;
	text-transform:uppercase;
	border-bottom:1px solid #474747;
	padding-bottom:0.5em;
}
.span_1_of_4  li a{
	font-size:0.8125em;
	padding:0.4em 0;
	color:#979797;
	font-family :Arial, Helvetica, sans-serif;
	display:block;	 	 
}
.span_1_of_4  li a:hover,.span_1_of_4  li span:hover{
	color:#BBB7B7;
}
.span_1_of_4  li span{
	font-size:1.2em;
	padding:0.2em 0;
	color:#979797;
	display:block;
	cursor:pointer;
}
/*** Social Icons ***/
.social-icons{
	padding-top:8%;
}
.social-icons li {
	width:30px;
	height:30px;
	padding: 0px 0 0 5px;
	margin: 0;
    display:inline-block;
	cursor:pointer;
}
.social-icons li.facebook {
	background:url(../images/icon-2.png) no-repeat 0px  -29px;
}
.social-icons li.facebook:hover {
	background:url(../images/icon-2.png) no-repeat 0px  0px;
}
.social-icons li.twitter {
	background:url(../images/icon-3.png) no-repeat 0px  -29px;
}
.social-icons li.twitter:hover {
	background:url(../images/icon-3.png) no-repeat 0px  0px;
}
.social-icons li.googleplus {
	background:url(../images/icon-4.png) no-repeat 0px  -29px;
}
.social-icons li.googleplus:hover {
	background:url(../images/icon-4.png) no-repeat 0px  0px;
}
.social-icons li.contact {
	background:url(../images/icon-1.png) no-repeat 0px  -29px;
}
.social-icons li.contact:hover {
	background:url(../images/icon-1.png) no-repeat 0px  0px;
}
 .copy_right{
	text-align:center;
	padding:15px 0;
 }
 .copy_right p{
	font-size:12px;
	color:#747474;
 }
 .copy_right p a{
    color:#747474;
	font-size:12px;
	text-decoration:underline;
 }
 .copy_right p a:hover{
	color:#BBB7B7;
	text-decoration:none;
 }
/*** move top **/
#toTop {
	display:none;
	text-decoration:none;
	position:fixed;
	bottom:10px;
	right:10px;
	overflow:hidden;
	width:48px;
	height:48px;
	border:none;
	text-indent:100%;
	background:url(../images/arrow_up.png) no-repeat right top;
}

#toTopHover {
	width:48px;
	height:48px;
	display:block;
	overflow:hidden;
	float:right;
	opacity: 0;
	-moz-opacity: 0;
	filter:alpha(opacity=0);
}
#toTop:active, #toTop:focus {
	outline:none;
}

/*  Preview  ============================================================================= */
.back-links{
	float:left;
	padding-top:5px;
	width:20%;
}
.back-links p{
	font-size:0.8125em;
	color: #333;
}
.back-links p a{
	font-size:0.9em;
	padding:0  1.3%;
	color: #333;
}
.back-links p a:hover,.back-links p a:active{
	color:#70389C;
}
.image {
	clear: both;
	padding: 0px;
	margin: 0px;
	background:#F0F0F0;
	padding:1.5%;
}
.group:before,
.group:after {
    content:"";
    display:table;
}
.group:after {
    clear:both;
}
.group {
    zoom:1;
}
.cont-desc{
	display: block;
	float:left;
	clear:both;
}
.rightsidebar{
	display: block;
	float:left;
	margin: 0% 0 0% 1.6%;
}
.cont-desc:first-child { margin-left: 0; } 
.desc{
	display: block;
	float:left;
	margin: 0% 0 0% 2.6%;
}
.span_1_of_2{
	width: 67.1%;
	padding:1.5%;
}
.images_3_of_2 {
	width: 44.2%;
	float:left;
	text-align:center;
}
.span_3_of_2{
	width: 53.2%;
}
.span_3_of_1{
	width: 25.2%;
	padding:1.5%;
}
.images_3_of_2 img {
  height: 302px;
  max-width: 100%;
  width: 100%;
}
.span_3_of_2  h2 {
	font-family: 'Monda', sans-serif;
	font-size:1.1em;
	color: #CC3636;
	font-weight : normal;
	margin-top: 0px;
	text-transform:uppercase;
}
.span_3_of_2  p{
	font-size:0.8125em;
	padding:0.3em 0;
	color:#969696;
	line-height: 1.6em;
	font-family : verdana, arial, helvetica, helve, sans-serif; 	
}
.price p{
	font-size:0.8125em;
	padding:1.5% 1%;
	color: #666;
	vertical-align:top;
}
.price p span{
	font-size:1.5em;
	font-family: 'Monda', sans-serif;
	color: #CC3636;
}
.available{
	padding:10px 0;
	border-top:1px solid #E0E0E0;
}
.available p{
	font-size:0.9em;
	color:#333;
	font-weight:bold;
	padding-bottom:10px;
}
.available li{
	display:inline;
	font-size:0.8125em;
	padding:1.5% 2%;
	color:#353535;
}
.available li select{
	display: inline;
	font-size: 1em;
	color: #333;
	margin-left:3px;
}
.share p{
	padding-top:10px;
	font-size:0.9em;
	color:#333;
	font-weight:bold;
}
.share li{
	display:inline-block;
	margin:5px 6px;
}
.add-cart{
	padding-top:15px;
}
.rating{
	float:left;
}
.rating p{
	padding-top:10px;
	font-size:0.9em;
	color:#333;
	font-weight:bold;
}
.rating p span{
	font-size:0.8125em;
	color: #666;
	font-weight:normal;
}
.rating p img{
	vertical-align: top;
	padding-left: 5px;
}
.product-desc,.product-tags{
	clear:both;
	padding-top:20px;
}
.product-desc h2,.product-tags h2{
	padding:8px 20px;
	background:#602D8D;
	border: 1px solid #EBE8E8;
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	-o-border-radius: 5px;
	font-family: 'Monda', sans-serif;
	font-size:1.2em;
	color:#FFF;
	text-transform: uppercase;
	text-shadow:0 1px 5px rgba(34, 34, 34, 0.17);
}
.product-desc p{
	font-size: 0.8em;
	padding: 0.3em 0;
	color: #969696;
	line-height: 1.6em;
	font-family: verdana, arial, helvetica, helve, sans-serif;
}
.product-tags h4{
	padding:10px 0;
	font-size:0.9em;
	color:#333;
	font-weight:bold;
}
.input-box{
	background:url(../images/tag.png) no-repeat 0 8px;
	padding-left:35px;
}
.input-box input[type="text"]{
	 		padding:8px;
			display:block;
			width:95%;
			background:#fcfcfc;
			border: none;
			outline:none;
			color:#464646;
			font-size:0.8125em;
			font-family:Arial, Helvetica, sans-serif;
			box-shadow: inset 0px 0px 3px #999;
			-webkit-box-shadow: inset 0px 0px 3px #999;
			-moz-box-shadow: inset 0px 0px 3px #999;
			-o-box-shadow: inset 0px 0px 3px #999;
			-webkit-appearance:none;
}
.product-tags .button{
	margin-top:15px;
	line-height:3em;
}
.span_3_of_2 .button{
	float:right;
	margin-top:1%;
	line-height:2em;
}
.span_3_of_2 .button a,.product-tags .button a{
		padding:12px 20px;
		font-size:1em;
		font-weight:bold;
		font-family: Arial, "Helvetica Neue", "Helvetica", Tahoma, Verdana, sans-serif;
		border: 1px solid rgba(0,0,0,0.1);
  		box-shadow: inset 0 1px 0 rgba(255,255,255,0.7);
        background        : #3f4040;       
        color             : #fff;
        text-shadow       : 0 1px 0 rgba(0, 0, 0, 0.4); 
        -webkit-box-shadow: 0 1px rgba(255, 255, 255, 0.2) inset, 0 2px 2px -1px rgba(0, 0, 0, 0.3);
		-moz-box-shadow: 0 1px rgba(255,255,255,0.2) inset, 0 2px 2px -1px rgba(0,0,0,0.3);
		box-shadow: 0 1px rgba(255, 255, 255, 0.2) inset, 0 2px 2px -1px rgba(0, 0, 0, 0.3);
		-moz-border-radius: 3px;
		-webkit-border-radius: 3px;
		border-radius: 3px;
		-webkit-transition: all 0.5s ease;
		-moz-transition: all 0.5s ease;
		-o-transition: all 0.5s ease;
		transition: all 0.5s ease;
}
.span_3_of_2 .button a:hover,.product-tags .button a:hover{
	    border: 1px solid #303030;
        background: #525252; 
        text-decoration:none;
}
.span_3_of_1 li a{
	font-size:0.8125em;
	padding:0.42em 8%;
	color: #666;
	display: block;
	line-height: 1.6em;
	font-family : Arial, Helvetica, sans-serif;
	border-bottom:1px dashed #CCC;
	background: url(../images/drop_arrow.png) no-repeat 5px 11px; 	
}
.span_3_of_1 li a:hover{
	background: url(../images/drop_arrow-hover.png) no-repeat 5px 11px;
	color:#602D8D; 
}
.span_3_of_2 .button{
	float:right;
	margin-top:1%;
	line-height:2em;
}
.span_3_of_2 .button a{
		padding:12px 20px;
		font-size:1em;
		font-weight:bold;
		font-family: Arial, "Helvetica Neue", "Helvetica", Tahoma, Verdana, sans-serif;
		border: 1px solid rgba(0,0,0,0.1);
  		box-shadow: inset 0 1px 0 rgba(255,255,255,0.7);
        background        : #3f4040;       
        color             : #fff;
        text-shadow       : 0 1px 0 rgba(0, 0, 0, 0.4); 
        -webkit-box-shadow: 0 1px rgba(255, 255, 255, 0.2) inset, 0 2px 2px -1px rgba(0, 0, 0, 0.3);
		-moz-box-shadow: 0 1px rgba(255,255,255,0.2) inset, 0 2px 2px -1px rgba(0,0,0,0.3);
		box-shadow: 0 1px rgba(255, 255, 255, 0.2) inset, 0 2px 2px -1px rgba(0, 0, 0, 0.3);
		-moz-border-radius: 3px;
		-webkit-border-radius: 3px;
		border-radius: 3px;
}
.span_3_of_2 .button a:hover{
	    border: 1px solid #303030;
        background: #525252; 
        text-decoration:none;
}
.subscribe{
	padding-top:20px;
}
.subscribe p{
	font-size:12px;
	color:#444;
	padding:5px 0;
}
.signup{
	border-radius:0.2em;
	-webkit-border-radius:0.2em;
	-moz-border-radius:0.2em;
	-o-border-radius:0.2em;
	margin-top:5px;
	 background:#E7E7E7;
   box-shadow: inset 0px 2px 5px #707070;
}
.signup input[type="text"]{
    border:none;
    background:none;
    padding:5px;
    outline:none;
    width:217px;
    font-size:12px;
    color:#7c7c7c;
}
.signup input[type="submit"]{
	border: 1px solid  #5C5655;
    padding:8px 20px;
   	font-size:12px;
   	margin:0;
   	font-weight:bold;
   	cursor:pointer;
 	background     : #565656;
    filter         : progid:DXImageTransform.Microsoft.gradient(startColorstr='#565656', endColorstr='#565656');
    color          : #fff;
    text-shadow    : 0 1px 0 rgba(0, 0, 0, 0.2);  
}
.signup input[type="submit"]:hover{
   		background        : #5e5e5e;
        background        : -moz-linear-gradient(top,  #5e5e5e 0%, #404040 100%);
        background        : -webkit-gradient(linear, left top, left bottom, color-stop(0%,#5e5e5e), color-stop(100%,#404040));
        background        : -webkit-linear-gradient(top,  #5e5e5e 0%,#404040 100%);
        background        : -o-linear-gradient(top,  #5e5e5e 0%,#404040 100%);
        background        : -ms-linear-gradient(top,  #5e5e5e 0%,#404040 100%);
        background        : linear-gradient(top,  #5e5e5e 0%,#404040 100%);
        filter            : progid:DXImageTransform.Microsoft.gradient( startColorstr='#5e5e5e', endColorstr='#404040',GradientType=0 );
        box-shadow        : 1px 1px 0 0 #414141 inset, -1px -1px 0 0 #414141 inset, 0 1px 2px -1px rgba(0,0,0,0.15);  
        -moz-box-shadow   : 1px 1px 0 0 #414141 inset, -1px -1px 0 0 #414141 inset, 0 1px 2px 0 rgba(0,0,0,0.15);
	    -webkit-box-shadow: 1px 1px 0 0 #414141 inset, -1px -1px 0 0 #414141 inset, 0 1px 2px -1px rgba(0,0,0,0.15);
  }
 .community-poll{
    	padding-top:5%;
 }
 .community-poll p{
 	color: #C94848;
	font-size:0.8em;
	font-weight: normal;
	padding:2% 0;
  }
 .poll li{
 	padding: 3px 0px 9px 0;
 }
 .poll input.radio {
	float: left;
	margin: 2px 0 0 0;
}
.poll .label {
	display: block;
	margin-left: 20px;
}
.poll label{
	font-size:0.8125em;
	padding:0.42em 1%;
	color: #666;
	font-family : Arial, Helvetica, sans-serif;
}
/*  About  ============================================================================= */
.col_1_of_3{
	display: block;
	float:left;
	margin: 0% 0 0% 1.6%;
}
.col_1_of_3:first-child { margin-left: 0; }

.span_1_of_3 {
	width: 29.2%;
	padding:1.5%; 
}
.span_1_of_3 img{
	border:1px solid #DDD;
	max-width:100%;	
}
.span_1_of_3  h3{
	color: #6C6C6C;
	margin-bottom:0.5em;
	font-size:1.2em;
	line-height: 1.2;
	font-family: 'Monda', sans-serif;
	font-weight : normal;
	margin-top: 0px;
	text-transform:uppercase;
}
.span_1_of_3  p  {
	font-size:0.8125em;
	padding:0.5em 0;
	color:#747474;
	line-height: 1.6em;
	font-family :Arial, Helvetica, sans-serif; 	
}
.year{
	float:left;
	width:15%;
}
.year p{
	color:#70389C;
	font-size:0.95em;
}
.span_1_of_3  p.history{
	float:left;
	width:85%;
	font-size:0.8125em;
	color:#747474;
	line-height: 1.6em;
} 
.span_1_of_3 .list li a{
	font-size:0.82em;
	padding:0.35em 1.2em;
	color:#602D8D;
	background: url(../images/drop_arrow-hover.png) no-repeat 0px 10px;
	display:block;
}
.span_1_of_3 .list li a:hover{	
	color:#747474;
}
/*** team ***/
.grid_1_of_5{
	display: block;
	float:left;
	margin: 1% 0 0% 1.6%;
}
.grid_1_of_5:first-child { 
	margin-left: 0; 
} 
.images_1_of_5 {
	width: 15.72%;
	padding: 1.5%; 
}
.images_1_of_5  img{
	max-width:100%;
	display:block;
}
.images_1_of_5  h3{
	color:#C94848;
	margin-top:0.2em;
	font-size:1em;
	font-family: 'Monda', sans-serif;
	font-weight : normal;
}
.images_1_of_5  p {
	font-size:0.8125em;
	padding:0.2em 0;
	color: #333;
	line-height: 1.6em;	
}
/*** End Team ***/
/* FAQ  ============================================================================= */
.questions{
	margin:20px 0 10px 0;
}
.questions h4{
	color:#70389C;
	font-size: 15px;
	margin-bottom:5px;
	font-weight: normal;
}
.questions p{
	color: #444;
	font-size: 13px;
	line-height: 1.8em;
	margin-bottom: 5px;
}

/*  Contact Form  ============================================================================= */
.support{
	padding:1.5%;
}
.support_desc{
	float:left;
	width:75%;
}
.support_desc h3{
	font-size:30px;
	color: #6C6C6C;
	padding:5px 0;
	font-family: 'Monda', sans-serif;
}
.support_desc p span{
	font-size:15px;
	color:#666;
}
.support_desc p{
	font-size:12px;
	color:#777;
	line-height:1.8em;
	padding:5px 0;
}
.support img{
	float:left;
	margin-left:4%;
	margin-top:0px;
}
.section {
	clear: both;
	padding: 0px;
	margin: 0px;
}
.group:before,
.group:after {
    content:"";
    display:table;
}
.group:after {
    clear:both;
}
.group {
    zoom:1;
}
.col{
	display: block;
	float:left;
	margin: 0% 0 1% 1.6%;
}
.col:first-child{
	margin-left:0;
}	
.span_2_of_3 {
	width: 63.1%;
	padding:1.5%; 
}
.span_1_of_3 {
	width: 29.2%;
	padding:1.5%; 
}
.span_2_of_3  h2,
.span_1_of_3  h2 {
	margin-bottom:0.5em;
	line-height: 1.2;
	font-family: 'Monda', sans-serif;
	font-weight : normal;
	margin-top: 0px;
}
.cartpage {
  border: 1px solid #ddd;
  overflow: hidden;
  padding: 10px;
}
.cartpage h2 {
  border-bottom: 1px solid #ddd;
  font-size: 30px;
  margin-bottom: 20px;
  width: 141px;
}
.tblone {
  border: 1px solid #fff;
  margin-bottom: 12px;
  width: 100%;
}
.tblone th {
  background: #666 none repeat scroll 0 0;
  color: #fff;
  font-size: 20px;
  padding: 5px 8px;
  text-align: center;
}
.tblone td{padding:10px;text-align:center;}

table.tblone tr:nth-child(2n+1){background:#fff;height:30px;}
table.tblone tr:nth-child(2n){background:#fdf0f1;height:30px;}
table.tblone input[type="number"] {
  border: 1px solid #ddd;
  padding: 2px;
  width: 60px;
}
table.tblone input[type="submit"] {
  background: #333 none repeat scroll 0 0;
  border: 1px solid #000;
  border-radius: 3px;
  color: #fff;
  cursor: pointer;
  font-size: 14px;
  padding: 1px 5px;
}
table.tblone a {
  color: #fe5800;
  font-weight: bold;
  text-decoration: none;
}
table.tblone a:hover{color: #000;}
table.tblone img {
  height: 20px;
  width: 30px;
}
.shopping {
  margin-top: 30px;
}
.shopleft, .shopleft {
  float: left;
  text-align: center;
  width: 610px;
}
.shopleft img{outline:none}
.shopleft a,.shopright a{outline:none}

.shopright img {
  width: 270px;
  outline:none
}

.contact-form{
	position:relative;
	padding-bottom:30px;
}
.contact-form div{
	padding:5px 0;
}
.contact-form span{
	display:block;
	font-size:0.8125em;
	color:#757575;
	padding-bottom:5px;
	font-family :verdana, arial, helvetica, helve, sans-serif;
}
.contact-form input[type="text"],.contact-form textarea{
		    padding:8px;
			display:block;
			width:98%;
			background:#fcfcfc;
			border: none;
			outline:none;
			color:#464646;
			font-size:0.8125em;
			font-family:Arial, Helvetica, sans-serif;
			box-shadow: inset 0px 0px 3px #999;
			-webkit-box-shadow: inset 0px 0px 3px #999;
			-moz-box-shadow: inset 0px 0px 3px #999;
			-o-box-shadow: inset 0px 0px 3px #999;
			-webkit-appearance:none;
}
.contact-form textarea{
		resize:none;
		height:120px;		
}
.contact-form input[type="submit"]{
	padding:7px 25px;
	cursor:pointer;
	background:#FFF url(../images/large-button-overlay.png);
    font-family:Arial, Helvetica, sans-serif;
    position:absolute;
    right:0;
    border: 1px solid #ccc;
	color: #555 !important;
	font-size:1em;
	text-shadow: 0 1px 1px rgba(255, 255, 255, 0.5);
}
.contact-form input[type="submit"]:hover{
	background-color: #EEE;
	border-color: #B8B5B5;
	color: #444 !important;
}
.contact-form input[type="submit"]:active{
	background-color:#FFF;  
}
.company_address p{
	font-size:0.8125em;
	color:#757575;
	padding:0.2em 0;
	font-family :Arial, Helvetica, sans-serif;
}
.company_address p span{
	text-decoration:underline;
	color:#444;
	cursor:pointer;
}
.map{
	border:1px solid #C7C7C7;
	margin-bottom:15px;
}
/**** Responsive Layout ****/
@media only screen and (max-width:1024px) {
	.wrap{
		width:90%;
		padding:0 2%;
	}
	.search_box form input[type="text"] {
		width: 143px;
    }
    .shopping_cart {
    	width:170px;
    }
    .shopping_cart,.currencies, .languages,.login{
    	margin-left:5px;
    }
    .wrapper-dropdown {
    	width:50px;
    	padding:0 0 0 5px;
    }
    .list_2_of_1 .button a {
    	padding:5px 10px;
    }
    .heading {
    	margin-right:2%;
    }
    .sort, .show {
    	width:20%;
    }
    .listview_1_of_2{
    	margin: 2.4% 0 0% 1.6%;
    }
    .images_1_of_4 .button{
    	width:100%;
    	margin-top:0.5em;
    }
    .register_account {
	width:60%;
	padding:10px;
}
.register_account form input[type="text"]{
	width:240px;
}
.register_account form select{
	width:260px;
}
.register_account form input[type="text"].code{
	width:15%;
}
.register_account form input[type="text"].number{
	width:63.99%;
}
.login_panel {
	width:30%;
	padding:10px;
}
.img_list li a{
	font-size:11px;
	margin:0 8px;
}
.domain_search input[type="text"]{
	background: url(../images/text_box_2.png) no-repeat;
	margin:0;
	width:51.6%;
}
.domain_search select {
	width:17.7%;
}
p.terms {
	padding:15px 0 0 15px;
	width:68%;
}
    .wrapper{
    	width:95%;
    }
    .available li {
    	padding:1.5% 0%;
    }
    .available li select {
    	margin-left:0;
    }
    .span_3_of_2 .button {
    	margin-top:5%;
    }
    .signup input[type="text"] {
    	width:152px;
    }
    .signup input[type="submit"] {
    	padding:8px 10px;
    }
    .images_1_of_5 p {
    	padding:0;
    	line-height:1.4em;
    }
    .year {
    	width:18%;
    }
    .span_1_of_3 p.history {
    	width:80%;
    }
    .support_desc {
		width: 70%;
	}	
	.support img {
	margin-left: 3%;
	}
}
@media only screen and (max-width:800px) {
	.wrap{
		width:90%;
		padding:0 2%;
	}
	.search_box form input[type="text"] {
		width: 183px;
    }
    .shopping_cart {
    	width:180px;
    }
    .shopping_cart{
    	margin-left:5px;
    }
    .wrapper-dropdown{
    	margin-left:5px;
    	margin-top:5px;
    	width:55px;
    }  
    .login{
    	margin-left:5px;
    	margin-top:5px;
    }
    .list_2_of_1 .button a {
    	padding:5px 10px;
    }
    .heading {
    	margin-right:0%;
    }
    .sort, .show {
    	width:24%;
    }
    .header_bottom_left,.header_bottom_right_images{
    	float:inherit;
    	width:100%;
    }
    .header_bottom_right_images {
    	margin-left:0;
    }
    .listview_1_of_2{
    	margin: 1.4% 0 0% 1.6%;
    }
    .images_1_of_4 .button{
    	width:100%;
    	margin-top:0.5em;
    }
    .content_top {
    	padding:15px 5px;
    }
    .images_1_of_4 h2 {
    	font-size:0.8em;
    	letter-spacing:0;
    }
    .images_1_of_4 p span.strike,.images_1_of_4 p span.price {
    	font-size:18px;
    }
    .wrapper{
    	width:95%;
    }
    .span_1_of_4 h4 {
    	font-size:1em;
    	letter-spacing:0;
    }
    .social-icons li {
    	padding:0 0 0 4px;
    }
    .span_1_of_2{
    	float:inherit;
    	width:97%;
    	padding:1.5%;
    }
    .span_3_of_1{
    	float:inherit;
    	width:97%;
     }
     .rightsidebar {
     	margin-left:0;
     }
     .span_3_of_1 li a {
     	font-size:1em;
     	padding: 0.42em 3%;
     	background: url(../images/drop_arrow.png) no-repeat 5px 15px;
     }
     .span_3_of_1 li a:hover {
		background: url(../images/drop_arrow-hover.png) no-repeat 5px 15px;
	 }
    .available li {
    	padding:1.5% 1%;
    }
    .available li select {
    	margin-left:0;
    }
    .span_3_of_2 .button {
    	margin-top:5%;
    }
    .signup input[type="text"] {
    	width:80%;
    }
    .signup input[type="submit"] {
    	padding:8px 10px;
    	width:18.5%;
    }
    .span_1_of_4 li span {
    	font-size:1em;
    }
    .images_1_of_5 p {
    	padding:0;
    	line-height:1.4em;
    }
    .year {
    	width:8%;
    }
    .images_1_of_5 h3 {
    	font-size:0.8em;
    }
    .span_1_of_3 p.history {
    	width:92%;
    }
    .span_2_of_3 {
		width:96%;
		padding:2% 0; 
	}
	.col_1_of_3{ 
		margin:0% 0 0% 0%;
	}
	.span_1_of_3 {
		width:96%;
		padding:2% 0; 
	}
	.support_desc {
		width: 70%;
	}
	.support img {
		width: 25%;
	margin-left: 3%;
	}
	.register_account {
	width:60%;
	padding:10px;
}
.register_account form input[type="text"]{
	width:200px;
}
.register_account form select{
	width:220px;
}
.register_account form input[type="text"].code{
	width:15%;
}
.register_account form input[type="text"].number{
	width:60.8%;
}
.login_panel {
	width:30%;
	padding:10px;
}
.img_list li a{
	font-size:11px;
	margin:0 8px;
}
.domain_search input[type="text"]{
	background: url(../images/text_box_2.png) no-repeat;
	margin:0;
	width:51.6%;
}
.domain_search select {
	width:17.7%;
}
p.terms {
	padding:12px 0 10px 15px;
	width:58%;
}
.tld-box{
	margin-left:2%;
}
.rfloat {
	width:70%;
}
.check_domain input[type="text"] {
	background: url(../images/text_box_reg2.png) no-repeat;
	width:80%;
}
.support_desc h3, .plans h3, .domain_registration h3 {
	font-size:25px;
}
.support_desc {
	width:70%;
}
.support img{
	margin-left:3%;
}
.features_list-1{
	float:left;
	width:48%;
}
.features_list-2{
	float:left;
	width:48%;
}
.features_list-3{
	display:none;
}
.plans_table thead th.plans-list h3 {
	font-size:15px;
}
.plans_table thead th.plans-list h4{
	font-size:18px;
}
.plans_table tbody td {
	padding:5px;
}
.feedback form input[type="text"].number{
	width:70%;
}
.feedback form select {
	width:100%;
}
.register_account,.login_panel {
	float:inherit;
	width:96%;
	padding:10px;
}
.login_panel {
	margin:0 0 3% 0;
}
.login_panel form {
	margin:0;
}
.register_account form input[type="text"]{
	width:300px;
}
.register_account form select{
	width:320px;
}
.register_account form input[type="text"].code{
	width:15%;
}
.register_account form input[type="text"].number{
	width:68%;
}
.login_panel input[type="text"], .login_panel input[type="password"] {
	width: 95%;
}
}
	
@media only screen and (max-width: 640px) {	
	.wrap{
		width:90%;
	}	
/*** Header ****/
	.logo{
		float:inherit;
		width:100%;
		text-align:center;
	}
	.header_top_right {
		float:inherit;
		width:100%;
		margin-top:20px;
	}
	.search_box {
		float:inherit;
		width:100%;
	}
	.search_box form input[type="text"] {
		width:78.5%;
    }
    .search_box form input[type="submit"] {
    	width:18.5%;
    }
    .shopping_cart {
    	width:16.5%;
    }
    .shopping_cart{
    	width:65.66%;
    	margin-left:0px;
    	margin-top:8px;
    }
     .wrapper-dropdown{
    	margin-left:5px;
    	margin-top:8px;
    	width:55px;
    } 
    .login{
    	margin-left:5px;
    	margin-top:8px;
    }
    .list_2_of_1 .button a {
    	padding:5px 10px;
    }
    .text {
		text-align:center;
		float:inherit;
		margin:2% 0 0% 0%;
	}
    /* Content */
     .content_top {
    	padding:15px 10px;
    }
    .heading {
    	margin-right:0%;
    	width:100%;
    }
    .sort{
    	width:31%;
    	margin-left:0;
    	padding-top:10px;
    }
     .show {
    	width:23%;
    	padding-top:10px;
    }
    .sort select, .show select {
    	font-size:1em;
    }
    .page-no {
    	padding-top:10px;
    }
    .page-no li a {
    	padding:5px 3px;
    }
    .header_bottom_left,.header_bottom_right_images{
    	float:inherit;
    	width:100%;
    }
    .header_bottom_right_images {
    	margin-left:0;
    }
    .listview_1_of_2{
    	margin: 1.4% 0 0% 1.6%;
    }
    .images_1_of_4 .button{
    	width:100%;
    	margin-top:0.5em;
    }
    .images_1_of_4 h2 {
    	font-size:1.2em;
    	letter-spacing:0;
    }
    .images_1_of_4 p span.strike,.images_1_of_4 p span.price {
    	font-size:2em;
    }
    .wrapper{
    	width:95%;
    }
    .span_1_of_4 h4 {
    	font-size: .8em;
		letter-spacing: 0;
		padding-top: 5px;
    }
    .social-icons li {
    	padding:0 0 0 8px;
    }
    .span_1_of_2{
    	float:inherit;
    	width:97%;
    	padding:1.5%;
    }
    .span_3_of_1{
    	float:inherit;
    	width:97%;
     }
     .rightsidebar {
     	margin-left:0;
     }
     .span_3_of_1 li a {
     	font-size:1em;
     	padding: 0.42em 3%;
     	background: url(../images/drop_arrow.png) no-repeat 5px 15px;
     }
     .span_3_of_1 li a:hover {
		background: url(../images/drop_arrow-hover.png) no-repeat 5px 15px;
	 }
    .available li {
    	padding:1.5% 1%;
    }
    .available li select {
    	margin-left:0;
    }
    .span_3_of_2 .button {
    	margin-top:5%;
    }
    .signup input[type="text"] {
    	width:79.5%;
    }
    .signup input[type="submit"] {
    	padding:8px 10px;
    	width:18.5%;
    }
    .span_1_of_4 li span {
    	font-size:1em;
    }
    .span_2_of_3 {
		width:96%;
		padding:2% 0; 
	}
	.col_1_of_3{ 
		margin:0% 0 0% 0%;
	}
	.span_1_of_3 {
		width:96%;
		padding:2% 0; 
	}
	.grid_1_of_4{ 
		margin: 2% 0 2% 0%;
	}	
	.images_1_of_4 {
		width:94%;
		padding:3%;
	}
  /** contact-form **/
 	.span_2_of_3 {
		width:100%;
		padding:3% 0; 
	}
	.col{ 
		margin: 0% 0 0% 0%;
	}
	.span_1_of_3 {
		width:100%;
		padding:3% 0; 
	}
   
   .contact-form input[type="text"],.contact-form textarea{
		width:97%;
	}
	/** End contact-form **/
	/*** Login ***/
	.register_account form input[type="text"]{
	width:235px;
}
.register_account form select{
	width:255px;
}
.register_account form input[type="text"].code{
	width:10%;
}
.register_account form input[type="text"].number{
	width:68.5%;
}
.register_account,.login_panel {
	float:inherit;
	width:96%;
	padding:10px;
}
.login_panel {
	margin:0 0 3% 0;
}
.login_panel button{
	font-size:15px;
}
		
  /*** Preview ***/
 .grid {
		margin:0;
	}
	.cont-desc{ 
		margin: 2% 0 2% 0%;
	}
	.rightsidebar{
		margin:0;
	}
	.image{
		padding:3%;
	}
	.desc{
		margin:0;
	}
	.span_1_of_2 {
		width:94%;
		padding:3%;
	}
	.span_3_of_2 {
		width: 100%;
	}
	.images_3_of_2{
		width: 100%;
	}
	.span_3_of_1 {
		width:94%;
		padding:3%;
	}
/*** About ***/
.grid_1_of_5{ 
		margin: 0% 0 0% 0%;
	}	
	.images_1_of_5{
		width:94%;
		padding:3%;
	}
	 .images_1_of_5 p {
    	padding:0;
    	line-height:1.4em;
    }
    .year {
    	width:8%;
    }
    .images_1_of_5 h3 {
    	font-size:1.2em;
    }
    .span_1_of_3 p.history {
    	width:92%;
    }
}
@media only screen and (max-width: 480px) {	
	.wrap{
		width:90%;
	}	
/*** Header ****/
	.logo{
		float:inherit;
		width:100%;
		text-align:center;
	}
	.header_top_right {
		float:inherit;
		width:100%;
		margin-top:20px;
	}
	.search_box {
		float:inherit;
		width:100%;
	}
	.search_box form input[type="text"] {
		width:77.5%;
    }
    .search_box form input[type="submit"] {
    	width:18.5%;
    }
    .shopping_cart {
    	width:16.5%;
    }
    .shopping_cart{
    	width:55.55%;
    	margin-left:0px;
    	margin-top:8px;
    }
    .wrapper-dropdown{
    	margin-left:5px;
    	margin-top:8px;
    	width:55px;
    }
   .login{
    	margin-left:5px;
    	margin-top:8px;
    }
    .list_2_of_1 .button a {
    	padding:5px 10px;
    }
    .listview_1_of_2{ 
		margin: 0% 0 0% 0%;
	}
	
	.images_1_of_2 {
		width:92%;
		padding:4%;
	}
	.listimg_2_of_1{
	     width:100%;		
   }
	.list_2_of_1 {
		width: 100%;
	}
    /* Content */
     .content_top {
    	padding:15px 10px;
    }
    .heading {
    	margin-right:0%;
    	width:100%;
    }
    .sort{
    	width:25%;
    	margin-left:0;
    	padding-top:10px;
    }
     .show {
    	width:21%;
    	padding-top:10px;
    }
    .sort select, .show select {
    	font-size:1em;
    }
    .page-no {
    	padding-top:25px;
    }
    .page-no li a {
    	padding:5px 3px;
    }
    .header_bottom_left,.header_bottom_right_images{
    	float:inherit;
    	width:100%;
    }
    .header_bottom_right_images {
    	margin-left:0;
    }
    .listview_1_of_2{
    	margin:2% 0 0% 0%;
    }
    .images_1_of_4 .button{
    	width:100%;
    	margin-top:0.5em;
    }
    .images_1_of_4 h2 {
    	font-size:1.2em;
    	letter-spacing:0;
    }
    .images_1_of_4 p span.strike,.images_1_of_4 p span.price {
    	font-size:2em;
    }
   /*** Footer ***/
    .wrapper{
    	width:90%;
    }
    .col_1_of_4{ 
		margin: 1% 0 1% 0%;
	}
	.span_1_of_4 {
		width:95%;
		padding:0 2.5%;
		border:none; 
	}
    .span_1_of_4 h4 {
    	font-size:1em;
		letter-spacing: 0;
		padding-top: 5px;
    }
    .social-icons{
    	padding-top:3%;
    }
    
  /*** preview ***/
 .back-links {
 	width:100%;
 }
    .social-icons li {
    	padding:0 0 0 8px;
    }
    .span_1_of_2{
    	float:inherit;
    	width:97%;
    	padding:1.5%;
    }
    .span_3_of_1{
    	float:inherit;
    	width:97%;
     }
     .rightsidebar {
     	margin-left:0;
     }
     .span_3_of_1 li a {
     	font-size:1em;
     	padding: 0.42em 5%;
     	background: url(../images/drop_arrow.png) no-repeat 5px 15px;
     }
     .span_3_of_1 li a:hover {
		background: url(../images/drop_arrow-hover.png) no-repeat 5px 15px;
	 }
    .available li {
    	padding:1.5% 1%;
    }
    .available li select {
    	margin-left:0;
    }
    .span_3_of_2 .button {
    	margin-top:1%;
    }
    .signup input[type="text"] {
    	width:78.5%;
    }
    .signup input[type="submit"] {
    	padding:8px 10px;
    	width:18.88%;
    }
    .span_1_of_4 li span {
    	font-size:1em;
    }
    .span_2_of_3 {
		width:96%;
		padding:2% 0; 
	}
	.col_1_of_3{ 
		margin:0% 0 0% 0%;
	}
	.span_1_of_3 {
		width:96%;
		padding:2% 0; 
	}
	.grid_1_of_4{ 
		margin: 2% 0 2% 0%;
	}	
	.images_1_of_4 {
		width:94%;
		padding:3%;
	}
  /** contact-form **/
 	.span_2_of_3 {
		width:95%;
		padding:2.5%; 
	}
	.col { 
		margin: 0% 0 0% 0%;
	}
	.span_1_of_3 {
		width:95%;
		padding:2.5%; 
	}
	.contact-form input[type="text"],.contact-form textarea{
		width:92%;
	}
	/** End contact-form **/
		/*** Login ***/
 .register_account table{
 	width:100%;
 }
 .register_account table td {
 	display:block;
 }
 .register_account form input[type="text"]{
	width:95%;
}
.register_account form select{
	width:100%;
}
.register_account form input[type="text"].code{
	width:10%;
}
.register_account form input[type="text"].number{
	width:76.5%;
}
.register_account,.login_panel {
	float:inherit;
	width:96%;
	padding:10px;
}
.login_panel {
	margin:0 0 3% 0;
}
.login_panel button{
	font-size:15px;
}
		
  /*** Preview ***/
 .grid {
		margin:0;
	}
	.cont-desc{ 
		margin: 2% 0 2% 0%;
	}
	.rightsidebar{
		margin:0;
	}
	.image{
		padding:3%;
	}
	.desc{
		margin:0;
	}
	.span_1_of_2 {
		width:94%;
		padding:3%;
	}
	.span_3_of_2 {
		width: 100%;
	}
	.images_3_of_2{
		width: 100%;
	}
	.span_3_of_1 {
		width:94%;
		padding:3%;
	}
/*** About ***/
.grid_1_of_5{ 
		margin: 0% 0 0% 0%;
	}	
	.images_1_of_5{
		width:94%;
		padding:3%;
	}
	 .images_1_of_5 p {
    	padding:0;
    	line-height:1.4em;
    }
    .year {
    	width:12%;
    }
    .images_1_of_5 h3 {
    	font-size:1.2em;
    }
    .span_1_of_3 p.history {
    	width:88%;
    }
    	.col_1_of_3{ 
		margin: 0% 0 0% 0%;
	}
	.span_1_of_3 {
		width:95%;
		padding:2.5%;
	}
.grid_1_of_4{ 
		margin:0% 0 0% 0%;
	}	
	.images_1_of_4 {
		width:95%;
		padding:2.5%;
	}
}
/*  GO FULL WIDTH AT LESS THAN 480 PIXELS */
@media only screen and (max-width: 480px) {
	.cont-desc{ 
		margin: 2% 0 2% 0%;
	}
	.rightsidebar{
		margin:0;
	}
	.grid {
		margin:0;
	}
	.image{
		padding:4%;
	}
	.desc{
		margin:0;
	}
	.span_1_of_2 {
		width:92%;
		padding:4%;
	}
	.span_3_of_2 {
		width: 100%;
	}
	.images_3_of_2{
		width: 100%;
	}
	.span_3_of_1 {
		width:92%;
		padding:4%;
	}
	  .grid_1_of_5{ 
		margin: 0% 0 0% 0%;
	}	
	.images_1_of_5{
		width:92%;
		padding:4%;
	}
}

</style>
	    
	
<div class="col-md-12">
 <div class="main">
    <div class="content">
    	






<div class="content_bottom">
    		<div class="heading">
    		<h3>New Product</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">



				<?php

$getNpd = $pd->getNewProduct();
if ($getNpd){
    while ($result = $getNpd->fetch_assoc()) {
        ?>



			<br>	
				
				
				<div style="margin: 0 0 0 40px;" class="grid_1_of_4 images_1_of_4" >

					<a  href="preview.php?proid=<?php echo $result['productId'];?>">
						
					<img style="height: 200px;object-fit: cover;object-position: center;" src="admin/<?php echo $result['image'];?>" alt="" /></a>
					 <h2><?php echo $result['productName'];?> </h2>
					 <p><?php echo $fm->textShorten($result['body'],60); ?></p>
					 <p><span class="price">$ <?php echo $result['price'];?></span></p>

				     <div class="button"><span><a href="preview.php?proid=<?php echo $result['productId'];?>" class="details">Details</a></span></div>
				</div>
			
<?php }} ?>


			
			</div>




<br>

			<div class="content_top">
    		<div class="heading">
    		<h3>Old Product</h3>
    		</div>
    		 <div class="clear"></div>
  </div>
			<div  class="section group">



				<?php

$getFpd = $pd->getFeaturedProduct();
if ($getFpd){
    while ($result = $getFpd->fetch_assoc()) {
        ?>



				
				



<br>






				
				<div style="margin: 0 0 0 40px;" class="grid_1_of_4 images_1_of_4"  >

					<a href="preview.php?proid=<?php echo $result['productId'];?>">
					<img style="height: 200px;object-fit: cover;object-position: center;" src="admin/<?php echo $result['image'];?>" alt="" /></a>
					 <h2 ><?php echo $result['productName'];?> </h2>
					 
					 <p><?php echo $fm->textShorten($result['body'],60); ?></p>
					 <p><span class="price">$ <?php echo $result['price'];?></span></p>

				     <div class="button"><span><a href="preview.php?proid=<?php echo $result['productId'];?>" class="details">Details</a></span></div>
				</div>
			
<?php }} ?>


			</div>




			
    </div>
 </div>
</div>

   <?php include'inc1/footer.php';?>