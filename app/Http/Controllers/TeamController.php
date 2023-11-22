<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\TeamMember;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function showTeams()
    {
        $teams=Team::all();
        return view('account.teams',compact('teams'));
    }
    public function account_details()
    {
        return view('account.account_details');
    }
    public function events()
    {
        return view('account.events');
    }
    public function matches()
    {
        return view('account.matches');
    }
    public function notifications()
    {
        return view('account.notifications');
    }
    public function participants()
    {
        return view('account.participants');
    }

    // public function create()
    // {
    //     return view('teams.create');
    // }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'abbreviated_name' => 'required|string|max:255',
            'team_logo' => 'required|image|mimes:svg,gif,png,jpg,jpeg|max:2048'
        ]);

        // Validate that the team name and abbreviated name are unique
        $uniqueValidation = DB::table('teams')
            ->where('name', $request->input('name'))
            ->orWhere('abbreviated_name', $request->input('abbreviated_name'))
            ->exists();

        if ($uniqueValidation) {
            flashy()->error('Team Already Exists','#');
            return redirect()->back();
        }

        // Generate a unique name for the team logo using the team name and a random string
        $teamLogoName = Str::slug($request->input('name')) . '_' . Str::random(8) . '.' . $request->file('team_logo')->getClientOriginalExtension();

        // Store team logo with a custom name
        $teamLogoPath = $request->file('team_logo')->storeAs('team_logo', $teamLogoName, 'public');

        // Create the team
        $team = Team::create([
            'name' => $request->input('name'),
            'abbreviated_name' => $request->input('abbreviated_name'),
            'team_logo' => $teamLogoPath, // Save the path to the team logo
            'created_by'=>Auth::user()->id,
        ]);

        // Save team member
        // TeamMember::create(['email' => $request->input('email_address'), 'name' => $request->input('player_name'), 'team_id' => $team->id]);

        flashy()->success('Team Created Successfully','#');
        return redirect()->route('admin.dashboard')->with('success', 'Team created successfully.');
    }
    public function destroy(Team $team)
    {
        // Delete associated team logo file if it exists
        if ($team->team_logo) {
            Storage::disk('public')->delete($team->team_logo);
        }

        $team->delete();

        return redirect()->route('account.teams.show')->with('success', 'Team deleted successfully.');
    }

    
public function addMember(Request $request, Team $team)
{
    // Validate the request
    $request->validate([
        'email' => 'required|email',
        'player_name' => 'required',
        'team_id'=>'required'
    ]);

    // Check if the user with the provided email exists
    $user = TeamMember::where('email', $request->input('email'))->first();

    // If the user does exist, you may want to handle this appropriately (e.g., show an error message)
    if ($user) {
        flashy()->error('User with the provided email already exist.','#');
        return redirect()->back()->with('error', 'User with the provided email already exist.');
    }


    // Add the user as a team member
    TeamMember::create([
        'name' => $request->input('player_name'),
        'email' => $request->input('email'),
        'team_id' => $request->input('team_id'),
        'role' => 'Member', // You can adjust this based on your logic
        'created_at'=>now(),
        'updated_at'=>now(),
    ]);
    
    flashy()->success('User with the provided email Successfully created.','#');
    return redirect()->route('account.teams.show')->with('success', 'Member added successfully.');
}




    

}
