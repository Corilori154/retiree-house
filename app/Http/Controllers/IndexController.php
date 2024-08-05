<?php

namespace App\Http\Controllers;

use App\Models\Resident;
use Illuminate\Http\Request;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function index()
    {
        return inertia(
            'Index/Index',
            [
                'message' => 'Hello from Laravel!'
            ]
        );
    }

    public function show()
    {
        return inertia('Index/Show');
    }

    public function test(Resident $resident)
    {
        return inertia(
            'Index/Test',
            [
                'resident' => $resident
            ]
        );
    }
}


