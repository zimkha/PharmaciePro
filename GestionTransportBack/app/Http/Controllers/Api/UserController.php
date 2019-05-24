<?php



namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\User;

use App\Events\RegisterCommande;
use App\Events\RegisterClient;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller {


    /**
     *  @param \Illimunate\Http\Request
     *  @return \Illimunate\Http\Response
     */
    public function login(Request $request)
    {
           $this->validate($request, [
            'email' => 'required|string|email',
            'password' => 'required|string'
           ]);
           $user = User::where('email', $request->email)
                  ->orWhere('password', $request->password)
                  ->first();
         if(Hash::check($request->email, $request->password)){
              $tokenUser = $user->createToken('Token creer');
               $token = $tokenUser->token();
                
              return response()->json($user);
         }
         else{
              return response()->jsnon('erreur ');
         }
    }
}