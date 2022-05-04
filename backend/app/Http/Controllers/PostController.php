<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Topic;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index1(Request $request)
    {
        $posts = Post::query()
            ->leftJoin('topics', 'topics.id', '=', 'posts.topic_id')
            ->leftJoin('users', 'users.id', '=', 'posts.user_id')
            ->select('topics.name as topic_name', 'posts.*', 'users.name as user_name')
            ->where('users.id', $request->user)
            ->orderBy('id', 'DESC')
            ->get();

        return view('post.index', [
            'posts' => $posts
        ]);
    }

    public function index2(Request $request)
    {
        $posts = Post::query()
            ->leftJoin('topics', 'topics.id', '=', 'posts.topic_id')
            ->leftJoin('users', 'users.id', '=', 'posts.user_id')
            ->select('topics.name as topic_name', 'posts.*', 'users.name as user_name')
            ->where('posts.topic_id', $request->topic)
            ->orderBy('id', 'DESC')
            ->get();

        return view('post.index', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $topics = Topic::query()->whereNotIn('parent_id', ['0'])->get();

        return view('post.create', [
            'topics' => $topics
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StorePostRequest  $request
     * @return RedirectResponse
     */
    public function store(StorePostRequest $request): RedirectResponse
    {
        $data =$request->validated();
        $data['user_id'] = session()->get('id');

        Post::query()->create($data);
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdatePostRequest  $request
     * @param  Post  $post
     * @return RedirectResponse
     */
    public function update1(UpdatePostRequest $request, Post $post): RedirectResponse
    {
        Post::query()->where('id', $post->id)->update([
            'status' => 1
        ]);
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdatePostRequest  $request
     * @param  Post  $post
     * @return RedirectResponse
     */
    public function update0(UpdatePostRequest $request, Post $post): RedirectResponse
    {
        Post::query()->where('id', $post->id)->update([
            'status' => 2
        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Post  $post
     * @return RedirectResponse
     */
    public function destroy(Post $post): RedirectResponse
    {
        Post::query()->where('id', $post->id)->delete();
        session()->put('notify', "Thành công");
        return redirect()->back();
    }
}
