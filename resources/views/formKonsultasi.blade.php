<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script>
        const doctors = {
            "Umum": ["Dr. Budi", "Dr. Siti"],
            "Penyakit Dalam": ["Dr. Joko", "Dr. Tia"],
            "Anak": ["Dr. Rina", "Dr. Tono"],
            "Kandungan": ["Dr. Maria", "Dr. Kevin"],
            "Telinga Hidung Tenggorokan": ["Dr. Sari", "Dr. Danu"],
            "Kedokteran Gigi": ["Dr. Ika", "Dr. Yudi"],
            "Mata": ["Dr. Lina", "Dr. Hadi"],
            "Jantung": ["Dr. Hendra", "Dr. Ayu"],
        };

        function updateDoctors() {
            const spesialisSelect = document.getElementById("spesialis");
            const dokterSelect = document.getElementById("dokter");

            const selectedSpesialis = spesialisSelect.value;
            const dokterOptions = doctors[selectedSpesialis] || [];

            dokterSelect.innerHTML = ""; 

            dokterOptions.forEach(dokter => {
                const option = document.createElement("option");
                option.value = dokter;
                option.textContent = dokter;
                dokterSelect.appendChild(option);
            });
        }
    </script>

    <style>
        .forms-sample {
            margin: 50px; 
        }
    </style>

</head>

<body>
    <div class="container-scroller">
        @include('layout.navbar')
        <div class="container-fluid page-body-wrapper p-5">
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title" style="text-align: center;">Pendaftaran Online Konsultasi</h4>
                                    <form class="forms-sample mt-5">
                                        <div class="form-group">
                                            <label for="exampleInputName1">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama Lengkap">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName2">Nomor HP</label>
                                            <input type="text" class="form-control" id="exampleInputName2" placeholder="Nomor HP">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName3">Email</label>
                                            <input type="text" class="form-control" id="exampleInputName3" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="Tanggal Konsultasi">Tanggal Konsultasi</label>
                                            <input type="date" name="tanggal_seminar" class="form-control" id="Tanggal Konsultasi" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputTime">Waktu Konsultasi</label>
                                            <input type="time" class="form-control" id="exampleInputTime" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="spesialis">Spesialisasi</label>
                                            <select class="form-control" id="spesialis" required onchange="updateDoctors()">
                                                <option value="" disabled selected>Pilih Spesialisasi</option>
                                                <option value="Umum">Umum</option>
                                                <option value="Penyakit Dalam">Penyakit Dalam</option>
                                                <option value="Anak">Anak</option>
                                                <option value="Kandungan">Kandungan</option>
                                                <option value="Telinga Hidung Tenggorokan">Telinga Hidung Tenggorokan</option>
                                                <option value="Kedokteran Gigi">Kedokteran Gigi</option>
                                                <option value="Mata">Mata</option>
                                                <option value="Jantung">Jantung</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="dokter">Dokter</label>
                                            <select class="form-control" id="dokter" required>
                                                <option value="" disabled selected>Pilih Dokter</option>
                                            </select>
                                        </div>
                                        <a href="historiKonsultasi" class="btn btn-primary">Atur Jadwal</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <script src="../../vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <script src="../../vendors/select2/select2.min.js"></script>
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/hoverable-collapse.js"></script>
    <script src="../../js/template.js"></script>
    <script src="../../js/settings.js"></script>
    <script src="../../js/todolist.js"></script>
    <script src="../../js/file-upload.js"></script>
    <script src="../../js/typeahead.js"></script>
    <script src="../../js/select2.js"></script>
</body>

</html>
