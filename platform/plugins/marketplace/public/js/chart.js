$(function() {
 
  'use strict';
  
 

  

  
  

 

 


  $(document).ready(function() {
    if ($("#doughnutChart").length) {
        var doughnutChartCanvas = $("#doughnutChart").get(0).getContext("2d");

        var doughnutPieData = {
            labels: ["Blue", "Gray"],
            datasets: [{
                data: [60, 40],
                backgroundColor: ['#3864a9', '#eee'], 
                borderWidth: 0
            }]
        };

        var doughnutPieOptions = {
            cutoutPercentage: 60, 
            rotation: -0.5 * Math.PI,
            circumference: 2 * Math.PI,
            legend: {
                display: false
            },
            tooltips: {
                enabled: false
            },
            animation: {
                animateRotate: false,
                animateScale: true
            }
        };

        var doughnutChart = new Chart(doughnutChartCanvas, {
            type: 'doughnut',
            data: doughnutPieData,
            options: doughnutPieOptions
        });

        var percentageText = "60%";
        var fontSize = 20; 
        var centerX = doughnutChart.chart.width / 2;
        var centerY = (doughnutChart.chart.height + fontSize) / 2;

        doughnutChartCanvas.font = fontSize + "px Arial";
        doughnutChartCanvas.fillStyle = "#3864a9"; 
        doughnutChartCanvas.textAlign = "center";
        doughnutChartCanvas.fillText(percentageText, centerX, centerY);
    }
});






 

  if ($("#browserTrafficChart").length) {
    var doughnutChartCanvas = $("#browserTrafficChart").get(0).getContext("2d");
    var doughnutChart = new Chart(doughnutChartCanvas, {
      type: 'doughnut',
      data: browserTrafficData,
      options: doughnutPieOptions
    });
  }
});