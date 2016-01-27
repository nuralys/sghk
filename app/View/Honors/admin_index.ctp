<a href="/admin/honors/add">Добавить</a><br>
<?php 
// debug($data);
foreach ($data as $item) : ?>
	
	 Редактировать: <a href="/admin/honors/edit/<?=$item['Honor']['id']?>?lang=ru">
	 <img src="/img/honor/thumbs/<?=$item['Honor']['img']?>" /></a>
	 <br>
	<div class="news_del">	<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Honor']['id']), array('confirm' => 'Подтвердите удаление')); ?>
			</div> 
	 <hr>
<?php endforeach; ?>