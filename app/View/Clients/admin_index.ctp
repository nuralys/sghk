<a href="/admin/clients/add">Добавить</a><br>
<?php 
// debug($data);
foreach ($data as $item) : ?>
	
	 Редактировать: <a href="/admin/clients/edit/<?=$item['Client']['id']?>?lang=ru"><?=$item['Client']['img']?></a>
	 <br>
	<div class="news_del">	<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Client']['id']), array('confirm' => 'Подтвердите удаление')); ?>
			</div> 
	 <hr>
<?php endforeach; ?>