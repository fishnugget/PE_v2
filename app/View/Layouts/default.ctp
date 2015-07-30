<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		P&E Distributors::<?php echo $title_for_layout; ?>
	</title> <!--was 1.8.2-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
    <?php /*MJ removed 2/5/14 compatability testing
	note: breaks smart-menu
<!--[if lt IE 9]>
<script src="/js/IE9.js"></script>
<![endif]-->*/?>
<!-- SmartMenus jQuery plugin -->
<?php echo $this->Html->script('smartmenus/jquery.smartmenus');
echo $this->Html->script('views/helpers/auto_complete.js');?>

	<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->Html->css('global');
		echo $this->Html->css('main');

		//echo $this->Html->css('ddmegamenu.css');
		/*
		if ($this->request->here == '/'){
		echo $this->Html->css('nivo-slider.css');
		echo $this->Html->script('jquery.nivo.slider.pack.js');
		//echo $this->Html->script('ddmegamenuHead.js');
		}*/
		
	?>

<!-- SmartMenus core CSS (required) -->
<link href="/css/smartmenus/sm-core-css.css" rel="stylesheet" type="text/css" />

<!-- "sm-blue" menu theme (optional, you can use your own CSS, too) -->
<link href="/css/smartmenus/sm-blue.css" rel="stylesheet" type="text/css" />

<!-- #main-menu config - instance specific stuff not covered in the theme -->
<style type="text/css">
	#main-menu {
		z-index:9999;
		width:100%;
		/*margin-top:100px;*/
		position:static;
	}
	#main-menu ul {
		width:12em; /* fixed width only please - you can use the "subMenusMinWidth"/"subMenusMaxWidth" script options to override this if you like */
	}
</style>
<?php // echo $this->element('sql_dump'); 
echo $this->fetch('script');
if(isset($user)){
if(strtoupper($user['TM'][0]) == 'CREDIT CARD'){echo $this->Html->script('mainCC');
		}else{echo $this->Html->script('main');} 
}
// Include jQuery library?>	

    <!-- jQuery already loaded-->


<!-- SmartMenus jQuery init -->
<script type="text/javascript">
	$(function() {
		$('#main-menu').smartmenus({
			subMenusSubOffsetX: 1,
			subMenusSubOffsetY: -8,
			rightToLeftSubMenus:true
		});
	});
</script>
<!--TAB instead of enter or + (numpad)  
<script type="text/javascript">
	$(function() {
	$('body').on('keydown', 'input, select, textarea', function(e) {
    var self = $(this)
      , form = self.parents('form:eq(0)')
      , focusable
      , next
      ;
    if (e.keyCode == 13 || e.keyCode == 107 || e.keyCode == 40) {
        focusable = form.find('input,select,button,textarea').filter(':visible');
        next = focusable.eq(focusable.index(this)+1);
        if (next.length) {
            next.focus();
        } else {
            form.submit();
        }
        return false;
    }
});
});
</script>-->
</head>
<body>

<?php //echo $this->Element('salesmanpic'); ?>
<!--<div id="header-bar"></div>--><div id="container-wrapper">

	 
	

   <div id="container"><?php echo $this->Element('header');?> 
<div id="smart-menu-wrapper" style="width:990px; margin:0 auto;">
		<?php if(!isset($user)){echo $this->Element('smartmenus');}else{echo $this->Element('adminsmartmenu');}?>
	</div>
            <?php $col="content" ;
			/*
if ($this->request->here == '/search/ymm' || $this->request->here == '/login') {
       $col="content_nocol";
}*/
?>
		<div id="<?php echo $col;?>">
			<?php if ($this->fetch('featured')): ?>
				<div id="featured-content">
					<?php echo $this->fetch('featured'); ?>
				</div>
			<?php endif; ?>
            
			<?php /**/if ($this->fetch('sidebar')): ?>
				<div id="sidebar-content" class="two-column">
					<?php echo $this->fetch('sidebar'); ?>
				</div>
				<div id="main-content" class="two-column">
                <?php // if(!empty($user)): echo $this->Element('search'); endif;?>
					<?php echo $this->Session->flash(); ?>
					<?php 
						echo $this->fetch('main'); 
					?>
				</div>
			<?php else: ?>
				<div id="main-content" class="one-column">
				<?php // echo $this->fetch('sidebar'); ?>
					<?php 
						echo $this->fetch('main');
						echo $this->fetch('content'); 
					?>
				</div>
			<?php endif; ?>
			<?php //echo $this->Element('footer'); ?>
		</div>
        <?php echo $this->Element('footer'); ?>
	</div>
    
</div> 

<?php //echo $this->Js->writeBuffer(); // Write cached scripts?>
</body>
</html>