<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eComm-project</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>


<style>
  *{
    font-family: 'Popins',sans-serif;

  }

    .input-header {
        text-align: center;
        margin: 20px 0 40px 0;
        color: #333;
        font-size: 30px;
        font-weight: 600;
    }


    .input-field .input-box {
        width: 100%;
        height: 60px;
        font-size: 17px;
        padding: 0 25px;
        margin-bottom: 15px;
        border-radius: 30px;
        border: none;
        box-shadow: 0px 5px 10px 1px rgba(0, 0, 0, 0.1);
        outline: none;
        transition: .3s;
    }

    ::placeholder {
        font-weight: 500;
        color: #222;
    }

    .input-box:hover {
        width: 105%;
        transform: scale(1.05, 1);
        
    }

    .buttons {
        position: relative;
        width: 100%;
        height: 60px;
        background: #222;
        border: none;
        border-radius: 30px;
        cursor: pointer;
        transition: .3s;
        color: #fff;
    }

    .buttons:hover {
        background: #000;
        transform: scale(1.05, 1);
    }

    .custom-login {
        height: 400px;
        
        
    }
    body{
        background: #dfdfdf;
    }

    img.slider-img {
        height: 300px !important;
    }
    img:hover{
        transform: scale(1.5, 1.5);
        transition: .5s;
    }

    .custom-product {
        height: 600px;
        
    }

    .slider-text {
        background-color: #0f0f0f12;
    }

    .trending-img {
        height: 100px;
    }

    .trending-item {
        float: left;
        width: 25%;
    }
    

    .detail-img {
        height: 200px;
    }

    .search-box {
        width: 450px !important;
    }

    .cart-list-devider {
        border-bottom: 1px solid grey;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }

   .footer a {
        color: #fff;
        font-weight: 600;
        
    
    }
    
</style>

</html>