<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\User;
use App\Models\Training\Online;
use App\Models\Training\Offline;
use App\Models\Training\live;
use App\Models\Training\Training_description;
use App\Models\Services\RequestSkill;
use App\Models\Products\product;
use App\Models\Products\productImage;
use App\Models\Jobs\JobSkill;
use App\Models\Jobs\JobRegister;
use App\Models\Jobs\Partnership;
use App\Models\Home\HomeContent;
use App\Models\Greenleaf\Greenleaf;
use App\Models\Affiliate\Affiliate_description;
use App\Models\Affiliate\Affiliate;
use App\Models\About\Company;
use App\Models\About\FAQ;
use App\Models\Categories\Category;
use App\Models\Transaction\Order;
use App\Models\Transaction\Order_details;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'referred_by' => rand(1,10),
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Company::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'body' => $faker->paragraph(4),
        'img' => "1.jpg"
    ];
});

$factory->define(productImage::class, function (Faker $faker) {
    return [
        'img_name' => $faker->word,
        'img' => $faker->randomElement(['1.jpg','3.jpg','2.jpg','4.jpg','5.jpg']),
        'product_id' => Product::all()->random()->id,
    ];
});

$factory->define(HomeContent::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'body' => $faker->paragraph(4),
        'img' => "2.jpg",
        'bg' => "Nature Digital Tech",
        
    ];
});

$factory->define(JobSkill::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'body' => $faker->paragraph(3),
    ];
});

$factory->define(Training_description::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'body' => $faker->paragraph(3),
        'img' => "2.jpg",

    ];
});

$factory->define(Affiliate_description::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'body' => $faker->paragraph(3),
        'img' => "2.jpg",

    ];
});


$factory->define(Affiliate::class, function (Faker $faker) {
    return [
        'user_id' => User::all()->random()->id,
        'address' => $faker->address,
        'mobile' => $faker->phoneNumber,
        'state' => rand(1, 36),
        'img' => '1.jpg',

    ];
});

$factory->define(JobRegister::class, function (Faker $faker) {
    return [
        'full_name' => $faker->name,
        'mobile' => $faker->phoneNumber,
        'email' => $faker->email,
        'state_id' => rand(1, 36),
        'jobskill_id' => JobSkill::all()->random()->id,

    ];
});

$factory->define(RequestSkill::class, function (Faker $faker) {
    return [
        'full_name' => $faker->name,
        'mobile' => $faker->phoneNumber,
        'email' => $faker->email,
        'state' => $faker->state,
        'skill' => $faker->word,
        'msg' => "some message.....",
    ];
});

$factory->define(Offline::class, function (Faker $faker) {
    return [
        'subject' => $faker->word,
        'body' => $faker->paragraph(3),
        'location' => "Abuja",
        'start_date' => $faker->dateTime,
        'end_date' => $faker->dateTime,
        'contact' => "+234(0)8175842817, <br /> nfo@naturedigitaltech.com",

    ];
});

$factory->define(Online::class, function (Faker $faker) {
    return [
        'subject' => $faker->word,
        'body' => $faker->paragraph(3),
        'location' => "Abuja",
    ];
});

$factory->define(live::class, function (Faker $faker) {
    return [
        'subject' => $faker->word,
        'body' => $faker->paragraph(3),
        'wha_link' => "whatsApp_link",
        'contact' => "Abuja",
    ];
});

$factory->define(Category::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'body' => $faker->paragraph(3),
    ];
});

$factory->define(Order::class, function (Faker $faker) {
    return [

        'full_name' => $faker->name,
		'mobile' => $faker->phoneNumber,
		'address' => $faker->address,
		'email' => $faker->safeEmail,
		'state' => $faker->state,
        'ref' => rand(0,99999),
		'order_status' => $faker->randomElement(['Transit','Delivered','Returned']),
        'user_id' => User::all()->random()->id

    ];
});

$factory->define(Order_details::class, function (Faker $faker) {
    return [
        'product_id' => product::all()->random()->id,
		'order_id' => Order::all()->random()->id,
		'qty' => $faker->randomElement([1,2,3,4,5]),
		'price' => product::all()->random()->price,
		
    ];
});

$factory->define(product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'price' => $faker->randomElement([1500,21000,13000,4000,15000]),
		'excerpt' => $faker->paragraph(2),
		'body' => $faker->text,
		'slug' => $faker->slug,
		'category_id' => category::all()->random()->id,
    ];
});


