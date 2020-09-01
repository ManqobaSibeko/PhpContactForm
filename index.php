<?php

$name = array('one','two','three','four','five','six','seven')?>

<?php echo $name[0];?><br>
<?php echo $name[1];?><br>
<?php echo $name[2];?><br>

<?php echo print_r($name) ?>
<br>
<hr>
<?php $Food =array("chinese"=>"Sushi","italian"=>"Spaghatti","Zulu"=>"ulusu") ?>
<?php echo $Food["chinese"] ?><br>
<pre>
<?php echo print_r($Food); ?>
</pre>

<br>
<hr>
<pre>
<?php array_pop($name);?>

<h1>new array</h1> <br>
<?php echo print_r($name);?><pre>
<br>
<hr>
<?php
$weather = "sunny";

if ($weather == "sunny"){
    echo "kumnandi";
}else{
    echo "kuyabora";
};
?>

<br>
<hr>

<?php

function inclu(){
echo "1 <br>";
echo "2 <br>";
echo "3 <br>";
}

inclu();



?>


