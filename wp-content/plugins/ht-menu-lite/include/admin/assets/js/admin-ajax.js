jQuery(document).ready(function($) {

    // PopUp button
    jQuery('body').on('click', 'a.wltemplateimp', function(e) {
        e.preventDefault();

        var $this = $(this),
            template_opt = $this.data('templpateopt');

        $('.httemplate-edit').html('');
        $('#htpagetitle').val('');
        $(".htpopupcontent").show();
        $(".htmessage").hide();
        $(".htmessage p").html( template_opt.message );

        // dialog header
        $("#httemplate-popup-area").attr( "title", template_opt.templpattitle );

        var htbtnMarkuplibrary = `<a href="#" class="wlimpbtn" data-templateid="${template_opt.templpateid}">${template_opt.htbtnlibrary}</a>`;
        var htbtnMarkuppage = `<a href="#" class="wlimpbtn htdisabled" data-templateid="${template_opt.templpateid}">${template_opt.htbtnpage}</a>`;

        // Enter page title then enable button
        $('#htpagetitle').on('input', function () {
            if( !$('#htpagetitle').val() == '' ){
                $(".htimport-button-dynamic-page .wlimpbtn").removeClass('htdisabled');
            } else {
                $(".htimport-button-dynamic-page .wlimpbtn").addClass('htdisabled');
            }
        });
        
        // button Dynamic content
        $( ".htimport-button-dynamic" ).html( htbtnMarkuplibrary );
        $( ".htimport-button-dynamic-page" ).html( htbtnMarkuppage );
        $( ".ui-dialog-title" ).html( template_opt.templpattitle );

        // call dialog
        $( "#httemplate-popup-area" ).dialog({
            modal: true,
            minWidth: 500,
            minHeight:300,
            buttons: {
                Close: function() {
                  $( this ).dialog( "close" );
                }
            }
        });


    });

    // Preview PopUp
    jQuery('body').on('click', 'a.wlpreview', function(e) {
        e.preventDefault();

        var $this = $(this),
            preview_opt = $this.data('preview');

         // dialog header
        var previimage = `<img src="${preview_opt}" alt="" style="width:100%;"/>`;
        $( "#httemplate-popup-prev" ).html( previimage );

        $( "#httemplate-popup-prev" ).dialog({
            modal: true,
            width: 'auto',
            minHeight:300,
            buttons: {
                Close: function() {
                  $( this ).dialog( "close" );
                }
            }
        });


    });

    // Import data request
    jQuery('body').on('click', 'a.wlimpbtn', function(e) {
        e.preventDefault();

        var $this = $(this),
            pagetitle = ( $('#htpagetitle').val() ) ? ( $('#htpagetitle').val() ) : '',
            templpateid = $this.data('templateid');
        $.ajax({
            url: ajaxurl,
            data: {
                'action': 'htmegamenu_ajax_request',
                'httemplateid' : templpateid,
                'pagetitle' : pagetitle,
                'nonce' : HTMENUTM.nonce,
            },
            dataType: 'JSON',
            beforeSend: function(){
                $(".htspinner").addClass('loading');
                $(".htpopupcontent").hide();
            },
            success:function(data) {
                console.log( templpateid );
                $(".htmessage").show();
                var tmediturl = HTMENUTM.adminURL+"/post.php?post="+ data.id +"&action=elementor";
                $('.httemplate-edit').html('<a href="'+ tmediturl +'" target="_blank">'+ data.edittxt +'</a>');
            },
            complete:function(data){
                $(".htspinner").removeClass('loading');
                $(".htmessage").css( "display","block" );
            },
            error: function(errorThrown){
                console.log(errorThrown);
            }
        });

    });
    
});