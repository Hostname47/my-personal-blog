<?php

namespace App\View\Components\Layout\LeftPanel;

use Illuminate\Http\Request;
use Illuminate\View\Component;
use App\Models\{Category,Tag};

class LeftPanel extends Component
{
    public $categories;
    public $a_category_selected = false;
    public $k;
    public $tags;

    public function __construct(Request $request)
    {
        $this->categories = Category::tree()->get()->toTree();
        $this->tags = Tag::withCount('posts')
            ->withCount('posts as posts_count')
            ->orderByRaw('posts_count DESC')
            ->take(12)->get();

        // Search query
        $this->k = ($request->has('k')) ? $request->get('k') : '';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layout.left-panel.left-panel');
    }
}
