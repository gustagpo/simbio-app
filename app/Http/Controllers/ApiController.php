<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjetoRouanet;

class ApiController extends Controller
{
    public function getAllProjects(){
        $projects = ProjetoRouanet::get()->toJson(JSON_PRETTY_PRINT);
        return response($projects, 200);
    }
}
