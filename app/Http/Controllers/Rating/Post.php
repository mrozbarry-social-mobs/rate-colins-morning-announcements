<?php

namespace App\Http\Controllers\Rating;

use App\Http\Controllers\Controller;
use App\Http\Requests\Rating\PostRequest;
use App\Models\Rating;

class Post extends Controller
{
    public function __invoke(PostRequest $request)
    {
        Rating::query()->create($request->validated());
        return redirect('/');
    }
}
