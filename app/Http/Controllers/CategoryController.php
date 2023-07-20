<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCats(int $id = null): array
    {
        if ($id !== null) {
            return [
                'id' => $id,
                'description' => fake()->text(100),
            ];
        }
        $quantityCats = 6;
        $cats = [];

        for ($i = 0; $i < $quantityCats; $i++) {
            $cats[] = [
                'id' => ($i === 0) ? ++$i : $i,
                'title' => fake()->jobTitle(),
                'description' => fake()->text(100),
            ];
        }
        return $cats;
    }
    public function index(): View
    {
        return \view('categories.index', [
            'categories' => $this->getCats(),
        ]);
    }

    public function show(int $id): View
    {
        return \view('category.show', [
            'category' => $this->getCats($id),
        ]);
    }
}
