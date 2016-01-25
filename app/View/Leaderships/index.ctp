<div class="mbg news_bg"></div>				
			<section class="cr bg_w">	
				<div class="box content">
					<h2><?=__('Руководство') ?></h2>
					<ul class="prin_ul">
					<?php foreach($data as $item): ?>
						<li>
							<img src="/img/leadership/thumbs/<?=$item['Leadership']['img'] ?>"/>
							<div class="pr_text">
								<div class="wr">
									<a class="heading" href="/<?=$lang?>leaderships/view/<?=$item['Leadership']['id'] ?>"><?=$item['Leadership']['title'] ?></a>
									<p class="up_des">Занимаемая должность: <?=$item['Leadership']['position'] ?></span>
									<p class="date">Дата рождения: <?=$item['Leadership']['date_berth'] ?></p>
									<p><?= $this->Text->truncate(strip_tags($item['Leadership']['body']), 1000, array('ellipsis' => '...', 'exact' => true)) ?></p>
									<a class="read_more clearfix" href="/<?=$lang?>leaderships/view/<?=$item['Leadership']['id'] ?>">Читать полностью</a>
								</div>
							</div>
						</li>
					<?php endforeach ?>
						
					</ul>
				</div>
			</section>