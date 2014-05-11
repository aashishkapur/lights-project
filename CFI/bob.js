  $(function() {
  showHint();
  console.log(nigga);

    var availableTags = jQuery.makeArray(nigga);
	
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  });
