$(function() {
  var table_1 = $('#table-1').dataTable ({
    "sAjaxSource": "./js/demos/sold_items_table_data.php?id=<?php echo $_GET['id']?>",
    "aoColumns": [
      { "mData": "item_name" },
      { "mData": "qty" },
      { "mData": "total_price" }
    ],
    "fnInitComplete": function(oSettings, json) {
      $(this).parents ('.dataTables_wrapper').find ('.dataTables_filter input').prop ('placeholder', 'Table Search...').addClass ('form-control input-sm')
    }
  });
})
