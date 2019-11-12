<?php

namespace Checklists\Http\Controllers;

use Checklists\Models\Checklist;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ChecklistController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $checklists = Checklist::paginate(self::PAGE_COUNT);
        return view('checklist.index', compact('checklists'));
    }
}
