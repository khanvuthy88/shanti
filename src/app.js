// try {
//     window.$ = window.jQuery = require('jquery');
// } catch (e) {}

const ToggleMenu = ()=>{
	const toggle_icons = document.querySelector('#menu_toggle_id');
	const nav = document.querySelector('#mobile_sidenav');
	const close_nave = document.querySelector('.closebtn');
	toggle_icons.addEventListener('click',(evt)=>{
		nav.classList.toggle('display_toggle');
	});
	close_nave.addEventListener('click', (evt)=>{
		nav.classList.toggle('display_toggle');
	});
}
ToggleMenu();

const openPDF = ()=>{
	const buttonAction = document.querySelector('#read_book_story');	
	if(buttonAction){
		buttonAction.addEventListener('click', (evt)=>{
			if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
				const actionUrl = evt.target.dataset['url'];
				window.open(actionUrl);
			}else{
				document.body.id = 'view_book';
			}
			
			// document.getElementsByTagName('body').setAttribute('id','view_book');
			// const actionUrl = evt.target.dataset['url'];
			// window.open(actionUrl);

		});
	}
	
}
openPDF();

const setWindowHeight = ()=>{
	const selector = document.querySelector('#page_pdfview_id');
	if(selector){
		selector.style.height = window.screen.height;
	}
}
setWindowHeight();