<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\Party;
use Illuminate\Http\Request;

class PartyController extends Controller
{
    public function store(Request $request) {
        $age = $request->age;
        $name = $request->name;
        $idGuest = Guest::create($request->all());

        return $this->storeParty($this->canDrink($age), false, $idGuest);
    }

    public function canDrink($age) {
        return $age > 18;
    }

    private function storeParty($allowDrink, $allowParty, $idGuest) {
        return Party::create(
            [
                'allow_drink' => $allowDrink,
                'allow_party' => $allowParty,
                'guest_id' => $idGuest
            ]
        );
    }
}
