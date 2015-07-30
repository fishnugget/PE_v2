<?php $this->start('main'); ?>
<?php echo $this->Html->css('about'); ?>
<img src="img/lookup/misbanner.jpg"/>
<table width="685" border="0">
  <tr>
   <td><div align="center"><a href="/search?cat=HOME"><img src="img/lookup/home.jpg"/></a><a href="/search?cat=HOME">HOME</a></td>
       <td><div align="center"><a href="/search?cat=LADDERRACKS"><img src="img/lookup/ladderracks.jpg"/></a><a href="/search?cat=LADDERRACKS">LADDERRACKS</a></td>
    <td><div align="center"><a href="/search?cat=POWERWINDOWS"><img src="img/lookup/powerwindows.jpg"/></a><a href="/search?cat=POWERWINDOWS">POWERWINDOWS</a></td>
    <td><div align="center"><a href="/search?cat=SATELLITE"><img src="img/lookup/satellite.jpg"/></a><a href="/search?cat=SATELLITE">SATELLITE</a></td>
  </tr>
  <tr>
    <td><div align="center"><a href="/search?cat=TAILGATELIGHT"><img src="img/lookup/tailgatelight.jpg"/></a><a href="/search?cat=TAILGATELIGHT">TAILGATELIGHT</a></td>
  </tr>
</table>

</div>

<?php $this->end(); ?>

<?php $this->start('sidebar'); ?>
	<?php echo $this->element('sidebar'); ?>
<?php $this->end(); ?>