CRM.$(function($) {
  var deliveryfee = 25;
  if ((totalfee - deliveryfee) < 100)
  $('#pricevalue').append(' <span style="color:red;">Less than minimum.</span>');

  $('#Main').submit(function(){
    if ((totalfee-deliveryfee) < 100){
      CRM.alert("Minimum payment before delivery fee is $100.");
      return false;
    }
  });
  $("input,#priceset select,#priceset").each(function () {
    var eleType;
    if ($(this).attr('price')) {
      eleType =  $(this).attr('type');
    }
    if (this.tagName == 'SELECT') {
      eleType = 'select-one';
    }

    if (eleType === 'text') {
      $(this).bind( 'keyup', function() {
        if ((totalfee - deliveryfee) < 100)
        $('#pricevalue').append(' <span style="color:red;">Less than minimum.</span>');
      }).bind( 'blur' , function() {
        if ((totalfee - deliveryfee) < 100)
        $('#pricevalue').append(' <span style="color:red;">Less than minimum.</span>');
      });
    }
  });
});
