
<section class="articles d-flex justify-content-around">
  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
<?php 
foreach ($all_posts as $value) {
  //fonction qui, pour chaque article devant être affiché sur la page,
  // va créer un article 'reel' sur la page.
  echo utf8_encode("<div class='card_size'>
          <div class='card mb-4 shadow-sm'>
            <div class='card-body'>
            <img src='img/".$value['img']."'>
            <h3>".$value['title']."</h3>
              <p class='card-text'>".$value['firstname']."</p>");
              echo date("d-m-Y", strtotime($value['created_date']));
              echo "<div class='d-flex justify-content-between align-items-center'>
                <div class='btn-group'>
                  <button type='button' class='btn btn-sm btn-outline-secondary'><a href='post-".$value['id']."'>View</a></button>";
                  
                   if(isset($_SESSION['id'])&& $_SESSION['id']==$value['id_authors']||$_SESSION['level'] == 1){ 
                    echo "<button type='button' class='btn btn-sm btn-outline-secondary'><a href='index.php?page=edition&id=".$value['id']."'>Editer</a></button>";
                     echo "<button type='button' class='btn btn-sm btn-outline-secondary'><a href='supp-".$value['id']."'>Supp</a></button>";};
                  
                  
  
                echo "</div>
              </div>
            </div>
          </div>
        </div>";
};
//strtotime permet d'afficher la date
//on utilise $value pour chaque caractéristique d'un article
?>
</div>
</div>
</div>
</section>

