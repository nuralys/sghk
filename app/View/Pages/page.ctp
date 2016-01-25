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
					<a href="#">
						<div class="img"><img src="/img/news/thumbs/<?=$item['News']['img'] ?>"/></div>
					</a>
					<div class="as_text">
						<div class="wr">
						<a class="heading" href="#"><?=$item['News']['title'] ?></a>
						<p><?= $this->Text->truncate(strip_tags($item['News']['body']), 150, array('ellipsis' => '...', 'exact' => true)) ?></p>
						</div>
					</div>
				</li>
			<?php endforeach ?>
			</ul>
		</aside>
	</div>
</section>