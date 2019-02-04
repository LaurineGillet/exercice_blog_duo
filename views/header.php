<body>
<header>
	<h1>Tibo et Lolo</h1>
	<nav class="navbar navbar-expand-lg navbar-light">
  <a class="" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="articles">
          Articles
        </a>
      </li>
<?php 
if(isset($_SESSION['id'])){ 
      echo '<li class="nav-item">';
        echo '<a class="nav-link" href="new-article">Créer un nouvel article</a>';
      echo'</li>';
    }
if (isset($_SESSION['id']) && $_SESSION['level'] == 1){
      echo '<li class="nav-item">';
        echo '<a class="nav-link" href="new_user">Créer un nouvel utilisateur</a>';
      echo'</li>';
    }
    
?>

    </ul>
  </div>
</nav>
</header>
<main>