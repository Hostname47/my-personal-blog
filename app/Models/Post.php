<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Category,Tag, Metadata};
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];
    protected $casts = [
        'metadata' => 'array'
    ];

    public function categories() {
        return $this->belongsToMany(Category::class);
    }

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }

    public function getCreationDateHumansAttribute() {
        return (new Carbon($this->created_at))->diffForHumans();
    }

    public function getCreationDateAttribute() {
        return (new Carbon($this->created_at))->isoFormat("dddd D MMM YYYY - H:mm A");
    }

    public function getUpdateDateHumansAttribute() {
        return (new Carbon($this->updated_at))->diffForHumans();
    }

    public function getUpdateDateAttribute() {
        return (new Carbon($this->updated_at))->isoFormat("dddd D MMM YYYY - H:mm A");
    }

    public function getPublishDateHumansAttribute() {
        return (new Carbon($this->published_at))->diffForHumans();
    }

    public function getPublishDateAttribute() {
        return (new Carbon($this->published_at))->isoFormat("dddd D MMM YYYY - H:mm A");
    }

    public function has_featured_image() {
        return isset($this->metadata['featured_image']);
    }

    public function getFeaturedImageAttribute() {
        if($this->has_featured_image()) {
            $metadata = Metadata::where('id', $this->metadata['featured_image'])->first();
            if($metadata && isset($metadata->data['file']))
                return asset('media-library/'.$metadata->data['file']);
        }

        return false;
    }

    public function getHtmlTitleAttribute() {
        // DOM Parser Object
        $html_dom = new \DOMDocument();
        @$html_dom->loadHTML($this->content);

        $title = $html_dom->getElementsByTagName('h1')[0];

        if($title)
            return $title->nodeValue;

        return $this->title;
    }

    public function getExcerptAttribute() {
        $excerpt = "";

        if($this->summary)
            $excerpt = $this->summary;
        else {
            // DOM Parser Object
            $html_dom = new \DOMDocument();
            @$html_dom->loadHTML($this->content);
            $excerpt = $html_dom->getElementsByTagName('p')->item(0)->nodeValue;
        }

        return Str::of($excerpt)->words(26, '..');
    }

    public function getLinkAttribute() {
        return route('view.post', ['category'=>$this->categories->first()->slug, 'post'=>$this->slug]);
    }
}
