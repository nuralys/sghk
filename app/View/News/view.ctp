<div class="mbg"></div>				
			<section class="cr bg_w">	
				<div class="box content">
					<div class="news_text">
						<h2><?=$post['News']['title']?></h2>
						<?php //echo $this->Time->format($post['News']['date'], '%d.%m.%Y', 'invalid'); ?>
						<img style="float:left; margin-right:14px;margin-bottom:14px;" src="/img/news/thumbs/<?=$post['News']['img']?>"/>
						<?=$post['News']['body']?>
					</div>
					<aside class="aside">
			<h5><?php echo __('Остальные новости')?></h5>
			<ul class="ul_news">
				<?php foreach($news as $item): ?>
				<li>
					<a href="/<?=$lang?>news/view/<?=$item['News']['id'] ?>">
						<div class="img"><img src="/img/news/thumbs/<?=$item['News']['img'] ?>"/></div>
					</a>
					<div class="as_text">
						<div class="wr">
						<a class="heading" href="/<?=$lang?>news/view/<?=$item['News']['id'] ?>"><?=$item['News']['title'] ?></a>
						<p><?= $this->Text->truncate(strip_tags($item['News']['body']), 150, array('ellipsis' => '...', 'exact' => true)) ?></p>
						</div>
					</div>
				</li>
			<?php endforeach ?>
			</ul>
		</aside>
				</div>
			</section>