<?php
namespace Tests\Unit;
use Illuminate\Support\Facades\Event;
/* use PHPUnit\Framework\TestCase; */
use Tests\TestCase;
use Illuminate\Http\Request;
use App\Http\Controllers\LoginController;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginTest extends TestCase
{
    public function testLoginWithCorrectCredentials()
    {
        //arrange
        $user = User::create(
            [
                "name"=>"testUser",
                "email"=>"testEmail@gmail.com",
                "phone"=>"09371373929",
                "password"=>Hash::make("1111"),
                "contact_pref"=>"1"
            ]
        );
        $request = Request::create('/login', 'POST',[
            'email'=>'testEmail@gmail.com',
            'password'=>'1111',
        ]);
        //action
        $isLoggedIn = auth()->attempt($request->only('email','password'),$request->remember);
        //assert
        $this->assertEquals(true,$isLoggedIn);
        $user->delete();
        
    }
}
