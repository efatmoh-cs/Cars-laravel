<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    public function index(): View{
        $cars = Car::take(6)->get();
        return view('index', compact(['cars']));
    }
    public function about(): View{
        return view('about');
    }
    public function listing(): View{
        $cars = Car::take(6)->get();

        return view('listing', compact(['cars']));

    }
    public function blog(): View{
        return view('blog');
    }
    public function testimoinals(): View{
        return view('Testimonials');
    }
    public function contact(): View{
        return view('contact');
    }
   

}
