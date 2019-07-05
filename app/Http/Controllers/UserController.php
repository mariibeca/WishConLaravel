<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class UserController extends Controller
{
    public function profile()
    {
      $user = Auth::user();
      return view('layouts.profile', compact('user'));
    }
    public function edit(){
        $user = Auth::user();
        return view ('layouts.profileUpdate', compact('user'));
    }

    public function update( Request $request)
    {
      $this->validate($request,
        [
          'avatar'=> 'nullable|image',
        ],

      );

      $userAEditar = Auth::user();

      if ($request->file('avatar')){
        $rutaDelArchivo = $request->file('avatar')->store('public');
        $nombreArchivo = basename($rutaDelArchivo);
        $userAEditar->avatar = $nombreArchivo;
      }

        $userAEditar->save();
        return redirect('/profile');
    }

      public function save(Request $request)
          {
            $this->validate( $request, [
                'avatar' => 'nullable|file',
            ],
          );

          $rutaDelArchivo = $request->file('avatar')->store('public');
          $nombreArchivo = basename($rutaDelArchivo);

          $user = new User([
              'avatar' => $nombreArchivo
              ]);

              $user->save();
              return redirect('/profile');
   }
}
