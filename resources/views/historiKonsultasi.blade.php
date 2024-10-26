<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .table-container {
            padding: 0 15px; 
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        @include('layout.navbar')

        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <h3 class="font-weight-bold text-center mt-4 mb-4">Histori Konsultasi</h3>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 table-container">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Nama Lengkap</th>
                                            <th>Nomor HP</th>
                                            <th>Email</th>
                                            <th>Tanggal Konsultasi</th>
                                            <th>Waktu Konsultasi</th>
                                            <th>Spesialisasi</th>
                                            <th>Dokter</th>
                                        </tr>
                                    </thead>
                                    <tbody id="jadwalTableBody">
                                        <tr>
                                            <td>Alice Johnson</td>
                                            <td>12345678</td>
                                            <td>alice@example.com</td>
                                            <td>2024-10-15</td>
                                            <td>10:00 - 11:00</td>
                                            <td>Umum</td>
                                            <td>Dr. Budi</td>
                                        </tr>
                                        <tr>
                                            <td>David Brown</td>
                                            <td>23456789</td>
                                            <td>david@example.com</td>
                                            <td>2024-10-16</td>
                                            <td>11:00 - 12:00</td>
                                            <td>Penyakit Dalam</td>
                                            <td>Dr. Tia</td>
                                        </tr>
                                        <tr>
                                            <td>Emily White</td>
                                            <td>34567890</td>
                                            <td>emily@example.com</td>
                                            <td>2024-10-17</td>
                                            <td>09:00 - 10:00</td>
                                            <td>Anak</td>
                                            <td>Dr. Rina</td>
                                        </tr>
                                        <tr>
                                            <td>Frank Green</td>
                                            <td>45678901</td>
                                            <td>frank@example.com</td>
                                            <td>2024-10-18</td>
                                            <td>13:00 - 14:00</td>
                                            <td>Kandungan</td>
                                            <td>Dr. Maria</td>
                                        </tr>
                                        <tr>
                                            <td>Grace Lee</td>
                                            <td>56789012</td>
                                            <td>grace@example.com</td>
                                            <td>2024-10-19</td>
                                            <td>14:00 - 15:00</td>
                                            <td>Jantung</td>
                                            <td>Dr. Hendra</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="vendors/js/vendor.bundle.base.js"></script>
</body>
</html>
