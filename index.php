<?php
/***************************************
Written by: Immanuel Flepu (Siya)
Github: https://github.com/SiyaFl
***************************************/
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href='//fonts.googleapis.com/css?family=Montserrat:700,400|Average|Roboto:300,700|Roboto+Slab:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Sriracha&display=swap" rel="Stylessheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>scentlab</title>
  </head>
  <body>
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg bg-transparent navbar-fixed-top">
      <a class="navbar-brand" href="index.html">
    </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Gallery</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>  
    </nav>
  <!--End Navbar-->
<!--botton-->
<button onclick="myFunction()">View table</button>

<!--botton End-->
  
  <!--table-->
  <div id="myTable">
  <table class="table table-striped table-responsive table-hover text-color">
    <tr>
      <th scope="col">Colour</th>
      <th scope="col">Number</th>
      <th scope="col">Name</th>
      <th scope="col">Animal</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>Red</th>
      <td>13</td>
      <td>Sarah</td>
      <td>Dog</td>
    </tr>
    <tr>
      <th>Blue</th>
      <td>16</td>
      <td>Adam</td>
      <td>Cat</td>
    </tr>
    <tr>
      <th>Green</th>
      <td>18</td>
      <td>Ben</td>
      <td>Mouse</td>
    </tr>
    <tr>
      <th>Orange</th>
      <td>19</td>
      <td>John</td>
      <td>Tiger</td>
    </tr>
  </tbody>
</table>
</div>
    <!--End table-->

    <!--javascript-->
<script>
function myFunction() {
  var x = document.getElementById("myTable");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
<!--javascript ends-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <!--Footer-->
  <footer>
  <div class="media-container-row mbr-white">
    <div class="col-sm-6 copyright">
        <p class="mbr-text mbr-fonts-style display-7">
            © Copyright 2020 Siyabonga Flepu - All Rights Reserved
          </p>
    </div>    
    </div>
  </div>
</footer>
  <!--End Footer-->  
  </body>
</html>