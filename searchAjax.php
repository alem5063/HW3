<?php 
ini_set('session.save_path', 'tmp');
session_start();
include_once("db.php") 
?>
<html>
<head>
<title>Profile</title> 
<script type="text/javascript">
$(function(){
$(".search").keyup(function() 
{ 
var searchid = $(this).val();
var dataString = 'search='+ searchid;
if(searchid!='')
{
    $.ajax({
    type: "POST",
    url: "SearchResults.php",
    data: dataString,
    cache: false,
    success: function(html)
    {
    $("#result").html(html).show();
    }
    });
}return false;    
});

jQuery("#result").live("click",function(e){ 
    var $clicked = $(e.target);
    var $name = $clicked.find('.name').html();
    var decoded = $("<div/>").html($name).text();
    $('#searchid').val(decoded);
});
jQuery(document).live("click", function(e) { 
    var $clicked = $(e.target);
    if (! $clicked.hasClass("search")){
    jQuery("#result").fadeOut(); 
    }
});
$('#searchid').click(function(){
    jQuery("#result").fadeIn();
});
});
</script>

</head>
<body>
<div>
<div style="margin:10px auto; text-align: center;">
<!--<form method="GET" action="do_search.php">-->
<form>
<!--<label for="username">Name</label>-->
    <input type="text" class="search" id="searchid" placeholder="Search for people" />
   <!-- <input type="submit" value="Search"/>--><br />
	<div id="result"></div>
</form>
</div>      
</div>