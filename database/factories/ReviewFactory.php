<?php

namespace Database\Factories;

use App\Models\Review;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Review::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'star_number'=>rand(1,5),
            'text'=>'hjASBFSBCJSKDBKJBFCSKJZDLFASNDLJBFKHAESBDJKDASJDXSJGDKASBFUFDlknvsdjbdjkfbsdjfbsdjfb',
            'product_id'=> rand(1,31),
            'user_id'=> rand(1,3)
        ];
    }
}
