<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LessonController extends Controller
{
    //
    public function getHtmlLesson()
    {
        return response()->json([
            'content' => '<h1>HTML Lesson</h1><p>HTML stands for HyperText Markup Language...</p>'
        ]);
    }

    public function getCssLesson()
    {
        return response()->json([
            'content' => '<h1>CSS Lesson</h1><p>CSS stands for Cascading Style Sheets...</p>'
        ]);
    }

    public function getJsLesson()
    {
        return response()->json([
            'content' => '<h1>JavaScript Lesson</h1><p>JavaScript is a programming language...</p>'
        ]);
    }
}
