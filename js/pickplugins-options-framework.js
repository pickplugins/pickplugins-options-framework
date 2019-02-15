jQuery(document).ready(function($) {

    jQuery(document).on('keyup', 'input.search-options', function(){
        keyword = jQuery(this).val();

        if(keyword != '' ){
            $('.form-table tr th').each(function( index ) {
                title = $( this ).text();
                // console.log( index + ": " + title );

                title = title.toLowerCase();

                n = title.indexOf(keyword);
                if(n<0){
                    $( this ).parent().hide();
                }else{
                    $( this ).parent().show();
                }
            });


            $('.form-section .tab-content').each(function( index ) {

                $( this ).show();

            });


            $('.form-section .tab-content h2').each(function( index ) {

                $( this ).hide();

            });

        }else{

            $('.form-table tr th').each(function( index ) {
                $( this ).parent().show();
            });


            $('.form-section .tab-content').each(function( index ) {

                if(index == 0){
                    $( this ).addClass('active');
                    $( this ).show();
                }else{
                    $( this ).removeClass('active');
                    $( this ).removeAttr('style');
                }


            });

            $('.form-section .tab-content h2').each(function( index ) {

                $( this ).show();

            });
        }





    })



    // $(document).on('click','.ppof-settings .nav-items .child-nav-icon',function(event){
    //     event.preventDefault()
    //     //dataid = $(this).attr('dataid');
    //
    //     if($(this).parent().parent().hasClass('active')){
    //         $( this ).parent().parent().removeClass('active');
    //
    //     }else{
    //         $( this ).parent().parent().addClass('active');
    //     }
    //
    //     //$('.nav-items .nav-item').removeClass('active');
    //    // $(this).addClass('active');
    //     //$('.tab-content').removeClass('active');
    //     //$('.tab-content-'+dataid).addClass('active');
    // })









    $(document).on('click','.ppof-settings .nav-items .nav-item',function(event){
        event.preventDefault()
        dataid = $(this).attr('dataid');
        sectionId = $(this).attr('sectionId');
        //$('.nav-item-wrap').removeClass('active');

            if($(this).parent().hasClass('active')){
                $( this ).parent().removeClass('active');

            }else{
                $( this ).parent().addClass('active');
            }


        $('.nav-items .nav-item').removeClass('active');
        $(this).addClass('active');
        $('.tab-content').removeClass('active');
        $('.tab-content-'+dataid).addClass('active');

        if(sectionId != null){
            $('html, body, .edit-post-layout__content').animate({
                scrollTop: ($("#"+sectionId).offset().top - 80)
            }, 500);
        }



    })
});	




