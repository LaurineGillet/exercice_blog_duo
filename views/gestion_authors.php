<section>
  <ul class="list-group list-group-flush">

<?php 
foreach ($all_aut as $value) {
  echo utf8_encode( '<li class="list-group-item">'.$value['firstname'].' '.$value['lastname'].'</li>');
}?>
  </ul>
</section>