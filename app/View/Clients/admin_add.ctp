<div class="title admin_t">
		<h2>Добавление награды</h2>
	</div>
<?php 
echo $this->Form->create('Client', array('type' => 'file'));
?>
<div id="cropContainerEyecandyClient"></div>

    <link href="/css/main.css" rel="stylesheet">
    <link href="/css/croppic.css" rel="stylesheet">
   	<script src="/js/croppic.min.js"></script>
    <script>
		var croppicContainerEyecandyClientOptions = {
				uploadUrl:'/ajax/img_save_to_file_client.php',
				cropUrl:'/ajax/img_crop_to_file_client.php',
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
		var cropContainerEyecandyClient = new Croppic('cropContainerEyecandyClient', croppicContainerEyecandyClientOptions);

	</script>
<input type="text" required="required" name="data[Client][imgsource]" class="imgsource" value="" />
<input type="text" required="required" name="data[Client][imgcrop]" class="imgcrop" value="" />
<?php
echo $this->Form->end('Создать');
?>
