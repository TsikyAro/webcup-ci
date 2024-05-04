<script src="<?= base_url('assets/js/html2pdf.bundle.js'); ?>"></script>
<div class="main-panel">
    <div class="content-wrapper">
          <section class="section" id="section">
              <div class="row">
                <h1>Le chart Graphique</h1>
              </div>
              <div class="row">

                  <div class="col-lg-6">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Line Chart</h5>

                        <canvas id="lineChart" style="max-height: 400px;"></canvas>
                        <script>
                          document.addEventListener("DOMContentLoaded", () => {
                            new Chart(document.querySelector('#lineChart'), {
                              type: 'line',
                              data: {
                                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                                datasets: [{
                                  label: 'Line Chart',
                                  data: [65, 59, 80, 81, 56, 55, 40],
                                  fill: false,
                                  borderColor: 'rgb(75, 192, 192)',
                                  tension: 0.1
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
                          });

                          function exportToPDF() {
                              const content = document.getElementById('section');
                              html2pdf(content);
                          }
                        </script>
                      </div>
                    </div>
                  </div>
                </div>
          </section>
        <button onclick="exportToPDF()">Exporter en PDF</button>
      <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer>
    </div>
  </div>
</div>
