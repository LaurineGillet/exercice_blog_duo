<div class="card-columns">
<?php
foreach ($all_aut as $value){
 echo '<div class="card">',
    '<img src="img/'.$value['img'].'" class="card-img-top" alt="...">',
    '<div class="card-body">',
      utf8_encode('<h5 class="card-title">'.$value['firstname'].' '.$value['lastname'].'</h5>'),
      utf8_encode('<p class="card-text">'.$value['description'].'</p>'),
    '</div>',
 '</div>';
};
?>

 </div>