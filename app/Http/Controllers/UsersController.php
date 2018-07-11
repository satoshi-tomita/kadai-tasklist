<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function show($id)
    {
        $user = User::find($id);
        $tasks = $user->tasks()->orderBy('created_at', 'desc')->paginate(5);
        
        $data = [
            'user' => $user,
            'tasks' => $tasks,
        ];
        
        $data += $this->counts($user);
        
        return view('users.show', $data);
    }
    
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
