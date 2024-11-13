<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobAppController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\ApplicantController;

/*
Route::get('/', function (){
    return view('user/apply');
});*/

//User apply
Route::get('/', [JobAppController::class, 'showForm'])->name('job-application.form');
Route::post('/', [JobAppController::class, 'submitForm'])->name('job-application.submit');

/*
Route::get('/admin', function (){
    return view('admin/admin-login');
});*/

// Admin Login
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');


Route::get('/applicants', function (){
    return view('admin/applicants');
});

// Admin Sign Up
Route::get('/admin/signup', [AdminController::class, 'showSignupForm'])->name('admin.signup');
Route::post('/admin/signup', [AdminController::class, 'signup'])->name('admin.signup.submit');

// Applicants Dashboard
Route::get('/admin/applicants', [ApplicantController::class, 'index'])->name('admin.applicants');