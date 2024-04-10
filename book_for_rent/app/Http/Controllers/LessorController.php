<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LessorController extends Controller
{
    function home(){
        $books = [
            [
                'name'=>'Black Butler',
                'content'=>'คนลึกไขปริศนาลับ',
                'price'=>123,
            ],
            [
                'name'=>'Madoka',
                'content'=>'สาวน้อยเวทมนตร์',
                'price'=>99,
            ],
        ];
        return view('home', compact('books'));
    }

    function about(){
        $name = "Raiden Shogun";
        $date = "10/4/2567";
        return view('about', compact('name' , 'date'));
    }

    function create(){
        return view('form');
    }


    function insert(Request $request){
        $request->validate(
            [
                'name' => 'required|max:50', // ห้ามเกิน 50 ตัวอักษร
                'description' => 'required' ,
                'price' => 'required|numeric' // ต้องเป็นตัวเลขเท่านั้น
            ],
            [
                'name.required'=>'กรุณาป้อนชื่อหนังสือ',
                'name.max'=>'ชื่อหนังสือไม่ควรเกิน 50 ตัวอักษร',
                'description.required'=>'กรุณาป้อนคำอธิบายหนังสือ',
                'price.required'=>'กรุณาป้อนราคา',
                'price.numeric'=>'กรุณาป้อนเฉพาะตัวเลข',

            ],
        );
    }



}
