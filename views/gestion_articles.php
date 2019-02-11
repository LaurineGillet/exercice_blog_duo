<section>
  <ul class="list-group list-group-flush">

<?php 
foreach ($all_posts as $value) {
  echo utf8_encode( '<li class="list-group-item"><a href="post-'.$value['id'].'">'.$value['title'].'</a></li>');
}?>
  </ul>
</section>



