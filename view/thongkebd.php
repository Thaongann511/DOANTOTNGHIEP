<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<body>

    <div style="width: 50%; margin: auto;">
        <!-- Biểu đồ thứ nhất -->
        <h4 style="text-align:center">Tính theo NDVI</h4>
        <canvas id="myLineChart1" width="400" height="200"></canvas>
        
        <!-- Biểu đồ thứ hai -->
        <hr>
        <h4 style="text-align:center">Tính theo thuật toán</h4>
        <p style="text-align:right"><i>Đơn vị tính: %</i></p>
        <canvas id="myLineChart2" width="400" height="200"></canvas>
    </div>

    <?php
        // Dữ liệu mẫu (có thể đọc từ cơ sở dữ liệu)
        $labels1 = ['Tổng', 'Có rừng', 'Không có rừng'];
        $data1_1 = [11692, 4423, 7269];
        $data1_2 = [12827, 5673, 7154];
        
        $labels2 = ['Rừng', 'Đô Thị', 'Nước', 'Đất khác'];
        $data2_1 = [12.78, 25.11, 0.61, 61.50];
        $data2_2 = [10.3, 47.46, 2.3, 39.94];
    ?>

    <script>
        // Biểu đồ thứ nhất
        var ctx1 = document.getElementById('myLineChart1').getContext('2d');
        var data1 = {
            labels: <?php echo json_encode($labels1); ?>,
            datasets: [{
                label: '2018',
                data: <?php echo json_encode($data1_1); ?>,
                fill: false,
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 2
            }, {
                label: '2021',
                data: <?php echo json_encode($data1_2); ?>,
                fill: false,
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 2
            }]
        };
        var options1 = {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        };
        var myLineChart1 = new Chart(ctx1, {
            type: 'bar',
            data: data1,
            options: options1
        });

        // Biểu đồ thứ hai
        var ctx2 = document.getElementById('myLineChart2').getContext('2d');
        var data2 = {
            labels: <?php echo json_encode($labels2); ?>,
            datasets: [{
                label: '2018',
                data: <?php echo json_encode($data2_1); ?>,
                fill: false,
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 2
            }, {
                label: '2021',
                data: <?php echo json_encode($data2_2); ?>,
                fill: false,
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 2
            }]
        };
        var options2 = {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        };
        var myLineChart2 = new Chart(ctx2, {
            type: 'bar',
            data: data2,
            options: options2
        });
    </script>