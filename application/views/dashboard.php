Selamat Datang, <?php echo $_SESSION['nama_lengkap']; ?><br>

<?php if ($_SESSION['level'] == 'Kepala')
{
    redirect(base_url('dashboard_kepala'));
} ?>

<div class="card float-element bg-primary" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Indeks Anda</h5><br><br>
    <h1 class="card-text text-center font-weight-bold"><?= $average[-7].$average[-6].$average[-5].$average[-4]; ?></h1>
  </div>
</div>


<div class="container">
    <div class="mt-2">
        <div class="col-8">
            <canvas id="bar"></canvas>
        </div>
    </div>
</div>

<style>
.float-element { 
    float: right;
    margin-right: 30px;
} 
</style>


<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js" integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    const baseUrl = "<?php echo base_url(); ?>"
    const myChart = (chartType) => {
        $.ajax({
            url: baseUrl + 'chart/chart_data',
            dataType: 'json',
            method: 'get',
            success: data => {
                let chartX = []
                let chartY = []
                data.map(data => {
                    chartX.push(data.nama_aspek)
                    chartY.push(data.rekap_<?php echo $_SESSION['nama_pendek']; ?>)
                })
                const chartData = {
                    labels: chartX,
                    datasets: [{
                        label: 'Nilai',
                        data: chartY,
                        backgroundColor: ['lightcoral'],
                        borderColor: ['lightcoral'],
                        borderWidth: 4
                    }]
                }
                const ctx = document.getElementById(chartType).getContext('2d')
                const config = {
                    type: chartType,
                    data: chartData
                }
                const words = ['Kepedulian', "Keanggunan", "Kenyamanan"];
                switch (chartType) {
                    // case 'pie':
                    // 	const pieColor = ['salmon','red','green','blue','aliceblue','pink','orange','gold','plum','darkcyan','wheat','silver']
                    // 	chartData.datasets[0].backgroundColor = pieColor
                    // 	chartData.datasets[0].borderColor = pieColor
                    // 	break;
                    case 'bar':
                        chartData.datasets[0].backgroundColor = ['skyblue']
                        chartData.datasets[0].borderColor = ['skyblue']
                        config.options = {
                            scales: {
                                y: {
                                    min: 0,
                                    max: 4,
                                }
                            },
                            plugins: {
                                title: {
                                    display: true,
                                    text: 'Grafik Penilaian Pegawai',
                                    padding: {
                                        top: 10,
                                        bottom: 30
                                    },
                                    font: {
                                        size: 20
                                    }
                                },
                                legend: {
                                    display: false
                                },
                            }
                        }
                        break;
                }
                const chart = new Chart(ctx, config)
            }
        })
    }

    // myChart('pie')
    // myChart('line')
    myChart('bar')
</script>