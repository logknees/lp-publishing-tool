<script>
$("document").ready(function(){
  $("body").on("keypress", ".editableFilter, .inputFilter", function(e) {
    if (event.keyCode >= 48 && event.keyCode <= 57) {
    } else {
      return false;
    }
  });
});
</script>

