<?php
namespace app\destination\controller;

class Index
{
    public function index()
    {
        return view('index');
    }
    public function ziye()
    {
        return view('ziye');
    }
    public function youji()
    {
        return view('youji');
    }
    public function create()
    {
        return view('create');
    }
    public function jingdian()
    {
        return view('jingdian');
    }
    public function country()
    {
        return view('country');
    }
}
