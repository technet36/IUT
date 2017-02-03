$(function(){
  var doc = $.parseJSON($('#embeddedData').val());
  $('body').data('doc',doc); // This saves the doc object
  $('#bcf').text(doc.bcf);   // bcf is "balance carried forward"

    $('#show').click(function () {
        var myString = $('#search').val();
        console.log(myString);

        _.forEach(doc,function (value) {
            console.log(value);
        })


    });
});

