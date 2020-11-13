<!DOCTYPE html>
<html>
<head>
	<title>Laravel HomePage</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
	<h1>Notifications HomePage</h1>

  <div class="container">
    <div class="row">
      <h1>In order to check your Notifications click the button below to be redirected to the Notifications Lists</h1>
      <a class="btn btn-success" href="{{ route('notification.index') }}">Go to Notifications List</a>
    </div>
  </div>


</body>
</html>
