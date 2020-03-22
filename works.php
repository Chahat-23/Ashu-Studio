<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Merienda|Courgette|Crimson+Text&display=swap" rel="stylesheet">
<link rel="stylesheet" href="work.css">


</head>
<body>

<div class="navbar">
<ol>
  <li><a href="#PS"> Photo-Shoots    </a></li>
  <li><a href="#EM"> Event-Management    </a></li>
  <li><a href="#CI"> Customized-Items   </a></li>
  <li><a href="#review"> Review   </a></li>
  <li><a class="active"href="index.html"> Logout   </a></li>
</ol>
</div>

<h1 style="text-align:center; background-color:#b00020">WORK PROOFS</h1>
<table><tr id="PS"><td>
<h2  style="text-align:right; background-color:white">PHOTO SHOOTS</h2></td><td>
<div class="slideshow-container">
  <div class="mySlides1">
  <div class="numbertext">1/ 14</div>
    <img src="p1.jpg" >
  </div>

  <div class="mySlides1">
  <div class="numbertext">2/ 14</div>
    <img src="p2.jpg" >
  </div>
  
  <div class="mySlides1">
  <div class="numbertext">3/ 14</div>
    <img src="p03.jpg" >
  </div>
  
    <div class="mySlides1">
  <div class="numbertext">4/ 14</div>
    <img src="p4.jpg" >
  </div>

  <div class="mySlides1">
  <div class="numbertext">5/ 14</div>
    <img src="p5.jpg" >
  </div>

  <div class="mySlides1">
  <div class="numbertext">6/ 14</div>
    <img src="p6.jpg" >
  </div>
  
    <div class="mySlides1">
  <div class="numbertext">7/ 14</div>
    <img src="p7.jpg" >
  </div>

    <div class="mySlides1">
  <div class="numbertext">8/ 14</div>
    <img src="p10.jpg" >
  </div>

  <div class="mySlides1">
  <div class="numbertext">9/ 14</div>
    <img src="p11.jpg" >
  </div>

  <div class="mySlides1">
  <div class="numbertext">10/ 14</div>
    <img src="p12.jpg" >
  </div>
  
  <div class="mySlides1">
  <div class="numbertext">11/ 14</div>
    <img src="p13.jpg" >
  </div>
  
    <div class="mySlides1">
  <div class="numbertext">12/ 14</div>
    <img src="p14.jpg" >
  </div>

  <div class="mySlides1">
  <div class="numbertext">13/ 14</div>
    <img src="p15.jpg" >
  </div>

  <div class="mySlides1">
  <div class="numbertext">14/ 14</div>
    <img src="p16.jpg" >
  </div>

  <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
</div></td></tr>
<tr id="EM"><td>
<div class="slideshow-container">
  <div class="mySlides2">
  <div class="numbertext">1/ 10</div>
    <img src="e1.jpg" >
  </div>

  <div class="mySlides2">
  <div class="numbertext">2/ 10</div>
    <img src="e2.jpg" >
  </div>

  <div class="mySlides2">
  <div class="numbertext">3/ 10</div>
    <img src="e3.jpg" >
  </div>

  <div class="mySlides2">
  <div class="numbertext">4/ 10</div>
    <img src="e6.jpg" >
  </div>

 <div class="mySlides2">
  <div class="numbertext">5/ 10</div>
    <img src="e7.jpg" >
  </div>

  <div class="mySlides2">
  <div class="numbertext">6/ 10</div>
    <img src="e8.jpg" >
  </div>

  <div class="mySlides2">
  <div class="numbertext">7/ 10</div>
    <img src="e9.jpg" >
  </div>

 <div class="mySlides2">
  <div class="numbertext">8/ 10</div>
    <img src="e10.jpg" >
  </div>

  <div class="mySlides2">
  <div class="numbertext">9/ 10</div>
    <img src="e11.jpg" >
  </div>

  <div class="mySlides2">
  <div class="numbertext">10/ 10</div>
    <img src="e12.jpg" >
  </div>

  <a class="prev" onclick="plusSlides(-1, 1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 1)">&#10095;</a>
</div>
</td><td>
<h2  style="text-align:left;background-color:white">EVENT MANAGEMENT</h2></td>
</tr></table>
<br>
<h2 id="CI" style="text-align:center;background-color:white">CUSTOMIZED ITEMS</h2>
<table>
<tr>
<td><img src="g1.jpg" ></td>
<td><img src="g3.jpg" ></td>
</tr>
<tr>
<td><img src="g5.jpg" ></td>
<td><img src="g6.jpg" ></td>
</tr>
<tr>
<td><img src="g7.jpg" ></td>
<td><img src="g8.jpg" ></td>
</tr>
<tr>
<td><img src="g9.jpg" ></td>
<td><img src="g10.jpg" ></td>
</tr>
<tr>
<td><img src="g11.jpg" ></td>
<td><img src="g12.jpg" ></td>
</tr></table>
<br>
<table><tr><td>
<h2 id="review" style="text-align:center;background-color:white">REVIEW</h2>
<form method = "post" action="review.php">
                        Username:
                        <input type="text" name="username" placeholder="enter your username"><br>
                        Contact Number:
                        <input type="text" name="contact" placeholder="enter your contact number.."><br>
                        Comment:
                        <input type="text" name="comment" placeholder="COMMENT!!"><br>
                        <button type="submit" name="submit" class="btn btn-primary btn-lg">SUBMIT</button></form></td></tr></table>
<script>
var slideIndex = [1,1];
var slideId = ["mySlides1", "mySlides2"]
showSlides(1, 0);
showSlides(1, 1);

function plusSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}    
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex[no]-1].style.display = "block";  
}
</script>

</body>
</html> 
