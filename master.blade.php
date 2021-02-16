<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title> @yield('title')</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre&family=Abril+Fatface&family=Averia+Serif+Libre:ital,wght@1,300&family=Denk+One&family=El+Messiri&family=Imbue:wght@500&family=Kosugi+Maru&family=Nanum+Gothic+Coding:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Averia+Serif+Libre:ital,wght@1,300&family=El+Messiri&family=Imbue:wght@500&family=Nanum+Gothic+Coding:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* color prmary = #F9C226 */
html,body{
    background-color: rgb(235, 235, 235);
    font-family:'Denk One', sans-serif;
    overflow-x: hidden !important;
    margin: 0px !important;
    padding: 0px !important;
}


.nav{
    position: fixed;
    z-index: 1000;
    top: 0;
    right: 0;
    left: 0;
    height: 67px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    padding: 0 25px 0 25px;
    background-color: rgb(213, 198, 223);
    box-shadow: 0 19px 38px rgba(138, 124, 124, 0.1);
    
}

.nav .links a{
    margin-right: 25px;
    font-size: 23px;
    font-weight: 600;
    color: rgb(41, 38, 38);
}


.nav a{
    font-size: 25px;
    
    margin-left: 25px;
}


.container h1{
   
    font-family: 'Imbue', serif;
}


</style>
</head>
<body>
    @include('master._navigasi')
    @yield('content')
    @include('master._footer')
</body>
</html>