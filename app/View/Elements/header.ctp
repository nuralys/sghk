<header>
	<div class="cr">
		<div class="m_menu"></div>
		<figure>
			<a href="/">
				<img src="/img/logo.jpg"/>
			</a>
		</figure>
		<div class="right_t">
			<div class="r_t">
				<div class="top_des">
					<h1>Степногорский горно-химический комбинат</h1>
					<p>Республика Казахстан, 021500, Акмолинская область, г. Степногорск а/я 34</p>
				</div>
				<ul class="lang">
					<li <?php if(!isset($this->request->params['language']) || $this->request->params['language']!='kz'){echo "class='active'";} ?>><a href="/">ru</a></li>
					<li><a href="/kz" <?php if(!isset($this->request->params['language']) || $this->request->params['language']=='kz'){echo "class='active'";}?>>kz</a></li>
				</ul>
				<select class="lang_m">
					<option>Рус</option>
					<option>Каз</option>
				</select>
			</div>
			<div class="r_down">
				<nav>
<ul class="nav">
	<li <?php if($this->request->params['controller']=='pages' && $this->request->params['action']=='index') echo 'class="active"'?>><a href="/<?=$lang?>">Главная</a></li>
	<li <?php if($this->request->params['controller']=='news') echo 'class="active"'?>><a href="/<?=$lang?>news">Новости</a></li>
	<li class="sub <?php if($this->request->params['controller']=='leaderships' || $this->request->params['controller']=='certifications') echo 'active'?>">
		<p>Предприятия</p>
		<div class="frame">
			<ul class="sub_ul">
				<li><a href="/<?=$lang?>leaderships">Руководство</a></li>
				<li><a href="/<?=$lang?>certifications">Лицензии и сертификаты</a></li>
				<li><a href="/<?=$lang?>page/vacancy">Вакансии</a></li>
				<li><a href="/<?=$lang?>page/history">История</a></li>
			</ul>
		</div>
	</li>
	<li><a href="/<?=$lang?>page/products">Продукция</a></li>
	<li <?php if($this->request->params['controller']=='clients') echo 'class="active"'?>><a href="/<?=$lang?>clients">Партнеры</a></li>
	<li class="sub <?php if($this->request->params['controller']=='gallery' || $this->request->params['controller']=='videos') echo 'active'?>">
		<p>Галерея</p>
		<div class="frame">
			<ul class="sub_ul">
				<li><a href="/<?=$lang?>gallery/1">Трудовые будни</a></li>
				<li><a href="/<?=$lang?>gallery/2">Отдых</a></li>
				<li><a href="/<?=$lang?>gallery/3">Спорт</a></li>
				<li><a href="/<?=$lang?>videos">Видео</a></li>
			</ul>
		</div>
	</li>
	<li><a href="/<?=$lang?>page/contacts">Контакты</a></li>
</ul>
				</nav>
			</div>
		</div>
	</div>
</header>