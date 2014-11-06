var item_no = 0;
var form_data;	
var total_bill = 0;

function main() {
	$('#add_item').click(
		function(e) {
			add_item_description(e);
			add_item_list();
			$('.quantity').change(
				function(e) {
					change_price(e);
				}
			);
	});
	add_event();
	$('#sell-log-form').submit(
		function(e) {
			form_data = $(this).serializeArray();
			console.log(form_data);
			var main_array = [];
			for (var i = 0; i < form_data.length-2; i+=3) {
				var x = {};
				for(var j=0; j<3; j++)
					x[form_data[i+j].name] = form_data[i+j].value;
				main_array.push(x);
			};
			json_object = {};
			json_object['items'] = main_array;
			json_object[form_data[form_data.length - 2].name] = form_data[form_data.length - 2].value;
			json_object[form_data[form_data.length - 1].name] = form_data[form_data.length - 1].value;
			var json_string = JSON.stringify(json_object);
			console.log(json_string);
			location.href = "scripts/add_sell_log.php?data="+json_string;
			e.preventDefault();
		}
	);
	$('#add_item').trigger('click');
	$('#disc').change(function(){
		change_bill();
	});
}

function add_item_list() {
	itemlist = document.getElementsByClassName('item');
	for (var i = 0; i < itemlist.length; i++) {
		if(itemlist[i].childElementCount == 1)
			for (var j = 0; j < commodities.length; j++) {
				$(itemlist[i]).append("<option value=\""+commodities[j]['id']+"\">"+commodities[j]['name']+"</option>");
			};
	};
}

function add_event() {
	$('.closebutton').click(
		function(e) {
			remove_item_description(e);
	});
}

function change_price(e) {
	var index;
	//console.log(e.target.parentNode.parentNode.children[0].children[1].value);
	for (var i = 0; i < commodities.length; i++) {
		if(commodities[i]['id'] == e.target.parentNode.parentNode.children[0].children[1].value)
			index = i;
	};
	//console.log(commodities[index]["price"]);
	current_qty = parseInt(e.target.parentNode.parentNode.children[1].children[1].value);
	e.target.parentNode.parentNode.children[2].children[1].value = current_qty*parseFloat(commodities[index]["price"]);
	change_bill();
}

function change_bill() {
	price_array = document.getElementsByClassName('total_price');
	bill_sum = 0;
	for (var i = 0; i < price_array.length; i++) {
		bill_sum += parseFloat(price_array[i].value);
	};
	discount = parseFloat($('#disc').val());
	//console.log(bill_sum, discount);
	final_bill = (bill_sum * ((100-discount)/100)).toFixed(2);
	$('#bill').val(final_bill);
}

function add_item_description(e) {
	e.preventDefault();
	item_no += 1;
	var main_item_div = document.getElementsByClassName('itemDesc')[0];
	new_item_div = document.createElement('div');
	new_item_div.id = "itemDiv" + item_no;
	new_item_div.className = "itemDivs";
	new_item_div.innerHTML = "<div class=\"form-group place-inline\"><label for=\"item"+"\">Item Name</label><select id=\"item"+"\" name=\"item"+"\" class=\"place-inline item form-control parsley-validated\" data-required=\"true\"><option value=\"\">Please Select</option></select></div> <!-- /.form-group --><div class=\"form-group place-inline\"><label for=\"qty"+"\">Quantity</label><input type=\"number\" id=\"qty"+"\" name=\"qty"+"\" class=\"place-inline quantity form-control half-width parsley-validated\" data-required=\"true\"></div> <!-- /.form-group --><div class=\"form-group place-inline\"><label for=\"total_price"+"\">Price</label><input type=\"number\" id=\"price"+"\" name=\"total_price"+"\" value=\"0\" step=\"0.01\" class=\"place-inline total_price form-control half-width parsley-validated\" data-required=\"true\"></div> <!-- /.form-group --><button id=\"close"+item_no+"\" class=\"closebutton btn btn-danger place-inline\"><i class=\"fa fa-times\"></i></button><hr>";
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
