$(document).ready(function(){
   $('.curtains').curtain();
   
	var scrollorama = $.scrollorama({
		blocks:'.curtains'
	});
    
    scrollorama.animate('#intro #left-banner',{
    	duration:200, property:'left', end:-860
    });
    scrollorama.animate('#intro #right-banner',{
        duration:200, property:'right', end:-860
    });


    scrollorama.animate('#fifth #parallax1',{ delay: 3200, duration: 3000, property:'top', start:800, end:-800 });
    scrollorama.animate('#fifth #parallax2',{ delay: 3600, duration: 2000, property:'top', start:600, end:-800 });
    scrollorama.animate('#fifth #parallax3',{ delay: 3600, duration: 4000, property:'top', start:200, end:-600 });
    scrollorama.animate('#fifth #parallax4',{ delay: 3200, duration: 6000, property:'top', start:300, end:-800 });
    scrollorama.animate('#fifth #parallax5',{ delay: 3500, duration: 3000, property:'top', start:800, end:-800 });
    scrollorama.animate('#fifth #parallax6',{ delay: 3500, duration: 1500, property:'top', start:800, end:-800 });
    scrollorama.animate('#fifth #parallax7',{ delay: 3500, duration: 2000, property:'top', start:250, end:-800 });
    scrollorama.animate('#fifth #parallax8',{ delay: 3200, duration: 2000, property:'top', start:800, end:-800 });
    scrollorama.animate('#fifth #parallax9',{ delay: 3200, duration: 2000, property:'top', start:600, end:-800 });
    scrollorama.animate('#fifth #parallax10',{ delay: 3500, duration: 4000, property:'top', start:300, end:-800 });
    scrollorama.animate('#fifth #parallax11',{ delay: 3200, duration: 5000, property:'top', start:500, end:-800 });
    scrollorama.animate('#fifth #parallax12',{ delay: 3200, duration: 4000, property:'top', start:450, end:-800 });
    scrollorama.animate('#fifth #parallax13',{ delay: 3200, duration: 4100, property:'top', start:700, end:-800 });

    scrollorama.animate('#seventh #drop1',{ delay: 4800, duration: 3000, property:'bottom', start:800, end:-800 });
    scrollorama.animate('#seventh #drop2',{ delay: 5000, duration: 3500, property:'bottom', start:600, end:-800 });
    scrollorama.animate('#seventh #drop3',{ delay: 4800, duration: 4000, property:'bottom', start:200, end:-600 });
    scrollorama.animate('#seventh #drop4',{ delay: 5200, duration: 4800, property:'bottom', start:300, end:-800 });
    scrollorama.animate('#seventh #drop5',{ delay: 5400, duration: 3000, property:'bottom', start:800, end:-800 });
    scrollorama.animate('#seventh #drop6',{ delay: 5000, duration: 2200, property:'bottom', start:800, end:-800 });
    scrollorama.animate('#seventh #drop7',{ delay: 5500, duration: 2000, property:'bottom', start:550, end:-800 });
    scrollorama.animate('#seventh #drop8',{ delay: 5200, duration: 2000, property:'bottom', start:800, end:-800 });
    scrollorama.animate('#seventh #drop9',{ delay: 5300, duration: 2000, property:'bottom', start:600, end:-800 });
    scrollorama.animate('#seventh #drop10',{ delay: 5000, duration: 4000, property:'bottom', start:300, end:-800 });
    scrollorama.animate('#seventh #drop11',{ delay: 4900, duration: 5000, property:'bottom', start:500, end:-800 });
    scrollorama.animate('#seventh #drop12',{ delay: 5500, duration: 2500, property:'bottom', start:450, end:-800 });
    scrollorama.animate('#seventh #drop13',{ delay: 5600, duration: 3500, property:'bottom', start:550, end:-800 });
    scrollorama.animate('#seventh #drop14',{ delay: 5000, duration: 3800, property:'bottom', start:300, end:-800 });
    scrollorama.animate('#seventh #drop15',{ delay: 4900, duration: 5000, property:'bottom', start:500, end:-800 });
    scrollorama.animate('#seventh #drop16',{ delay: 4800, duration: 3000, property:'bottom', start:800, end:-800 });
    scrollorama.animate('#seventh #drop17',{ delay: 5000, duration: 3500, property:'bottom', start:600, end:-800 });
    scrollorama.animate('#seventh #drop18',{ delay: 4800, duration: 4000, property:'bottom', start:200, end:-600 });
    scrollorama.animate('#seventh #drop19',{ delay: 5200, duration: 4800, property:'bottom', start:300, end:-800 });
    scrollorama.animate('#seventh #drop20',{ delay: 5400, duration: 3000, property:'bottom', start:800, end:-800 });
    scrollorama.animate('#seventh #drop21',{ delay: 5000, duration: 2200, property:'bottom', start:800, end:-800 });
    scrollorama.animate('#seventh #drop22',{ delay: 5500, duration: 2000, property:'bottom', start:550, end:-800 });
    scrollorama.animate('#seventh #drop23',{ delay: 5200, duration: 3000, property:'bottom', start:800, end:-800 });
    scrollorama.animate('#seventh #drop24',{ delay: 5300, duration: 2500, property:'bottom', start:600, end:-800 });
    scrollorama.animate('#seventh #drop25',{ delay: 5000, duration: 4000, property:'bottom', start:300, end:-800 });
    scrollorama.animate('#seventh #drop26',{ delay: 4900, duration: 5000, property:'bottom', start:500, end:-800 });
    scrollorama.animate('#seventh #drop27',{ delay: 5500, duration: 2500, property:'bottom', start:450, end:-800 });
    scrollorama.animate('#seventh #drop28',{ delay: 5600, duration: 3500, property:'bottom', start:550, end:-800 });
    scrollorama.animate('#seventh #drop29',{ delay: 5000, duration: 3800, property:'bottom', start:300, end:-800 });
    scrollorama.animate('#seventh #drop30',{ delay: 4900, duration: 5000, property:'bottom', start:500, end:-800 });
});