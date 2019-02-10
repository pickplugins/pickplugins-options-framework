jQuery(document).ready(function($) {
    $(document).on('click','.ppof-settings .nav-items .nav-item',function(event){
        event.preventDefault()
        dataid = $(this).attr('dataid');

        $('.nav-items .nav-item').removeClass('active');
        $(this).addClass('active');
        $('.tab-content').removeClass('active');
        $('.tab-content-'+dataid).addClass('active');
    })
});	




