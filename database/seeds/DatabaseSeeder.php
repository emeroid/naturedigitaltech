<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factory;
use App\Models\User;
use App\Models\Training\Online;
use App\Models\Training\Offline;
use App\Models\Training\live;
use App\Models\Training\Training_description;
use App\Models\Services\RequestSkill;
use App\Models\Products\product;
use App\Models\Jobs\JobSkill;
use App\Models\Jobs\JobRegister;
use App\Models\Home\HomeContent;
use App\Models\Affiliate\Affiliate_description;
use App\Models\About\Company;
use App\Models\About\FAQ;
use App\Models\Products\productImage;
use App\Models\Categories\Category;
use App\Models\Transaction\Order;
use App\Models\Transaction\Order_details;
use App\Models\Affiliate\Affiliate;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 10)->create();
        factory(online::class, 10)->create();
        factory(Offline::class, 10)->create();
        factory(JobSkill::class, 10)->create();
        factory(Affiliate::class, 6)->create();
        factory(Company::class, 1)->create();
        factory(live::class, 10)->create();
        factory(Affiliate_description::class, 1)->create();
        factory(Training_description::class, 1)->create();
        //factory(Greenleaf::class, 10)->create();
        factory(RequestSkill::class, 10)->create();
        factory(JobRegister::class, 10)->create();
        factory(category::class, 4)->create();
        factory(product::class, 6)->create();
        factory(productImage::class, 12)->create();
        factory(Order::class, 5)->create();
        factory(Order_details::class, 10)->create();

    }
}
