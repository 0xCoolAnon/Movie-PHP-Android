 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="container-fluid mt-3">
    <!-- Card -->
    <div class="row">
        <div class="col-4 mb-2">
            <div class="card lena-card  no-border hover-shadow" >
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 d-none d-md-block center-typcn">
                            <span class="typcn typcn-th-list-outline"></span>
                        </div>

                        <div class="col-md-8 col-12 col-sm-6">
                            <h4 class="font-weight-bold mt-1 mb-0">50<span class="lena-text-pastel-green">/100</span></h4>
                            <p class="mb-0">Jumlah Syarikat Berdaftar</p>
                        </div>
                    </div>
                </div>

                <!-- Lena progress bar -->
                <div class="lena-progress bg-lena-pastel-green" data-progress="50"></div>
            </div>
        </div>
        <!-- End of Card -->

        <!-- Card -->
        <div class="col-4 mb-2">
            <div class="card lena-card  no-border hover-shadow" >
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 d-none d-md-block center-typcn">
                            <span class="typcn typcn-user-outline"></span>
                        </div>
                        <div class="col-md-8 col-12 col-sm-6">
                            <h4 class="font-weight-bold mt-1 mb-0">13</h4>
                            <p class="mb-0">Jumlah Dokumen</p>
                        </div>
                    </div>
                </div>
                <!-- Lena progress bar -->
                <div class="lena-progress bg-lena-pastel-yellow" data-progress="37"></div>
            </div>
        </div>
        <!-- End of Card -->
        <!-- Card -->
        <div class="col-4 mb-2">
            <div class="card lena-card  no-border hover-shadow" >
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-8 col-12 col-sm-6">
                            <h4 class="font-weight-bold mt-1 mb-0">RM 20,000,000</h4>
                            <p class="mb-0">Kewangan</p>
                        </div>
                    </div>
                </div>
                <!-- Lena progress bar -->
                <div class="lena-progress" data-progress="75"></div>
            </div>
        </div>
    </div>
    <!-- End of Card -->


    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title text-center">Statistik Belian Dokumen Jabatan</h5>
                </div>
                <div class="card-body">
                    <canvas id="jabatanPieChart" style="height: 153px;"></canvas>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card dokumen-card">
                <div class="card-header">
                    <h5 class="card-title text-left">Statistik Belian Dokumen</h5>
                </div>
                <div class="card-body">
					 <div class="progress mb-4 mt-4">
						<div class="progress-bar  progress-bar-striped progress-bar-lantikan bg-danger" role="progressbar" style="width: 70%;">
							<span> Lantikan (70%)</span>
						</div>
					</div>
					
					<div class="progress mb-4">
						<div class="progress-bar progress-bar-striped progress-bar-sebut-harga bg-success" role="progressbar" style="width: 85%;">
							<span>Sebut harga (85%)</span>
						</div>
					</div>
					
					<div class="progress mb-4">
						<div class="progress-bar progress-bar-striped progress-bar-tender bg-primary" role="progressbar" style="width: 85%;">
							<span>Tender (85%)</span>
						</div>
					</div>
                </div>
            </div>
        </div>
    
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title text-left">Senarai Dokumen Terbaru</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item fa fa-circle"> Document 1</li>
                        <li class="list-group-item fa fa-circle"> Document 2</li>
                        <li class="list-group-item fa fa-circle"> Document 3</li>
                        <li class="list-group-item fa fa-circle"> Document 4</li>
                        <li class="list-group-item fa fa-circle"> Document 5</li>
                        <li class="list-group-item fa fa-circle"> Document 6</li>
                        <li class="list-group-item fa fa-circle"> Document 7</li>
                        <li class="list-group-item fa fa-circle"> Document 8</li>
                        <li class="list-group-item fa fa-circle"> Document 9</li>
                        <li class="list-group-item fa fa-circle"> Document 10</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title text-center">Senarai Dokumen Masih Dibuka</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Document A (Open)</li>
                        <li class="list-group-item">Document B (Open)</li>
                        <li class="list-group-item">Document C (Open)</li>
                        <li class="list-group-item">Document D (Open)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const jabatanAPieChartCanvas = document.getElementById('jabatanPieChart');

    const pieChartData = {
        datasets: [{
            data: [25, 40],
            backgroundColor: ['#007bff', '#ffc107'],
            borderWidth: 0,
        }],
        labels: ['Dokumen Dibeli', 'Dokumen Belum Dibeli'],
    };

    const pieChartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
            display: true,
            position: 'bottom',
        },
        title: {
            display: true,
            text: 'Statistik Belian Dokumen Jabatan',
            fontSize: 16,
            fontColor: '#333',
        },
    };

    const jabatanAPieChart = new Chart(jabatanAPieChartCanvas, {
        type: 'pie',
        data: pieChartData,
        options: pieChartOptions,
    });
</script>