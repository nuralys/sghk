<div class="title admin_t">
		<h2>Добавление награды</h2>
	</div>
<?php 
echo $this->Form->create('Honor', array('type' => 'file'));
?>
<div id="cropContainerEyecandy"></div>

    <link href="/css/main.css" rel="stylesheet">
    <link href="/css/croppic.css" rel="stylesheet">
   	<script src="/js/croppic.min.js"></script>
    <script>
		var croppicContainerEyecandyOptions = {
				uploadUrl:'/ajax/img_save_to_file_honor.php',
				cropUrl:'/ajax/img_crop_to_file_honor.php',
				imgEyecandy:false,				
				loaderHtml:'<div class="loader bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div> ',
				onBeforeImgUpload: function(){ console.log('onBeforeImgUpload') },
				onAfterImgUpload: function(data){ console.info(data);},
				onImgDrag: function(){ console.log('onImgDrag') },
				onImgZoom: function(){ console.log('onImgZoom') },
				onBeforeImgCrop: function(){ console.log('onBeforeImgCrop') },
				onAfterImgCrop:function(data){ console.info(data.url); console.info(data.urlsource);				
				$('.imgcrop').val(data.url);
				$('.imgsource').val(data.urlsource);
				},
				onReset:function(){ console.log('onReset') },
				onError:function(errormessage){ console.log('onError:'+errormessage) }
		}
		var cropContainerEyecandy = new Croppic('cropContainerEyecandy', croppicContainerEyecandyOptions);

	</script>
<input type="text" required="required" name="data[Honor][imgsource]" class="imgsource" value="" />
<input type="text" required="required" name="data[Honor][imgcrop]" class="imgcrop" value="" />
<?php
echo $this->Form->end('Создать');
?>
