<script src="<?= base_url('assets/js/html2pdf.bundle.js'); ?>"></script>
<main id="main" class="main">
<section class="section" id="section">
    <div class="row">
      <h1>Le chart Graphique</h1>
    </div>
    <div class="row">

        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Line Chart</h5>

              <!-- Line Chart -->
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
              <!-- End Line CHart -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <button onclick="exportToPDF()">Exporter en PDF</button>
</main>