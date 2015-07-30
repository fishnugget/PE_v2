<?php //echo $this->Html->css('memnav'); 
//if($_SERVER['REQUEST_URI'] == "/"){return;}
 echo $this->Html->css('members'); 
 ?>
 <script>
$(document).ready(function(){

	$('.line').focus(function(){
		if($(this).val() == 'Linecode'){
			$(this).val('');
		}
	});
	
	$('.line').blur(function(){
		if($(this).val() == ''){
			$(this).val('Linecode');
		}
	});
		$('.part').focus(function(){
		if($(this).val() == 'Part#'){
			$(this).val('');
		}
	});
	
	$('.part').blur(function(){
		if($(this).val() == ''){
			$(this).val('Part#');
		}
	});
});
			</script>
<div id="member_nav">
<?php /*
	<ul>
    	<li>Member's Menu »</li>
    	<!--<li><a href="/users/members"><img src="/img/memnav-home.jpg"></a></li>-->
        <li><a href="/users/account"><img src="/img/memnav-youraccount.jpg"></a></li>
        <li><a href="/search"><img src="/img/memnav-rapid.jpg"></a></li>
        <li><a href="/search/ymm"><img src="/img/memnav-search.jpg"></a></li>
        <li><a href="/orders/history"><img src="/img/memnav-history.jpg"></a></li>
        <li><a href="/users/logout"><img src="/img/memnav-logout.jpg"></a></li>
    </ul>
	class="text-box"
	*/?>
    <div align="center">
    	
	   	<form method="post" action="/search">	
			<script type="text/javascript" src="/js/views/helpers/auto_complete.js"></script><strong>Search <input name="data[linecode]" update="autoCompleteDiv" autoCompleteText="1" autoCompleteUrl="/search/auto_complete" autoCompleteRequestItem="autoCompleteText" type="text" id="linecode" size="5" autocomplete="off" value="Linecode" class="line"/><div id="autoCompleteDiv" class="autoCompleteDiv"></div><input type="text" name="partnumber" size="10" value="Part#" class="part"><input type="image" src="/img/topbar/go_button.png" style="width: 60px; vertical-align:middle;" value="Submit">
	    </strong></form>
    </div>
</div>
