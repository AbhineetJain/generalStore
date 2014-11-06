$(function() {
  var table_1 = $('#table-1').dataTable ({
    "sAjaxSource": "./js/demos/buy_log_table_data.php",
    "aoColumns": [
      { "mData": "wholesaler_name" },
      { "mData": "commodity" },
      { "mData": "quantity" },
      { "mData": "price" },
      { "mData": "date_of_purchase" }
    ],
    "fnInitComplete": function(oSettings, json) {
      $(this).parents ('.dataTables_wrapper').find ('.dataTables_filter input').prop ('placeholder', 'Table Search...').addClass ('form-control input-sm')
    }
  })
})
