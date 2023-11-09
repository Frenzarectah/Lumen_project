<?php

namespace App\Http\Controllers;

use App\Http\Models\Author;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class   AuthorController extends Controller
{
    use ApiResponser;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function index()
    {
        $authors = Author::all();
        return $this->successResponse($authors);
    }
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|max:255|string',
            'gender' => 'required|max:10|in:male,female',
            'country' => 'string|max:3'
        ];
        $this->validate($request,$rules);
        $author = Author::create($request->all());
        return $this->successResponse($author, Response::HTTP_CREATED);

    }
    public function show($author)
    {
        $author = Author::findOrFail($author);
        return $this->successResponse($author);
    }
    public function update(Request $request, $author)
    {
        $rules = [
            'name' => 'required|max:255|string',
            'gender' => 'required|max:10|in:male,female',
            'country' => 'string|max:3'
        ];
        $this->validate($request,$rules);

    }
    public function destroy($author)
    {
        $author = Author::destroy($author);
        return $this->successResponse($author,Response::HTTP_OK);
    }
}
