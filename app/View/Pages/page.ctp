<div class="mbg news_bg"></div>				
			<section class="cr bg_w">	
				<div class="box content">
					<div class="news_text">
						<h2><?php echo $page['Page']['title'] ?></h2>
						<?php echo $page['Page']['body'] ?>
					</div>
					<aside class="aside">
						<h5>Актуальные новости</h5>
						<ul class="ul_news">
							<?php foreach($news as $item): ?>
							<li>
								<a href="#"><img src="/img/news/thumbs/<?=$item['News']['img'] ?>"/></a>
								<div class="as_text">
									<a href="#"><?=$item['News']['title'] ?></a>
									<p><?= $this->Text->truncate(strip_tags($item['News']['body']), 240, array('ellipsis' => '...', 'exact' => true)) ?></p>
								</div>
							</li>
						<?php endforeach ?>
						</ul>
					</aside>
				</div>
			</section>