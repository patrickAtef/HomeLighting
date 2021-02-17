<?php
  extract($_REQUEST);
  //$file=fopen("looping.txt","a");
  $file = "looping.txt";
  
  if (isset($_GET['light-1'])) {
      file_put_contents($file, "on");
  } else {
      file_put_contents($file, "of");
  }

  if (isset($_GET['light-2'])) {
      echo 'light 2 is on <br>';
  } else {
      echo 'light 2 is off <br>';
  }

?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Exo+2&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

  <style>
    body {
      background-color: #f3f3f3;
      font-family: 'Roboto', sans-serif;
      color: #616161
    }

    .container {
      width: 90%;
      margin: auto;
      text-align: center;
      position: relative;
    }

    h1 {
      margin-top: 10%;
      font-size: 40px;
      -webkit-text-shadow: -1px -1px 2px #92d7ff, 1px 1px 2px #92d7ff;
      -moz-text-shadow: -1px -1px 2px #92d7ff, 1px 1px 2px #92d7ff;
      -o-text-shadow: -1px -1px 2px #92d7ff, 1px 1px 2px #92d7ff;
      text-shadow: -1px -1px 2px #92d7ff, 1px 1px 2px #92d7ff;
    }

    .switch {
      position: absolute;
      width: 60px;
      height: 34px;
    }

    .switch:first-of-type {
      top: 176px;
      left: 10%;
    }

    .switch:last-of-type {
      top: 176px;
      right: 10%;
    }

    h4 {
      position: absolute;
    }

    h4:first-of-type {
      top: 120px;
      left: 9.6%;
    }

    h4:last-of-type {
      top: 120px;
      right: 9%;
    }

    .switch input {
      opacity: 0;
      width: 0;
      height: 0;
    }

    .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #ccc;
      -webkit-transition: .4s;
      transition: .4s;
    }

    .slider:before {
      position: absolute;
      content: "";
      height: 26px;
      width: 26px;
      left: 4px;
      bottom: 4px;
      background-color: white;
      -webkit-transition: .4s;
      transition: .4s;
    }

    input:checked+.slider {
      background-color: #2196F3;
    }

    input:focus+.slider {
      box-shadow: 0 0 1px #2196F3;
    }

    input:checked+.slider:before {
      -webkit-transform: translateX(26px);
      -ms-transform: translateX(26px);
      transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
      border-radius: 34px;
    }

    .slider.round:before {
      border-radius: 50%;
    }

    .button {
      background-color: #2196F3;
      color: #f3f3f3;
      padding: 14px 20px;
      margin: 160px 0;
      border: none;
      cursor: pointer;
      font-family: 'Roboto', sans-serif;
      font-size: 18px;
    }

    .button:hover {
      opacity: 0.8;
    }
  </style>
</head>

<body>

  <div class="container">
    <h1>Lighting Control System</h1>
    <form action="index.php" method="get">
      <input type="hidden">
      <h4>First Light</h4>
      <label class="switch">
        <input id="check-1" type="checkbox" value="off" name="light-1" onclick="addVal('check-1');">
        <span class="slider round"></span>
      </label><br>

      <h4>Second Light</h4>
      <label class="switch">
        <input id="check-2" type="checkbox" value="off" name='light-2' onclick="addVal('check-2');">
        <span class="slider round"></span>
      </label>
      <br>
      <input id="button" class="button" type="submit" value="Turn On / Off">

    </form>
  </div>

  <script>
    function addVal(inputValue) {
      let input = document.getElementById(inputValue);
      if (input.value == 'off') {
        input.value = 'on';
      } else {
        input.value = 'off';
      }
    }
  </script>

</body>

</html>