jQuery(document).ready( function($) {
   // var delId = $('span.badge span').attr("data-role");
   // var get_val = $('span.badge').text();
   // jQuery('span.badge').click( function(e) {
      // var text = $('span.badge span').parent("span").text();
      // console.log(text);
   // });
   // var delId = $('#remove_meta_value').attr("href");
   // console.log(delId);



   jQuery('.remove_meta').click( function(e) {
      $this = jQuery(this);
      var deltext = $this.closest('li').find('.remove_meta_value').text();
      // console.log(deltext);
        e.preventDefault();
       jQuery.ajax({
          type : "post",
          dataType : "json",
          url : myAjax.ajaxurl,
          data : {action: "my_user_vote",'get_setecte_data':deltext},
          success: function(response) {
             $this.closest('li').remove();
            // console.log(response);
          }
       })   
 
    });

//community  Like  Request
    jQuery('.wp_comm_thumb').click(function(e){
        e.preventDefault();
        $this = jQuery(this);
        var like_currentpid = $this.closest('ul').find('.comm_like_postval').val();
        var like_currentuserid = $this.closest('ul').find('.comm_like_currentuser').val();
        jQuery.ajax({
                type : "post",
                dataType : "json",
                url : myAjax.ajaxurl,
                data : {
                    action: "comm_likepost_action",
                    'send_the_post_id':like_currentpid,
                    'send_the_current_uid':like_currentuserid
                 },
                 beforeSend: function(){
                    $(".comm_like_dislikeloder").show();
                   },
                 success: function(response){
                 },
                 complete:function(data){
                    $(".comm_like_dislikeloder").hide();
                   }
            });
            setTimeout(function(){
                location.reload(); 
           },1000); 

    });



// Travland Like and dislike request

jQuery('.wp_trald_thumb').click(function(e){
    e.preventDefault();
    $this = jQuery(this);
    var like_currentpid = $this.closest('ul').find('.trald_like_postval').val();
    var like_currentuserid = $this.closest('ul').find('.trald_like_cuser').val();
    jQuery.ajax({
            type : "post",
            dataType : "json",
            url : myAjax.ajaxurl,
            data : {
                action: "trald_likepost_action",
                'send_the_post_id':like_currentpid,
                'send_the_current_uid':like_currentuserid
             },
             beforeSend: function(){
                $(".comm_like_dislikeloder").show();
               },
             success: function(response){
             },
             complete:function(data){
                $(".comm_like_dislikeloder").hide();
               }
        });
        setTimeout(function(){
            location.reload(); 
       },1000); 

});

// Get the Single review post

jQuery('.comm_pop_review_reply').click(function(e){
    e.preventDefault();

    
    $this = jQuery(this);
    var comm_review_post_id = $this.closest('ul').find('.comm_single_review_id').val();

    jQuery.ajax({
            type : "post",
            dataType : "json",
            url : myAjax.ajaxurl,
            data : {
                action: "comm_review_post_id_action",
                'comm_review_post_id':comm_review_post_id,
             },
             beforeSend: function(){
                $(".comm_like_dislikeloder").show();
               },
             success: function(response){
                var data = $(".show_single_post").html(response.data);
             },
             complete:function(data){
                $(".comm_like_dislikeloder").hide();
               },
             error: function (response) {
                alert(response); 
            }
        });
        
  

});

// Get the Single Travel review post



jQuery('.travel_pop_review_reply').click(function(e){
    e.preventDefault();

    
    $this = jQuery(this);
    var travel_review_post_id = $this.closest('ul').find('.travel_single_review_id').val();

    jQuery.ajax({
            type : "post",
            dataType : "json",
            url : myAjax.ajaxurl,
            data : {
                action: "travel_review_post_id_action",
                'travel_review_post_id':travel_review_post_id,
             },
             beforeSend: function(){
                $(".comm_like_dislikeloder").show();
               },
             success: function(response){
                var data = $(".show_single_post").html(response.data);
             },
             complete:function(data){
                $(".comm_like_dislikeloder").hide();
               },
             error: function (response) {
                console.log(response); 
            }
        });
        
  

});


// End Get the Single Travel review post

 });

//  travel review like and dislike 


function travel_showpop_thumbicn(){
    $this = jQuery(this);
    var like_currentpid = $this.closest('ul').find('.trald_like_postval').val();
    var like_currentuserid = $this.closest('ul').find('.trald_like_cuser').val();
    jQuery.ajax({
            type : "post",
            dataType : "json",
            url : myAjax.ajaxurl,
            data : {
                action: "trald_likepost_action",
                'send_the_post_id':like_currentpid,
                'send_the_current_uid':like_currentuserid
             },
             beforeSend: function(){
                $(".comm_like_dislikeloder").show();
               },
             success: function(response){
             },
             complete:function(data){
                $(".comm_like_dislikeloder").hide();
               }
        });
        setTimeout(function(){
            location.reload(); 
       },1000);
   

}










 function showpop_shareIcon(){
      $('.commreview_smedia').toggleClass("show_comm_reviewsmedia"); 
}
function showpop_thumbicn(){

   
        // $this = jQuery(this);
        var like_currentpid = $('.comm_like_postval').val();
        var like_currentuserid =$('.comm_like_currentuser').val();
        jQuery.ajax({
                type : "post",
                dataType : "json",
                url : myAjax.ajaxurl,
                data : {
                    action: "comm_likepost_action",
                    'send_the_post_id':like_currentpid,
                    'send_the_current_uid':like_currentuserid
                 },
                 beforeSend: function(){
                    $(".comm_like_dislikeloder").show();
                   },
                 success: function(response){
                     console.log(response);
                 },
                 complete:function(data){
                    $(".comm_like_dislikeloder").hide();
                   }
            });
            setTimeout(function(){
                location.reload(); 
            },1000);
       
    
}

// ==============
// community post Following

// ============

$(document).ready(function ($) {

    $('.user_comm_main_flow').on('click',function(e){
        e.preventDefault();
        // var post_author_uid = $('.post_author_uid').val();
        var post_author_uid = $(this).closest('.al_revicnlils').find('.post_author_uid').val();
        var curent_login_uid = $(this).closest('.al_revicnlils').find('.curent_login_uid').val();
        jQuery.ajax({
            type : "post",
            dataType : "json",
            url : myAjax.ajaxurl,
            data : {
                action: "comm_user_following",
                'post_author_uid':post_author_uid,
                'curent_login_uid':curent_login_uid
             },
             beforeSend: function(){
                $(".comm_like_dislikeloder").show();
               },
             success: function(response){
                 console.log(response);
             },
             complete:function(data){
                $(".comm_like_dislikeloder").hide();
               }
        });
        setTimeout(function(){
            location.reload(); 
        },1000);

    });
});





// ==============
// Delete the user own post  community and travel post
// ============


$(document).ready(function ($) {
    $('.user_comm_delpost').on('click',function(e){
        e.preventDefault(); 
        var comm_delete_post_id = $(this).closest('.al_revicnlils').find('.comm_delete_postid').val();
        var check_del =confirm("You Realy Want To Delete This Post ?");
         if(check_del == true){

            jQuery.ajax({
                type : "post",
                dataType : "json",
                url : myAjax.ajaxurl,
                data : {
                    action: "comm_user_delete_post",
                    'comm_delete_post_id':comm_delete_post_id,
                 },
                 beforeSend: function(){
                    $(".comm_like_dislikeloder").show();
                   },
                 success: function(response){
                     console.log(response);
                 },
                 complete:function(data){
                    $(".comm_like_dislikeloder").hide();
                   }
            });
            setTimeout(function(){
                location.reload(); 
            },1000); 
         }
    });
});



 $(document).ready(function ($) {

    $('.user_trald_main_flow').on('click',function(e){
        e.preventDefault();

        // var post_author_uid = $('.post_author_uid').val();
        var post_author_uid = $(this).closest('.al_revicnlils').find('.post_author_uid').val();
        var curent_login_uid = $(this).closest('.al_revicnlils').find('.curent_login_uid').val();
        jQuery.ajax({
            type : "post",
            dataType : "json",
            url : myAjax.ajaxurl,
            data : {
                action: "travel_user_following",
                'post_author_uid':post_author_uid,
                'curent_login_uid':curent_login_uid
             },
             beforeSend: function(){
                $(".comm_like_dislikeloder").show();
               },
             success: function(response){
                 console.log(response);
             },
             complete:function(data){
                $(".comm_like_dislikeloder").hide();
               }
        });
        setTimeout(function(){
            location.reload(); 
        },1000); 
    });
});













  // var find_tag =  $(get_val).find('span');
   // var remove = $(find_tag).remove();
   // var get_val = $('span.badge').html();
   // console.log(find_tag);
   
   
   
// $(document).ready(function ($) {
//   $( "#click_forcity" ).on( "click",function() {
// //    $('#get_my_city').text('');
//     getLocation();
//   });

//   var x=document.getElementById("get_my_city");
//     function getLocation(){
//         if (navigator.geolocation){
//             navigator.geolocation.getCurrentPosition(showPosition,showError);
//         }
//         else{
//             x.innerHTML="Geolocation is not supported by this browser.";
//         }
//     }

// function showPosition(position){
//     lat=position.coords.latitude;
//     lon=position.coords.longitude;
//     displayLocation(lat,lon);
// }

// function showError(error){
//     switch(error.code){
//         case error.PERMISSION_DENIED:
//             x.innerHTML="User denied the request for Geolocation."
//         break;
//         case error.POSITION_UNAVAILABLE:
//             x.innerHTML="Location information is unavailable."
//         break;
//         case error.TIMEOUT:
//             x.innerHTML="The request to get user location timed out."
//         break;
//         case error.UNKNOWN_ERROR:
//             x.innerHTML="An unknown error occurred."
//         break;
//     }
// }

// function displayLocation(latitude,longitude){
//     var geocoder;
//     geocoder = new google.maps.Geocoder();
//     var latlng = new google.maps.LatLng(latitude, longitude);

//     geocoder.geocode(
//         {'latLng': latlng}, 
//         function(results, status) {
//             console.log(status);
//             if (status == google.maps.GeocoderStatus.OK) {
//                 if (results[0]) {
//                     var add= results[0].formatted_address ;
//                     var  value=add.split(",");

//                     count=value.length;
//                     country=value[count-1];
//                     state=value[count-2];
//                     city=value[count-3];
//                     x.innerHTML =  city +','+country;
//                 }
//                 else  {
//                     x.innerHTML = "address not found";
//                 }
//             }
//             else {
//                 x.innerHTML = "Geocoder failed due to: " + status;
//             }
//         }
//     );
// }


// });



// Image review on user peofile file 

jQuery(document).ready( function($) {
  $("#userimglode").change(function() {
        readURL(this);
      });
      function readURL(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function(e) {
            $('.img_preview').attr('src', e.target.result);
          }
          reader.readAsDataURL(input.files[0]); 
        }
      }
    
});


// Show the Followers on user profile


jQuery(document).ready( function($) {

    $('.user_followers').on('click',function(e){
        e.preventDefault();
        var current_user_id = $(this).closest('.user_menu_item').find('.user_follower_value').val();

        jQuery.ajax({
            type : "post",
            dataType : "json",
            url : myAjax.ajaxurl,
            data : {
                action: "get_user_follower_action",
                'current_user_id':current_user_id,
             },
             beforeSend: function(){
                $(".comm_like_dislikeloder").show();
               },
             success: function(response){
                var data = $(".show_followers_wrap").html(response.data);
             },
             complete:function(data){
                $(".comm_like_dislikeloder").hide();
               }
        });
       
    })

});



// Followers The user On Profile

jQuery(document).ready( function($) {

    $('.user_prfile_Follow').on('click',function(e){
        e.preventDefault();
        var userprofile_id = $('.user_profileid').val();
        jQuery.ajax({
            type : "post",
            dataType : "json",
            url : myAjax.ajaxurl,
            data : {
                action: "profile_followers_action",
                'userprofile_id':userprofile_id,
             }, 
             beforeSend: function(){
                $(".comm_like_dislikeloder").show();
               },
             success: function(reponse){
                console.log(reponse); 
             },
             complete:function(reponse){
                $(".comm_like_dislikeloder").hide();
               },
             error: function (reponse) {
                console.log(reponse); 
            }
        });
        setTimeout(function(){
            location.reload(); 
        },1000);
    });
})


// Remove user followers 


function remove_followers(elem){

    let   remove_user_id = $(elem).attr("id");

    var check_flower  =confirm("You Realy Want To Remove Follower?");

    if(check_flower == true){

        jQuery.ajax({
            type : "post",
            dataType : "json",
            url : myAjax.ajaxurl,
            data : {
                action: "remove_user_followers_action",
                'remove_user_id':remove_user_id,
             }, 
             success: function(reponse){
                console.log(reponse); 
             },
             error: function (reponse) {
                console.log(reponse); 
            }
        });
        setTimeout(function(){
            location.reload(); 
        },1000);
    }

}





// Show the Following on user profile


jQuery(document).ready( function($) {

    $('.user_following').on('click',function(e){
        e.preventDefault();
        var current_user_id = $(this).closest('.user_menu_item').find('.user_following_value').val();

        jQuery.ajax({
            type : "post",
            dataType : "json",
            url : myAjax.ajaxurl,
            data : {
                action: "get_user_following_action",
                'current_user_id':current_user_id,
             },
             beforeSend: function(){
                $(".comm_like_dislikeloder").show();
               },
             success: function(response){
                var data = $(".show_following_wrap").html(response.data);
             },
             complete:function(data){
                $(".comm_like_dislikeloder").hide();
               },
            error: function (reponse) {
                console.log(reponse); 
            }
        });
       
    })

});



// User Unfollow


function user_Unfollow(elem){

    let   unfollow_user_id = $(elem).attr("id");

    var check_unfollow  =confirm("You Realy Want To Unfollow..?");

    if(check_unfollow == true){

        jQuery.ajax({
            type : "post",
            dataType : "json",
            url : myAjax.ajaxurl,
            data : {
                action: "unfollow_wp_user_action",
                'unfollow_user_id':unfollow_user_id,
             }, 
             success: function(reponse){
                console.log(reponse); 
             },
             error: function (reponse) {
                console.log(reponse); 
            }
        });
        setTimeout(function(){
            location.reload(); 
        },1000);
    }

}



// Send the Email for verify

jQuery(document).ready( function($) {
    $('.Verify_btn').on('click', function(){
       var verify_email = $('.verify_email_val').val();
       var get_the_ramnum = $('.get_the_ramnum').val(); 
        jQuery.ajax({
            type : "post",
            dataType : "json",
            url : myAjax.ajaxurl,
            data : {
                action: "send_verify_email_action",
                "verify_email":verify_email,
                "get_the_ramnum":get_the_ramnum
            },
            success: function(response){
                console.log(response); 
            },
            error: function (response) {
                console.log(response); 
            }
        });
   
    });

    $('.check_the_email_code').on('click',function(){
        var chk_pass_value= $(".check_verify_emial").val();

        jQuery.ajax({
            type : "post",
            dataType : "json",
            url : myAjax.ajaxurl,
            data : {
                action: "verify_email_code_action",
                "chk_pass_value":chk_pass_value
             },
             success: function(response){
                 if(response === "Not Match"){
                     alert('Please Try With Right Code!');
                 }else{
                    // $('#gotonextp5').click(function() {
                        $('#gotohidep5').css('display','none');
                        $('#cf_maincounthide').css('display','none');    // 
                        $('#gotohidep6').css('display','block');
                        $('.main_addclass').addClass('offset-lg-2');
                    //   });
                 }
             },
            error: function (response) {
                // console.log(response); 
            }
        });



        
    });
});


// Add Business  custom post type


jQuery(document).ready( function($) {

    $('.wp_submit_bus_cpt').on('click', function(){

        var business_cat_name  = $("input[name='business_cat']").val();
        var business_phn_number  = $("input[name='business_phn_number']").val();
        var business_website  = $("input[name='business_website']").val();
        var business_adress  = $("input[name='business_adress']").val();

        if(business_cat_name , business_phn_number ,business_website , business_adress == '' ){
            alert('please fill all fields');
        }else{
            jQuery.ajax({
                type : "post",
                dataType : "json",
                url : myAjax.ajaxurl,
                data : {
                    action: "add_business_cpt_meta",
                    "business_cat_name":business_cat_name,
                    "business_phn_number":business_phn_number,
                    "business_website":business_website,
                    "business_adress":business_adress,
                 },
                 success: function(response){
                     console.log();
                     if(response.messages == "success"){
                        setTimeout(function() { 
                            $('#cf_gotohidep3').css('display','none');
                            $('#cf_maincounthide').css('display','none');    // 
                            $('#gotohidep4').css('display','block');
                            $('.main_addclass').addClass('offset-lg-1');
                            $('.main_addclass').removeClass('offset-lg-2');
                        },1000);
                     }
                 },
                error: function (response) {
                }
            });
            
        }


    });
});



// Lode More Post

jQuery(document).ready( function($) { 
var ppp = 3; 
var pageNumber = 1;


function load_posts(){
    pageNumber++;
    var str = '&pageNumber=' + pageNumber + '&ppp=' + ppp + '&action=more_post_ajax';
    $.ajax({
        type: "POST",
        dataType: "json",
        url: myAjax.ajaxurl,
        data: str,
        beforeSend: function(){
            $(".comm_like_dislikeloder").show();
           },
        success: function(data){
            if(data){
                $("#ajax-posts").append(data.responseData);
            }
            if(data.islast === true){
                $(".comm_readmore a img").css('display','none');  
            }
        },
        complete:function(data){
            $(".comm_like_dislikeloder").hide();
           },
        error : function(jqXHR, textStatus, errorThrown) {
            $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
        }
    });
    return false;
}

$(".comm_readmore a img").on("click",function(e){
    e.preventDefault();
    load_posts();
});
});


// Travel read more Post 


jQuery(document).ready( function($) { 
    var ppp = 3; 
    var pageNumber = 1;

    function travel_load_posts(){
        pageNumber++;
        var str = '&pageNumber=' + pageNumber + '&ppp=' + ppp + '&action=travel_more_post_ajax';
        $.ajax({
            type: "POST",
            dataType: "json",
            url: myAjax.ajaxurl,
            data: str,
            beforeSend: function(){
                $(".comm_like_dislikeloder").show();
               },
            success: function(data){
                if(data){
                    $("#ajax-posts").append(data.responseData);
                }
                if(data.islast === true){
                    $(".travelread_more a img").css('display','none');  
                }
            },
            complete:function(data){
                $(".comm_like_dislikeloder").hide();
               },
            error : function(jqXHR, textStatus, errorThrown) {
                $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
            }
        });
        return false;
    }
    
    $(".travelread_more a img").on("click",function(e){
        e.preventDefault();
        travel_load_posts();
    });
    });

