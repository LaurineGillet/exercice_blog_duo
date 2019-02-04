<?php 
if (isset($_SESSION['id'])){
?> 
<form method="post" action="index.php?action=update">
  <input type="hidden" name="id" value="<?php echo utf8_encode($one_post['id'])?>" >
  <div class="form-group">
    <label>Titre:</label>

  <input name="title" type="title" class="form-control" id="exampleFormControlInput1" value="<?php echo utf8_encode($one_post['title'])?>" >

  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Auteur:</label>
    <select name="id_authors" class="form-control" id="exampleFormControlSelect1">
<?php foreach ($all_aut as $value) {
  echo "<option value=".$value['id'].">".utf8_encode($value['firstname'])."</option>" ;
}
?>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Catégorie:</label>
    <select name="id_cat" class="form-control" id="exampleFormControlSelect1" >
 <?php foreach ($all_cat as $value) {


  echo "<option value=".$value['id'].">".utf8_encode($value['name'])."</option>" ;
}
?>
    </select>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Contenu:</label>
  <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo utf8_encode($one_post['content']) ?></textarea>

  </div>

<button type='submit' class='btn btn-sm btn-outline-secondary'>Je valide</button>
</form>

<?php 
}
?>