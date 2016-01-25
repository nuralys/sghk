<div class="title">
	<h2>
		<?=$post['News']['title']?>
	</h2>
</div>
<div class="news_container">
	<div class="news_second_lvl_img">
		<img src="/img/news/<?=$post['News']['img']?>" alt="<?=$post['News']['title']?>">
	</div>
	<div class="news_list_item_date"><?php echo $this->Time->format($post['News']['date'], '%d.%m.%Y', 'invalid'); ?></div>					
	<?=$post['News']['body']?>
</div>