<?php
/**
 * Created by PhpStorm.
 * User: rafael
 * Date: 05/05/17
 * Time: 15:54
 */


namespace CodeAgenda\Http\Controllers;

class AgendaController extends Controller
{
    public function index()
    {
        return view('agenda.home');
    }
}