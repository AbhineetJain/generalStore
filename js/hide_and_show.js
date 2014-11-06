function hide_divs() {
	$('.hide-and-show').hide();
	document.getElementById('edu_qual').required = false;
	document.getElementById('user_id').required = false;
	document.getElementById('passwd').required = false;
}

function show_divs() {
	$('.hide-and-show').show();
	document.getElementById('edu_qual').required = true;
	document.getElementById('user_id').required = true;
	document.getElementById('passwd').required = true;
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