<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
public function Testdata($name,$id)
{
	echo "Bonjour" .$name."--".$id;
}
}
