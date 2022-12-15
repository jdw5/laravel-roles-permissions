<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke() {
        $user = auth()->user();
        // dd($user->can('create_posts'));

        // dump($user->can('edit_posts'));
        // $user->givePermissionTo('moderate_posts', 'manage_community');
        return Inertia::render('Dashboard', [
            //
        ]);
    }

    public function admin() {
        $user = auth()->user();
        // dd($user->can('create_posts'));

        // dump($user->can('edit_posts'));
        // $user->givePermissionTo('moderate_posts', 'manage_community');
        return Inertia::render('Dashboard', [
            //
        ]);
    }
}
