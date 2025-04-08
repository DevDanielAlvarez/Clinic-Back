<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Caregiver>
 */
class CaregiverFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'cpf' => self::generateFakeCpf(),
            'birth' => $this->faker->date(),
            'email' => $this->faker->email(),
            'phone' => $this->faker->phoneNumber(),
            'role' => self::generateFakeRole(),
            'period' => self::generateFakePeriod(),
            'password' => $this->faker->password()
        ];
    }

    /**
     *Generate a fake cpf
     */
    public static function generateFakeCpf($mask = "1")
    {
        $n1 = rand(0, 9);
        $n2 = rand(0, 9);
        $n3 = rand(0, 9);
        $n4 = rand(0, 9);
        $n5 = rand(0, 9);
        $n6 = rand(0, 9);
        $n7 = rand(0, 9);
        $n8 = rand(0, 9);
        $n9 = rand(0, 9);

        $d1 = $n9 * 2 + $n8 * 3 + $n7 * 4 + $n6 * 5 + $n5 * 6 + $n4 * 7 + $n3 * 8 + $n2 * 9 + $n1 * 10;
        $d1 = 11 - (self::mod($d1, 11));
        $d1 = ($d1 >= 10) ? 0 : $d1;

        $d2 = $d1 * 2 + $n9 * 3 + $n8 * 4 + $n7 * 5 + $n6 * 6 + $n5 * 7 + $n4 * 8 + $n3 * 9 + $n2 * 10 + $n1 * 11;
        $d2 = 11 - (self::mod($d2, 11));
        $d2 = ($d2 >= 10) ? 0 : $d2;

        if ($mask == "1") {
            return sprintf('%d%d%d.%d%d%d.%d%d%d-%d%d', 
                $n1, $n2, $n3, $n4, $n5, $n6, $n7, $n8, $n9, $d1, $d2
            );
        } else {
            return sprintf('%d%d%d%d%d%d%d%d%d%d%d', 
                $n1, $n2, $n3, $n4, $n5, $n6, $n7, $n8, $n9, $d1, $d2
            );
        }
    }

    /**
     * Return (mod) %
     */
    private static function mod($dividend, $divider)
    {
        return round($dividend - (floor($dividend / $divider) * $divider));
    }

    /**
     * Generate random role for caregivers
     */
    public function generateFakeRole(){

        $role = array("Administrador de medicamento","Enfermeiro","Troca fraldas");

        return $role[array_rand($role)];
    }

    /**
     * Generate random period for caregivers
     */
    public function generateFakePeriod(){

        $period = array("Manha","Tarde","Noite");

        return $period[array_rand($period)];
    }
}
