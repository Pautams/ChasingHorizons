$(function() {
  $('#datetimepicker1').datetimepicker();
});

$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})