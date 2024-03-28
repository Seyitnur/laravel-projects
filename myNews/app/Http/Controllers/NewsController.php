<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NewsRequest;
use App\News;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{

    public function single_news($id) {
        $news = new News();
        return view('single_news', ['one_news' => $news->find($id)]);
    }

    public function news() {
        return view('News', ['news' => News::paginate(4)]);
    }

    public function save_news(NewsRequest $request) {
        $news = new News();
        $news->name = $request->input('name');
        $news->author = Auth::user()->name;
        $news->description = $request->input('description');

        $image = $request->file('image');
        $path = $image->store('images/news');
        $news->image = "/storage/$path";
        $news->save();

        return redirect()->route('account')->with('success', 'News was successfully added!');
    }
}
