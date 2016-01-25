<section class="cr bg_w">	
	<div class="box content">
		<div class="gallery">
			<h2>
				<?php
				if(!empty($data)){
					switch ($data[0]['Gallery']['category_id']) {
						case '1':
							echo __('Трудовые будни');
							break;
						case '3':
							echo __('Отдых');
							break;
						case '3':
							echo __('Спорт');
							break;
						default:
							echo __('Галерея');
							break;
					}
				}else{ echo __('Галерея'); } 
					
				 ?>
			</h2>
			<ul class="gallery_ul">
				<?php if(empty($data)): ?>
					<p>В данном разеде еще нету информации</p> 
				<?php else: ?>
					<?php foreach ($data as $item) :?>
						<li>
							<a href="#"><img src="/img/gallery/<?=$item['Gallery']['img'] ?>" alt="<?=$item['Gallery']['title'] ?>" /></a>
							<a class="heading" href="#"><?=$item['Gallery']['title'] ?></a>
					    </li>
			    	<?php endforeach; ?>
				<?php endif; ?>
			</ul>
		</div>	
	</div>
</section>				