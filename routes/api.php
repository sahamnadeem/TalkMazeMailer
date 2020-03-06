<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('send_mail',function (Request $request){
    Mail::to('contact@talkmaze.com')
        ->send(new \App\Mail\InfoMail('Ghalia','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut dolore in iure mollitia neque! Deleniti doloribus eligendi est ipsam iusto! Aspernatur commodi consequatur debitis, distinctio doloribus error esse, eum laboriosam, laborum minus obcaecati officia pariatur perferendis possimus repudiandae tempore tenetur? A accusantium adipisci architecto atque blanditiis consequuntur doloribus earum labore laboriosam laborum magnam minus nesciunt obcaecati perferendis praesentium qui quo reiciendis, repellat rerum sunt tempore, totam unde vero vitae voluptatem. A ab consectetur doloremque explicabo inventore itaque neque non odio provident quaerat quia quis repellat rerum, saepe tenetur totam vero voluptates. Ad exercitationem ipsam mollitia quae quas sequi totam vel?'));
    Mail::to($request->email)
        ->send(new \App\Mail\InfoMail($request->name,$request->data));
});
