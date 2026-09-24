<?php

namespace Database\Factories;

use App\Shipment;
use App\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShipmentFactory extends Factory
{
    protected $model = Shipment::class;

    public function definition()
    {
        return [
            'receiver_name' => $this->faker->name,
            'receiver_company' => $this->faker->company,
            'receiver_gst' => $this->faker->numerify('GST#######'),
            'receiver_phone' => $this->faker->phoneNumber,
            'receiver_secondary_phone' => $this->faker->phoneNumber,
            'receiver_email' => $this->faker->email,
            'receiver_state' => $this->faker->state,
            'receiver_address' => $this->faker->address,
            'receiver_pincode' => $this->faker->postcode,
            'customer_id' => fn () => User::inRandomOrder()->value('id'),
        ];
    }
}
