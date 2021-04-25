<!DOCTYPE html>
<html>

  <head>

      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <link rel='stylesheet' href='style/style.css'>
    
  </head>

   
   <body>
       

   <div id='myDiv'>
      <canvas id="myChart"></canvas>
   </div>





   <script>


   window.onload = function(){

    boardGraph();
   }


  function boardGraph(){

     
     
    let context = document.getElementById('myChart').getContext('2d');

     
    let chart = new Chart(context, {

        // The type of chart we want to create
        
        type: 'bar',
        
         // The data for our dataset
         data: {
            labels: ['grocery store', 'energy', 'transportation', 'sport', 'medical bill'],
            datasets: [{
                label: 'Expenses distribution', 
                backgroundColor: ["rgb(0,184,255,0.35)", "rgb(255,0,0,0.35)",  "rgb(0,255,0,0.35)", "rgb(255,0,255,0.35)", "rgb(255,0,255,0.35)"],
                borderColor: 'rgb(255,0,0)',
                data: [17.5,15,20,28,25]
            }]
        },
        
        // Configuration options go here
        options: {
        legend: {
            display: false
        },
        tooltips: {
            callbacks: {
               label: function(tooltipItem) {
                      return tooltipItem.yLabel;
               }
            }
        }
        }, 
        scales: {
           xAxes: [{
            ticks: {
                   display: false
            }
          }]
        }
        }
   );
        



  }



   
   
   </script>


   </body>



</html>
