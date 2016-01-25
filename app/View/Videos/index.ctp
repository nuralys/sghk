<div class="mbg news_bg"></div>				
<section class="cr bg_w">	
	<div class="box content">
		<div class="gallery">
			<h2><?php echo __('Видео')?></h2>
			<ul class="gallery_ul">

			<?php foreach($data as $item): ?>
				<?php
				if (stripos($item['Video']['link'], 'youtube.com') !== false) {
					preg_match('#v=([^\&]+)#is', $item['Video']['link'], $videoId);
					if (count ($videoId) > 0) {
						//у нас есть id video, ссылка правильная
						// $videoId[1] - ID видео
						$id = $videoId[1];
					}
				}
				?>
				<li>
					<a class="fancybox-media" href="http://www.youtube.com/watch?v=<?=$id?>"><img src="//i.ytimg.com/vi_webp/<?=$id ?>/mqdefault.webp"/></a>
					<p class="heading" href="#"><?=$item['Video']['title'] ?></p>
			    </li>
			<?php endforeach ?>
			   
			</ul>
		</div>	
	</div>
</section>