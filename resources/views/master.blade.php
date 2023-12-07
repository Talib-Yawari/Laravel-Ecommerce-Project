<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/custom-styles.css') }}"> <!-- Link to your custom CSS file -->

    <title>Ecommerce Project</title>
</head>
<body>
    @include('header')

    <div class="container">
        @yield('content')
    </div>

    @include('footer')

    <style>
        .custom-login {
            height: 73vh;
            padding-top: 100px;
        }

        img.slider-img {
            height: 400px !important;
        }

        .custom-product {
            height: 600px;
        }

        .slider-img {
            object-fit: cover;
            max-height: 400px;
        }

        .trending-wrapper {
            align-items: flex-end;
        }
        body {
            margin-bottom: 50px; /* Set margin to match the bottom margin of your footer */
        }

        .trending-image {
            max-width: 100%;
            max-height: 150px;
        }
        .trending-item {
            height: 250px; /* Adjust the height as needed */
        }
        .trending-wrapper {
            margin-bottom: 20px; /* Add margin to create space above the footer */
        }


        @media (max-width: 767px) {
        .trending-item {
                height: 200px; /* Adjust the height for smaller screens */
            }
        }
        body {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}



footer {
    background-color: #f8f9fa; /* Use your desired background color */
    text-align: center;
    padding: 1rem;
    position: fixed;
    bottom: 0;
    width: 100%;
}
.main{
    height: 100vh;
}

    </style>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Additional scripts can be added here -->
</body>
</html>
