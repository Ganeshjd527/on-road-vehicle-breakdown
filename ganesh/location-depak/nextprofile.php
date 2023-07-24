<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<style>
    /*improt google font you can try your choice of font */
@import url('https://fonts.googleapis.com/css2?family=Montserrat');
*{
	box-sizing: border-box;
}
body{
	background-color: #28223f;
	font-family: 'Montserrat',sans-serif;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	min-height: 100vh;
	margin: auto;
   /* top:-2px;
    position:absolute;
    top:0%;
    left: 160px;
    right: inherit;*/


}
h3{
	margin: 10px 0;
}
h6{
	margin:5px 0;
	text-transform: uppercase;
}
p{
	font-size:14px;
	line-height: 21px;
}
.card-container{
	background-color:#231E39;
	border-radius: 5px;
	box-shadow: 0px 10px 20px -10px rgba(0,0,0,0.75);
	color:#B3B8CD;
	padding-top:30px;
	position: relative;
	width:350px;
	max-width: 100%;
	text-align:center;
}
.card-container .pro{
	color:#231E39;
	background-color: #FEBB0B;
	border-radius: 3px;
	font-size:14px;
	font-weight: bold;
	padding:3px 7px;
	position: absolute;
	top:30px;
	left:30px;
}
.card-container .round{
	border:1px solid #03BFCB;
	border-radius: 50%;
	padding:7px;
}
button.primary{
	background-color:#03BFCB;
	border:1px solid #03BFCB;
	border-radius: 3px;
	color:#231E39;
	font-family: 'Montserrat',sans-serif;
	font-weight: 500;
	padding:10px 25px;
}
button.primary.follow{
	   background-color:transparent;
	   color:#02899C;

	}
.skills{
	background-color:#1F1A36;
	text-align: left;
	padding:15px;
	margin-top: 30px;
}
.skills ul{
    list-style-type: none;
    margin:0;
    padding:0;

}
.skills ul li{
	border:1px solid #2D2747;
	border-radius: 2px;
	display: inline-block;
	font-size:12px;
	margin:0 39px 2px 0;
	padding: 7px;
    justify-content:space-between;
}
/down button/
button {
  width: 150px;
  height: 60px;
  border: 3px solid #315cfd;
  border-radius: 45px;
  transition: all 0.3s;
  cursor: pointer;
  background: white;
  font-size: 1.2em;
  font-weight: 550;
  font-family: 'Montserrat', sans-serif;
}

button:hover {
  background: #315cfd;
  color: white;
  font-size: 1.5em;
}
/*back to home*/
button {
 display: inline-block;
 border-radius: 4px;
 background-color: #3d405b;
 border: none;
 color: #FFFFFF;
 text-align: center;
 font-size: 17px;
 padding: 16px;
 width: 130px;
 transition: all 0.5s;
 cursor: pointer;
 margin: 5px;
}

button span {
 cursor: pointer;
 display: inline-block;
 position: relative;
 transition: 0.5s;
}

button span:after {
 content: '»';
 position: absolute;
 opacity: 0;
 top: 0;
 right: -15px;
 transition: 0.5s;
}

button:hover span {
 padding-right: 15px;
}

button:hover span:after {
 opacity: 1;
 right: 0;
}

</style>
</head>
<body>
   <center>
    <h2 style="color:white" ><u></h2></center>
      <div class="card-container">
      	 <!--<span class="pro">PRO</span>-->
<img class="round" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAI4AAACOCAMAAADQI8A6AAAAZlBMVEX////MzMxNTU3JycnPz89JSUnS0tLn5+dCQkL39/fGxsY7Ozvd3d3w8PDV1dX6+vp+fn63t7eUlJSenp5ubm5oaGhXV1ekpKS/v7+JiYljY2NdXV2rq6tzc3M2NjaxsbEnJycuLi6w5DHPAAAE9UlEQVR4nO2b25aiOhCGG0gCBjkqCqI4/f4vOQjO7oP5iySE7n2R/2bWmtWwPuqUSiW+vXl5eXl5eXl5eXl5eXkVWRaPyrJd8csc8V5EkZQyiqZ/ZCT2cfYrUEWcsyCKgm8a/4fl8Q8T7WIhX0g+MUkR734MJtsHBMuTKNhnPwOTv7pICRTl2wPthNRheRKJjV2m4aZvLtsQJjODmYG28lixN2WZtY2BdsLYNE8DbRFBmSXMBOTcYTGmYULko4RgmCd2S7NHNEwEVX08heHpWFeBgDxOAwjTRIc+THgYhpwn4ekQIQu55EE0LK/CNPykNKxyAOSOB8QNY23Jw2/iZQtiyFX8gJxiQTf650WclxKEkJP82gGa80kBMwElZ2AfB/WnUH+q6JIXR/2npAMPrcdRh7EogWmePKXSPuvDOVN/Zp1SNJBndfgoX8rkiaYZA6hS86yjAa7qSFfN4ZO7d9dO+YVBsEgz8gRq86zJLnVPIWodnFqZXdGK7MrUfbF4LcaK4CnVyS7to1np/vGN/TJNGPagx8+tjQNWzlaHJgxb9dPWvRhYyFmlETpj8IBUt00ulFbsvlADZ6V31PvYJRfqR9lZDwcspLadBuo02UHPWQdkHatcL2BDetCyDsaRNvMWuHdgVz1nXWHfbOMtUHRWZ1ZgVXoKvGvSqzsc1J3HB5l7S93oTNKryidi8mJeCYltp2x01qwG41gED9zpjTrq4Bzx8xaFGe5vx/2VHg7D0WdeeQhflcswD5WEt4xx4Ls0OtNZSQfNI01pCvxpOoE8uavBBjbNdDxdkprGGc0DP8m4JYQ4rNJaIh5KYV02xlm7Yk04cNWSpoUH47iwjnEdxEXZRew4xGE33cy6wUQ3xgFbrAfOQRcH9l8WmUWsx7rOAttiG5wdxskvWubhDWzgAmm6mSCq8uJwZ1aq3qTPOMb9FzXzv6WL9uHpjXiB+RKKPy1g0f2yhHO548ixaTCo9ivIl0YqSY0Dx6r9IppTjZUCrw8TjnlzSrTuI0470DhDS+FYtO7ExuahJeuQD1tsbPC2b3phT+YW78mPsZk40cFDd6hEXxpYboqJQviY8dDWgbOdh6xGBlTlGSsHtVLwC/2sDc2Ct+6EtxLSOJbjJjSMm0WdA/T0qbLlpJs8xo+wt/iFwrE+B6CPzvF2izckjvWcmyw9eKNOTQtWjLnJljDALTOneosVhwDgiGQSwwcTHJytPbTmiIRKLkucVQdIoOthTAgylAMBbmSsPQ1VwlzL5kQcFIc8OTXlVTluWkfz2vYwVjWcL/fKnDfVK9Dqk/2v7hLiWi737U+itLyKL4uXg3sYxafiI2RNOknhtPrzDQgHx/oflx4Eq9E9B6wRiP0DcnHp4blWsFzWiTHMBJTUcrpF4+rKVRwx1nbmlvmwUNcy5u7C1f58s7PMh4VuZ4fXm84L+5hlDWd3NOt5hoNLmrc3vTMspKRySzOuFoNBwfkqPqxdGxSKj9oj069Kj44vMc7aUfersGmSbqtLyzI0r8qh8XGIvopadTePgOH1tj8K2Df6Ic2HZsvL3LPyMtU7uE5L+02DifYdXwrq8Q+67S3zT3F1fMddGE/fj9UmyQ1VZNWt5+l3K/Ek5X1Z/crvbDJR1X36530Y0lHD8P4n7etK/MyvR5CKOA9k28rgx3/p4+Xl5eXl5eXl5eXl9X/UX9pNSz0NirElAAAAAElFTkSuQmCC">
         <h3>MECHANIC 2</h3>
      	 <h6>India</h6>
      	 <p>MECHAA TRON <br/>CAR AND BIKE </p>
      	 <div class="buttons">
      	 	<button class="primary">Message</button>
      	 	<button class="primary follow">Following</button>
      	 </div>

      	 <div class="skills">
      	 	<h6>Contact me :</h6>
      	 	<ul>
      	 		<li><img class="round" src="data:image/png;base64,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" height="50px"></li>
      	 		<li><img class="round" src="data:image/jpeg;base64,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" height="50px"></li>
                <li><img class="round" src="data:image/jpeg;base64,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" height="50px"></li>        </ul>
    	 </div>
      </div>
</div><br>
<button height="10px" width="10px" style="border-radius:10px;"><a href="profile.php" style="text-decoration:none;color:black">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="30" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/>
</svg>
  Previous</a><br>
</button>
<a href="../index.php" style="text-decoration:none;color:white">
<button>
  <span>Back to home</span>
</button></a>

</body>
</html>