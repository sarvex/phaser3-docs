<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Namespaces;
use Illuminate\Http\Request;

class NamespacesController extends Controller
{
    public function index()
    {
        return view('namespaces.namespaces', ['namespaces' => Namespaces::all()->sortBy("longname")]);
    }

    public function show($longname)
    {

        $namespace = Namespaces::whereLongname($longname)->first();
        $classes = $namespace->classes;
        $namespaces = $namespace->namespaces;
        $methods = $namespace->functions;
        $typedefs = $namespace->typedefs;
        $membersConstants = $namespace->membersConstants;
        $methodConstructor = "";

        return view('namespaces.namespace', [
            "namespace" => $namespace,
            "classes" => $classes,
            "namespaces" => $namespaces,
            "methods" => $methods,
            "methodConstructo" => $methodConstructor,
            "typedefs" => $typedefs,
            "membersConstants" => $membersConstants
        ]);
    }
}
