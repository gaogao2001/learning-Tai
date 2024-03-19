<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller

{
public  function  form()
{
    $classes = [
        [
            'name' => 'PHP',
            'teacher' => 'John Doe',
            'room' => 'A1',
            'time' => '10:00 - 12:00',
            'students' => 25,
            'topics' => ['Variables', 'Loops', 'Functions'],
            'is_active' => true,
        ],
        [
            'name' => 'Laravel',
            'teacher' => 'Jane Doe',
            'room' => 'A2',
            'time' => '13:00 - 15:00',
            'students' => 30,
            'topics' => ['Models', 'Views', 'Controllers'],
            'is_active' => false,
        ],
        [
            'name' => 'JavaScript',
            'teacher' => 'Bob Smith',
            'room' => 'B1',
            'time' => '15:30 - 17:30',
            'students' => 20,
            'topics' => ['DOM Manipulation', 'Events', 'Ajax'],
            'is_active' => true,
        ],

    ];
 return view('layout',['ten'=>'', 'tuoi'=> '', 'email'=>'', 'taikhoan'=>'', 'matkhau'=>'','classes'=>$classes]);
}
public function form2()
{
    $ten = request()->input('ten');
    $tuoi = request()->input('tuoi');
    $email = request()->input('email');
    $taikhoan = request()->input('taikhoan');
    $matkhau = request()->input('matkhau');
    $classes = [
        [
            'name' => 'PHP',
            'teacher' => 'John Doe',
            'room' => 'A1',
            'time' => '10:00 - 12:00',
            'students' => 25,
            'topics' => ['Variables', 'Loops', 'Functions'],
            'is_active' => true,
        ],
        [
            'name' => 'Laravel',
            'teacher' => 'Jane Doe',
            'room' => 'A2',
            'time' => '13:00 - 15:00',
            'students' => 30,
            'topics' => ['Models', 'Views', 'Controllers'],
            'is_active' => false,
        ],
        [
            'name' => 'JavaScript',
            'teacher' => 'Bob Smith',
            'room' => 'B1',
            'time' => '15:30 - 17:30',
            'students' => 20,
            'topics' => ['DOM Manipulation', 'Events', 'Ajax'],
            'is_active' => true,
        ],
    ];
    return view('layout', ['ten'=>$ten, 'tuoi'=> $tuoi, 'email'=>$email, 'taikhoan'=>$taikhoan, 'matkhau'=>$matkhau, 'classes'=>$classes]);


}
    public function show($id)
    {
        $name = request()->input('name'); // Lấy tham số 'name' từ URL

        return view('layout', ['xyzzz' => $name]);
    }

}


