jQuery(document).ready(function($) {


    $(document).on('click','.import-json',function(){

        $.ajax({
                type: 'POST',
                context: this,
                url:accordions_ajax.accordions_ajaxurl,
                data: {
                    "action" 	: "_ajax_track_header",
                    "header_id" : header_id,
                    "post_id" : post_id,

                },
                success: function( data ) {


                    console.log(data);


                }
        });

    })











});	




