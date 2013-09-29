<?php
if (isset($_GET['add'])){
echo "You provided a barcode<p>";
$isbn =	$_GET['add']/1;
echo $isbn;
/*
$xmldat = simplexml_load_file('http://isbndb.com/api/books.xml?access_key=PEM3592Y&results=subjects&index1=isbn&value1='.$isbn);
#$xmldat = simplexml_load_file('ex.xml');
$title = $xmldat->BookList->BookData->Title;
$author = $xmldat->BookList->BookData->AuthorsText;

/*$xmldat->BookList->BookData->Subjects->Subject[0];*/
/*
$con=mysqli_connect("127.0.0.1","root","root","bookalert");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result=mysqli_query($con,"SELECT quantity FROM inventory WHERE isbn = ".$isbn);
$quantity = 1;
while($row = mysqli_fetch_array($result))
  {
  $quantity=$row['quantity']+1;
  echo "<br>Quantity: ".$quantity;
  }
if($quantity==1){
mysqli_query($con,"INSERT INTO inventory VALUES ( ".$isbn." , '".$title."' , '".$author."' , ".$quantity." );");
}
else {
$updatequery="UPDATE inventory SET quantity=".$quantity." WHERE isbn = $isbn ;";
echo $updatequery;
mysqli_query($con,$updatequery);
}
mysqli_close($con);

echo "<!--";
print_r($xmldat);
echo "-->";
*/
} else {
echo "Barcode not provided";
}
?>
<script>
setTimeout('location="http://zxing.appspot.com/scan?ret=http://bookalert.me/bulkadd?add={CODE}";',10000);
</script><p>
<a href="http://zxing.appspot.com/scan?ret=http://bookalert.me/bulkadd?add={CODE}">SCAN NOW</a>
