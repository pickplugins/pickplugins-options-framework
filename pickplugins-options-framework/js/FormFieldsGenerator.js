jQuery(document).ready(function($) {


    $(document).on('click','.accordions-import-json',function(){

        $.ajax({
                type: 'POST',
                context: this,
                url:accordions_ajax.accordions_ajaxurl,
                data: {
                    "action" 	: "accordions_ajax_track_header",
                    "header_id" : header_id,
                    "post_id" : post_id,

                },
                success: function( data ) {


                    console.log(data);


                }
        });

    })











});	




