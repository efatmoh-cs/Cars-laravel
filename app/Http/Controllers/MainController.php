<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    public function index(): View{
        $cars = Car::latest()->take(6)->get();
        $testimonials = Testimonial::where('published', 1)->latest()->take(3)->get();
        $cars = Car::paginate(6);
        return view('index', compact(['cars','testimonials']));
    }

    public function about(): View{
        return view('about');
    }

         public function listing(): View{
         $cars = Car::latest()->take(6)->get();
         $cars = Car::paginate(6);
        return view('listing', compact(['cars']));

    }

    public function blog(): View{
        return view('blog');
    }

    public function testimoinals(): View{
        $testimonials = Testimonial::latest()->take(6)->get();

        return view('Testimonials', compact(['testimonials']));
    }

    public function contact(): View{
        return view('contact');
    }






}
