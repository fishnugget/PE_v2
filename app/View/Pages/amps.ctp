<?php $this->start('main'); ?>
<?php echo $this->Html->css('about'); ?>
<img src="img/lookup/ampbanner.jpg"/>
<table width="685" border="0">
  <tr>
    <td><div align="center"><a href="/search?cat=4CHANNEL"><img src="img/lookup/4Channel.jpg"/></a><a href="/search?cat=4CHANNEL">4Channel</a></td>
    <td><div align="center"><a href="/search?cat=MONO"><img src="img/lookup/mono.jpg"/></a><a href="/search?cat=MONO">Mono</a></td>
    <td><div align="center"><a href="/search?cat=MULTICHANNEL"><img src="img/lookup/multichannel.jpg"/></a><a href="/search?cat=MULTICHANNEL">MultiChannel</a></td>
  </tr>
</table>

</div>

<?php $this->end(); ?>

<?php $this->start('sidebar'); ?>
	<?php echo $this->element('sidebar'); ?>
<?php $this->end(); ?>