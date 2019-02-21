<script>
$(document).ready(function(){
	$('body').on('paste', '[contenteditable]', function(e) {
	    e.preventDefault();
	    var text = '';
	    if (e.clipboardData || e.originalEvent.clipboardData) {
	      text = (e.originalEvent || e).clipboardData.getData('text/plain');
	    } else if (window.clipboardData) {
	      text = window.clipboardData.getData('Text');
	    }
	    if (document.queryCommandSupported('insertText')) {
	      document.execCommand('insertText', false, text);
	    } else {
	      document.execCommand('paste', false, text);
	    }
	});
});


</script>