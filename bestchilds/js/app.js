$(document).ready(function(){	
    var page = $("#page").val();
    $("#"+page).removeAttr("href");
    $("#link"+page).addClass("active");
});