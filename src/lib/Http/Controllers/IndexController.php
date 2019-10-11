<?php

namespace Checklists\Http\Controllers;

use Checklists\Models\Checklist;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IndexController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        return view('index');
    }
}
