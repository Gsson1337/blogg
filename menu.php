<?php

function menu() {

?>
  <nav class="navbar  navbar-expand-lg navbar-dark bg-primary">

   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>

   <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item active">
         <a class="nav-link" href="index.php">Inlägg <span class="sr-only">(current)</span></a>
       </li>


<?php

if (isset($_SESSION['username'])){
  ?>





  <li class="nav-item">
    <a class="nav-link" href="logout.php">logga ut</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" id = "PostButton" >Nytt inlägg</a>
  </li>
  <?php
    echo $_SESSION['username'];

}else{
  ?>

    <button class="nav-link" id = "loginButton">Login</button>

  <?php

}
 ?>

   </div>
  </nav>
  <div id = "login" >

  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


    <form method = "get">
      <div class="col-md-offset-5 col-md-10">
          <div class="form-login">
          <h4>Welcome back.</h4>
          <input type="text" id="username" class="form-control input-sm chat-input" placeholder="username" />
          </br>
          <input type="password" id="password" class="form-control input-sm chat-input" placeholder="password" />
          </br>


          <button id = "submitlogin"> login</button>

          </form>

          </div>


  </div>
  </div>

  <div id = "newpost" >

  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


    <form method = "get">
        <div class="col-md-offset-5 col-md-10">
            <div class="form-newpost">
          <h4>Nytt inlägg</h4>
          <input type="text" id="rubrik" class="form-control input-sm chat-input" placeholder="rubrik" />
          </br>



          <button id = "submitpost" > post</button>

          </form>

          </div>


        </div>
    </div>

  <?php


  }



  ?>
