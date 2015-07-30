<?php $linecards = $this->requestAction('/Elements/tagcloud'); ?>
<script src="/js/lazyload.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
    $("img.lazy").lazyload({
	threshold : 0,
    effect : "fadeIn"
});
});
</script>
<script language="JavaScript">

function loadPage(list) {

  location.href=list.options[list.selectedIndex].value

}
</script>
    <!--[if lt IE 9]><script type="text/javascript" src="/app/webroot/js/excanvas.js"></script><![endif]-->
    <script src="/app/webroot/js/tagcanvas.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      window.onload = function() {
        try {
          TagCanvas.Start('myCanvas','tags',{
            textColour: '#ff0000',
            outlineColour: '#000000',
            reverse: true,
            depth: 1,
            maxSpeed: 0.01,
			stretchX: 15,
			shape: "vring",
  			offsetY: 0,
  			lock: "y",
			imageScale: 0.6
          });
        } catch(e) {
          // something went wrong, hide the canvas container
          document.getElementById('myCanvasContainer').style.display = 'none';
        }
      };
    </script>

    <div id="myCanvasContainer">
      <canvas width="1000" height="70" id="myCanvas">
        <p>Anything in here will be replaced on browsers that support the canvas element</p>
      </canvas>
    </div>
    <div id="tags">
      <ul>
	  <?php
	  //$this->tagcloud();
	$i=0;
	foreach ($linecards as $linecard): $i++;
		 if($linecard['Linecard']['display']=='0'){continue;}
		 if($i>=15){return;}?> 
	<?php $image = $_SERVER['DOCUMENT_ROOT'] . '/app/webroot/img/man_logos/'.strtolower($linecard['Linecard']['line']).'.jpg';?>
	<?php if(file_exists($image)){ ?>
	<li><a href="/linecard/view/<?php echo $linecard['Linecard']['id']; ?>" class="vendor-logo">
                        <img src="/img/man_logos/<?php echo strtolower($linecard['Linecard']['line']); ?>.jpg" width="120px" align="center" border="0" name="<?php echo strtolower($linecard['Linecard']['name']); ?>" class="lazy">
                </a></li>
	<?php }else{ ?>
	<?php } ?>
<?php endforeach; ?>
      </ul>
    </div>
