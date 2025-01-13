<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f1f3f6;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .thank-you-container {
            text-align: center;
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            position: relative;
        }

        .checkmark {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #28a745;
            position: absolute;
            top: -40px;
            left: 50%;
            transform: translateX(-50%);
        }

        .checkmark::before {
            content: '';
            position: absolute;
            width: 40px;
            height: 40px;
            background: white;
            border-radius: 50%;
            transform: scale(0);
            animation: pulse 1.2s infinite;
        }

        .checkmark svg {
            width: 40px;
            height: 40px;
            stroke: white;
            stroke-width: 5;
            fill: none;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-dasharray: 60;
            stroke-dashoffset: 60;
            animation: draw 0.6s ease-out forwards;
        }

        @keyframes draw {
            to {
                stroke-dashoffset: 0;
            }
        }

        @keyframes pulse {
            0% {
                transform: scale(0.8);
                opacity: 1;
            }
            100% {
                transform: scale(2.5);
                opacity: 0;
            }
        }

        .thank-you-text {
            margin-top: 60px;
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
        }

        .thank-you-subtext {
            font-size: 1rem;
            color: #666;
            margin-top: 10px;
        }

        .action-buttons {
            margin-top: 30px;
        }

        .action-buttons .btn {
            margin: 5px;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #2874f0;
            border-color: #2874f0;
        }

        .btn-primary:hover {
            background-color: #0d6efd;
            border-color: #0d6efd;
        }

        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }
    </style>
</head>
<body>
    <div class="thank-you-container">
        <div class="checkmark">
            <svg viewBox="0 0 52 52">
                <path d="M14 27l10 10L38 16" />
            </svg>
        </div>
        <div class="thank-you-text">Thank You!</div>
        <div class="thank-you-subtext">Your payment was successful. We appreciate your purchase.</div>
        <div class="action-buttons">
            <a href="index.php" class="btn btn-primary">Go to Home</a>
            <a href="orderhistory.php" class="btn btn-secondary">View Order</a>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>


