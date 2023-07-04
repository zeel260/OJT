<!DOCTYPE html>
<body>
    <?php
$array1=array("red","black","green");
$array2=array("blue","yellow","grey");
$rev=array_reverse($array1);
print_r($rev);
echo '<br/>' . '<br/>';
$search=array_search("violet",$array2);
print_r($search);
echo '<br/>' . '<br/>';
foreach($array1 as $a)
{
    echo "size is:$a <br/>";

}
echo '<br/>' . '<br/>';
$array3=array("apple"=>"100","purple"=>"150","peach"=>"250","strawberry"=>"550");
print_r(array_change_key_case($array3,CASE_UPPER));
echo '<br/>';
print_r(array_change_key_case($array3,CASE_LOWER));
echo '<br/>' . '<br/>';
print_r(array_chunk($array3,2));
echo '<br/>' . '<br/>';

?>
</body>
</html>