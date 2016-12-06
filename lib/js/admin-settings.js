jQuery(function( $ ){

	$('.fundo').wpColorPicker();

	$(document).ready(function(){

		$('.options-theme-content').find('.tab-content').hide();

		$('.options-theme-content').find('.tab-content:eq(0)').show();

		$('.nav-stacked li').click(function(event) {

			var indice = $(this).index();

			$('.options-theme-content').find('.tab-content').hide();

			$('.options-theme-content').find('.tab-content:eq('+indice+')').show();

			console.log( indice );
			
		});

	    $('.active-upload').click( open_media_window );

	    var button_image = $('.active-upload').html();
	    var button_remove = '<i class="fa fa-trash" aria-hidden="true"></i> Remover';

	    $('.url_img').each(function() {

	    	if ( $(this).val() != 0 ) {
	    		$(this).parent().find('.example-image').show();

	    		$(this).parent().find('.example-image').find('img').attr('src', $(this).val())

	    		$(this).parent().find('.active-upload').html('<i class="fa fa-trash" aria-hidden="true"></i> Remover').removeClass('active-upload').addClass('dell-image');
	    	};
	    });

	    $('button.dell-image').click(function() {

	    	$(this).parent().find('.url_img').val('');
	    	$(this).parent().find('.example-image').find('img').removeAttr('src').hide();
	    	$(this).removeClass('dell-image').addClass('active-upload');
	    	$(this).html(button_image);
	    	$(this).next().find('a').hide();

	    	return false;
	    });

	    $('a.dell-image').each(function() {

	    	if ( $(this).parent().parent().find('.example-image').find('img').attr('src') != 0 ) {
	    		
	    	}else{
	    		$(this).hide();
	    	};
	    });

	    $('a.dell-image').click(function() {

	    	$(this).parent().parent().find('.url_img').val('');
	    	$(this).parent().parent().find('.example-image').find('img').removeAttr('src').hide();
	    	$(this).parent().parent().find('button.dell-image').html(button_image);
	    	$(this).parent().parent().find('button.dell-image').removeClass('dell-image').addClass('active-upload');
	    	$(this).hide();

	    	return false;
	    });
	})

	function open_media_window() {

		var clicado = $(this),
		local = $(this).parent();



	    if (this.window === undefined) {
	        this.window = wp.media({
	                title: 'Selecionar Imagem',
	                library: {type: 'image'},
	                multiple: false,
	                button: {text: 'Selecionar'}
	            });

	        var self = this; // Needed to retrieve our variable in the anonymous function below

	        this.window.on('select', function() {
                var first = self.window.state().get('selection').first().toJSON();
                wp.media.editor.insert('[myshortcode id="' + first.id + '"]');

                var istoe = $(this);

                if ( first.height > 800 ) {

            		clicado.parent().find('.url_img').val( first.sizes.slide_size.url );

            		clicado.next().find('img').attr({src: first.sizes.medium.url, alt: first.alt }).show();

            	}else{

            		clicado.parent().find('.url_img').val( first.sizes.full.url );

            		clicado.next().find('img').attr({src: first.sizes.thumbnail.url, alt: first.alt }).show();
            	};
                

                clicado.next().show();

                clicado.next().find('a').show();

                clicado.html( '<i class="fa fa-trash" aria-hidden="true"></i> Remover' ).removeClass('active-upload').addClass('dell-image');
            });
	    }

	    

	    if( $(this).hasClass('active-upload') ){
			this.window.open();
			return false;
		}
	    
	}

	var animated = $('header.active').length;

	var visible = 0;

	$('.tab-pane section').hide();

	console.log(animated);

	$('.tab-pane header').click(function(event) {

		$(this).parent().find('section').slideToggle('fast', function(){

			if ( $(this).parent().find('section').attr('data-visible') == 0 ) {

				$(this).parent().find('section').show().attr('data-visible', 1); 

				$(this).parent().find('header').find('span').removeClass('fa-plus').addClass('fa-minus');
				
			}else{

				$(this).parent().find('section').hide().attr('data-visible', 0); 

				$(this).parent().find('header').find('span').removeClass('fa-minus').addClass('fa-plus');
				
			};
			
		});
		
	});
});