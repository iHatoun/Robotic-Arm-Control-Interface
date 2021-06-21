‪<!DOCTYPE html>‬
‪<html>‬
‪<head>‬
‪<meta charset="UTF-8">‬
‪<meta name="viewport" content="width=device-width, initial-scale=1">‬
‪<title>ARM CONTROL</title>‬
‪<link rel="stylesheet" href="style.css"> ‬

‪</head>‬
‪<body>‬
‪    <h1 class="control">ARM CONTROL</h1>‬
‪    <h4>MOTOR 1</h4>‬
‪    <div class="slidecontainer">‬
  <form id="myForm" action="index.php" method = "POST">
‪      <input type="range" min="0" max="180" class="slider" value="0" id="myRange1" name = "v1">‬
‪      <p>Value: <span id="demo1"></span></p>‬
‪    </div>‬
‪    ‬
‪    <h4>MOTOR 2</h4>‬
‪    <div class="slidecontainer">‬
‪      <input type="range" min="0" max="180" class="slider" value="0" id="myRange2" name = "v2">‬
‪      <p>Value: <span id="demo2"></span></p>‬
‪    </div>‬
‪    ‬
‪    <h4>MOTOR 3</h4>‬
‪    <div class="slidecontainer">‬
‪    <input type="range" min="0" max="180" class="slider" value="0" id="myRange3" name = "v3">‬
‪      <p>Value: <span id="demo3"></span></p>‬
‪    </div>‬
‪    ‬
‪    <h4>MOTOR 4</h4>‬
‪    <div class="slidecontainer">‬
‪      <input type="range" min="0" max="180" class="slider" value="0" id="myRange4" name = "v4">‬
‪      <p>Value: <span id="demo4"></span></p>‬
‪    </div>‬
‪    ‬
‪    <h4>MOTOR 5</h4>‬
‪    <div class="slidecontainer">‬
‪      <input type="range" min="0" max="180" class="slider" value="0" id="myRange5" name = "v5">‬
‪      <p>Value: <span id="demo5"></span></p>‬
‪    </div>‬
‪    ‬
‪    <h4>MOTOR 6</h4>‬
‪    <div class="slidecontainer">‬
‪      <input type="range" min="0" max="180" class="slider" value="0" id="myRange6" name = "v6">‬
‪      <p>Value: <span id="demo6"></span></p>‬
‪    </div>‬
‪    ‬
‪    <button class="btn save" name="save">Save</button>‬
‪    <button class="btn on"  name="on">Turn On</button>‬
‪    <script src="main.js">‬
‪    </script>‬
‪    <footer>‬
‪      <p>By: Hatoun Majid Aljuaid<br>‬
‪    </form>‬
‪    </footer>‬
‪    ‬
‪  ‬
‪    ‬

  <?php
  $v1=$_POST["v1"];
  $v2=$_POST["v2"];
  $v3=$_POST["v3"];
  $v4=$_POST["v4"];
  $v5=$_POST["v5"];
  $v6=$_POST["v6"];
$conn = new mysqli("localhost" , "root","","arm control");
if(isset($_POST["save"])){
$stmt = $conn->prepare("INSERT INTO control(motor1,motor2,motor3,motor4,motor5,motor6) values(?,?,?,?,?,?);");
$stmt->bind_param("iiiiii",$v1,$v2,$v3,$v4,$v5,$v6);
$stmt->execute();
echo "Saved Successfully";
        }
        if(isset($_POST["on"])){
          $stmt=$conn->prepare("INSERT INTO butoon values (NULL,1);");
          $stmt->execute();
           echo "ON Successfully";
  }
          ?>
</body>
</html>