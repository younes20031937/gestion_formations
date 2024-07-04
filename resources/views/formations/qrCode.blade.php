<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code</title>
    <!-- Inclure le CSS de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Inclure les animations de Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <style>
        .card-body {
            animation: fadeIn 2s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        .qr-code {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            padding: 10px;
            background-color: #fff;
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="text-center col-md-8">
                <h1 class="mb-4 animate__animated animate__fadeInDown">QR Code for OFPPT</h1>
                <div class="card animate__animated animate__zoomIn">
                    <div class="card-body">
                        <div class="qr-code">
                            {!! $qrCode !!}
                        </div>
                    </div>
                </div>
                <a href="{{ url()->previous() }}" class="mt-3 btn btn-primary animate__animated animate__fadeInUp">Back</a>
            </div>
        </div>
    </div>
    <!-- Inclure les scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
