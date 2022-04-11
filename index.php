<html>
  <head>
    <title>PHP Test</title>
<?php 
// php library loading first

// local php functions go here 
function getPost( $name )  #version 2
{
# check to see if it been used, if it has, return it
    if ( isset($_POST[$name]) ) 
    {
        return htmlspecialchars($_POST[$name]);
    }
    return "";
}


// local php startup code goes here 

?>

    
  </head>
  <body>
  


<?php $first = (int)$_POST['first_number'];
      $second = (int)$_POST['second_number'];
      
?>
  



<form method='POST' action=''>
First Number:
<input type='text' name='first_number' value='<?php echo getPost("first_number");?>'> <br>
Second Number:
<input type='text' name='second_number' value='<?php echo getPost("second_number");?>'> <br>
  
<input type='submit' name='add' value='ADD'>
<input type='submit' name='subtract' value='SUBTRACT'>
<input type='submit' name='multiply' value='MULTIPLY'>
<input type='submit' name='divide' value='DIVIDE'>
</form>


<?php 
$addition = $first + $second;
$subtraction = $first - $second;
$multiply = $first * $second;
$divide = $first / $second;
?>


<?php 
    if (isset($_POST['add'])) {
      
        echo "$first Plus $second = ".$addition;
          }
    else {
        ;
    }

  if (isset($_POST['subtract'])) {
      
        echo "$first Minus $second = ".$subtraction;
          }
    else {
        ;
    }

if (isset($_POST['multiply'])) {
      
        echo "$first Times $second = ".$multiply;
          }
    else {
        ;
    }

if (isset($_POST['divide'])) {
      
        echo "$first Divided By $second = ".$divide;
          }
    else {
        ;
    }
?>

  </body>
</html>