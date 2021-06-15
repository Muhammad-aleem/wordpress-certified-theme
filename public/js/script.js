

  $( document ).ready(function() {
  
      // $('.multiitem img').each(function(){    
      //   if ($(this).attr("src") === "") {
      //     $(this).remove(); 
      //   }        
      // });     
  

    $('.multiitem').slick({
        centerMode: true,
        centerPadding: '20px',
        slidesToShow: 3,
        dots: true,
        autoplay: false,
        autoplaySpeed: 2000,
        arrows: false,
        pauseOnFocus: false, 
        pauseOnHover: false,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              arrows: false,
              initialSlide:2,
              centerMode: false,
              // centerPadding: '0px',
              slidesToShow: 2,
              infinite: false,
              slidesToScroll: 1,
            }
          },
          {
            breakpoint: 480,
            settings: {
              arrows: false,
              centerMode: false,
              // centerPadding: '40px',
              slidesToShow: 1
            }
          }
        ]
      });



      $('.al_cfmainslider').slick({
        dots: true,
        infinite: true,
        arrows: false,
        speed: 1000,
        autoplay: true,
        autoplaySpeed: 3000,
        slidesToShow: 1,
        adaptiveHeight: true,
        pauseOnFocus: false, 
        pauseOnHover: false
      });

      $('.al_cfbusinessslider').slick({
        centerMode: true,
        // centerPadding: '0px',
        slidesToShow: 2,
        dots: true,
        autoplay: false,
        autoplaySpeed: 2000,
        arrows: false,
        pauseOnFocus: false, 
        pauseOnHover: false,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              arrows: false,
              initialSlide:1,
              centerMode: false,
              // centerPadding: '0px',
              slidesToShow: 5,
              infinite: false,
              slidesToScroll: 1,
            }
          },
          {
            breakpoint: 480,
            settings: {
              arrows: false,
              centerMode: false,
              // centerPadding: '40px',
              slidesToShow: 1
            }
          }
        ]
      });


// Business Partner Page Hide and show 


$('#main_nextone').click(function() {
  $('#cf_mainhideone').css('display','none');
  $('#cf_maincounthide').css('display','none');
  $('#cf_hidepart2').css('display','block');
  $('.main_addclass').addClass('offset-lg-2');
});
// Part 2

$('#goto_nextp2').click(function() {
  $('#cf_hidepart2').css('display','none');
  $('#cf_maincounthide').css('display','none');
  $('#cf_gotohidep3').css('display','block');
  $('.main_addclass').addClass('offset-lg-1');
  $('.main_addclass').removeClass('offset-lg-2');
});
// Part 3

// $('#gotonextp3').click(function() {
 
// });
// Part 4

$('#gotonextp4').click(function() {
  $('#gotohidep4').css('display','none');
  $('#cf_maincounthide').css('display','none');    // 
  $('#gotohidep5').css('display','block');
  $('.main_addclass').addClass('offset-lg-2');
});

// Part 5
  // goto back 
$('#gotobackp5').click(function() {
  $('#gotohidep4').css('display','block');
  $('#cf_maincounthide').css('display','none');    // 
  $('#gotohidep5').css('display','none');
  $('.main_addclass').removeClass('offset-lg-2');
});

// goto next 



// Part 6
 // goto back 
$('#gotobackp6').click(function() {
  $('#gotohidep5').css('display','block');
  $('#cf_maincounthide').css('display','none');    // 
  $('#gotohidep6').css('display','none');
  $('.main_addclass').addClass('offset-lg-2');
});

// goto next 

$('#gotonextp6').click(function() {
  $('#gotohidep6').css('display','none');
  $('#cf_maincounthide').css('display','none');    // 
  $('#gotohidep7').css('display','block');
  $('.main_addclass').addClass('offset-lg-2');
});



// Part 7

 // goto back 
 $('#gotobackp7').click(function() {
  $('#gotohidep6').css('display','block');
  $('#cf_maincounthide').css('display','none');    // 
  $('#gotohidep7').css('display','none');
  $('.main_addclass').addClass('offset-lg-2');
});


// goto next 

$('#gotonextp7').click(function() {
  $('#gotohidep7').css('display','none');
  $('#cf_maincounthide').css('display','none');    // 
  $('#gotohidep8').css('display','block');
  $('.main_addclass').addClass('offset-lg-4');
});





var  get_number = $('.bus_clk_num').html(); 
      
    var number_counter = 0;
  // var incrs_numer   = number_counter;
    // console.log(get_number);  
    $('#main_nextone').click(function() {
      number_counter++;
      $('.bus_clk_num').html(number_counter);
    });
    $('#goto_nextp2').click(function() {
      number_counter++;
      $('.bus_clk_num').html(number_counter);
    });
    $('#gotonextp3').click(function() {
      number_counter++;
      $('.bus_clk_num').html(number_counter);
    });
    $('#gotonextp4').click(function() {
      number_counter++;
      $('.bus_clk_num').html(number_counter);
    });
    $('#gotonextp5').click(function() {
      number_counter++;
      $('.bus_clk_num').html(number_counter);
    });
    $('#gotonextp6').click(function() {
      number_counter++;
      $('.bus_clk_num').html(number_counter);
    });
    $('#gotonextp7').click(function() {
      number_counter++;
      $('.bus_clk_num').html(number_counter);
    });
    $('#gotobackp5').click(function() {
      incrs_numer--;
      $('.bus_clk_num').html(incrs_numer);
    });
    // gotobackp5






// User setting page btn

$('.user_savebtn').click(function() {
  $('.user_savebtn').addClass('btn_active');
  $('.user_cancelbtn').removeClass('btn_active');
});
$('.user_cancelbtn').click(function() {
  $('.user_cancelbtn').addClass('btn_active');
  $('.user_savebtn').removeClass('btn_active');
});


});

$(document).ready(function () {
  $('.cf_searchtable tr').click(function (event) {
      if (event.target.type !== 'radio') {
          $(':radio', this).trigger('click');
      }
  });

  $("input[type='radio']").change(function (e) {
      e.stopPropagation();
      $('.cf_searchtable tr').removeClass("highlight_row");        
      if ($(this).is(":checked")) {
          $(this).closest('tr').addClass("highlight_row");
      }     
  });

// Community Add a Rivew:

$('.comm_showreviewinp').on('click', function(e){
  e.preventDefault();
  $(this).closest('.al_revicnlils').find('.commnt_comt_sec').toggle();
  
});

$('.travelnd_showreviewinp').on('click', function(e){
  e.preventDefault();
  $('#teavelnd_comt_sec').toggle();
});



// document.querySelector('.comm_show_sincbtn').addEventListener('click', function(e) {
//   e.preventDefault();
//   document.querySelector('.comm_smedianone').classList.toggle('show_comm_smedia');
// });

$('.comm_show_sincbtn').on('click', function(e){
  e.preventDefault();
  $(this).closest('.al_revicnlils').find('.comm_smedianone').toggleClass('show_comm_smedia');
});

$('.comm_show_reviewsincbtn').on('click', function(e){
  e.preventDefault();
  $(this).closest('.comm_reviewshareicn').find('.commreview_smedia').toggleClass('show_comm_reviewsmedia');
});


// Community submit the report 

$('.comm_report_btn').on('click', function(e) {
  e.preventDefault();
  $(this).closest('.al_revicnlils').find('.comm_repost_post').toggleClass('comm_repost_post_show');
  // $('.comm_repost_post').toggleClass("comm_repost_post_show"); 
});



});

// User Profile Live Link

jQuery(document).ready(function($) {
  $('.user_liveicn a').on('click', function(e){
    e.preventDefault();
    alert('This feature will work only in mobile App.');
  });

  $('.travel_report_btn').on('click', function(e) {
    e.preventDefault();
    $(this).closest('.al_revicnlils').find('.comm_repost_post').toggleClass('comm_repost_post_show');
  });


// business side bar

  $('.cf_bus_sidebar_link a').on('click', function(){
    $('.cf_bus_sidebar_link a.active').removeClass('active');
    $(this).addClass('active');
  });


});



function login_check(event){
  event.preventDefault();
  alert('Please Login...');
}

$(function() {
  $('#business_services_id').tagsinput({
  });
});
$(function() {
  $('#add_bus_services').tagsinput({
    maxTags:5
  });
});


// add the word comdection


// jQuery(document).ready(function($) {
// 	$('#comunty_sunmit_post').attr('disabled','disabled');
// 	$('#commtysub_post_details').keyup(function() {
//     var currentWordCount = $("#commtysub_post_details").val().match(/\S+/g).length;
//     $('#com_text_limt').html('');
// 		if ( currentWordCount >= 100 && currentWordCount == 100 ) {
//             $( "#comunty_sunmit_post" ).removeAttr('disabled');
//         } else {
//           $('#com_text_limt').html(100-currentWordCount + ' Please more words to go!');

//           // if(currentWordCount = 100){
//           //   $('#com_text_limt').html(currentWordCount +  'Please No More');
//           // }
// 		}
// 	});
// });


jQuery(document).ready(function($) {

  var myVideoPlayer = document.getElementById('ent_related_videos'),
    meta = document.getElementsByClassName('ent_show_episodetime');
    myVideoPlayer.addEventListener('loadedmetadata', function () {
        var duration = myVideoPlayer.duration;

        for (i = 0; i < meta.length; i++) {
         // slides[i].style.display = "none";
          meta[i].innerHTML = "Duration " + duration.toFixed(2)
      }
        
       //var chk= meta.innerHTML = "Duration " + duration.toFixed(2)
        //console.log(chk);
    });

});