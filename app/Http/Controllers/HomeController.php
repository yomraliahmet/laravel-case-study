<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;

        $persons = Cache::remember('persons-'. $currentPage, 10, function() {
            return Person::with('address')->paginate(10);
        });

        return view('home.index', compact('persons'));
    }
}
