<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Export extends Model
{
    use HasFactory;

    public function sql(){
        $roles = ['manager', 'user'];

        $users = DB::table('users')
            ->join('model_has_roles', 'model_has_roles.model_id', '=', 'users.id')
            ->join('roles', 'roles.id', '=', 'model_has_roles.role_id')    
            ->select('users.id', 'users.name', 'users.role', 'users.email')
            ->whereIn('roles.name', $roles)
            ->get();

        return $users;
    }
}