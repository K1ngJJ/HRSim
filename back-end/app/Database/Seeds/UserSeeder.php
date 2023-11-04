<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\AdminModels\UserModel;

class UserSeeder extends Seeder
{
	public function run()
	{
		$user_object = new UserModel();

		$user_object->insertBatch([
			[
				"user_name" => "Admin",
				"user_email" => "admin@gmail.com",
				"user_role" => "admin",
				"user_password" => password_hash("12345678", PASSWORD_DEFAULT)
			],
			[
				"user_name" => "Customer",
				"user_email" => "customer@gmail.com",
				"user_role" => "customer",
				"user_password" => password_hash("12345678", PASSWORD_DEFAULT)
			]
		]);
	}
}
