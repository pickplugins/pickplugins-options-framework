jQuery(document).ready(function($) {


    $(document).on('click','.wpadminsettings .nav-items .nav-item',function(event){

        event.preventDefault()
        dataid = $(this).attr('dataid');

        //alert('Hello');

        $('.nav-items .nav-item').removeClass('active');
        $(this).addClass('active');

        $('.tab-content').removeClass('active');

        $('.tab-content-'+dataid).addClass('active');
    })











});	




