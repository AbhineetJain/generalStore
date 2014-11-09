$(function() {
  var table_1 = $('#table-1').dataTable ({
    "sAjaxSource": "./js/demos/sell_log_table_data.php",
    "aoColumns": [
      { "mData": "id" },
      { "mData": "timestamp" },
      { "mData": "billing_amount" }
    ],
    "fnInitComplete": function(oSettings, json) {
      $(this).parents ('.dataTables_wrapper').find ('.dataTables_filter input').prop ('placeholder', 'Table Search...').addClass ('form-control input-sm')
    }
  });
})