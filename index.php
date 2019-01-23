<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>MAFFICK'2019| MANIT Bhopal </title>
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" type="text/css" href="">
	<link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css" src="w3.css">
		section{
			border:0;
            height: 100vh;
			margin: 0px;
		}
		body{
			margin: 0px;
			opacity:1; 
   transition: opacity .5s;
			overflow: hidden;
		}
		img{margin: 20PX;
			margin-top: 21px;
			width:180px;
			height: 120px;
		}
		
		#HOME{
			background-image: linear-gradient(-230deg, rgb(0, 255, 204),rgb(245, 245, 239));
		}
		#ABOUTUS{
			background-image: linear-gradient(-310deg, rgb(0, 255, 204),rgb(245, 245, 239));
		}
		.rotate1 {
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    transform: rotate(90deg);
}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
	</style>

</head>
<body >

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a style="margin-top: 100px;" href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>
 <img onclick="openNav()" class=""  style=" width: 70px;height: 60px; margin-left: 93vw; position: fixed; margin-top: 5vh;"src="/hamburger.svg" alt="Next">
 
<script>



function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
 


function openNav() {
  document.getElementById("mySidenav").style.width = "250px";


}


</script>
	<section onwheel="myFunction(event)" id="HOME" >
		<div>
			<div>
			<a href="http://localhost/index.php/#HOME">	<img id="LOGO" alt="LOGO" style="position:fixed;z-index: 1000000;   " src="http://res.cloudinary.com/ashishpatel0720/image/upload/v1521024669/maffick-white-18.png"></a>

			</div>
			<div>
				<a href="" class="" style="position: fixed;font-family: 'Staatliches', cursive;font-size: 15PX; z-index: 100000;float: right;margin-top: 93vh;margin-left: 90vw;background-color: none; border: 2px solid black;border-radius: 100px;padding: 21px;padding-top: 3px;padding-bottom: 3px;">SHARE THIS</a>
			</div>
			<div id="sociallink" >
			<a href="##">	<i id="fb" onmouseover="myhover1()" class="fa fa-facebook-f" style=" position: fixed;font-size:25px;margin-top: 91vh;border: 2px solid black;z-index: 100000;border-radius: 50%;margin-left: 25px;padding: 8px;"></i></a>
			<a href="##">	<i id="instagram" class="fa fa-facebook-f" style=" position: fixed;font-size:25px;margin-top: 91vh;border: 2px solid black;z-index: 100000;border-radius: 50%;margin-left: 70px;padding: 8px;"></i></a>
			<a href="##">	<i id="indeed" class="fa fa-facebook-f" style=" position: fixed;font-size:25px;margin-top: 91vh;border: 2px solid black;z-index: 100000;border-radius: 50%;margin-left: 115px;padding: 8px;"></i></a>
			<a href="##">	<i id="wiki" class="fa fa-facebook-f" style=" position: fixed;font-size:25px;margin-top: 91vh;border: 2px solid black;z-index: 100000;border-radius:50%;margin-left: 160px;padding: 8px;"></i></a>
			<a href="##">	<i id="youtube" class="fa fa-facebook-f" style=" position: fixed;font-size:25px;margin-top: 91vh;border: 2px solid black;z-index: 100000;border-radius:50%;margin-left: 205px;padding: 8px;"></i></a>
			</div>
		</div>
		<a href="http://localhost/index.php/#ABOUTUS"><img class="rotate1"  style=" width: 50px;height: 50px; margin-left: 50vw; position: fixed; margin-top: 92vh;"src="/arrow_right.svg" alt="Next"> </a>
		<div>
		
		</div>
    </section>
    <script type="text/javascript">
    	
function myhover1(){
	var hover1 = document.getElementById('fb')
   hover1.width = 1000;
}

    </script>
    <script>

function my() {
  	function Redirect() {    window.location="http://localhost/index.php/#ABOUTUS"; 
}
Redirect();
  
}

function myFunction(event) {
  var y = event.deltaY;
  if (y > 0) {
  	function Redirect() {    window.location="http://localhost/index.php/#ABOUTUS"; 
} 
Redirect();
  }
}
</script>
    <section onwheel="my(event)" id="ABOUTUS">
    	<div>
			
			</div>
    </section>
      <script>



function my(event) {
  var y = event.deltaY;
  if (y < 0) {
  	function Redirect() {    window.location="http://localhost/index.php/#HOME"; 
} 
Redirect();
  }
}
</script>
<script type="text/javascript">

    </script>
</body>
</html>