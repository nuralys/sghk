<div class="mbg"></div>
<section class="index_car">
	<div class="cr">					
		<div class="multiple-items multi_top">
		<?php foreach($news as $item): ?>
			 <div class="card">
				<img src="img/s1.jpg"/>
				<a href="/<?=$lang?>news/<?=$item['News']['id']?>"><?=$item['News']['title']?></a>
				<p><?= $this->Text->truncate(strip_tags($item['News']['body']), 250, array('ellipsis' => '...', 'exact' => true)) ?></p>
			 </div>
			<?php endforeach ?>
		</div>					
	</div>
</section>
<section class="about box">
	<div class="cr">
		<div class="com_row">
			<h5><?= __('О компании'); ?></h5>
			<p><?= $this->Text->truncate(strip_tags($page['Page']['body']), 290, array('ellipsis' => '...', 'exact' => true)) ?></p>
			<a href="/<?=$lang?>pages/about"><?= __('Читать полностью'); ?></a>
		</div>
		<div class="awards clearfix">
			<h5><?= __('Наши награды'); ?></h5>
			<div class="awards_c ord_car ord_one">
			<?php foreach($honors as $item): ?>
				<div class="c_img"><img src="img/honor/thumbs/<?=$item['Honor']['img']?>"/></div>
			<?php endforeach ?>
			</div>
		</div>
	</div>	
</section>
<section class="box clients">
	<div class="cr">
		<h5><?= __('Клиенты и партнеры СГХК'); ?></h5>
		<div class="partners-items ord_car">
		<?php foreach($clients as $item): ?>
			<div class="c_img"><img src="/img/client/thumbs/<?=$item['Client']['img']?>"/></div>	
		<?php endforeach ?>
		</div>
	</div>
</section>
<section> 
	<div class="cr sertificates">
		<h5>Наши сертификаты</h5>
		<div class="sertificates-items ord_car">
		<?php foreach($certifications as $item): ?>
		<div class="c_img"><img src="/img/certification/thumbs/<?=$item['Certification']['img']?>"/></div>
		<?php endforeach ?>
		</div>
	</div>
</section>