'use strict';
window.$ = window.jQuery = require('jquery');
import 'popper.js';
import 'bootstrap';
import lightbox from 'lightbox2';

// core version + navigation, pagination modules:
import Swiper from 'swiper/bundle';

import '../scss/style.scss';


jQuery(function($){ // use jQuery code inside this to avoid "$ is not defined" error
	$('.misha_loadmore').click(function(){
 
		var button = $(this),
		    data = {
			'action': 'loadmore',
			'query': misha_loadmore_params.posts, // that's how we get params from wp_localize_script() function
			'page' : misha_loadmore_params.current_page
		};

		
 
		$.ajax({ // you can also use $.post here
			url : misha_loadmore_params.ajaxurl, // AJAX handler
			data : data,
			type : 'POST',
			beforeSend : function ( xhr ) {
				button.text('Загружаем...'); // change the button text, you can also add a preloader image
			},
			success : function( data ){
				console.log(data); 
				if( data ) { 
					button.text( 'Показать больше новостей' ); // insert new posts
					$('.blog-list').append(data);
					misha_loadmore_params.current_page++;
 
					if ( misha_loadmore_params.current_page == misha_loadmore_params.max_page ) 
						button.remove(); // if last page, remove the button
 
					// you can also fire the "post-load" event here if you use a plugin that requires it
					// $( document.body ).trigger( 'post-load' );
				} else {
					button.remove(); // if no data, remove the button as well
				}
			}
		});
	});
});


window.addEventListener('DOMContentLoaded', ()=>{
	let panels3 = document.querySelectorAll('.panel-v3');
	panels3.forEach((panel)=> {
		panel.querySelector('.bottom').addEventListener('click', function(e){
			if(e.target.tagName == 'SPAN') {
				this.classList.add('open');  
				this.querySelector('span').classList.add('d-none');
			}
		})
	});
 
	let stages = document.querySelectorAll('.stages .stage-item');
	stages.forEach((stage)=> {
		stage.querySelector('.stage-text').addEventListener('click', function(e){
			if(e.target.tagName == 'SPAN') {
				this.classList.add('open');
				this.querySelector('span').classList.add('d-none');
			}
		})
	});
		

});
