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
			}
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

const BookZoomIn = ()=>{
	const b_selector = document.querySelector('.df-ui-zoomin');
	if(b_selector){
		b_selector.addEventListener('click', (evt)=>{
			console.log(evt);
		});
	}	
}
BookZoomIn();

const DownloadFileLocal = ()=>{
	const d_selector = document.getElementById('save_off_line');	
	const d_url = document.getElementById('read_book_story').getAttribute('data-url');
	d_selector.addEventListener('click', (evt)=>{
		const d_target = document.getElementById('vt_download_ebook');
		d_target.href=d_url;
		d_target.click();
	});
	
	const d_related_selector = document.getElementById('related_save_off_line');
	const d_related_url = document.getElementById('related_read_book_story').getAttribute('data-url');
	d_related_selector.addEventListener('click', (evt)=>{
		const d_target = document.getElementById('vt_download_ebook');
		d_target.href=d_related_url;
		d_target.click();
	});
}
DownloadFileLocal();