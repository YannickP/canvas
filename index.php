
<!doctype html>
<html>
<head>
	<title>Canvas V3</title>

<script src="js/jquery-1.7.min.js"></script>
<script src="js/sketch.js"></script>
<link rel="stylesheet" href="css/main.css" type="text/css" />



<script type="text/javascript">


function uploadImage() {
 var canvas = document.getElementById("colors_sketch");
 var context = canvas.getContext("2d");

 var imageObj = new Image();
 imageObj.src = "http://www.kodyaz.com/images/windows-8-screenshots/consumer-beta-windows-8-start-screen.png";

 imageObj.onload = function () {
  context.drawImage(imageObj, 0, 0);
 };
}


</script>


</head>


<body>







<div class="tools">
  
<a href="#colors_sketch" data-download="png" style="float: right; width: 100px; ">Download</a>

<a href="#colors_sketch" data-color="#f00" style="width: 10px; background-color: rgb(255, 0, 0); background-position: initial initial; background-repeat: initial initial; "/>
<a href="#colors_sketch" data-color="#ff0" style="width: 10px; background-color: rgb(255, 255, 0); background-position: initial initial; background-repeat: initial initial; "/>
<a href="#colors_sketch" data-color="#0f0" style="width: 10px; background-color: rgb(0, 255, 0); background-position: initial initial; background-repeat: initial initial; "/>
<a href="#colors_sketch" data-color="#0ff" style="width: 10px; background-color: rgb(0, 255, 255); background-position: initial initial; background-repeat: initial initial; "/>
<a href="#colors_sketch" data-color="#00f" style="width: 10px; background-color: rgb(0, 0, 255); background-position: initial initial; background-repeat: initial initial; "/>
<a href="#colors_sketch" data-color="#f0f" style="width: 10px; background-color: rgb(255, 0, 255); background-position: initial initial; background-repeat: initial initial; "/>
<a href="#colors_sketch" data-color="#000" style="width: 10px; background-color: rgb(0, 0, 0); background-position: initial initial; background-repeat: initial initial; "/>
<a href="#colors_sketch" data-color="#fff" style="width: 10px; background-color: rgb(255, 255, 255); background-position: initial initial; background-repeat: initial initial; "/>

<a href="#colors_sketch" data-size="3" style="background-color: rgb(204, 204, 204); background-position: initial initial; background-repeat: initial initial; ">3</a>
<a href="#colors_sketch" data-size="5" style="background-color: rgb(204, 204, 204); background-position: initial initial; background-repeat: initial initial; ">5</a>
<a href="#colors_sketch" data-size="10" style="background-color: rgb(204, 204, 204); background-position: initial initial; background-repeat: initial initial; ">10</a>
<a href="#colors_sketch" data-size="15" style="background-color: rgb(204, 204, 204); background-position: initial initial; background-repeat: initial initial; ">15</a>

<button onclick="uploadImage();return false;">Canvas Load Image</button>

</div>








<canvas id="colors_sketch" width="800" height="300"></canvas>

<script type="text/javascript">
  
  $(function() {
              $.each(['#f00', '#ff0', '#0f0', '#0ff', '#00f', '#f0f', '#000', '#fff'], 

              function() {
                $('#colors_demo .tools').append("<a href='#colors_sketch' data-color='" + this + "' style='width: 10px; background: " + this + ";'></a> ");
              });
              $.each([3, 5, 10, 15], 

              function() {
                $('#colors_demo .tools').append("<a href='#colors_sketch' data-size='" + this + "' style='background: #ccc'>" + this + "</a> ");
              });
              $('#colors_sketch').sketch();
              });
</script>

</script>      




</body>





</html>