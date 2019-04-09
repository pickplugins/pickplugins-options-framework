jQuery(document).ready(function($) {


    $(".dependency-field").formFieldDependency({});
    $(".sortable" ).sortable({ handle: ".sort" });
    $('.colorpicker').wpColorPicker();


    jQuery(document).on('click', '.field-switcher-wrapper .switcher .layer', function() {
        if(jQuery(this).parent().hasClass('checked')){
            jQuery(this).parent().removeClass('checked');
        }else{
            jQuery(this).parent().addClass('checked');
        }
    })

    jQuery(document).on('click', '.field-img-select-wrapper .sw-button img', function() {
        var dataId = jQuery(this).attr('data-id');
        var src = jQuery(this).attr('src');
        jQuery('.field-img-select-wrapper-'+dataId+' .img-val input').val(src);
        jQuery('.field-img-select-wrapper-'+dataId+' label').removeClass('checked');
        if(jQuery(this).parent().parent().hasClass('checked')){
            jQuery(this).parent().parent().removeClass('checked');
        }else{
            jQuery(this).parent().parent().addClass('checked');
        }
    })


    jQuery(document).on('change', '.field-range-input-wrapper .range-hndle', function() {
        val = $(this).val();
        $(this).parent().children('.range-val').val(val);
    })
    jQuery(document).on('keyup', '.field-range-input-wrapper .range-val', function() {
        val = $(this).val();
        $(this).parent().children('.range-hndle').val(val);
    })


    jQuery(document).on('click', '.field-switch-wrapper .sw-button', function() {

        jQuery(this).parent().parent().children('label').removeClass('checked');
        //jQuery('.field-switch-wrapper label').removeClass('checked');

        if(jQuery(this).parent().hasClass('checked')){
            jQuery(this).parent().removeClass('checked');
        }else{
            jQuery(this).parent().addClass('checked');
        }
    })


    jQuery(document).on('click', '.field-switch-multi-wrapper .sw-button', function() {
        if(jQuery(this).parent().hasClass('checked')){
            jQuery(this).parent().removeClass('checked');
        }else{
            jQuery(this).parent().addClass('checked');
        }
    })

    jQuery(document).on('click', '.field-switch-img-wrapper .sw-button img', function() {

        jQuery(this).parent().parent().children('label').removeClass('checked');
        //jQuery('.field-switch-img-wrapper label').removeClass('checked');


        if(jQuery(this).parent().parent().hasClass('checked')){
            jQuery(this).parent().parent().removeClass('checked');
        }else{
            jQuery(this).parent().parent().addClass('checked');
        }
    })



    jQuery(document).on('click', '.field-time-format-wrapper .format-list input[type="radio"]',function () {
            value = $(this).val();
            $(this).parent().parent().parent().children('.format-value').children('.format').children('input').val(value);
            //$(this).parent().parent().parent().children('.format-value').children('input').val(value);

        })


    jQuery(document).on('click', '.field-date-format-wrapper .format-list input[type="radio"]', function () {
        value = $(this).val();
        $(this).parent().parent().parent().children('.format-value').children('.format').children('input').val(value);
        //$('.field-date-format-wrapper .format-value input').val(value);
    })


    /*field-icon-wrapper*/

    jQuery(document).on('click', '.field-icon-wrapper .select-icon', function(){
        if(jQuery(this).parent().hasClass('active')){
            jQuery(this).parent().removeClass('active');
        }else{
            jQuery(this).parent().addClass('active');
        }
    })
    jQuery(document).on('keyup', '.field-icon-wrapper .search-icon input', function(){

        text = jQuery(this).val();

        $(this).parent().parent().children('ul').children('li').each(function( index ) {
            console.log( index + ": " + $( this ).attr('title') );
            title = $( this ).attr('title');
            n = title.indexOf(text);
            if(n<0){
                $( this ).hide();
            }else{
                $( this ).show();
            }
        });
    })
    jQuery(document).on('click', '.field-icon-wrapper .icon-list li', function(){
        iconData = jQuery(this).attr('iconData');
        html = '<i class="'+iconData+'"></i>';

        jQuery(this).parent().parent().parent().children('.icon-wrapper').children('span').html(html);
        jQuery(this).parent().parent().parent().children('.icon-wrapper').children('input').val(iconData);

        //jQuery('.field-icon-wrapper .icon-wrapper input').val(iconData);
    })


    $('.field-select2-wrapper select').select2({
        width: '320px',
        allowClear: true

    });



    jQuery(document).on('click', '.field-option-group-tabs-wrapper .tab-navs li', function() {

        index = $(this).attr('index');

        jQuery(".field-option-group-tabs-wrapper .tab-navs li").removeClass('active');
        jQuery(".field-option-group-tabs-wrapper .tab-content").removeClass('active');
        if(jQuery(this).hasClass('active')){

        }else{
            jQuery(this).addClass('active');
            jQuery(".field-option-group-tabs-wrapper .tab-content-"+index).addClass('active');
        }



    })



    jQuery(document).on('click', '.field-color-sets-wrapper .color-srick', function() {

        jQuery('.field-color-sets-wrapper label').removeClass('checked');
        if(jQuery(this).parent().hasClass('checked')){
            jQuery(this).parent().removeClass('checked');
        }else{
            jQuery(this).parent().addClass('checked');
        }


    })

    jQuery(document).on('click', '.field-color-palette-wrapper .sw-button', function() {
        jQuery('.field-color-palette-wrapper label').removeClass('checked');
        if(jQuery(this).parent().hasClass('checked')){
            jQuery(this).parent().removeClass('checked');
        }else{
            jQuery(this).parent().addClass('checked');
        }
    })



    jQuery(document).on('click', '.field-color-palette-multi-wrapper .sw-button',function() {
            if(jQuery(this).parent().hasClass('checked')){
                jQuery(this).parent().removeClass('checked');
            }else{
                jQuery(this).parent().addClass('checked');
            }
        })




    jQuery(document).on('keyup', '.field-password-wrapper input',function(){
        pass = $(this).val();
        var score = 0;
        if (!pass)
            return score;
        // award every unique letter until 5 repetitions
        var letters = new Object();
        for (var i=0; i<pass.length; i++) {
            letters[pass[i]] = (letters[pass[i]] || 0) + 1;
            score += 5.0 / letters[pass[i]];
        }
        // bonus points for mixing it up
        var variations = {
            digits: /\d/.test(pass),
            lower: /[a-z]/.test(pass),
            upper: /[A-Z]/.test(pass),
            nonWords: /\W/.test(pass),
        }
        variationCount = 0;
        for (var check in variations) {
            variationCount += (variations[check] == true) ? 1 : 0;
        }
        score += (variationCount - 1) * 10;
        if(score > 80){
            score_style = '#4CAF50;';
            score_text = 'Strong';
        }else if(score > 60){
            score_style = '#cddc39;';
            score_text = 'Good';
        }else if(score > 30){
            score_style = '#FF9800;';
            score_text = 'Normal';
        }else{
            score_style = '#F44336;';
            score_text = 'Week';
        }
        html = '<span style="width:'+parseInt(score)+'%;background-color: '+score_style+'"></span>';
        $(".field-password-wrapper-<?php echo $id; ?> .scorePassword").html(html)
        $(".field-password-wrapper-<?php echo $id; ?> .scoreText").html(score_text)
    })


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




