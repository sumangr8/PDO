					PDO

Fetch by PDO : 
<?php
$qry=$db->query("select * from login");
while($row=$qry->fetch(PDO::FETCH_ASSOC)) //FETCH_NOM, FETCH_BOTH, FETCH_OBJ
{
	echo $row["name"];
}
?>

FetchAll :
<?php
$qry=$db->query("select * from login");
$row=$qry->fetchAll(PDO::FETCH_ASSOC); //FETCH_NOM, FETCH_BOTH, FETCH_OBJ
foreach($row as $x)
{
	echo $x["name"];
}
?>

How To add Custom Class : 
<?php
class User
{

}
$qry=$db->query("select * from login");
$qry->setFetchMode(PDO::FETCH_CLASS,'User');
$row=$qry->fetchAll();
foreach($row as $x)
{
	echo $x->name;
}
?>








How To Count Row : 
<?php
$qry=$db->query("select * from login");
$row=$qry->fetchAll(PDO::FETCH_ASSOC);
echo count($row);
?>

Second Method : 
<?php
$qry=$db->query("select * from login");
echo $count=$qry->rowCount();
?>

Insert : 
$qry=$db->query("insert into login (name,email) values ('Demo','d@gmail.com')");

How To Get LastInsert Id : 
$qry=$db->query("insert into login (name,email) values ('Demo1','d1@gmail.com')");
$last_id=$db->lastInsertid();
echo $last_id;

How To insert Last inserted in second table :  
<?php
$qry=$db->query("insert into login (name,email) values ('Demo1','d1@gmail.com')");
$last_id=$db->lastInsertid();
$db->query("insert into login_two (name,last) values ('Demo1','$last_id')");
?>

Prepare Statement : 
<?php
$qry=$db->prepare("insert into login (name,email) values(:name,:email)");
$qry->execute([
	':name' => 'suman',
	':email' => 'suman@gmail.com',
]);
?>



