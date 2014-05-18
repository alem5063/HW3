<?php
ini_set('session.save_path', 'tmp');
session_start();
include_once("db.php")
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Search</title>
 

<script type="text/javascript">
 
$(function() {
 
    $(".search_button").click(function() {
        // getting the value that user typed
        var searchString    = $("#search_box").val();
        // forming the queryString
        var data            = 'search='+ searchString;
         
        // if searchString is not empty
        if(searchString) {
            // ajax call
            $.ajax({
                type: "POST",
                url: "SearchResults.php",
                data: data,
                beforeSend: function(html) { 
                    $("#results").html(''); 
                    $("#searchresults").show();
                    $(".word").html(searchString);
               },
               success: function(html){ 
                    $("#results").show();
                    $("#results").append(html);
              }
            });    
        }
        return false;
    });
});
</script>
 
</head>
<body>
<div id="container">
<div style="margin:20px auto; text-align: center;">
<form="post" action="SearchResults.php">
    <input type="text" name="search" id="search_box" class='search_box'/>
    <input type="submit" value="Search" class="search_button" /><br />
</form>
</div>      
<div>
 
<div id="searchresults">Search results :</div>
<ul id="results" class="update">
</ul>
 
</div>
</div>

   
</body>
</html>
