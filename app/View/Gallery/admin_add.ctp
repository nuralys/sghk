<div class="admin_add gall_add">
	<div class="ad_up">
		<h2>Добавление фото</h2>
	</div>
<?php 
echo $this->Form->create('Gallery', array('type' => 'file'));
?>
<div class="input select">
	<label for="GalleryCategoryId">Категория:</label>
	<select name="data[Gallery][category_id]" id="GalleryCategoryId">
		<option value="">Выберите категорию</option>
		<option value="1">Трудовые будни</option>
		<option value="2">Отдых</option>
		<option value="3">Спорт</option>
	</select>
</div>
<?php
echo $this->Form->input('title', array('label' => 'Название:'));
echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));
echo $this->Form->end('Создать');
?>
</div>