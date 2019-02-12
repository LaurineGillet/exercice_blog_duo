<section>
	<table class="table table-borderless table-hover">
    	<tbody>

<?php 
foreach ($all_aut as $value) {
  echo utf8_encode(
    		'<tr>
      			<td></td>
      			<td>'.$value['firstname'].' '.$value['lastname'].'</td>
      			<td>
      				<div class="btn-group">
      					<button type="button" class="btn btn-sm btn-outline-secondary"><a href="'.$value['id'].'">Editer</a>
            			<button type="button" class="btn btn-sm btn-outline-secondary"><a href="supp_user-'.$value['id'].'">Supp</a>
            			</button>
          			</div>
      			</td>
    		</tr>');
}?>    		
    	</tbody>
	</table>
</section>