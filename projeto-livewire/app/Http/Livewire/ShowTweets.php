<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Livewire\Component;

class ShowTweets extends Component
{
    public $content = 'Apenas um teste';

    protected $rules = [
        'content' => 'required|min:3|max:255'
    ];

    public function render()
    {
        $tweets = Tweet::with('user')->get();
        return view('livewire.show-tweets', compact('tweets'));
    }

    public function store()
    {
        $this->validate();

        Tweet::create([
            'user_id' => auth()->user()->id,
            'content' => $this->content,
        ]);
        // auth()->user()->tweets()->create([
        //     'content' => $this->content
        // ]);

        $this->content = '';
    }

    public function like($idTweet)
    {
        $tweet = Tweet::find($idTweet);

        $tweet->likes()->create([
            'user_id' => auth()->user()->id
        ]);
    }

    public function unlike(Tweet $tweet)
    {
        $tweet->likes()->delete();
    }
}
