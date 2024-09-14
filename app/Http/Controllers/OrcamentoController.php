<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return UserResource::collection(User::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'cliente' => ['required', 'string', 'max:255'],
            'datahoraorcamento' => ['required','DateTime'],
            'vendedor' => ['required', 'min:6', 'max:50'],
            'descricao' => ['required', 'min:6', 'max:150'],
            'valororcado' => ['required', 'decimal'  , 8,6]
        ]);

        $user = User::create([
            'cliente' => $request->input('cliente'),
            'datahoraorcamento' => $request->input('datahoraorcamento'),
            'vendedor' => $request->input('vendedor'),
            'descricao' => $request->input('descricao'),
            'valororcado' => $request->input('valororcado'),
        ]);

        return new UserResource($user);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        // dd(request()->header());
        return new UserResource($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(User $user, Request $request)
    {

        $validated = $request->validate([
            'cliente' => ['string', 'max:255'],
            'datahoraorcamento' => ['datetime',now()],
            'vendedor' => ['string','min:6', 'max:255'],
            'descricao' => ['string', 'min:6', 'max:255'],
            'valororcado' => ['decimal', 8,6]
        ]);

        $user->update($validated);

        return new UserResource($user);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return response()->noContent();
    }
}
