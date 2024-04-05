(function($) {
	document.querySelector('#bannerClose').addEventListener('click',function() {
		document.querySelector('#proBanner').classList.add('d-none');
	});
	'use strict';
	$(function() {
	

		if ($("#page-view-analytic").length) {
			var pageiVewAnalyticData = {
				labels: ["Jan 2023", "Feb 2023", "Mar 2023", "Apr 2023", "May 2023"],
				datasets: [
					{
						label: 'الطلبات',
						data: [350,300,310,520,490, 503, 300, 330, 290, 340, 222, 400, 580, 311, 377, 320, 331, 300],
						backgroundColor: '#fff',
						borderColor: '#ff8c00',
						borderWidth: 2,
						fill: true,
						lineTension: 0.5 // Adjust lineTension for sharper curve
					},
					{
						label: 'الدخل',
						data: [250, 150, 430, 290, 390, 240, 329, 300, 180, 222,329, 377, 320, 331, 150,330,229,100,50],
						backgroundColor: '#fff',
						borderColor: '#afb2c5',
						borderWidth: 2,
						fill: true,
						lineTension: 0.5 // Adjust lineTension for sharper curve
					}
				]
			};
		
			var pageiVewAnalyticOptions = {
				scales: {
					yAxes: [{
						display: true,
						gridLines: {
							drawBorder: false,
							display: true,
							drawTicks: false,
							color: '#eef0fa',
							zeroLineColor: 'rgba(90, 113, 208, 0)',
						},
						ticks: {
							beginAtZero: false,
							max: 600,
							stepSize: 100,
							display: true,
							padding: 5,
						}
					}],
					xAxes: [{
						display: true,
						position: 'bottom',
						gridLines: {
							drawBorder: false,
							display: false,
							drawTicks: false,
						},
						ticks: {
							fontColor: "#a7afb7",
							padding: 10,
						}
					}],
				},
				legend: {
					display: true,
					position: 'bottom',
					labels: {
						fontColor: '#000',
						usePointStyle: true,
						boxWidth: 5,
						rtl: true,
					}
				},
				elements: {
					line: {
						fill: false // Set to false to remove fill in the lines
					},
					point: {
						radius: 0, // Set point radius to 0 to remove points from the lines
						hitRadius: 5,
						hoverRadius: 5
					}
				},
				tooltips: {
					backgroundColor: 'rgba(2, 171, 254, 1)',
				}
			};
		
			var barChartCanvas = $("#page-view-analytic").get(0).getContext("2d");
			barChartCanvas.canvas.height = 100; 
			var barChart = new Chart(barChartCanvas, {
				type: 'line',
				data: pageiVewAnalyticData,
				options: pageiVewAnalyticOptions,
			});
		}
		
		
		
		

		

		
    
		

		
    
	});
})(jQuery);