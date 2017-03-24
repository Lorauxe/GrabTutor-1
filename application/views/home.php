<!DOCTYPE html>
<html lang="en">
<head>
  <title>GrabTutor</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../assets/css/home.css">
  <link rel="stylesheet" href="../../assets/css/fonts.css">
  <script src="../../assets/js/jquery.min.js"></script>
  <script src="../../assets/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item {
      width: 100%;
  }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row">
    <div id = "main_nav"> 
      <div id = "logo_main">
        <img id ="_log" src = "../../assets/imgs/grablog.png">
      </div> 

      <div class = "_fbutt" >
        <a href = ""> College </a>
      </div>

      <div class = "_fbutt">
        <a href = ""> Tutor Services </a>
      </div>
      
       <a href = "#">
        <div id = "_signup">
           Become a Tutor
        </div>
      </a>


      <div class = "_fbutt" id = "_rlog">
        <a href = "login.html">    Login </a>
      </div>

    </div>

  </div>
  <div class="row">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <div class="Panelo" id = "panel_uno"> 
            <div class = "_capt">
              STUDY, <br> TUTOR.
              <br>EXPLORE
            </div>

            <div class = "_subcapt">
              Be a tutee or tutor today.
            </div>

            <div class = "butts">
            <a href = "home.html" >SIGN UP NOW</a>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="Panelo" id = "panel_dos"> 
            <div class = "_capt" >
              DISCOVER YOUR <br>
              CAPABILITIES, <br>
              SHARE YOUR TALENTS, <br>
              HELP AND INSPIRE OTHERS.<br>
            </div>

            <div class = "butts">
              <a href = "#" >FIND OUT MORE</a>
            </div>
          </div>
        </div>
      
        <div class="item">
          <div class="Panelo" id = "panel_tres"> 
            <div class = "_capt" >
            INTERACT WITH <br> 
            GROUPS. <br> 
            LEARN TOGETHER.
            </div>

            <div class = "butts">
              <a href = "#" >DISCOVER ONE NOW</a>
            </div>
          </div>
        </div>

       
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    </div>
</div>

</body>
</html>
