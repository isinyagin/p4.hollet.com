function clipboard() {
	var clip = new ZeroClipboard( document.getElementById("copy-button"), {
	  moviePath: "/assets/js/ZeroClipboard.swf"
	} );

	clip.on( "load", function(client) {
	  client.on( "complete", function(client, args) {
		// `this` is the element that was clicked
		this.style.display = "none";
	  } );
	} );
};

clipboard();
