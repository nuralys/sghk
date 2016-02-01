<header>
	<div class="cr">
		<div class="m_menu"></div>
		<figure>
			<a href="/<?=$lang?>">
				<img src="/img/logo.jpg"/>
			</a>
		</figure>
		<div class="right_t">
			<div class="r_t">
				<div class="top_des">
					<h1><?php echo __('Степногорский горно-химический комбинат'); ?></h1>
					<p><?php echo __('Республика Казахстан, 021500, Акмолинская область, г. Степногорск а/я 34'); ?></p>
				</div>
				<ul class="lang">
					<li <?php if(!isset($this->request->params['language']) || $this->request->params['language']!='kz'){echo "class='active'";} ?>><a href="/">ru</a></li>
					<li <?php if(isset($this->request->params['language']) && $this->request->params['language']=='kz'){echo "class='active'";}?>><a href="/kz">kz</a></li>
				</ul>
				<select class="lang_m">
					<option>Рус</option>
					<option>Каз</option>
				</select>
			</div>
			<div class="r_down">
				<nav>
<ul class="nav">
	<li <?php if($this->request->params['controller']=='pages' && $this->request->params['action']=='index') echo 'class="active"'?>><a href="/<?=$lang?>"><?php echo __('Главная'); ?></a></li>
	<li <?php if($this->request->params['controller']=='news') echo 'class="active"'?>><a href="/<?=$lang?>news"><?php echo __('Новости'); ?></a></li>
	<li class="sub <?php if($this->request->params['controller']=='leaderships' || $this->request->params['controller']=='certifications') echo 'active'?>">
		<p><?php echo __('Предприятие'); ?></p>
		<div class="frame">
			<ul class="sub_ul">
				<li><a href="/<?=$lang?>leaderships"><?php echo __('Руководство'); ?></a></li>
				<li><a href="/<?=$lang?>certifications"><?php echo __('Лицензии и сертификаты'); ?></a></li>
				<li><a href="/<?=$lang?>page/vacancy"><?php echo __('Вакансии'); ?></a></li>
				<li><a href="/<?=$lang?>page/history"><?php echo __('История'); ?></a></li>
			</ul>
		</div>
	</li>
	<li><a href="/<?=$lang?>page/products"><?php echo __('Продукция'); ?></a></li>
	<li <?php if($this->request->params['controller']=='clients') echo 'class="active"'?>><a href="/<?=$lang?>clients"><?php echo __('Партнеры'); ?></a></li>
	<li class="sub <?php if($this->request->params['controller']=='gallery' || $this->request->params['controller']=='videos') echo 'active'?>">
		<p><?php echo __('Галерея'); ?></p>
		<div class="frame">
			<ul class="sub_ul">
				<li><a href="/<?=$lang?>gallery/1"><?php echo __('Трудовые будни'); ?></a></li>
				<li><a href="/<?=$lang?>gallery/2"><?php echo __('Отдых'); ?></a></li>
				<li><a href="/<?=$lang?>gallery/3"><?php echo __('Спорт'); ?></a></li>
				<li><a href="/<?=$lang?>videos"><?php echo __('Видео'); ?></a></li>
			</ul>
		</div>
	</li>
	<li><a href="/<?=$lang?>page/contacts"><?php echo __('Контакты'); ?></a></li>
</ul>
				</nav>
			</div>
		</div>
	</div>
</header>