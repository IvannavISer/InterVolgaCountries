<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use Illuminate\Support\Facades\Validator;

class CountryAddController extends Controller
{
    public function execute(Request $request){
        $title = "Новая Страна";
        $messages = [
            'required' => 'Поле :attribute обязательно к заполнению',
            'unique' => 'Поле :attribute должно быть уникальным',
        ];

        if($request->isMethod('post')) {
            /*валидация преданного названия Страны*/
            $data = $request->except('_token');
            $validate = Validator::make($data, [
                'name' => 'required|max:255|unique:countries',
            ], $messages);

            /*регулярное выражения проверка на один пробелв по середине текста разрешены только буквы кирил и латин*/
            if(preg_match('/^([а-яё\s]+|[a-z\s]+)$/', $data['name'])){
                return redirect()->route('countryAdd')->withInput();
            }

            //проерка на провал валидации
            else if ($validate->fails()) {
                return redirect()->route('countryAdd')->withErrors($validate)->withInput();
            }

            else{
                $country = new Country;
                $country->fill($data);
                $country->save();
                return redirect('/');
            }
        }
        else {
            return view('country_add',['title'=>$title]);
        }
    }
}
