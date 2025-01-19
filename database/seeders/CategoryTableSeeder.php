<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder {

	public function run()
	{

		// CategoriesSeeder
		Category::create(array(
				'profile_theme' => "عارضين",
				'name' =>"أشخاص مهمة"
			));

		// CategoriesSeeder
		Category::create(array(
				'profile_theme' => "black",
				'name' =>"لا احد"
			));

		// CategoriesSeeder
		Category::create(array(
				'profile_theme' => "yellow",
				'name' =>"إعلام"
			));

		// CategoriesSeeder
		Category::create(array(
				'profile_theme' => "blue",
				'name' =>"عارضين"
			));
	}
}
