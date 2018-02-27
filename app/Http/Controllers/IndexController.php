<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class IndexController extends Controller
{
    //функция отображения страницы home_page если она существует
    public function execute(){
       if(view()->exists('home_page')){
           //добавления title
            $data= [
                'title' => 'Home',
            ];
            return view('home_page',$data);
       }
       else {
          abort(404);
       }
    }
    //функция отображения страницы show_countries если она существует
    public function showCountries(){
        if(view()->exists('show_countries')) {
            //получить все записи из таблицы countries
            $countries = Country::all();
            //добавления title
            $data = [
                'title' => 'Страны',
                'countries' => $countries
            ];
            return view('show_countries', $data);
        }
        else{
            abort(404);
        }
    }
}
