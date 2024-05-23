<?php

namespace App\Http\Controllers\__API;

use App\Http\Controllers\__API\BaseController as BaseController;
use App\Models\Users\Users;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class RegisterController extends BaseController
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = Users::create($input);
        $success['token'] =  $user->createToken('MyApp')->plainTextToken;
        $success['name'] =  $user->name;

        return $this->sendResponse($success, 'User register successfully.');
    }

    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request): JsonResponse
    {

        $request->authenticate();

        $request->session()->regenerate();


        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $user = Auth::user();
            //$success['token'] =  $user->createToken('MyApp')->plainTextToken;
            $success['name'] =  $user->name;
            //session(['user' => $user]);
            //$request->session()->put('user',$user);
            Auth::login($user, true);
            dd($user);

//            return $request->user()->id === $server->user_id &&
//                $request->user()->tokenCan('server:update');

            //return $this->sendResponse($success, 'User login successfully.');
        }
        else{
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        }


//        $credentials = $request->validate([
//            'email' => ['required', 'email'],
//            'password' => ['required'],
//        ]);
//
//        if (Auth::attempt(array_merge($credentials, ['role' => 'user']))) {
//            return redirect('/');
//        }
//        return redirect()->back()->withErrors(['email' => 'User credentials are incorrect']);
    }

    public function showLoginForm()
    {
        return view('site.auth.login');
    }

    public function showRegisterForm()
    {
        return view('site.auth.register');
    }


    // Logout user and revoke the token
    public function logout(Request $request)
    {
        // Revoke the token that was used to authenticate the current request
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Tokens Revoked'
        ]);
    }

}
