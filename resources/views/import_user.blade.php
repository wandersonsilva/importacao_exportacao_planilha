<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Import User</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <h1>Import Users using Laravel Excel</h1>
	<form action="{{ route('import') }}" method="post" enctype="multipart/form-data">
        <label>Import Users:</label>
        <input type="file" name="file"/>
        <input type="submit" name="submit" value="Import Data"/>
    </form>
  </body>
</html>