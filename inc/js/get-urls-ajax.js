jQuery(document).ready(function($) {
	$('#get-urls-form').submit(function() {
		$('#get_urls_loading').show();
		$('#get_urls_submit').attr('disabled', true);
		
      data = {
      	action: 'get_urls_get_results',
      	get_urls_nonce: get_urls_vars.get_urls_nonce
      };

     	$.post(ajaxurl, data, function (response) {
			$('#get_urls_results').html(response);
			$('#get_urls_loading').hide();
			$('#get_urls_submit').attr('disabled', false);
		});	
		
		return false;
	});
});