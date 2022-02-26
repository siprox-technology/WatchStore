<?php

namespace Tests\Unit;
use Illuminate\Support\Facades\Event;
/* use PHPUnit\Framework\TestCase; */
use Tests\TestCase;
use Illuminate\Http\Request;
use App\Http\Controllers\RegisterController;
use App\Models\User;

class RegisterTest extends TestCase
{

    public function testUserIsRegistered()
    {
        //arrange
        Event::fake();
        $request = Request::create('/register', 'POST',[
            'name'=>'testUser',
            'email'=>'test@gmail.com',
            'phone'=>'09371373929',
            'password'=>'1111',
            'password_confirmation'=>'1111',
            'contact_pref'=>'1'
        ]);
        //action
        $newRegisterController = new RegisterController();
        $response = $newRegisterController->store($request);
        //assert
        $user = User::where('name','=','testUser')->delete();        
        $this->assertEquals(true, $user);
    }
}
