<?php 


class Controller{
	public static function StartSite(){
                 $propertylist=Model::getPropertyListM();
		include_once 'view/start.php';
		
	}
	
	public static function AboutUs(){
		include_once 'view/aboutUs.php';
	}
	
	public static function Properties(){
     
		$categor=Model::getCategoryList();
                
		include_once 'view/properties.php';
	}
	
	public static function Contacts(){
		include_once 'view/contacts.php';
	}
	
	public static function Login(){
		include_once 'view/login.php';
	}
	public static function Reg(){
		include_once 'view/Reg.php';
	}
	
	public static function PropertyList($id){;
	$categoryList=Model::getPropertyList($id);
	include_once 'view/propertyList.php';	
	}
 
		

	
	public static function PropertyDetail($id){
	$course=Model::getPropertyDetail($id);


	$usersList=Model::getUsersList($id);
	include_once 'view/propertyDetail.php';	
	}
	
	public static function LoginResult(){
		$result = Model::LoginResult();
		header('Location: CorrectLogin');
		
		
	}
	
	public static function MyProfile($id){
		$profile=Model::ProfileInfo($id);
		include_once 'view/myProfile.php';
		
	}
	
	
	public static function RegisterResult(){
		$result = Model::RegisterResult();
		header('Location: profile');
		
	}
	

	public static function DelCategory($id){
		if($_SESSION['PrivilegesId'] >= 2){
		$result = Model::DelCategory($id);
		}
		header('Location:properties');
		
	}
	
	public static function DelProperty($id){
		if($_SESSION['PrivilegesId'] >= 2){
		$result = Model::DelProperty($id);
	
		}
		header('Location:properties');
		
	}
	
	
	public static function Logout(){
		$result = Model::Logout();
		header('Location: ./');
		} 
	
	public static function CorrectLogin(){
		
		include_once 'view/CorrectLogin.php';
	}
		
	public static function CorrectRegister(){
		$result= Model::getUsersList();
		include_once 'view/CorrectRegister.php';
	}
	
	public static function Profile(){
		
		include_once 'view/profile.php';
	}
	
	
		
		public static function ProfileEditForm($id){
		$profile=Model::ProfileInfo($id);
		include_once 'view/profileEdit.php';
			
		}
		public static function ProfileEditResult($id){
		$result=Model::ProfileEdit($id);
		include_once 'view/profile.php';
		}	
		
		public static function EditCategory($id){
		$category=Model::getCategory($id);
		include_once 'view/editCategory.php';
			
		}
		
	
		public static function EditCategoryResult($id){
		$result=Model::EditCategory($id);
		header('Location:properties');
		}		
		
		
		public static function EditProperty($id){
		$property=Model::getPropertyDetail($id);
		include_once 'view/editProperty.php';
			
		}
		
		public static function EditPropertyResult($id){
		$result=Model::EditProperty($id);
		header('Location:property?id='.$id.'');
		}
	
	
	
		public static function AddCategory(){
		include_once 'view/addCategory.php';
		}	
		
		public static function AddCategoryResult(){
		$result = Model::AddCategoryResult();
		header('Location:properties');

	}
	
		
		public static function AddProperty($id){
		include_once 'view/addProperty.php';
		}
		
		public static function AddPropertyResult($id){
		$result = Model::AddPropertyResult($id);
		
		header('Location:category?id='.$id.'');
	}
	
		
	
	public static function MyProperty($id){
	$myCourses = Model::GetMyProperty($id);
	include_once 'view/myProperty.php';
	}
	
	public static function PropertySold($id){
		if($_SESSION['PrivilegesId'] >= 2){
		$result=Model::PropertySold($id);
		}
		header('Location:properties');
	}
	
		
	public static function AdminMenu(){ //DEV
		$UserList=Model::getUsersList();
		include_once 'view/adminMenu.php';
	}
	
	public static function addUserForm(){
		
		include_once 'view/addUser.php';
	}
		
	public static function DeleteProfile($id){
		if($_SESSION['PrivilegesId'] >= 2){
		$result = Model::DeleteProfile($id);
		}
		header('Location:adminMenu');
	}
	
	public static function DeleteComment($comId, $id){
		if($_SESSION['PrivilegesId'] >= 2){
		$result = Model::DeleteComment($comId);
		}
		header('Location:course?id='.$id.'');
	}
		public static function AddComment($id){
		if($_SESSION['PrivilegesId'] >= 1){
		$result = Model::AddComment($id);
			}
		header('Location:properties?id='.$id.'');
	}
	
	public static function error404(){
		
		include_once 'view/error404.php';

	}
	

	

}//class