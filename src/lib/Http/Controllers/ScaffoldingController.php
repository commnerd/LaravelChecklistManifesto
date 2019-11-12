<?php

namespace Checklists\Http\Controllers;

use Checklists\Models\Scaffolding;
use Checklists\Models\Checklist;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ScaffoldingController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\View\View
   */
  public function index(): View
  {
      $scaffolding = Scaffolding::paginate(self::PAGE_COUNT);
      return view('scaffolding.index', compact('scaffolding'));
  }
}
