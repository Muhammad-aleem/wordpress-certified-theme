jQuery(function($){
    $('body').on('click', '.aw_upload_image_button', function(e){
        e.preventDefault();
  
        var button = $(this),
        aw_uploader = wp.media({
            title: 'Custom image',
            library : {
                type : 'image'
            },
            button: {
                text: 'Use this image'
            },
            multiple: false
        }).on('select', function() {
            var attachment = aw_uploader.state().get('selection').first().toJSON();
            $('.aw_custom_image').val(attachment.url);
        })
        .open();
    });
  });

  jQuery(function($){
    $('body').on('click', '.uplode_image_4', function(e){
        e.preventDefault();
  
        var button = $(this),
        uploader = wp.media.frames.items = wp.media({
            title: 'Custom image',
            library : {
                type : 'image'
            },
            button: {
                text: 'Select'
            },
            multiple: false
        }).on('select', function() {
            var getimg = uploader.state().get('selection').first().toJSON();
            $('.product_image_four').val(getimg.url);
        })
        .open();
    });
  });


