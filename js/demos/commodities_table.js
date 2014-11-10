$(function() {
  var table_1 = $('#table-1').dataTable ({
    "sAjaxSource": "./js/demos/commodities_table_data.php",
    "aoColumns": [
      { "mData": "name" },
      { "mData": "description" },
      { "mData": "price" },
      { "mData": "qty_in_shop" },
      { "mData": "qty_in_godown" },
      { "mData": "location_in_shop" },
      { "mData": "type" },
      { "mData": "batch_no" },
      { "mData": "date_of_expiry" },
      { "mData": "update" },
      { "mData": "delete" },
    ],
    "fnInitComplete": function(oSettings, json) {
      $(this).parents ('.dataTables_wrapper').find ('.dataTables_filter input').prop ('placeholder', 'Table Search...').addClass ('form-control input-sm')
    }
  })
})
