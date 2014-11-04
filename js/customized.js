var item_no = 0;
var form_data;	

function main() {
	$('#add_item').click(
		function(e) {
			add_item_description(e);
	});
	add_event();
	$('#sell-log-form').submit(
		function(e) {
			form_data = $(this).serializeArray();
			console.log(form_data);
			var json_string = form_data.toSource();
			console.log(json_string);
			e.preventDefault();
		}
	);
	$('#add_item').trigger('click');
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
	var main_item_div = document.getElementsByClassName('itemDesc')[0];
	new_item_div = document.createElement('div');
	new_item_div.id = "itemDiv" + item_no;
	new_item_div.className = "itemDivs";
	new_item_div.innerHTML = "<div class=\"form-group place-inline\"><label for=\"item"+item_no+"\">Item Name</label><select id=\"item"+item_no+"\" name=\"item"+item_no+"\" class=\"place-inline item form-control parsley-validated\" data-required=\"true\"><option value=\"Item no. 1\">Item no. 1</option></select></div> <!-- /.form-group --><div class=\"form-group place-inline\"><label for=\"qty"+item_no+"\">Quantity</label><input type=\"number\" id=\"qty"+item_no+"\" name=\"qty"+item_no+"\" class=\"place-inline form-control half-width parsley-validated\" data-required=\"true\"></div> <!-- /.form-group --><div class=\"form-group place-inline\"><label for=\"total_price"+item_no+"\">Price</label><input type=\"number\" id=\"price"+item_no+"\" name=\"total_price"+item_no+"\" step=\"0.01\" class=\"place-inline form-control half-width parsley-validated\" data-required=\"true\"></div> <!-- /.form-group --><button id=\"close"+item_no+"\" class=\"closebutton btn btn-danger place-inline\"><i class=\"fa fa-times\"></i></button><hr>";
    main_item_div.appendChild(new_item_div);
    add_event();
}

function remove_item_description(e) {
	e.preventDefault();
	parent = document.getElementsByClassName('itemDesc')[0];
	child = document.getElementById('itemDiv'+e.target.id.split('close')[1]);
	console.log(parent, child);
	parent.removeChild(child);
}

window.addEventListener("load", main);