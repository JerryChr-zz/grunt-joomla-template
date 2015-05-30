jQuery(document).ready(function($){

    /* Top Cart - Toggle */
    if (jQuery(".mod_cart_main .mod_cart_content").width() > 170)
    {
        jQuery(".mod_cart_main").css('width', '270px');
    }

    jQuery(".mod_cart_title a.mod_cart_title_link").click(function(){
        jQuery(".mod_cart_main .mod_cart_content").slideToggle('250');
    });


    var elementPosition = jQuery('.mod_toggle').offset();
    if(jQuery('.mod_cart_main').find('.empty_cart_txt').length > 0)
    {
        jQuery('.mod_cart_main').css('max-width', '180px');
    }

    jQuery("#btncarttitlelink").click();


    jQuery("#country_code").val($("#country_code option:first").val());

    $("a[id*=a_choose_attribute_]").colorbox({inline:true, width:"80%", maxWidth: "850px"});

    $('.cart_product_name').each(function() {
        if (!$(this).find('.cartattribut').is(':empty'))
        {
            $(this).find('.cartproducttitle').hide();
        }
    });

    jQuery('.choose_attribute').footable();
});

jQuery(document).bind('cbox_complete', function(){
    jQuery('.choose_attribute').footable();
});