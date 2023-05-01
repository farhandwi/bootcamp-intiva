<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Blog;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/blogs', function () {
    return Blog::all();
});

Route::get('/blogs/{id}', function ($id) {
    return Blog::find($id);
});

Route::post('/blogs', function (Request $request) {
    return Blog::create($request->all());
});

Route::put('/blogs/{id}', function (Request $request, $id) {
    $blog = Blog::findOrFail($id);
    $blog->update($request->all());
    return $blog;
});

Route::delete('/blogs/{id}', function ($id) {
    Blog::findOrFail($id)->delete();
    return 204;
});

Route::post('/register', function (Request $request) {
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password)
    ]);

    $accessToken = $user->createToken('authToken')->accessToken;

    return response()->json(['user' => $user, 'access_token' => $accessToken]);
});

Route::post('/login', function (Request $request) {
    $credentials = $request->only('email', 'password');

    if (auth()->attempt($credentials)) {
        $user = auth()->user();
        $accessToken = $user->createToken('authToken')->accessToken;

        return response()->json(['user' => $user, 'access_token' => $accessToken]);
    } else {
        return response()->json(['error' => 'Unauthorized'], 401);
    }
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

