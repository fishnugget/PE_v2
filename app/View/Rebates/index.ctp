<?php $this->start('main'); ?>
<script src="/js/lazyload.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
    $("img.lazy").lazyload({
	threshold : 200,
    effect : "fadeIn"
});
});
</script>
<script language="JavaScript">

function loadPage(list) {

  location.href=list.options[list.selectedIndex].value

}
</script>
<?php echo $this->Html->css('rebate'); ?>
<div class="rebates index">
	<div class="content-header">
    <img src="/img/REBATE-Banner.jpg">
	</div>
	
	<div id="vendors">
	<?php
	foreach ($rebates as $rebate): if($rebate['Rebate']['display']=='0'){continue;}?>
	<?php $image = $_SERVER['DOCUMENT_ROOT'] . '/app/webroot/img/rebates/'.($rebate['Rebate']['image']);?>
	<?php if(file_exists($image)){?>
    
	<a href="<?php echo $rebate['Rebate']['url']; ?>" class="vendor-logo">
                        <img class="lazy" data-original="img/rebates/<?php echo ($rebate['Rebate']['image']); ?>" style="padding:.25em" align="center" border="0">

<noscript><img src="img/rebates/<?php echo ($rebate['Rebate']['image']); ?>" style="padding:.25em" align="center" border="0"></noscript>
                </a>
	<?php }?>
<?php endforeach; ?>
	</div>
</div>
<?php $this->end(); ?>

<?php $this->start('sidebar'); ?>
	<?php echo $this->element('sidebar'); ?>
<?php $this->end(); ?>