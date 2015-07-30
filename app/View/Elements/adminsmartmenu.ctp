<!--<a id="menu-button"></a>-->
<ul id="main-menu" class="sm sm-blue" style="width: auto;">
  <li><a href="/users/members"><i class="fa fa-home fa-fw"></i></a></li>

  <li><a href="/users/account" class="has-submenu"><span class="sub-arrow">+</span>Account</a>
    <ul class="" style="">
    <?php if(!empty($salesman[0]['Salesman']['ext'])){?>
    <li><a href="#" class="has-submenu"><span class="sub-arrow">+</span> <i class="fa fa-user fa-fw"></i>My Salesman</a>
      <ul class="main-menu-salesman" style="display: none; top: auto; left: 0px; margin-left: 0px; margin-top: 0px; max-width: 5em !important;">
      <li>
        <!-- Salesman -->
          <div style="padding:5px 10px;">
            <?php echo $this->Element('salesmanpic');?>
	</div>
      </li>
          </ul>
  </li>
<?php };  ?>
      <li><a href="/users/account/"><i class="fa fa-info-circle fa-fw"></i>Account Information</a></li>
      <li><a href="/users/account/#tabs-2"><i class="fa fa-shopping-cart fa-fw"></i> Order History</a></li>
      <li><a href="/users/account#tabs-3"><i class="fa fa-envelope fa-fw"></i> Marketing Preferences</a></li>
    </ul>
  </li>
  </li>
<li><a href="/returns">Returns</a></li>
  
  <li><a href="/track" class="has-submenu"><span class="sub-arrow">+</span>Tracking</a>
      <ul class="main-menu-tracking" style="display: none; top: auto; left: 0px; margin-left: 0px; margin-top: 0px; min-width: 10em; max-width: 20em;">
      <li>
        <!-- UPS Tracking -->
        <div style="width:400px;max-width:100%;">
          <div style="padding:5px 10px;">
            <?php echo $this->Element('topbar/tracking');?>
	  </div>
	</div>
      </li>
          </ul>
  </li>
  
  
<li><a href="/search/ymm" class="has-submenu"><span class="sub-arrow">+</span>Search</a>
    <ul class="" style="">
      <li><a href="/search/ymm"><i class="fa fa-search-plus fa-fw"></i> Advanced Search</a></li>
      <li><a href="/lookup"><i class="fa fa-search fa-fw"></i> Non-Vehicle Specific Lookup</a></li>
    </ul>
  </li>
  
<li><a href="/users/members" class="has-submenu"><span class="sub-arrow">+</span>Specials</a>
    <ul class="" style="">
      <li><a href="/AVSpecials"><i class="fa fa-volume-up fa-fw"></i> Audio/Video Specials</a></li>
      <li><a href="/specials"><i class="fa fa-tachometer fa-fw"></i> Performance Specials</a></li>
      <li><a href="/rebates"><i class="fa fa-dollar fa-fw"></i> Rebates</a></li>
    </ul>
  </li>
      
<li><a href="/users/logout">Logout <img src="/img/membernav/256-2.png" style="vertical-align:middle" alt="logout"/></a></li>
      
      </ul>
