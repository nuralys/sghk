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
									<li class="active"><a href="/<?=$lang?>">Главная</a></li>
									<li><a href="/<?=$lang?>news">Новости</a></li>
									<li class="sub">
										<a href="#">Предприятия</a>
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
									<li><a href="/<?=$lang?>clients">Клиенты</a></li>
									<li class="sub">
										<a href="/<?=$lang?>">Галерея</a>
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