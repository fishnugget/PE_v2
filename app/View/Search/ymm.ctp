<script>
  function scrollWin()
{
window.scrollTo(0,0);
}
  window.onload=scrollWin;
</script>
<?php
//Override DCi css in /css/972553-Site.css, DCi @imports this file
$this->start('main');
//echo $this->Element('search');
?>

 <script type="text/javascript" src="http://pedistributors.v12.catalograck.com/scripts/dciframes.js"></script>
<iframe id="v12DciSearch" frameborder="0" width="1000px" hdnB2B="<?php echo $user['BS']['0']; ?>" name="v12DciSearch" mozallowfullscreen="true" scrolling="no"></iframe>


<?php $this->end(); ?>

<?php /* $this->start('sidebar'); ?>
	<?php echo $this->element('sidebar'); ?>
<?php $this->end(); */?>