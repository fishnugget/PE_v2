<?php
  if(!empty($salesman[0]['Salesman']['ext'])){$salesman=$salesman[0]['Salesman']?>
        <div>
            	<strong>Your P&E Salesman</strong>: <?php //print_r($salesmen);//echo ucwords(strtolower($salesman));?>
                <br/><img align=middle src="/img/salesman/<?php echo substr($salesman['ext'], -3); ?>.jpg" width="120px" style="padding:.25em" align="center" border="2">
                <br/><strong><?php echo ucwords(strtolower($salesman['name'])); ?></strong>
                <br/>
                <?php echo $salesman['ext']; ?>
                <?php if(!empty($salesman['email'])){ ?>
                <br/><a href="mailto:<?php echo $salesman['email']; ?>">Email<!--<img src="/img/rightbarbuttons/email.jpg" align="middle">--></a>                <?php } ?>
            </div> <?php } ?>
