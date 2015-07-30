<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Progressbar - Default functionality</title>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#progressbar" ).progressbar({
      value: 50
    });
  });
  </script>
    <style>
  #progressbar .ui-progressbar-value {
    background-color: #ccc;
  }
  </style>
</head>
<body>
 
<div id="progressbar"></div>
 
 
</body>
</html>