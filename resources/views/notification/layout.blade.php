<!DOCTYPE html>
<html>
<head>
	<title>Notifications HomePage</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    #titleBox{
      background-color: #f5f5f5;
      border-bottom: solid;
      border-color: #e8e8e8;
      padding:10px;
    }
    #notificationTypeBox{
      border-bottom: solid;
      border-color: #e8e8e8;
      padding:20px;
    }
    #msgBox{
      padding:20px;
      border-bottom: solid;
      border-color: #e8e8e8;
    }

    #datesBox{
      padding:20px;

    }
  </style>
</head>
<body>
	<h1></h1>

  <div class="container">

    @yield('content')

  </div>

</body>
</html>
