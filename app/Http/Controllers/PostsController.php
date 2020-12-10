<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 10.12.2020
 * Time: 13:40
 */

namespace App\Http\Controllers;


use App\Http\Requests\CreatePostRequest;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class PostsController extends Controller
{
    public function index(): View
    {
        return view('posts', ['posts' => Post::all()->toArray()]);
    }

    public function store(Request $request): RedirectResponse
    {
        /** @var UploadedFile $file */
        $file = $request->file('file');

        $post = new Post();
        $post->name = $request->name;
        $post->image = '';
        $post->save();

        $ext = last(explode('.', $file->getClientOriginalName()));

        $fileName = md5(time()) . '.' . $ext;
        $file->storeAs('', $fileName, 'public');

        $post->image = $fileName;
        $post->save();

        return redirect('/posts');
    }
}