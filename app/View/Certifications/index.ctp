<div class="mbg news_bg"></div>				
			<section class="cr bg_w">	
				<div class="box content">
					<h2><?php echo __('Лицензии и Сертификаты') ?></h2>
					<ul class="sert_ul">
					<?php foreach($data as $item): ?>
						<li>
							<img src="/img/certification/thumbs/<?=$item['Certification']['img'] ?>"/>
						</li>
					<?php endforeach ?>
						
					</ul>
				</div>
			</section>