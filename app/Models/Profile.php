<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Profile extends model {
	/**
	 * Fillable fields for a Profile
	 *
	 * @var array
	 */
	protected $fillable = [
			"username",
			"pic",
			"first_name",
			"last_name",
			"display_name",
			"slug",
			"position",
			"supervisor",
			"employment_title",
			"employment_role",
			"employment_status",
			"phone",
			"phone_type",
			"website",
			"company",
			"gender",
			"about_me",
			"note",
			"skypeid",
			"githubid",
			"twitter_username",
			"instagram_username",
			"facebook_username",
			"linked_in_url",
			"google_plus_url",
			"facebook_url",
			"user_api_key",
			"user_api_secret",
			"user_activation_key",
			"activation_code_id",
			"activation_code",
			"confirmation_code",
			"confirmed",
			"activated",
			"published",
			"is_employee",
			"is_public",
			"is_fake",
			"is_active",
			"birth_date",
			"dob_month",
			"dob_day",
			"dob_year",
			"profile_activated_on",
			"activated_on",
			"published_on",
			"user_id"
	];

	/**
	 * The attributes that should be casted to native types.
	 *
	 * @var array
	 */
	protected $casts = [
			"username" => "string",
			"pic" => "string",
			"display_name" => "string",
			"slug" => "string",
			"position" => "string",
			"supervisor" => "string",
			"employment_title" => "string",
			"employment_role" => "string",
			"employment_status" => "string",
			"phone" => "string",
			"phone_type" => "string",
			"website" => "string",
			"company" => "string",
			"gender" => "string",
			"about_me" => "string",
			"note" => "string",
			"skypeid" => "string",
			"githubid" => "string",
			"twitter_username" => "string",
			"instagram_username" => "string",
			"facebook_username" => "string",
			"linked_in_url" => "string",
			"google_plus_url" => "string",
			"facebook_url" => "string",
			"user_api_key" => "string",
			"user_api_secret" => "string",
			"user_activation_key" => "string",
			"activation_code_id" => "string",
			"activation_code" => "string",
			"confirmation_code" => "string",
			"confirmed" => "boolean",
			"activated" => "boolean",
			"published" => "boolean",
			"is_employee" => "boolean",
			"is_public" => "boolean",
			"is_fake" => "boolean",
			"is_active" => "boolean",
			"birth_date" => "string",
			"dob_month" => "string",
			"dob_day" => "string",
			"dob_year" => "string",
			"user_id" => "integer"
	];

	public static $rules = [

	];




	 

	public function user()
	{
		return $this->belongsTo('User');
	}
}