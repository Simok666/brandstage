<?php

namespace App\Http\Controllers\Backend\API\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\UserRegisterRequest;
use App\Http\Resources\Auth\UserRegisterResource;
use App\Http\Resources\Auth\AuthResource;
use App\Http\Requests\Auth\UserLoginRequest;
use App\Http\Resources\Auth\UserAccountResource;
use App\Http\Resources\Auth\UserRolesResource;
use Illuminate\Http\Request;
use App\Models\User; 
use App\Models\Admin;
use App\Jobs\SendEmailJob;
use Illuminate\Support\Facades\DB;
use App\Models\Role;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\Backend\Admin\DataEselonFungsiResource;
use App\Models\EselonSatu;
use App\Models\EselonDua;
use App\Models\EselonTiga;
use App\Models\Fungsi;

class AuthController extends Controller
{
    /**
     * 
     * function get user access
     * 
     * @param Request $request
     * @param User $user
     */
    public function getUserAccount(Request $request, User $user) {
        $user = $request->user();
        $role = $request->user()->currentAccessToken()->abilities;
        $role = explode(':', $role[0])[1] ?? "";
        $user["dataRole"] = [];
        if ($role == "user") {
            $user["dataRole"] = $user::find($user->id)->roles;
            $user["id"] = $user->id;
        }
        $user["role"] = $role;
        return new UserAccountResource($user);
    }


    /**
     * logout function
     * 
     */
    public function destory(Request $request) 
    {
       $user = $request->user();

       $user->tokens()->delete();

       return response()->noContent();
    }
}
