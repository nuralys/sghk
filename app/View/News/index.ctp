<div class="mbg"></div>				
<section class="cr bg_w">	
	<div class="box content">
		<div class="gallery">
			<h2><?php echo __('Новости')?></h2>
			<ul class="gallery_ul">
			<?php foreach ($data as $item) : ?>
				<li>
					<a href="/<?=$lang?>news/view/<?=$item['News']['id']?>">
						<div class="img">
							<img src="/img/news/thumbs/<?=$item['News']['img']?>"/>
						</div>
					</a>
					<a class="heading" href="/<?=$lang?>news/view/<?=$item['News']['id']?>"><?=$item['News']['title'] ?></a>
					<p><?= $this->Text->truncate(strip_tags($item['News']['body']), 250, array('ellipsis' => '...', 'exact' => true)) ?></p>
			    </li>
			<?php endforeach ?>
			   
			</ul>
		</div>	
	</div>
</section>				
