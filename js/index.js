
var $BTN = $('#export-btn');
var $EXPORT = $('#export');

addRow = function(tableID) {
   
   var $clone = $(tableID).find('tr.hide').clone(true).removeClass('hide table-line');
   $(tableID).append($clone);
}

 $(function() {
        $("#b1").click(function() { addRow("#tab1") });
        $("#b2").click(function() { addRow("#tab2") });        
       $("#b3").click(function() { addRow("#tab3") });        
       $("#b4").click(function() { addRow("#tab4") });        
       $("#b5").click(function() { addRow("#tab5") });        
             
    });

$('.table-remove').click(function () {
  $(this).parents('tr').detach();
});

$('.table-up').click(function () {
  var $row = $(this).parents('tr');
  if ($row.index() === 1) return; // Don't go above the header
  $row.prev().before($row.get(0));
});

$('.table-down').click(function () {
  var $row = $(this).parents('tr');
  $row.next().after($row.get(0));
});

// A few jQuery helpers for exporting only
jQuery.fn.pop = [].pop;
jQuery.fn.shift = [].shift;

$BTN.click(function () {
  var $rows = $TABLE.find('tr:not(:hidden)');
  var headers = [];
  var data = [];
  
  // Get the headers (add special header logic here)
  $($rows.shift()).find('th:not(:empty)').each(function () {
    headers.push($(this).text().toLowerCase());
  });
  
  // Turn all existing rows into a loopable array
  $rows.each(function () {
    var $td = $(this).find('td');
    var h = {};
    
    // Use the headers from earlier to name our hash keys
    headers.forEach(function (header, i) {
      h[header] = $td.eq(i).text();   
    });
    
    data.push(h);
  });
  
  // Output the result
  $EXPORT.text(JSON.stringify(data));
});