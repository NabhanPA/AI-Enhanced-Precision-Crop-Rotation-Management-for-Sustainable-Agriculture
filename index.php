<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ('header.php'); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI-Enhanced Precision Crop Rotation Management for Sustainable Agriculture</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e8f5e9; /* Mint green background for a refreshing look */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column; /* Aligns the content vertically */
        }
        header {
            width: 100%;
            text-align: center;
            padding: 20px 0;
            background-color: #c8e6c9; /* Soft green background */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
        }
        h1 {
            font-family: 'Arial', sans-serif;
            font-size: 28px;
            color: #2e7d32; /* Dark green for good contrast */
            margin: 0;
            padding: 0;
        }
        .button-container {
            background-color: #f1f8e9; /* A slightly lighter green than the body */
            border: 1px solid #c8e6c9; /* Soft green border */
            padding: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.10); /* Subtle shadow to lift the container off the background */
            border-radius: 10px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: center;
            width: 80%;
        }
        .button-item {
            flex: 0 0 45%;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
            background-color: #dcedc8; /* Even lighter green for the items */
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }
        button {
            width: 100%;
            height: 130px;
            cursor: pointer;
            border: none;
            border-radius: 8px;
            background: none;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        img {
            width: 103%;
            height: 105%;
            border-radius: 8px;
            object-fit: cover;
        }
        button:hover {
            transform: scale(1.05);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
        }
        .button-label {
            text-align: center;
            font-size: 16px;
            color: #2e7d32; /* Darker green for text to ensure readability */
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <header>
        <h1>AI-Enhanced Precision Crop Rotation Management for Sustainable Agriculture</h1>
    </header>
    <div class="button-container">
        <div class="button-item">
            <button onclick="location.href='crop_recommendation.php'">
                <img src="cr.jpg" alt="Crop Recommendation">
            </button>
            <span class="button-label">Crop Recommendation</span>
        </div>
        <div class="button-item">
            <button onclick="location.href='fertilizer_recommendation.php'">
                <img src="fert.jpg" alt="Fertilizer Recommendation">
            </button>
            <span class="button-label">Fertilizer Recommendation</span>
        </div>
        <div class="button-item">
            <button onclick="location.href='crop_prediction.php'">
                <img src="pred.jpg" alt="Crop Prediction">
            </button>
            <span class="button-label">Crop Prediction</span>
        </div>
        <div class="button-item">
            <button onclick="location.href='rainfall_prediction.php'">
                <img src="rain.jpeg" alt="Rainfall Prediction">
            </button>
            <span class="button-label">Rainfall Prediction</span>
        </div>
    </div>
    <script src="https://cdn.staticfile.org/jquery/3.6.3/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script src="https://cdn.staticfile.org/markdown-it/13.0.1/markdown-it.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/ee1c3da296.js"></script>
</body>
</html>
