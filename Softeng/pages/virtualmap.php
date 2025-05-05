<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Denah Gedung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html,
        body {
            height: 100%;
            background: linear-gradient(to bottom right, #00b4ff, #00d0ff);
            color: white;
            text-align: center;
        }
        
        .map {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 5px;
            background: white;
            padding: 10px;
            border-radius: 10px;
        }
        
        .room {
            padding: 20px;
            border: 1px solid #000;
            color: black;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 5px;
            font-size: 14px;
        }
        
        .available {
            background-color: #7ed6a2;
        }
        
        .occupied {
            background-color: #ff6b6b;
        }
        
        .empty {
            background: none;
            border: none;
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-start pt-4">
    <div class="container bg-white rounded-top shadow p-4 mt-4" style="max-width: 400px; min-height: 100vh;">
        <h1 class="text-primary mb-4">Denah Gedung</h1>

        <div class="mb-3">
            <input type="time" class="form-control mb-2" value="09:30">
            <select class="form-select">
                <option>Lantai 1</option>
                <option>Lantai 2</option>
            </select>
        </div>

        <div class="map">
            <div class="room available">e11.105</div>
            <div class="room empty"></div>
            <a href="virtualmap2.html" class="text-decoration-none">
                <div class="room occupied">e11.106</div>
            </a>
            <div class="room empty"></div>

            <div class="room available">e11.104</div>
            <div class="room empty"></div>
            <div class="room available">e11.107</div>
            <div class="room empty"></div>

            <div class="room empty"></div>
            <div class="room empty"></div>
            <div class="room empty"></div>
            <div class="room empty"></div>

            <div class="room available">e11.103</div>
            <div class="room empty"></div>
            <div class="room available">e11.108</div>
            <div class="room empty"></div>

            <div class="room occupied">e11.102</div>
            <div class="room empty"></div>
            <div class="room available">e11.109</div>
            <div class="room empty"></div>

            <div class="room available">e11.101</div>
            <div class="room empty"></div>
            <div class="room occupied">e11.110</div>
            <div class="room empty"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>