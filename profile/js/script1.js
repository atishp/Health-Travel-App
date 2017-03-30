$(document).ready(function(){
    $('#purposea').on('change', function() {
      if ( this.value == '11')
      {
        $("#businessx").show();
      }
      else
      {
        $("#businessx").hide();
      }
      if ( this.value == '12')
      {
        $("#businessx2").show();
      }
      else
      {
        $("#businessx2").hide();
      }
      if ( this.value == '13')
      {
        $("#businessx3").show();
      }
      else
      {
        $("#businessx3").hide();
      }
      if ( this.value == '14')
      {
        $("#businessx4").show();
      }
      else
      {
        $("#businessx4").hide();
      }
    });
});