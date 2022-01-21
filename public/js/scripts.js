function demo_init_editor(element){
	let ed = ace.edit(element);
	ed.setTheme('ace/theme/monokai');
	ed.session.setMode('ace/mode/vibrant_ink');
	ed.setOptions({
		wrap: true,
		showPrintMargin: false,
		fontSize: 16,
		useWorker: false,
		tabSize: 2,
		useSoftTabs: true,
		// enableBasicAutocompletion: false,
		// enableLiveAutocompletion: false,
		behavioursEnabled: false,
		highlightActiveLine: false,
	});
	return ed;
}

document.addEventListener('DOMContentLoaded', function(){
	ace.config.set('basePath', 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12');

	document.querySelectorAll('.demo').forEach(function(demo){
		let html = demo.querySelector('.html');
		if(html){
			html = demo_init_editor(html);
			html.session.setMode('ace/mode/html');
		}

		let css = demo.querySelector('.css');
		if(css){
			css = demo_init_editor(css);
			css.session.setMode('ace/mode/css');
		}

		function update_preview(){
			let src = '';
			src += '<!DOCTYPE html>';
			src += '<html>';
			src += '<head>';
			if(css) src += '<style>'+css.getValue()+'</style>';
			src += '</head>';
			src += '<body>';
			if(html) src += html.getValue();
			src += '</body>';
			src += '</html>';

			demo.querySelector('iframe').srcdoc = src;
		}

		update_preview();
		if(html) html.addEventListener('input', update_preview);
		if(css) css.addEventListener('input', update_preview);
	});
});