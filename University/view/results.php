<?php
session_start();
include("../Model/connection.php");
include("../Controller/header.php");
if(!isset($_SESSION['user_email'])){
	header("location: index.php");
}

?>

<!DOCTYPE html>
<html>
 <head>
  <title>Search For a Volunteer</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  #result {
   position: relative;
   width: 500px;
   max-width:870px;
   cursor: pointer;
   overflow-y: hidden;
   right: 0;
   max-height: 400px;
   box-sizing: border-box;
  }
  .link-class:hover{
   background-color:#f1f1f1;
  }
  </style>
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:900px;">
   <h2 align="center">Search For a Volunteer</h2>
   <h3 align="center">Volunteer Data</h3>
   <br /><br />
   <div align="center">
    <input type="text" name="search" style="background-color:#64FFF1; box-sizing: border-box;"id="search" placeholder="Search Volunteers" class="form-control" />
   </div>
   <ul class="list-group" id="result"></ul>
   <br />
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 $.ajaxSetup({ cache: false });
 $('#search').keyup(function(){
  $('#result').html('');
  $('#state').val('');
  var searchField = $('#search').val();
  var expression = new RegExp(searchField, "i");
  $.getJSON('../Model/donor.json', function(data) {
   $.each(data, function(key, value){
    if (value.name.search(expression) != -1 || value.location.search(expression) != -1)
    {
     $('#result').append('<li class="list-group-item link-class">'+value.name+' | <span class="text-muted">'+value.location+'</span></li>');
    }
   });
  });
 });

 $('#result').on('click', 'li', function() {
  var click_text = $(this).text().split('|');
  $('#search').val($.trim(click_text[0]));
  $("#result").html('');
 });
});
</script>
