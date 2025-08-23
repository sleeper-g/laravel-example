<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;


class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::all();
        return view('groups.index', compact('groups'));
    }

    public function create()
    {
        return view('groups.create');
    }

    public function store(Request $request)
    {
        Group::create($request->validate([
            'title' => 'required|string|max:255',
            'start_from' => 'required|date',
        ]));
        return redirect()->route('groups.index');
    }

    public function show(Group $group)
    {
        $students = $group->students;
        return view('groups.show', compact('group', 'students'));
    }
}
