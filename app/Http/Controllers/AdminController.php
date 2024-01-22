<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    // public function addcar(): View{
    //     return view('Admin.addcar');
    // }
    public function addcategory(): View{
        return view('Admin.addcategory');
    }
    public function addtestimonials(): View{
        return view('Admin.addtestimonials');
    }
    public function adduser(): View{
        return view('Admin.adduser');
    }
    public function cars(): View{
        return view('Admin.cars');
    }
    public function categories(): View{
        return view('Admin.categories');
    }
    public function editcar(): View{
        return view('Admin.editcar');
    }
    public function editcategory(): View{
        return view('Admin.editcategory');
    }
    public function edittestimonial(): View{
        return view('Admin.edittestimonial');
    }
    public function edituser(): View{
        return view('Admin.edituser');
    }
    public function login(): View{
        return view('Admin.login');
    }
    public function messages(): View{
        return view('Admin.messages');
    }
    public function showmessage(): View{
        return view('Admin.showmessage');
    }
    public function testimonials(): View{
        return view('Admin.testimonials');
    }
    public function users(): View{
        return view('Admin.users');
    }
}
