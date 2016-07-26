$(document).ready (function() {
  
  $.get( "heartbeat.php", function( data ) {
    $( "#heartbeat" ).html( data );
  });

});

setInterval(function() {
        
  $.get( "heartbeat.php", function( data ) {
    $( "#heartbeat" ).html( data );
  });
      
}, 5000);