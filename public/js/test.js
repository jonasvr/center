$( document ).ready(function() {
    $("#4-persons-image").hide();
    $("#6-persons-image").hide();
    $("#8-persons-image").hide();
});
$('#4-persons').click(function(){
    $("#myCarousel").hide();
    $("#6-persons-image").hide();
    $("#8-persons-image").hide();
    $("#4-persons-image").show();
});

$('#6-persons').click(function(){
    $("#myCarousel").hide();
    $("#4-persons-image").hide();
    $("#8-persons-image").hide();
    $("#6-persons-image").show();
});

$('#8-persons').click(function(){
    $("#myCarousel").hide();
    $("#6-persons-image").hide();
    $("#4-persons-image").hide();
    $("#8-persons-image").show();
});