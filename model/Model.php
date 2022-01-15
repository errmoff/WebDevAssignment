<?php


class Model{

	public static function getCategoryList(){
	$sql = "SELECT * FROM `categories` ORDER BY `categories`.`CategoryName` ASC";
	$db=new database();
	$rows=$db->getAll($sql);
	return $rows;	
	}	
	public static function getPropertyListM(){
	$sql =  "SELECT * FROM `property` ORDER BY RAND() LIMIT 4";
	$db=new database();
	$rows=$db->getAll($sql);
	return $rows;	
	}
	public static function getUsersList($id){
	$sql = "SELECT * FROM `users`";
	$db=new database();
	$rows=$db->getAll($sql);
	return $rows;	
	}
	
	
	public static function getPropertyList($id){
	$sql = "SELECT property.*, categories.* FROM `property`,`categories` WHERE property.CategoryId = categories.CategoryId AND categories.CategoryId=".$id." ORDER BY `PropertyName` DESC";
	$db=new database();
	$rows=$db->getAll($sql);
	return $rows;
		
	}	
	
	public static function getCommentsList($id){
	$sql = "SELECT * FROM comments WHERE CourseId=".$id." ORDER BY `CommentDate` DESC";
	$db=new database();
	$rows=$db->getAll($sql);
	return $rows;
		
	}
	
	public static function getPropertyDetail($id){
	$sql = "SELECT property.*, categories.* FROM `property`,categories WHERE property.CategoryId = categories.CategoryId AND property.PropertyId=".$id;
	$db=new database();
	$row=$db->getOne($sql);
	return $row;
		
		
	}	
	
	
	public static function getCategory($id){
	$sql = "SELECT * FROM categories WHERE CategoryId=".$id;
	$db=new database();
	$row=$db->getOne($sql);
	return $row;
		
		
	}
	
	public static function LoginResult(){
		$result =false;
		
		$username=$_POST['UserName'];
		$password=$_POST['UserPass'];
		
		$sql="SELECT * FROM `users` WHERE `UserName` = '$username' AND UserPass = '$password'";
		$db=new database();
		$item = $db->getOne($sql);
		if($item){
		$result=true;
		$_SESSION["UserEmail"]=$item['UserEmail'];
		$_SESSION["UserName"]=$item['UserName'];
		$_SESSION["PrivilegesId"]=$item['PrivilegesId'];
		$_SESSION["UserFirstName"]=$item['FirstName'];
		$_SESSION["UserSecondName"]=$item['SecondName'];
		$_SESSION["UserNumber"]=$item['UserNumber'];
		$_SESSION["UserId"]=$item['UserId'];
		
		}
		
		
		return $result;
		
		
	}

	public static function RegisterResult(){
		$result =false;
		
		$username=$_POST['UserName'];
		$password=$_POST['UserPass'];
		$Name=$_POST['UserFirstName'];
		$Surname=$_POST['UserSecondName'];
		$Number=$_POST['UserNumber'];
		$Email=$_POST['UserEmail'];

		$sql="INSERT INTO `users` (`UserId`, `UserName`, `UserEmail`, `UserPass`, `PrivilegesId`, `FirstName`, `SecondName`, `UserNumber`) VALUES (NULL, '$username', '$Email', '$password', '1', '$Name', '$Surname', '$Number');";
		$db=new database();
		$item = $db->getOne($sql);
		if($item){
		$result=true;
		}
		return $result;

		
	}
	
	
	
	
	
	
	public static function Logout(){
		unset($_SESSION['UserEmail']);
		unset($_SESSION['UserName']);
		unset($_SESSION['UserPass']);
		session_destroy();
		
	}
	
	
	public static function ProfileInfo($id){
	$sql="SELECT * FROM `users` WHERE UserId =$id";
	$db=new database();
	$rows=$db->getAll($sql);
	return $rows;
	
}

	public static function ProfileEdit($id){
		$sql="SELECT * FROM `users` WHERE `UserId` = $id";
		$db=new database();
		$row = $db->getOne($sql);
		
		$Name=$_POST['FirstName'];
		$Surname=$_POST['SecondName'];
		$Number=$_POST['UserNumber'];
		$Email=$_POST['UserEmail'];
		if($id != $_SESSION['UserId']){
		$PrivilegesId=$_POST['PrivilegesId'];

		$sql="UPDATE `users` SET `FirstName` = '$Name' WHERE `UserId` = $id;" 
		."UPDATE `users` SET `SecondName` = '$Surname' WHERE `UserId` = $id;" 
		."UPDATE `users` SET `UserNumber` = '$Number' WHERE `UserId` = $id;" 
		."UPDATE `users` SET `UserEmail` = '$Email' WHERE `UserId` = $id;"
		."UPDATE `users` SET `PrivilegesId` = $PrivilegesId WHERE `UserId` = $id";
		}else{
		$sql="UPDATE `users` SET `FirstName` = '$Name' WHERE `UserId` = $id;" 
		."UPDATE `users` SET `SecondName` = '$Surname' WHERE `UserId` = $id;" 
		."UPDATE `users` SET `UserNumber` = '$Number' WHERE `UserId` = $id;" 
		."UPDATE `users` SET `UserEmail` = '$Email' WHERE `UserId` = $id;";}
		
		$item = $db->executeRun($sql);
		return $row;
		
	}
	
	public static function EditCategory($id){
		$sql="SELECT * FROM categories WHERE CategoryId=".$id;
		$db=new database();
		$row = $db->getOne($sql);
		
		$CategoryName=$_POST['CategoryName'];
                $CategoryImg=$_POST['CategoryImg'];

	
		
		$sql="UPDATE `categories` SET `CategoryName` = '".$CategoryName."' WHERE `CategoryId` = $id;" ;
		"UPDATE `categories` SET `CategoryImg` = '".$CategoryImg."' WHERE `CategoryId` = $id;";
                $item = $db->executeRun($sql);
		return $row;
		
	}
	
		public static function EditProperty($id){
		$sql="SELECT * FROM property WHERE PropertyId=".$id;
		$db=new database();
		$row = $db->getOne($sql);
		
		$PropertyName=$_POST['PropertyName'];
                $PropertyImage1=$_POST['PropertyImage1'];
                $PropertyImage2=$_POST['PropertyImage2'];
                $PropertyArea=$_POST['PropertyArea'];
		$PropertyDesc=$_POST['PropertyDesc'];
		$PropertyZonePlace=$_POST['PropertyZonePlace'];
		$PropertyPrice=$_POST['PropertyPrice'];
		$ContactPhone=$_POST['ContactPhone'];
                $PropertyAdress=$_POST['PropertyAdress'];
                $NearestStation=$_POST['NearestStation'];
                $PropertyCondition=$_POST['PropertyCondition'];
                $PropertyGarages=$_POST['PropertyGarages'];
                $PropertyBathRooms=$_POST['PropertyBathRooms'];
                $PropertyLivingRooms=$_POST['PropertyLivingRooms'];
                $PropertyBedRooms=$_POST['PropertyBedRooms'];




	
		
		$sql="UPDATE `property` SET `PropertyName` = '".$PropertyName."' WHERE `PropertyId` = $id;" 
		."UPDATE `property` SET `PropertyImage1` = '".$PropertyImage1."' WHERE `PropertyId` = $id;" 
                ."UPDATE `property` SET `PropertyImage2` = '".$PropertyImage2."' WHERE `PropertyId` = $id;" 
                ."UPDATE `property` SET `PropertyArea` = '".$PropertyArea."' WHERE `PropertyId` = $id;" 
                ."UPDATE `property` SET `PropertyDesc` = '".$PropertyDesc."' WHERE `PropertyId` = $id;" 
		."UPDATE `property` SET `PropertyZonePlace` = '".$PropertyZonePlace."' WHERE `PropertyId` = $id;" 
		."UPDATE `property` SET `PropertyPrice` = '".$PropertyPrice."' WHERE `PropertyId` = $id;"
                ."UPDATE `property` SET `ContactPhone` = '".$ContactPhone."' WHERE `PropertyId` = $id;"
                ."UPDATE `property` SET `PropertyAdress` = '".$PropertyAdress."' WHERE `PropertyId` = $id;"
                ."UPDATE `property` SET `NearestStation` = '".$NearestStation."' WHERE `PropertyId` = $id;"
                ."UPDATE `property` SET `PropertyCondition` = '".$PropertyCondition."' WHERE `PropertyId` = $id;"
                ."UPDATE `property` SET `PropertyGarages` = '".$PropertyGarages."' WHERE `PropertyId` = $id;"
                ."UPDATE `property` SET `PropertyBathRooms` = '".$PropertyBathRooms."' WHERE `PropertyId` = $id;"
                ."UPDATE `property` SET `PropertyLivingRooms` = '".$PropertyLivingRooms."' WHERE `PropertyId` = $id;"
                ."UPDATE `property` SET `PropertyBedRooms` = '".$PropertyBedRooms."' WHERE `PropertyId` = $id";
		$item = $db->executeRun($sql);
		return $row;
		
	}
	
	public static function AddCategoryResult(){
		
		$result =false;
		
		$CategoryName=$_POST['CategoryName'];
                $CategoryImg=$_POST['CategoryImg'];


		$sql="INSERT INTO `categories` (`CategoryId`, `CategoryName`, `CategoryImg`) VALUES (NULL, '$CategoryName', '$CategoryImg');";
		$db=new database();
		$item = $db->getOne($sql);
		if($item){
		$result=true;
		}
		return $result;
		
		
	}	
	
	public static function AddPropertyResult($id){
		
		$result =false;
		
		$PropertyName=$_POST['PropertyName'];
                $PropertyImage1=$_POST['PropertyImage1'];
                $PropertyImage2=$_POST['PropertyImage2'];
                $PropertyArea=$_POST['PropertyArea'];
		$PropertyDesc=$_POST['PropertyDesc'];
		$PropertyZonePlace=$_POST['PropertyZonePlace'];
		$PropertyPrice=$_POST['PropertyPrice'];
		$ContactPhone=$_POST['ContactPhone'];
                $PropertyAdress=$_POST['PropertyAdress'];
                $NearestStation=$_POST['NearestStation'];
                $PropertyCondition=$_POST['PropertyCondition'];
                $PropertyGarages=$_POST['PropertyGarages'];
                $PropertyBathRooms=$_POST['PropertyBathRooms'];
                $PropertyLivingRooms=$_POST['PropertyLivingRooms'];
                $PropertyBedRooms=$_POST['PropertyBedRooms'];
                
            



		$sql="INSERT INTO `property` (`PropertyId`, `CategoryId`, `PropertyName`, `PropertyImage1`, `PropertyImage2`, `PropertyArea`, `PropertyDesc`, `PropertyZonePlace`, `PropertyPrice`, `ContactPhone`, `PropertyAdress` , `NearestStation`, `PropertyCondition`, `PropertyGarages`, `PropertyBathRooms`, `PropertyLivingRooms`, `PropertyBedRooms`) VALUES (NULL, '$id', '$PropertyName', '$PropertyImage1', '$PropertyImage2', '$PropertyArea', '$PropertyDesc', '$PropertyZonePlace', '$PropertyPrice', '$ContactPhone','$PropertyAdress', '$NearestStation', '$PropertyCondition','$PropertyGarages', '$PropertyBathRooms', '$PropertyLivingRooms', '$PropertyBedRooms');";
		$db=new database();
		$item = $db->getOne($sql);
		if($item){
		$result=true;
		}
		return $result;
		
		
	}
	
	
	
	public static function DelCategory($id){
		

		$sql="SELECT * FROM `categories` WHERE `CategoryId` = $id";
		$db=new database();
		$row = $db->getOne($sql);
		$sql="DELETE FROM `course` WHERE `CategoryId` = $id";
		$sql1="DELETE FROM `categories` WHERE `CategoryId` = $id";
		$item = $db->executeRun($sql);
		$item1 = $db->executeRun($sql1);
		return;
		
	}	
	public static function DelProperty($id){
		

		$sql="SELECT * FROM `property` WHERE `PropertyId` = $id";
		$db=new database();
		$row = $db->getOne($sql);
		$sql="DELETE FROM userfavproperty  WHERE `PropertyId` = $id";
		$sql1="DELETE FROM property  WHERE `PropertyId` = $id";
		$item = $db->executeRun($sql);
		$item1 = $db->executeRun($sql1);
		return;
		
	}
	
	public static function UserAddProperty($id){
		$result =false;
		
		$UserId=$_SESSION['UserId'];


		$sql="INSERT INTO `userfavproperty` (`UserId`, `PropertyId`, `PropertyAddDate`) VALUES ('$UserId', '$id', NOW());";
		$db=new database();
		$item = $db->getOne($sql);
		if($item){
		$result=true;
		}
		return $result;
		
		
		
	}
	
	
	public static function GetMyProperty($id){
	$sql = "SELECT property.*, userfavproperty.* FROM ` property`,`userfavproperty` WHERE  property.PropertyId = userfavproperty.PropertyId AND userfavproperty.PropertyId=".$id." ORDER BY `PropertyName` DESC";
	$db=new database();
	$rows=$db->getAll($sql);
	return $rows;
		
		
		
	}

	
	
	public static function PropertySold($id){
		
		$sql="SELECT * FROM property WHERE PropertyId=".$id;
		$db=new database();
		$row = $db->getOne($sql);

		$sql="UPDATE `property` SET `StatusId` = 2 WHERE `PropertyId` = $id;";
		$item = $db->executeRun($sql);
		return $row;
		
	
	}
	
	public static function DeleteProfile($id){

		$sql="SELECT * FROM `users` WHERE `UserId` = $id";
		$db=new database();
		$row = $db->getOne($sql);
		$sql="DELETE FROM `users` WHERE `UserId` = $id";
		$item = $db->executeRun($sql);
		return;
		
		
		
		
	}
	
	
		
		
		
		
	
	

	
	
	
}//class


