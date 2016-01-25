<a href="/admin/certifications/add">Добавить</a><br>
<?php 
// debug($data);
foreach ($data as $item) : ?>
	
	  <a href="/admin/certifications/edit/<?=$item['Certification']['id']?>?lang=ru"> 
	<img src="/img/certification/thumbs/<?=$item['Certification']['img']?>">
	  Редактировать</a>
<div class="news_del">	<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Certification']['id']), array('confirm' => 'Подтвердите удаление')); ?>
			</div> 
	  <br>
	 
	
	 <hr>
<?php endforeach; ?>