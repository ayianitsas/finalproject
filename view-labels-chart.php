<h1 style="text-align: center; color: white; margin-top: 40px;">Labels: Year Established</h1>

<div style="display: flex; justify-content: center; align-items: center; margin: 20px;">
  <div style="width: 600px; height: 600px; border: 2px solid white; padding: 20px; box-sizing: border-box; background-color: #716969;">
    <canvas id="myChart"></canvas>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<?php
$labelsData = selectLabels();
$labelNames = [];
$dataPoints = [];

while ($label = $labelsData->fetch_assoc()) {
    $yearStr = $label['label_yearestablished']; 
    $year = (int) filter_var($yearStr, FILTER_SANITIZE_NUMBER_INT);
    
    $labelName = $label['label_name'];
    $labelNames[] = $labelName;
    
    $dataPoints[] = [
        'x' => $labelName,
        'y' => $year
    ];
}
?>

<script>
const ctx = document.getElementById('myChart');

new Chart(ctx, {
  type: 'scatter', 
  data: {
    labels: <?php echo json_encode($labelNames); ?>,
    datasets: [{
      label: 'Year Established', 
      data: <?php echo json_encode($dataPoints); ?>,
      backgroundColor: 'rgba(255, 255, 255, 0.7)', 
      borderColor: 'white', 
      borderWidth: 2, 
      pointRadius: 8, 
      pointHoverRadius: 10, 
      pointBackgroundColor: 'white', 
      pointBorderColor: 'white' 
    }]
  },
  options: {
    responsive: true, 
    maintainAspectRatio: false, 
    plugins: {
      legend: {
        labels: {
          color: 'white', 
          font: {
            size: 16 
          }
        },
        display: true, 
      },
      tooltip: {
        callbacks: {
          title: function(context) {
            return context[0].label; 
          },
          label: function(context) {
            return 'Year: ' + context.parsed.y; 
          }
        },
        titleColor: 'white', 
        bodyColor: 'white', 
        backgroundColor: 'rgba(0, 0, 0, 0.7)', 
        borderColor: 'white', 
        borderWidth: 1, 
      }
    },
    scales: {
      x: {
        type: 'category', 
        labels: <?php echo json_encode($labelNames); ?>, 
        ticks: {
          color: 'white', 
          font: {
            size: 14 
          },
          autoSkip: false, 
        },
        grid: {
          color: 'white', 
          borderColor: 'white', 
        }
      },
      y: {
        beginAtZero: false, 
        ticks: {
          color: 'white', 
          font: {
            size: 14 
          },
          callback: function(value, index, values) {
            return value.toString(); 
          }
        },
        grid: {
          color: 'white', 
          borderColor: 'white', 
        }
      }
    }
  }
});
</script>
