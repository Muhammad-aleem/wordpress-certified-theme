

  $( document ).ready(function() {

    $('.multiitem').slick({
        centerMode: true,
        centerPadding: '20px',
        slidesToShow: 4,
        dots: true,
        autoplay: false,
        autoplaySpeed: 2000,
        arrows: false,
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
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true
      });

      $('.al_cfbusinessslider').slick({
        centerMode: true,
        // centerPadding: '0px',
        slidesToShow: 2,
        dots: true,
        autoplay: false,
        autoplaySpeed: 2000,
        arrows: false,
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

$('#gotonextp3').click(function() {
  $('#cf_gotohidep3').css('display','none');
  $('#cf_maincounthide').css('display','none');    // 
  $('#gotohidep4').css('display','block');
  $('.main_addclass').addClass('offset-lg-1');
  $('.main_addclass').removeClass('offset-lg-2');
});
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

$('#gotonextp5').click(function() {
  $('#gotohidep5').css('display','none');
  $('#cf_maincounthide').css('display','none');    // 
  $('#gotohidep6').css('display','block');
  $('.main_addclass').addClass('offset-lg-2');
});

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