/**
 * @package 	WordPress
 * @subpackage 	Children Charity
 * @version 	1.0.4
 * 
 * CMSMasters Donations Settings Scripts
 * Created by CMSMasters
 * 
 */


(function ($) { 
	if ($('input[name*="' + cmsmasters_donations_settings.shortname + '_header_styles"]:checked').val() === 'default') {
		$('#' + cmsmasters_donations_settings.shortname + '_header_donations_but').parents('tr').show();
		
		if ($('#' + cmsmasters_donations_settings.shortname + '_header_donations_but').is(':checked')) {
			$('#' + cmsmasters_donations_settings.shortname + '_header_donations_but_text').parents('tr').show();
			$('#' + cmsmasters_donations_settings.shortname + '_header_donations_but_link').parents('tr').show();
		} else {
			$('#' + cmsmasters_donations_settings.shortname + '_header_donations_but_text').parents('tr').hide();
			$('#' + cmsmasters_donations_settings.shortname + '_header_donations_but_link').parents('tr').hide();
		}
	}
	
	
	$('input[name*="' + cmsmasters_donations_settings.shortname + '_header_styles"]').on('change', function () { 
		if ($('input[name*="' + cmsmasters_donations_settings.shortname + '_header_styles"]:checked').val() === 'c_nav') {
			$('#' + cmsmasters_donations_settings.shortname + '_header_donations_but').parents('tr').hide();
			$('#' + cmsmasters_donations_settings.shortname + '_header_donations_but_text').parents('tr').hide();
			$('#' + cmsmasters_donations_settings.shortname + '_header_donations_but_link').parents('tr').hide();
		} else {
			$('#' + cmsmasters_donations_settings.shortname + '_header_donations_but').parents('tr').show();
			
			if ($('#' + cmsmasters_donations_settings.shortname + '_header_donations_but').is(':checked')) {
				$('#' + cmsmasters_donations_settings.shortname + '_header_donations_but_text').parents('tr').show();
				$('#' + cmsmasters_donations_settings.shortname + '_header_donations_but_link').parents('tr').show();
			} else {
				$('#' + cmsmasters_donations_settings.shortname + '_header_donations_but_text').parents('tr').hide();
				$('#' + cmsmasters_donations_settings.shortname + '_header_donations_but_link').parents('tr').hide();
			}
		}
	} );
} )(jQuery);

