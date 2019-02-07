<section>
<div class="card-columns">
<?php 

if ($post_by_aut > 0){
foreach ($post_by_aut as $value){
  echo utf8_encode("
            <div class='card'>
            <img src='img/".$value['img']."' class='card-img-top'>
            <div class='card-body'>
            <h3>".$value['title']."</h3>
              <p class='card-text'>Par: ".$value['firstname']."</p>
              <p>");
              echo date("d-m-Y", strtotime($value['created_date']));
              echo "</p>
              <div class='btn-group'>
                    <button type='button' class='btn btn-sm btn-outline-secondary'><a href='post-".$value['id']."'>View</a></button>";
                  
                   if(isset($_SESSION['id'])&& $_SESSION['id']==$value['id_authors']||$_SESSION['level'] == 1){ 
                    echo "<button type='button' class='btn btn-sm btn-outline-secondary'><a href='index.php?page=edition&id=".$value['id']."'>Editer</a></button>";
                     echo "<button type='button' class='btn btn-sm btn-outline-secondary'><a href='supp-".$value['id']."'>Supp</a></button>";};
                  
                  
  
                echo "</div>
                </div>
              </div>";}
}else{
  echo "<p>Cet auteur n'a pas créé d'articles.</p>";
}

?>
</div>
</section>