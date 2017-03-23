<div class="container">

      <!-- Static navbar -->
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Brain Games</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
             <!--  <li class="active"><a href="index.php">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li> -->
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="createArticle.php">Create New Article</a></li>
          

              <li style="color:white;">
                <?php
                  if (isset($_COOKIE["user"])) {
                    echo "<a href=\"logout.php\">Logout</a>";
                  } else{
                    echo "<a href=\"login.php\">Sign In</a>";
                  }
                ?>
              </li>

              <li style="color:white;">
                <?php
                  if (isset($_COOKIE["user"])) {
                    echo "<a>Logged In as : ".$_COOKIE['user']."</a>";
                  }
                ?>
              </li>
              
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>