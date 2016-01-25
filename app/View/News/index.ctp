<div class="mbg news_bg"></div>				
<section class="cr bg_w">	
	<div class="box content">
		<div class="gallery">
			<h2>Новости</h2>
			<ul class="gallery_ul">
			<?php foreach ($data as $item) : ?>
				<li>
					<a href="/<?=$lang?>news/view/<?=$item['News']['id']?>">
						<div class="img">
							<img src="/img/news/thumbs/<?=$item['News']['img']?>"/>
						</div>
					</a>
					<a class="heading" href="/<?=$lang?>news/view/<?=$item['News']['id']?>"><?=$item['News']['title'] ?></a>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
			    </li>
			<?php endforeach ?>
			   
			</ul>
		</div>	
	</div>
</section>				
