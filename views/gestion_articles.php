<section>
  <table class="table table-borderless table-hover">
    <tbody>

<?php 
foreach ($all_posts as $value) {
  echo utf8_encode( 
    '<tr>
      <td></td>
      <td><a href="post-'.$value['id'].'">'.$value['title'].'</a></td>
      <td><div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary"><a href="post-'.$value['id'].'">View</a>
            </button>
            <button type="button" class="btn btn-sm btn-outline-secondary"><a href="index.php?page=edition&id='.$value['id'].'">Editer</a>
            </button>
            <button type="button" class="btn btn-sm btn-outline-secondary"><a href="supp-'.$value['id'].'">Supp</a></button>
          </div>
      </td>
    </tr>');
}?>
  
    </tbody>
  </table>
</section>
<!-- <ul class="list-group list-group-flush">
<li class="list-group-item"><a href="post-'.$value['id'].'">'.$value['title'].'</a></li>')
</ul> -->


