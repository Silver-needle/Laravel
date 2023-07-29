<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index(Request $request): View
    {
        $news = app(News::class);

       /* dd(
            DB::table('news')
            ->join('categories', 'categories.id', '=', 'news.category_id')
            ->select('news.*', 'categories.title as categoryTitle')
            ->get()
        ); */

        dd(
            DB::table('news')
                ->whereNotBetween('id', [3,6])
                /*->where('id', '=', 3)
                ->Orwhere('title', 'like', '%'. $request->query('q') .'%')*/
                ->get()
        );
    }

    public function show(int $id): View
    {
        return view('admin.news.index', [
            'newsList' => $news->getAll(),
        ]);
    }
}
