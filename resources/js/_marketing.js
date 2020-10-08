$(document).ready(function(){
    var $s3 = $('#s3');
    var $card = $('.cardS3');
    $s3.waypoint(function(direction){
        if(direction == 'down'){
            $card.addClass('showCardS3');
            
        }
        else{
            $card.removeClass('showCardS3');
        }
    }, {offset: '10%'});

})