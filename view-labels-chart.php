<h1 style="text-align: center; color: white; margin-top: 40px;">Labels: Year Established</h1>

<!-- Chart Container: Centered, Larger Size, White Border -->
<div style="display: flex; justify-content: center; align-items: center; margin: 20px;">
  <div style="width: 600px; height: 600px; border: 2px solid white; padding: 20px; box-sizing: border-box; background-color: #716969;">
    <canvas id="myChart"></canvas>
  </div>
</div>

<!-- Include Chart.js Library -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<?php
$labelsData = selectLabels();
$labelNames = [];
$dataPoints = [];

while ($label = $labelsData->fetch_assoc()) {
    // Extract and sanitize the year
    $yearStr = $label['label_yearestablished']; 
    $year = (int) filter_var($yearStr, FILTER_SANITIZE_NUMBER_INT);
    
    // Extract label name
    $labelName = $label['label_name'];
    $labelNames[] = $labelName;
    
    // Prepare data points for Chart.js
    $dataPoints[] = [
        'x' => $labelName,
        'y' => $year
    ];
}
?>

<script>
const ctx = document.getElementById('myChart');

new Chart(ctx, {
  type: 'scatter', // Chart Type
  data: {
    labels: <?php echo json_encode($labelNames); ?>, // X-Axis Labels
    datasets: [{
      label: 'Year Established', // Dataset Label
      data: <?php echo json_encode($dataPoints); ?>, // Data Points
      backgroundColor: 'rgba(255, 255, 255, 0.7)', // White Points with Transparency
      borderColor: 'white', // White Borders for Points
      borderWidth: 2, // Thickness of Borders
      pointRadius: 8, // Size of Points
      pointHoverRadius: 10, // Size on Hover
      pointBackgroundColor: 'white', // White Fill for Points
      pointBorderColor: 'white' // White Border for Points
    }]
  },
  options: {
    responsive: true, // Make Chart Responsive
    maintainAspectRatio: false, // Allow Custom Aspect Ratio
    plugins: {
      legend: {
        labels: {
          color: 'white', // White Legend Text
          font: {
            size: 16 // Legend Font Size
          }
        },
        display: true, // Show Legend
      },
      tooltip: {
        callbacks: {
          title: function(context) {
            return context[0].label; // Tooltip Title
          },
          label: function(context) {
            return 'Year: ' + context.parsed.y; // Tooltip Label
          }
        },
        titleColor: 'white', // Tooltip Title Text Color
        bodyColor: 'white', // Tooltip Body Text Color
        backgroundColor: 'rgba(0, 0, 0, 0.7)', // Tooltip Background Color
        borderColor: 'white', // Tooltip Border Color
        borderWidth: 1, // Tooltip Border Thickness
      }
    },
    scales: {
      x: {
        type: 'category', // X-Axis Type
        labels: <?php echo json_encode($labelNames); ?>, // X-Axis Labels
        ticks: {
          color: 'white', // X-Axis Tick Color
          font: {
            size: 14 // X-Axis Tick Font Size
          },
          autoSkip: false, // Show All Labels
        },
        grid: {
          color: 'white', // X-Axis Grid Line Color
          borderColor: 'white', // X-Axis Border Line Color
        }
      },
      y: {
        beginAtZero: false, // Y-Axis Does Not Start at Zero
        ticks: {
          color: 'white', // Y-Axis Tick Color
          font: {
            size: 14 // Y-Axis Tick Font Size
          },
          callback: function(value, index, values) {
            return value.toString(); // Return the value as a plain string without formatting
          }
        },
        grid: {
          color: 'white', // Y-Axis Grid Line Color
          borderColor: 'white', // Y-Axis Border Line Color
        }
      }
    }
  }
});
</script>
