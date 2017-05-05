<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CodeAgenda\Http\Controllers;


class IndexController extends Controller{

    public function index()
    {
        return view('layout');
    }
}
