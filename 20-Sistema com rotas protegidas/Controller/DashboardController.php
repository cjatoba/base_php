<?php

class DashboardController extends Controller
{

    public static function index()
    {
        parent::isProtected();
        
        include 'Views/home.php';
    }
}