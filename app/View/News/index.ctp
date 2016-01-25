<div class="mbg news_bg"></div>				
			<section class="cr bg_w">	
				<div class="box content">
					<div class="gallery">
						<h2>Новости</h2>
						<ul class="gallery_ul">
						<?php foreach ($data as $item) : ?>
							<li>
								<a href="/<?=$lang?>news/view/<?=$item['News']['id']?>">
								<img src="/img/news/thumbs/<?=$item['News']['img']?>"/></a>
								<a class="heading" href="/<?=$lang?>news/view/<?=$item['News']['id']?>"><?=$item['News']['title'] ?></a>
						    </li>
						<?php endforeach ?>
						   
						</ul>
					</div>	
				</div>
			</section>				
