<?php $this->start('main'); ?>
<?php echo $this->Html->css('about'); ?>
<img src="img/lookup/eqbanner.jpg"/>
<table width="685" border="0">
  <tr>
    <td><div align="center"><a href="/search?cat=EQ"><img src="img/lookup/eq.jpg"/></a><a href="/search?cat=EQ">EQs</a></td>
    <td><div align="center"><a href="/search?cat=XOVER"><img src="img/lookup/xover.jpg"/></a><a href="/search?cat=XOVER">X-Overs</a></td>
  </tr>
</table>


</div>

<?php $this->end(); ?>

<?php $this->start('sidebar'); ?>
	<?php echo $this->element('sidebar'); ?>
<?php $this->end(); ?>