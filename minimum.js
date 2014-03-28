
var deliveryfee = 25;
if ((totalfee - deliveryfee) < 100)
cj('#pricevalue').append(' <span style="color:red;">Less than minimum.</span>');

cj('#Main').submit(function(){
  if ((totalfee-deliveryfee) < 100){
    CRM.alert("Minimum payment before delivery fee is $100.");
    return false;
  }
});
cj("input,#priceset select,#priceset").each(function () {

  if ( cj(this).attr('price') ) {
  var eleType =  cj(this).attr('type');}
  if ( this.tagName == 'SELECT' ) {
    eleType = 'select-one';
  }

  switch( eleType ) {
    case 'text':
    //default calcution of element.
    // var textval = parseFloat( cj(this).val() );
    // if ( textval ) {
    //   eval( 'var option = '+ cj(this).attr('price') );
    //   ele         = option[0];
    //   if ( ! price[ele] ) {
    //    price[ele] = 0;
    //   }
    //   optionPart = option[1].split(optionSep);
    //   addprice   = parseFloat( optionPart[0] );
    //   var curval  = textval * addprice;
    //   if ( textval >= 0 ) {
    // totalfee   = parseFloat(totalfee) + curval - parseFloat(price[ele]);
    // price[ele] = curval;
    //   }
    // }

    // //event driven calculation of element.
    cj(this).bind( 'keyup', function() { 
      if ((totalfee - deliveryfee) < 100)
      cj('#pricevalue').append(' <span style="color:red;">Less than minimum.</span>');
      if ((totalfee - deliveryfee) > 100)
      cj('#pricevalue').append(' <span style="color:green;">More than minimum!</span>');        
    }).bind( 'blur' , function() {
      if ((totalfee - deliveryfee) < 100)
      cj('#pricevalue').append(' <span style="color:red;">Less than minimum.</span>');
      if ((totalfee - deliveryfee) > 100)
      cj('#pricevalue').append(' <span style="color:green;">More than minimum!</span>');        

    });
    // display( totalfee );

  break;
  }
});