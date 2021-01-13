/* this is the beginning section of php */

// basics //

<?php
echo "Tomorrow I \ 'll learn PHP global variables."."\n";
echo "This is a bad command : del c:\\*.*"."\n";
?>



<?php
$var = "PHP Tutorial";
?>

<!DOCTYPE html>

<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <title><?php echo $var; ?> - W3resource!</title>
  </head>
  <body>
  <h3><?php echo $var; ?></h3>
  <p>PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. It is a cross-platform, HTML embedded server-side scripting language and is especially suited for web development.</p>
  <p><a href="https://www.w3resource.com/php/php-home.php">Go to the <?php echo $var; ?></a>.</p>
</body>
</html>

//this just calls the php variable into the html//


//ALGORITHIMS//

<?php
function test ($x, $y)
{
    return $x == $y ? ($x + $y)*3 : $x + $y;
}

echo test 
?>

<?php

function number ($n)
{
 $x = 51;
    if $n > 51 {
        return ($n - $x)*3;
    }
 return $x -$n;
}
?>

<?php

function verify ($x , $y)

    $x + $y = $n;

    if $n = 30 {
        return $n = true
    } else $n !== 30 {
        return $n = false
    }

?>

// solutions //

<?php
function test ($x , $y)
{
    return ($x == 30) || ($y == 30) || ($x +$y == 30)
}
?>

