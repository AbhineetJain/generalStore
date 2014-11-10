function hide_divs(flag) {
	$('.hide-and-show').hide();
	if(flag == 1) {
		document.getElementById('edu_qual').required = false;
		document.getElementById('user_id').required = false;
		document.getElementById('passwd').required = false;
	}
	if(flag == 0) {
		document.getElementById('batch_no').required = false;
		document.getElementById('date_of_expiry').required = false;
	}
}

function show_divs(flag) {
	$('.hide-and-show').show();
	if(flag == 1) {
		document.getElementById('edu_qual').required = true;
		document.getElementById('user_id').required = true;
		document.getElementById('passwd').required = true;
	}
	if(flag == 0) {
		document.getElementById('batch_no').required = true;
		document.getElementById('date_of_expiry').required = true;
	}
}

$(document).ready(
	function() {
		hide_divs(0);
		$('#post').change(
			function() {
				if($('#post option:selected').val() == 'manager' || $('#post option:selected').val() == 'salesperson')
					show_divs(1);
				else
					hide_divs(1);
			}
		);
		$('#commodity_type').change(
			function() {
				if($('#commodity_type option:selected').val() == 'Confectionery' || $('#commodity_type option:selected').val() == 'Toiletries')
					show_divs(0);
				else
					hide_divs(0);
			}
		);
});
