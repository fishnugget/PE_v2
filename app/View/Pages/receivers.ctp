<?php $this->start('main'); ?>
<?php echo $this->Html->css('about'); ?>
<img src="img/lookup/cdbanner.jpg"/>
<table width="685" border="0">
  <tr>
    <td><div align="center"><a href="/search?cat=50CD"><img src="img/lookup/cd50.jpg"/></a><a href="/search?cat=50CD">$50</a></td>
    <td><div align="center"><a href="/search?cat=75CD"><img src="img/lookup/cd75.jpg"/></a><a href="/search?cat=75CD">$75</a></td>
    <td><div align="center"><a href="/search?cat=100CD"><img src="img/lookup/cd100.jpg"/></a><a href="/search?cat=100CD">$100</a></td>
  </tr>
  <tr>
    <td><div align="center"><a href="/search?cat=150CD"><img src="img/lookup/cd150.jpg"/></a><a href="/search?cat=150CD">$150</a></td>
    <td><div align="center"><a href="/search?cat=200CD"><img src="img/lookup/cd200.jpg"/></a><a href="/search?cat=200CD">$200</a></td>
    <td><div align="center"><a href="/search?cat=250CD"><img src="img/lookup/cd250.jpg"/></a><a href="/search?cat=250CD">$250</a></td>
  </tr>
  <tr>
    <td><div align="center"><a href="/search?cat=300CD"><img src="img/lookup/cd300.jpg"/></a><a href="/search?cat=300CD">$300</a></td>
    <td><div align="center"><a href="/search?cat=350CD"><img src="img/lookup/cd350.jpg"/></a><a href="/search?cat=350CD">$350</a></td>
    <td><div align="center"><a href="/search?cat=400CD"><img src="img/lookup/cd400.jpg"/></a><a href="/search?cat=400CD">$400</a></td>
  </tr>
</table>


</div>

<?php $this->end(); ?>

<?php $this->start('sidebar'); ?>
	<?php echo $this->element('sidebar'); ?>
<?php $this->end(); ?>