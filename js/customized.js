var item_no = 0;

function main() {
	$('#add_item').click(
		function(e) {
			add_item_description(e);
	});
	add_event();
}

function add_event() {
	$('.closebutton').click(
		function(e) {
			remove_item_description(e);
	});
}

function add_item_description(e) {
	e.preventDefault();
	item_no += 1;
	var html_content = $('.itemDesc').html();
	html_content += "<div id=\"item"+item_no+"\"><button id=\"close"+item_no+"\" class=\"btn closebutton btn-danger\"><i class=\"fa fa-times\"></i></button><div class=\"form-group\"><label for=\"item\">Item Name</label><select id=\"item\" name=\"item\" class=\"item form-control parsley-validated\" data-required=\"true\"><option value=\"\">Please Select</option></select></div> <!-- /.form-group --><div class=\"form-group\"><label for=\"qty\">Quantity</label><input type=\"number\" id=\"qty\" name=\"qty\" class=\"form-control half-width parsley-validated\" data-required=\"true\"></div> <!-- /.form-group --><div class=\"form-group\"><label for=\"total_price\">Price</label><input type=\"number\" id=\"price\" name=\"total_price\" step=\"0.01\" class=\"form-control half-width parsley-validated\" data-required=\"true\"></div> <!-- /.form-group --><hr>";
    $('.itemDesc').html(html_content);
    add_event();
}

function remove_item_description(e) {
	e.preventDefault();
	parent = document.getElementsByClassName('itemDesc')[0];
	child = document.getElementById('item'+e.target.id.split('close')[1]);
	console.log(parent, child);
	parent.removeChild(child);
}

window.addEventListener("load", main);