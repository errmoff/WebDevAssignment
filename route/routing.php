<?php

$host = explode('?',$_SERVER['REQUEST_URI'])[0];
$num=substr_count($host, '/');
$path = explode('/', $host)[$num];

if($path == '' OR $path == 'index.php')
{
	$response = Controller::StartSite();
}
elseif($path == 'aboutUs'){
	$response = controller::AboutUs();
}

elseif($path == 'properties'){
	$response = controller::Properties();
	
}
elseif($path=='category' && isset($_GET['id'])){
	$response = controller::PropertyList($_GET['id']);
}


elseif($path=='property' && isset($_GET['id'])){
	$response = controller::PropertyDetail($_GET['id']);
}

elseif($path == 'contacts'){
	$response = controller::Contacts();
}


elseif($path == 'login'){
	$response = controller::Login();
}
elseif($path == 'reg'){
	$response = controller::reg();
}


elseif($path=='loginResult'){
	$response = Controller::LoginResult();

}	

elseif($path =='CorrectLogin'){
	$response = Controller::CorrectLogin();
}elseif($path =='CorrectRegister'){
	$response = Controller::CorrectRegister();
}

elseif($path == 'profile'){
	$response = Controller::Profile();
	
}

elseif($path=='registerResult'){
$response = Controller::RegisterResult();	
}
	
elseif($path=='logout'){
	$response = Controller::Logout();
	
}



elseif($path=='MyProfile' && isset($_GET['id'])){
	$response = Controller::MyProfile($_GET['id']);
}

elseif($path=='ProfileEdit' && isset($_GET['id'])){
$response = Controller::ProfileEditForm($_GET['id']);

}
	
elseif($path=='ProfileEditResult' && isset($_GET['id'])){
	$response = Controller::ProfileEditResult($_GET['id']);

}
	

elseif($path=='editCategory' && isset($_GET['id'])){
	$response = Controller::EditCategory($_GET['id']);

}

	elseif($path=='editCategoryResult' && isset($_GET['id'])){
	$response = Controller::EditCategoryResult($_GET['id']);

}
	
	
elseif($path=='editProperty' && isset($_GET['id'])){
	$response = Controller::EditProperty($_GET['id']);

}

	elseif($path=='editPropertyResult' && isset($_GET['id'])){
	$response = Controller::EditPropertyResult($_GET['id']);

}
	
elseif($path=='addCategory'){
	$response = Controller::AddCategory();
}
	elseif($path=='editCategoryResult' && isset($_GET['id'])){
	$response = Controller::EditCategoryResult($_GET['id']);

}
	
elseif($path=='addProperty' && isset($_GET['id'])){
	$response = Controller::AddProperty($_GET['id']);
}

elseif($path=='addCategoryResult'){
	$response = Controller::AddCategoryResult();
}

elseif($path=='addPropertyResult' && isset($_GET['id'])){
	$response = Controller::AddPropertyResult($_GET['id']);
}

elseif($path=='deleteCategory' && isset($_GET['id'])){
	$response = Controller::DelCategory($_GET['id']);
}

elseif($path=='deleteProperty' && isset($_GET['id'])){
	$response = Controller::DelProperty($_GET['id']);
}

elseif($path=='userAddProperty' && isset($_GET['id'])){
	$response = Controller::UserAddProperty($_GET['id']);
}

elseif($path=='myProperty' && isset($_GET['id'])){
	$response = Controller::MyProperty($_GET['id']);
}
elseif($path=='propertySold' && isset($_GET['id'])){
	$response = Controller::PropertySold($_GET['id']);
}

elseif($path=='adminMenu'){
	$response = Controller::AdminMenu();
	
}

elseif($path=='addUser'){
	$response = Controller::addUserForm();
}

elseif($path=='deleteProfile' && isset($_GET['id'])){
	$response = Controller::DeleteProfile($_GET['id']);
}

else {
	$response = Controller::error404();
}
?>
