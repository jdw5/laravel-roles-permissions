<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke() {
        $user = auth()->user();

        dump($user->can('edit_posts'));
        return Inertia::render('Dashboard', [
            //
        ]);
    }
}
