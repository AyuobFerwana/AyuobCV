<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->view('dashboard.skills');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator($request->all(), [
            'jsRange' => 'required|integer|min:0|max:100',
            'htmlRange' => 'required|integer|min:0|max:100',
            'cssRange' => 'required|integer|min:0|max:100',
            'phpRange' => 'required|integer|min:0|max:100',
            'laravelRange' => 'required|integer|min:0|max:100',
        ]);

        if (!$validator->fails()) {
            $users = new User();
            $users->js_skills = $request->input('jsRange');
            $users->html_skills = $request->input('htmlRange');
            $users->css_skills = $request->input('cssRange');
            $users->php_skills = $request->input('phpRange');
            $users->laravel_skills = $request->input('laravelRange');
            $isSaved = $users->save();
            return response()->json([
                'message' => $isSaved ? 'Create Skills Successfully' : 'Create Skills Failed'
            ], $isSaved ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
        } else {
            return response()->json([
                'message' => $validator->getMessageBag()->first()
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
