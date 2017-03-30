$(document).ready(function(){
    $('#purpose').on('change', function() {
      if ( this.value == '1')
      {
        $("#business").show();
      }
      else
      {
        $("#business").hide();
      }
      if ( this.value == '2')
      {
        $("#business2").show();
      }
      else
      {
        $("#business2").hide();
      }
      if ( this.value == '3')
      {
        $("#business3").show();
      }
      else
      {
        $("#business3").hide();
      }
      if ( this.value == '4')
      {
        $("#business4").show();
      }
      else
      {
        $("#business4").hide();
      }
    });
});