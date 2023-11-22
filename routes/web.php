<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Championships;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\RankingController;
use App\Http\Controllers\Tournaments;


use App\Http\Controllers\AccountController;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout']);
Route::post('loginPost', [LoginController::class, 'authenticate'])->name('loginPost');


Route::get('events', [HomeController::class, 'events'])->name('home.events');
Route::get('events/{tournament_id}', [HomeController::class, 'events_info'])->name('home.events.details');
Route::get('matches', [HomeController::class, 'matches'])->name('home.matches');
Route::get('videos', [HomeController::class, 'videos'])->name('videos');
Route::get('teams', [HomeController::class, 'teams'])->name('teams');
Route::get('players', [HomeController::class, 'players'])->name('players');
Route::get('rankings', [HomeController::class, 'rankings'])->name('rankings');
Route::get('latest_news', [HomeController::class, 'latest_news'])->name('latest_news');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');

Route::get('events/get/api', [Championships::class, 'getList'])->name('home.events.get');
Route::get('rankings/get', [RankingController::class, 'getList'])->name('rankings.get');

Route::get('api/tournament', [Tournaments::class, 'getList'])->name('api.tournament');



Route::group(['as' => 'admin.', 'middleware' => 'auth'], function () {

    Route::get('/account', [HomeController::class, 'dashboard'])->name("dashboard");
    Route::get('/profile', [LoginController::class, 'profile'])->name("profile");


    Route::get('ads_create', [HomeController::class, 'dashboard'])->name("ads.create");
    Route::get('ads_list', [HomeController::class, 'dashboard'])->name("ads.list");



});
Route::group(['as' => 'account.', 'middleware' => 'auth'], function () {


    Route::post('/update', [AccountController::class, 'profile_update'])->name("update");

    Route::post('/add-teams', [TeamController::class, 'store'])->name('teams.store');
    Route::get('/teams', [TeamController::class, 'showTeams'])->name('teams.show');
    Route::delete('teams/{team}', [TeamController::class, 'destroy'])->name('teams.destroy');
    Route::post('/teams/add-member', [TeamController::class, 'addMember'])->name('teams.addMember');


    Route::get('account_details', [TeamController::class, 'account_details'])->name('teams.account_details');

    Route::get('account_details', [TeamController::class, 'account_details'])->name('teams.account_details');
    Route::get('/team/events', [TeamController::class, 'events'])->name('teams.events');
    Route::get('/matches', [TeamController::class, 'matches'])->name('teams.matches');
    Route::get('/notifications', [TeamController::class, 'notifications'])->name('teams.notifications');
    Route::get('/participants', [TeamController::class, 'participants'])->name('teams.participants');


});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::controller(FacebookController::class)->group(function () {
    Route::get('auth/facebook', 'redirectToFacebook')->name('auth.facebook');
    Route::get('auth/facebook/callback', 'handleFacebookCallback');
});
Route::controller(GoogleController::class)->group(function () {
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
});