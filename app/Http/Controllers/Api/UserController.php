<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateUserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate();
       /*  return UserResource::collection($users); */
        return view('site.listaUsers', ['users' => UserResource::collection($users)]);

    }

    public function store(Request $request)
    {    $rules =
        [
            'name' =>'required|min:3|max:255',
            'email' => [
                'required',
                'email',
                'max:255',
                'unique:users'
            ],
            'password' => 'required|min:6|max:100'
        ];

        $data = $request->validate($rules);
        $data['password'] = bcrypt($request->password);
         User::create($data);

        return redirect('/listUsers');
    }
    

    public function show(string $id)
    {

        $user = User::findOrFail($id);

        return new UserResource($user);
    }

    public function update(StoreUpdateUserRequest $request, string $id){

        $user = User::findOrFail($id);
        $data = $request->validated();

        if($request->password != null){
            $data['paswword'] = bcrypt($request->password);
        }

        $user->update($data);

        return new UserResource($user);
    }

    public function destroy(string $id){
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json([],204);
    }
}
