$(function() {
  var table_1 = $('#table-1').dataTable ({
    "sAjaxSource": "./js/demos/employees_table_data.php",
    "aoColumns": [
      { "mData": "name" },
      { "mData": "salary" },
      { "mData": "address" },
      { "mData": "contact" },
      { "mData": "date_of_joining" }
    ],
    "fnInitComplete": function(oSettings, json) {
      $(this).parents ('.dataTables_wrapper').find ('.dataTables_filter input').prop ('placeholder', 'Table Search...').addClass ('form-control input-sm')
    }
  })
})
