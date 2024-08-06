<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Admin;
use App\Models\AdminRole;
use App\Models\admin_role_pivots;

class AdminRolePivotsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AdminRolePivots::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'admin_id' => Admin::factory(),
            'admin_role_id' => AdminRole::factory(),
        ];
    }
}