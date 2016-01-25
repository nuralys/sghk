<div class="admin_gallery">
<a href="/admin/gallery/add">Добавить фото</a><br>
<?php foreach ($data as $v) :?>
	<?php foreach($v['titleTranslation'] as $title): ?>
		<?= $title['locale'] .': '. $title['content']; ?><br>
		<?php endforeach; ?>
		<?=$v['Gallery']['title']?><br>
		<img src="/img/gallery/<?=$v['Gallery']['img'] ?>"> 
		<a href="/admin/gallery/edit/<?=$v['Gallery']['id']?>?lang=ru">Редактировать ru</a>
	 <a href="/admin/gallery/edit/<?=$v['Gallery']['id']?>?lang=kz">Редактировать kz</a><br>
	<div class="news_del">	<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $v['Gallery']['id']), array('confirm' => 'Подтвердите удаление')); ?>
			</div> 
	 <br><br>

<?php endforeach; ?>
</div>