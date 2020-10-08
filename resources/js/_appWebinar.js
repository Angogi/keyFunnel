var counter = 0;
var timeLeft= 10000;

function playVideo(){
        
    var video = document.getElementById('webinar-video');
    
    video.play();
    $('.play-button').addClass('move-button');

    
}

function convertSeconds(s){ 
    var min = Math.floor(s / 60);
    var sec = s % 60;

    return min  + ':' + sec;
}

 $(document).ready(function(){
    
    
    var timer = $('#timer');
       
    function timeIt(){
        counter++;
        timer.html( convertSeconds(timeLeft - counter));
        
        

        if(counter == timeLeft){
            $('#landingForm').addClass('showLandingForm')
        }
        

    }

     
    setInterval(timeIt , 1000);

    $('#btn-play').click(playVideo);
    
    
})

// function getDurationVideo(){
//     var video = document.getElementById('webinar-video');
//     var timeLeft = video.duration;

//     var result = Math.floor(timeLeft)*1;
    
//    alert( result);
// }

// getDurationVideo();











