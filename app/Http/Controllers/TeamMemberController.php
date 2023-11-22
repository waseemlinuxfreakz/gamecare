<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
    // public function create(Team $team)
    // {
    //     return view('members.create', compact('team'));
    // }

    // public function store(Request $request, Team $team)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //     ]);

    //     $team->members()->create($request->all());
    //     return redirect()->route('teams.show', $team->id)->with('success', 'Team member added successfully.');
    // }

    // public function edit(Team $team, TeamMember $member)
    // {
    //     return view('members.edit', compact('team', 'member'));
    // }

    // public function update(Request $request, Team $team, TeamMember $member)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //     ]);

    //     $member->update($request->all());
    //     return redirect()->route('teams.show', $team->id)->with('success', 'Team member updated successfully.');
    // }

    // public function destroy(Team $team, TeamMember $member)
    // {
    //     $member->delete();
    //     return redirect()->route('teams.show', $team->id)->with('success', 'Team member deleted successfully.');
    // }
}
