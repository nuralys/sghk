<div class="mbg news_bg"></div>				
			<section class="cr bg_w">	
				<div class="box">
					<div class="news_text">
						<h2><?=$data['Leadership']['title'] ?></h2>
						<img style="float:left; margin-right:14px;margin-bottom:14px;" src="/img/leadership/thumbs/<?=$data['Leadership']['img'] ?>"/>
						<p><b>Занимаемая должность:</b> <?=$data['Leadership']['position'] ?></p>
						<p><b>Дата рождения:</b> <?=$data['Leadership']['date_berth'] ?></p>
						<?=$data['Leadership']['body'] ?>
					</div>
					<aside class="aside">
						<h5>Актуальные новости</h5>
						<ul class="ul_news">
						<?php foreach($news as $item): ?>
							<li>
								<a href="#"><img src="/img/news/thumbs/<?=$item['News']['img'] ?>"/></a>
								<div class="as_text">
									<a href="#"><?=$item['News']['title'] ?></a>
									<p><?= $this->Text->truncate(strip_tags($item['News']['body']), 148, array('ellipsis' => '...', 'exact' => true)) ?></p>
								</div>
							</li>
						<?php endforeach ?>
							
						</ul>
					</aside>
				</div>
			</section>