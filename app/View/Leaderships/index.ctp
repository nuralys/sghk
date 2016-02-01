<div class="mbg"></div>				
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
									<p class="up_des"><?php echo __('Занимаемая должность')?>: <?=$item['Leadership']['position'] ?></span>
									<p class="date"><?php echo __('Дата рождения')?>: <?=$item['Leadership']['date_berth'] ?></p>
									<p><?= $this->Text->truncate(strip_tags($item['Leadership']['body']), 1000, array('ellipsis' => '...', 'exact' => true)) ?></p>
									<a class="read_more clearfix" href="/<?=$lang?>leaderships/view/<?=$item['Leadership']['id'] ?>"><?php echo __('Читать полностью')?></a>
								</div>
							</div>
						</li>
					<?php endforeach ?>
						
					</ul>
				</div>
			</section>