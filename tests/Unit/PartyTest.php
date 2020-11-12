<?php

namespace Tests\Unit;

use App\Http\Controllers\GuestController;
use App\Http\Controllers\PartyController;
use Illuminate\Http\Request;
use PHPUnit\Framework\TestCase;

class PartyTest extends TestCase
{

    public function testIfMinorCanDrink()
    {
        $party = new PartyController();
        
        $request = [
            'name' => "Planta da Silva",
            'age' => 17,
        ];
        
        $this->assertFalse($party->canDrink($request['age']));
    }

    public function testIfMinorCanGetInParty(){
        $guest = new GuestController("Planta da Silva", 15);
        $assertEntryParty = $guest->store();
        $this->assertFalse($assertEntryParty['success']);
    }
}
