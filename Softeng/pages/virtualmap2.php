<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Ruangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html,
        body {
            height: 100%;
            background: linear-gradient(to bottom right, #00b4ff, #00d0ff);
            color: black;
        }
        
        .status-box {
            display: flex;
            align-items: center;
            background: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 10px 20px;
            justify-content: center;
        }
        
        .dot {
            width: 20px;
            height: 20px;
            background-color: #ff6b6b;
            border-radius: 50%;
            margin-right: 10px;
        }
        
        .schedule-box {
            background: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 10px;
            margin-top: 5px;
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-start pt-4">
    <div class="container bg-white rounded-top shadow p-4 mt-4" style="max-width: 400px; min-height: 100vh;">
        <h1 class="text-primary text-center mb-4">Detail Ruangan</h1>

        <div class="text-center mb-3">
            <div class="fw-bold fs-4">E11.106</div>
        </div>

        <div class="d-flex justify-content-center mb-4">
            <div class="status-box">
                <div class="dot"></div>
                <span>Sedang Digunakan</span>
            </div>
        </div>

        <div>
            <div class="fw-bold mt-3">Senin</div>
            <div class="schedule-box">
                08:00–09:30<br> Matematika Diskrit
            </div>

            <div class="fw-bold mt-3">Selasa</div>
            <div class="schedule-box">
                10:00–12:00<br> Struktur Data
            </div>

            <div class="fw-bold mt-3">Rabu</div>
            <div class="schedule-box">
                08:00–10:00<br> Pemrograman Web
            </div>

            <div class="fw-bold mt-3">Kamis</div>
            <div class="schedule-box">
                13:00–15:00<br> Algoritma
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>