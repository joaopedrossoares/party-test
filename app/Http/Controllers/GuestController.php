<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function store() {
        $age = $this->age;

        if($age < 16) {
            return [
                'success' => false,
                'message' => "Só pode entrar pra mais de 16"
            ];
        }
        
        return Guest::create([
            'name' => $this->name,
            'age' => $age
        ]);
    }
}
