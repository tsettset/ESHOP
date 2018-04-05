/* eKomiLoader START, only needed once per page */
(function () {
	eKomiIntegrationConfig = new Array(
		{certId: 'NLNCG2G2GDVJNAB'}
	);
	if (typeof eKomiIntegrationConfig != "undefined") {
		for (var eKomiIntegrationLoop = 0; eKomiIntegrationLoop < eKomiIntegrationConfig.length; eKomiIntegrationLoop++) {
			var eKomiIntegrationContainer = document.createElement('script');
			eKomiIntegrationContainer.type = 'text/javascript';
			eKomiIntegrationContainer.defer = true;
			eKomiIntegrationContainer.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + "//connect.ekomi.de/integration_1460991610/" + eKomiIntegrationConfig[eKomiIntegrationLoop].certId + ".js";
			document.getElementsByTagName("head")[0].appendChild(eKomiIntegrationContainer);
		}
	} else {
		if ('console' in window) {
			console.error('connectEkomiIntegration - Cannot read eKomiIntegrationConfig');
		}
	}
})();
/* eKomiLoader END, only needed once per page */


// Find all iframes
var $iframes = $( "iframe" );
 
// Find &#x26; save the aspect ratio for all iframes
$iframes.each(function () {
  $( this ).data( "ratio", this.height / this.width )
	// Remove the hardcoded width &#x26; height attributes
	.removeAttr( "width" )
	.removeAttr( "height" );
});
 
// Resize the iframes when the window is resized
$( window ).resize( function () {
  $iframes.each( function() {
	// Get the parent container&#x27;s width
	var width = $( this ).parent().width();
	$( this ).width( width )
	  .height( width * $( this ).data( "ratio" ) );
  });
// Resize to fix all iframes on page load.
}).resize();