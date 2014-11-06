function hide_divs() {
	$('.hide-and-show').hide();
}

function show_divs() {
	$('.hide-and-show').show();
}

$(document).ready(
	function() {
		hide_divs();
		$('#post').change(
			function() {
				if($('#post option:selected').val() == 'manager' || $('#post option:selected').val() == 'salesperson')
					show_divs();
				else
					hide_divs();
			}
		);
		$('#commodity_type').change(
			function() {
				if($('#commodity_type option:selected').val() == 'Confectionery' || $('#commodity_type option:selected').val() == 'Toiletries')
					show_divs();
				else
					hide_divs();
			}
		);
});