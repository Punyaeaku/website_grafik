<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>webgis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
         <div class="row">
            <div class="col-12">
                <h3>Belajar Grafik</h3>
            </div>
         </div>
         <div class="row">
            <div class="col 6"></div>
            <div>
             <canvas id="myChart"></canvas>
            </div>
            <div class="col 6"></div>
         </div>
    </div>  
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const ctx = document.getElementById('myChart');
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['permukiman', 'sawah irigasi', 'sawah tadah hujan', 'waduk multi guna', 'lahan terbuka', 'industri', 'lumpur lapindo'],
      datasets: [{
        label: '# of Votes',
        data: [8, 4, 1, 1, 2, 3, 1],
        borderWidth: 2
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
</body>
</html>
<script>