<?php 
if (isset($_SESSION['id'])){
?> 
<form method="post" action="create" enctype="multipart/form-data">
  <div class="form-group">
    <label>Titre:</label>
      <input name="title" type="title" class="form-control" id="exampleFormControlInput1" value="" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Auteur:</label>
    <select name="author" class="form-control" id="exampleFormControlSelect1">
<?php foreach ($all_aut as $value) {
  echo "<option value=".$value['id'].">".$value['firstname']."</option>";
}
?>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Catégorie:</label>
    <select name="category" class="form-control" id="exampleFormControlSelect1" >
 <?php foreach ($all_cat as $value) {
  echo utf8_encode("<option value=".$value['id'].">".$value['name']."</option>") ;
}
?>
    </select>
  </div>

  <input type="file" name="file">
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Contenu:</label>
  <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

  </div>

<button type='submit' class='btn btn-sm btn-outline-secondary'>Je valide</button>
</form>

<?php 
}
?>