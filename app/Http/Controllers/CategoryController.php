<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Http\Requests\StoreTopicRequest;
use App\Http\Requests\UpdateTopicRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $topics = Category::query()->where('parent_id', 0)->get();
        return view('topic.index', [
            'topics' => $topics,
        ]);
    }

    public function subTopic(Request $request)
    {
        $parent_id = $request->topic;
        $sub_topics = Category::query()->where('parent_id', $parent_id)->get();
        return view('topic.sub_topic', [
            'sub_topics' => $sub_topics,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreTopicRequest  $request
     * @return void
     */
    public function store(StoreTopicRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  Category  $topic
     * @return Response
     */
    public function show(Category $topic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Category  $topic
     * @return Response
     */
    public function edit(Category $topic)
    {
        return view('topic.edit', [
            'topic' => $topic
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTopicRequest  $request
     * @param  Category  $topic
     * @return Response
     */
    public function update(UpdateTopicRequest $request, Category $topic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Category  $topic
     * @return RedirectResponse
     */
    public function destroy(Category $topic): RedirectResponse
    {
        $parent_id = $topic->id;
        $child_topic = Category::query()->where('parent_id', $parent_id)->get();
        if (empty($child_topic->all())) {
            Category::query()->where('id', $topic->id)->delete();
            return redirect()->route('topics.index');
        }
        return redirect()->route('topics.index');
    }

    public function destroySubTopic(Category $topic): RedirectResponse
    {
        $post_in_topic = Post::query()->where('topic_id', $topic->id)->get()->all();
        if (empty($post_in_topic)) {
            Category::query()->where('id', $topic->id)->delete();
            return redirect()->back();
        }
        return redirect()->back();
    }
}
