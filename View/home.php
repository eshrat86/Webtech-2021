<?php
include('../control/homecheck.php');
?>
<!DOCTYPE html>
<html>
<body>

<h2>Home</h2>

<form action="" method="post">
    
    <label for="feet">Converter:</label>
     <select id="converter" name="feet">
     <option value="feet">Feet</option>
     <option value="inch">Inch</option><br><br>
     </select><br>
     <label for="value">Value:</label><br>
     <input type="text" id="value" name="value" value="3"><br>
     <label for="result">Result:</label><br>
     <input type="text" id="result" name="result" value="36"><br><br>
     <input type="submit" value="Submit">
</form>
<br>
</body>
</html>