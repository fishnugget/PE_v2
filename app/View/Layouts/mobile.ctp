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
<meta name="viewport" content="width=device-width">
	<?php echo $this->Html->charset(); ?>
	<title>
		P&amp;E Distributors::<?php echo $title_for_layout; ?>
	</title>
   <?php echo $this->Html->css('global');?>
    <!-- SmartMenus core CSS (required) -->
<link href="/css/smartmenus/sm-core-css.css" rel="stylesheet" type="text/css" />

<!-- "sm-blue" menu theme (optional, you can use your own CSS, too) -->
<link href="/css/smartmenus/sm-blue.css" rel="stylesheet" type="text/css" />

<!-- #main-menu config - instance specific stuff not covered in the theme -->
<style type="text/css">
	#main-menu {
		z-index:9999;
		width:100%;
		margin-top:10px;
		position:static;
	}
	#main-menu ul {
		width:12em; /* fixed width only please - you can use the "subMenusMinWidth"/"subMenusMaxWidth" script options to override this if you like */
	}
</style>
<!-- jQuery-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<!-- SmartMenus jQuery plugin -->
<script type="text/javascript" src="/js/smartmenus/jquery.smartmenus.js"></script>

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
</head>
<body>
<table width="auto" border="0">
  <tr>
    <td width="65%"><img src="/img/logos/peLogo_300px.png" alt="PE Logo" width="100%"></td>
    <td width="35%"><a href="tel://800-251-2034" style="text-align:right">(800)251-2034</a></td>
  </tr>
</table>
<?php echo $this->Element('searchmobile');?> 
<?php echo $this->Element('smartmenusMobile');?> 

</body>
</html>