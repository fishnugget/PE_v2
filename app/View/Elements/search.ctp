<?php //echo $this->Html->css('memnav'); 
//if($_SERVER['REQUEST_URI'] == "/"){return;}
 echo $this->Html->css('members'); 
 ?>
 <script type="text/javascript">
 function processing()
{
    document.getElementById("search_swap").innerHTML = '<i class="fa fa-spinner fa-spin"></i>';
}
 </script>
 <script>
$(document).ready(function(){

	$('.line').focus(function(){
		if($(this).val() == 'Line'){
			$(this).val('');
		}
	});
	
	$('.line').blur(function(){
		if($(this).val() == ''){
			$(this).val('Line');
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

<div id="member_nav" style="margin:-70px auto auto -320px;">
    <div>
    	
	   	<form method="post" action="/search">
           <h1>Know your Part#? <br /><br />
           <input name="linecode" update="autoCompleteDiv0" autoCompleteText="1" autoCompleteUrl="/search/auto_complete" autoCompleteRequestItem="autoCompleteText" type="text" id="linecode" size="5" autocomplete="off" value="Line" class="line" /><div id="autoCompleteDiv0" class="autoCompleteDiv"></div>
            
            <input type="text" name="partnumber" size="10" value="Part#" class="part">
            <span id="search_swap">
            <input class="searchButton" style="width: 60px; vertical-align:middle;" value="Search" onclick="submit();processing();" >
            </span>
	    </h1></form>
    </div>
</div>
