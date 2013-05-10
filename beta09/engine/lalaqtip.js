function lalaqtip(){
   // Match all link elements with href attributes within the content div
   $('#lalapodshirt a[href]').qtip(
   {
      content: '<div class="centerdown"> <img src="engine/images/twitter.png">&nbsp;Some basic content for the tooltip</div>', // Give it some content, in this case a simple string
	  style: {       border: {
                     width: 1,
                     radius: 3
                  },
                  padding: 2, 
                  textAlign: 'left',
                  tip: true, // Give it a speech bubble tip with automatic corner detection
                  name: 'blue' // Style it according to the preset 'cream' style
               },
	  position: {
	  	corner: {
                     tooltip: 'leftMiddle', // Use the corner...
                     target: 'rightMiddle' // ...and opposite corner
                  }
	  
	  
	  }	   
   });}
