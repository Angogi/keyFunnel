//Anchor Nav List//

$(document).ready(function(){
    $('.list-nav  a[href^="#"]').click(function(e){
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);
        
        $('html , body').animate({
            'scrollTop' : $target.offset().top
        }), 800, 'swing', function(){
            window.location.hash = target;
        }, 

        $("#navList").removeClass('show-nav');

        $('.navList').slideAndSwipe();

    })
})

//Scrolling Nav. //

$(window).on('scroll', function(){
    if($(window).scrollTop()> 70){
        $('nav').addClass('navScroll')
    }
    else{
        $('nav').removeClass('navScroll');
    }
})

//Scrolling Bar//

let progress = document.getElementById('progres-bar');
let totalHeight = document.body.scrollHeight - window.innerHeight;

window.onscroll = function(){
    let progressHeight = (window.pageYOffset / totalHeight ) * 50;
    
    progress.style.height = progressHeight + "%"; 
}



$(document).ready(function(){

    // Show menu//

    $("#bars").click(function(){
        $("#navList").toggleClass('show-nav');
    });

    $('#arrow-close-menu').click(function(){
        $("#navList").removeClass('show-nav')
    })

    

    // 

    // Show Showcases!!//

    $("#show-wd").click(function(){
       
        $("#webdesign-showcase").addClass('show-wd-popup');
    });

    $("#close-wd-showcase").click(function(){
        
            $("#webdesign-showcase").removeClass('show-wd-popup');
    });

    $("#show-dm").click(function(){
       
        $("#digital-marketing-showcase").addClass('show-dm-popup');
    });

    $("#close-dm-showcase").click(function(){
        
            $("#digital-marketing-showcase").removeClass('show-dm-popup');
    });

    
  });


  // Formularios 

  $(document).ready(function(){
    var form_count = 1, previous_form, next_form, total_forms;
    total_forms = $("fieldset").length;
    
    $(".next-form").click(function(){
        previous_form = $(this).parent();
        next_form = $(this).parent().next();
        next_form.show();
        previous_form.hide();
        setProgressBarValue(++form_count);
    });
    $(".previous-form").click(function(){
        previous_form = $(this).parent();
        next_form = $(this).parent().prev();
        next_form.show();
        previous_form.hide();
        setProgressBarValue(--form_count);
    });
    setProgressBarValue(form_count);
    function setProgressBarValue(value){
        var percent = parseFloat(100 / total_forms) * value;
        percent = percent.toFixed();
        $(".progress-bar").css("width",percent+"%").html(percent+"%");
    }
    // Handle form submit and validation
    $( "#register_form" ).submit(function(event) {
        
        
        var error_message = '';
        if(!$("#name").val()){
            error_message+="Por favor dinos tu nombre"
        }
        if(!$("#email").val()) {
            error_message+="<br>Por favor ingresa tu Email";
        }
        if(!$("#phone").val()) {
        error_message+="<br>Por favor ingresa tu número de móvil";
        }
       
        // Display error if any else submit form
        if(error_message) {
        $('.alert-success').removeClass('hide').html(error_message);
        return false;
        } else {
        return true;
        }
    });
    }); 

  
  




