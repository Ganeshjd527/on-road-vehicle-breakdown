<!DOCTYPE html>
<html>
<head>
	<title>Contact Form Page</title>

	<!--- font awesome css link ----->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    /universal selector/
*{
    box-sizing:border-box;
}
body{
	background:linear-gradient(to right, #ffd800 0%, #b6ff00 100%);
	font-size:12px;
    background-image:url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR1QRiHP6gZdkHWCr9mptLNCR3BF5Fu1OKTSadJVEDxQLEz8IMocf5sAI5Pu-XXKiQWb9M&usqp=CAU");
  background-repeat:no-repeat;
  background-size: cover;
}
body,input,button{
	font-family: 'century gothic';
	letter-spacing: 1.4px;
	font-weight: 500;
}
.background{
	display: flex;
	min-height: 100vh;
}
.container{
	flex: 0 1 700px;
	margin: auto;
	padding:10px;
}
.contact-box{
	position: relative;
	background-color:#3e3e3e;
	border-radius: 15px;
}

.contact-box:after{
	content: '';
	display: flex;
	position: absolute;
	top:0;
	left:20px;
	bottom:0;
	right: 20px;
	z-index: -1;
	border-radius: 15px;
	box-shadow: 0 20px 40px rgba(0,0,0,0.4);
}
.contact-header{
	display: flex;
	align-items: center;
	padding:10px 20px;
	background-color:#4d4d4f;
	border-top-left-radius: 15px;
	border-top-right-radius: 15px;
}
.header-left{
	margin-right: auto;
}
.header-btn-left{
	display: inline-block;
	width:8px;
	height: 8px;
	margin-right: 3px;
	border-radius: 8px;
	background: #fff;
}
.header-btn-left.close{
	background: #ed1c6f;
}
.header-btn-left.max{
	background: #e8d925;
}
.header-btn-left.min{
	background: #74c54f;
}
.header-right{
	display: flex;
}
.header-disc{
	width:3px;
	height: 3px;
	border-radius: 3px;
	margin-left:2px;
	background: #999;
}
.contact-body{
	display: flex;
}
.body-item{
	flex: 1;
	padding:50px;
}

.body-item.left{  
	display: flex;
	flex-direction: column;
}
.title{
	display: flex;
	flex-direction: column;
	color:#b6ff00;
	font-size: 26px;
	position: relative;
	font-family: Calibri;

}
.title:after{
	content: '';
	display: block;
	position: absolute;
	left:0;
	bottom: -10px;
	width:25px;
	height: 4px;
	background-color: #b6ff00;
}
.contact-detail{
	margin-top:auto;
    font-size:14px;
    color:#888;
    font-family: 'century gothic';

}
.body-item.left ul{
	list-style: none;
	position: relative;
    padding:0;

}
.body-item.left ul li{
	height: 35px;
	width:35px;
	background:linear-gradient(to right, #ffd800 0%, #b6ff00 100%); 
    display: inline-block;
    margin-right: 5px;
    border-radius: 50%;
    text-align: center;
    line-height: 35px;
    font-size:18px;
    color:#3e3e3e;

}
.form-group{
	margin-bottom: 15px;
}
.form-group.msg{
	margin-top:40px;
}
.form-group.buttons{
	margin-top:0px;
	
}
.form-control{
	width:100%;
	padding: 10px 0;
	background-color: transparent;
	border:none;
	outline: none;
	font-size:14px;
	color:#ddd;
	text-transform: uppercase;
	border-bottom: 1px solid #666;
	transition: border-color 0.2s;
}
.form-control::placeholder{
	color:#666;
}
.form-control:focus{
	border-bottom-color:#ddd;
}
.form-btn{
	background-color:transparent;
	border:none;
	font-family: 'Century Gothic';
	font-size:14px;
	cursor: pointer;
	outline:none;
	color:#b6ff00;
	margin:15px 15px 0px 0px;
	border-bottom: 1px solid #b6ff00;
	transition: 0.5s;
}
.form-btn:hover{
    border:1px solid #b6ff00;
    padding:10px;
}
/*media query for responsiveness */

@media screen and (max-width:520px)
{
	.contact-body{
		flex-direction: column;
	}
	}
	.body-item.left{
		margin-bottom: 30px;
	}
	.title{
		flex-direction: row;
	}
	.title span{
		margin-right: 12px;
	}
	.title:after{
		display: none;
	}
}

@media screen and (max-width:600px)
{
   .contact-body{
   	padding:40px;
   }
   .body-item{
   	padding: 0;
   }
}
</style>
</head>
<body>
    <div class="background">
    	<div class="container">
    		  <!--Contact form ----->
    		  <div class="contact-box">
    		  	  <!-- contact form header ----->
    		       <div class="contact-header">
    		       	   <div class="header-left">
    		       	   	 	<div class="header-btn-left close"></div>
    		       	   	 	<div class="header-btn-left max"></div>
    		       	   	 	<div class="header-btn-left min"></div>
    		       	   </div>
    		       	   <div class="header-right">
    		       	   		<div class="header-disc"></div>
    		       	   		<div class="header-disc"></div>
    		       	   		<div class="header-disc"></div>
    		       	   </div>
    		       </div>

    		       <!--- contact form  body ----->

    		       <div class="contact-body">
    		       	   <div class="body-item left">
    		       	   	  <div class="title">
    		       	   	  	  <span>CONTACT US </span>
    		       	   	  </div>
                          <div class="contact-detail">
                          	  CONTACT - #91-8200712475 <br>
                          	  <ul>
                          	  	  <li><i class="fa fa-facebook"></i></li>
                          	  	  <li><i class="fa fa-instagram"></i></li>
                          	  	  <li><i class="fa fa-youtube"></i></li>
                          	  	  <li><i class="fa fa-twitter"></i></li>
                          	  </ul>
                          </div>

    		       	   </div>

    		       	    <div class="body-item right">
    		       	    	 <div class="contact-form">
    		       	    	 	 <form method="" action="">
    		       	    		     <div class="form-group">
    		       	    		     	<input type="text" name="" class="form-control" placeholder="NAME">
    		       	    		     </div>


    		       	    		      <div class="form-group">
    		       	    		     	<input type="text" name="" class="form-control" placeholder="EMAIL">
    		       	    		     </div>

    		       	    		      <div class="form-group">
    		       	    		     	<input type="text" name="" class="form-control" placeholder="MOBILE">
    		       	    		     </div>

    		       	    		      <div class="form-group msg">
    		       	    		     	<input type="text" name="" class="form-control" placeholder="MESSAGE">
    		       	    		     </div>

    		       	    		      <div class="form-group buttons">
    		       	    		     	  <button class="form-btn"><a href="contact1.php" style="text-decoration:none; color:#b6ff00">CONTACT</a></button>
    		       	    		     	  <button class="form-btn"><a href="index.php" style="text-decoration:none; color:#b6ff00">BACK TO HOME</a></button>
    		       	    		     </div>
    		       	    	     </form>
    		       	    	 </div>
    		       	    </div>
    		       </div>

    		  </div>

    	</div>
    </div>
</body>
</html>