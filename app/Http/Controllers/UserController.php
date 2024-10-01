<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function register(){
        return view('users.register');
    }

    public function store(Request $request){
        $fields = $request->validate([
            'name' => ['required', 'min:4'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:6']
        ]);

        $fields['password'] = bcrypt($fields['password']);

        $user = User::create($fields);

        $user->assignRole('user');

        auth()->login($user);

        Log::channel('custom')->info("User " . auth()->user()->name . " created.");

        return redirect('/')->with('message', 'User successfully created!');
    }

    public function logout(Request $request){
        Log::channel('custom')->info(auth()->user()->role . " " . auth()->user()->name . " has logged out.");

        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');
    }

    public function login(){
        return view('users.login');
    }

    public function authenticate(Request $request){
        $fields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($fields)){
            $request->session()->regenerate();
        
            Log::channel('custom')->info(auth()->user()->role . " " . auth()->user()->name . " has logged in.");

            return redirect('/')->with('message', 'Successfully logged in!');
        }
        else{
            return back()->withErrors(['email' => 'Invalid credentials!'])->onlyInput('email');
        }
    }

    public function admin(){
        $roles = ['manager', 'user']; //ako admin hoce da mu se prikazuju svi korisnici sajta sa svim adminima(ukljucujuci i sebe), samo se u nizu $roles doda vrednost 'admin'

        return view('admin.index', [
            'people' => User::whereHas('roles', static function ($query) use ($roles){
                return $query->whereIn('name', $roles);
            })->paginate(4)
        ]);
    }

    public function action($id){
        $person = User::find($id);
        $person['role'] = request('role');
        $person->save();

        if(request('role') == 'user'){
            $person->syncRoles('user');
        }
        else if(request('role') == 'manager'){
            $person->syncRoles('manager');
        }
        // else{
        //     $user->syncRoles('admin');
        // }

        return back()->with('message', 'Successfully changed role!');
    }
}