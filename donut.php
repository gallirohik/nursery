<!doctype html>
<html>

<head>
    <title>Doughnut Chart</title>
    <script src="js/Chart.bundle.js"></script>
    <script src="js/utils.js"></script>
    <style>
    canvas {
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
    }
    </style>
</head>

<body>
    <div id="canvas-holder" style="width:30%">
        <canvas id="chart-area" />
    </div>
    
    <script>
    

    var config = {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [
                   <?php $x="20,20,30,50,50";
                   echo $x;
                    ?>
                ],
                backgroundColor: [
                    window.chartColors.red,
                    window.chartColors.orange,
                    window.chartColors.yellow,
                    window.chartColors.green,
                    window.chartColors.blue,
                ],
                label: 'Dataset 1'
            }],
            labels: [
                "Red",
                "Orange",
                "Yellow",
                "Green",
                "Blue"
            ]
        },
        options: {
            responsive: true,
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'products analysis'
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        }
    };

    window.onload = function() {
        var ctx = document.getElementById("chart-area").getContext("2d");
        window.myDoughnut = new Chart(ctx, config);
    };

   
    </script>
</body>

</html>
