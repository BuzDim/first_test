<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Commentary\CommentaryStoreRequest;
use App\Models\Commentary;
use App\Http\Requests\Commentary\CommentaryDestroyRequest;


class CommentaryController extends Controller
{
    public function store(CommentaryStoreRequest $request)
    {
        $data = $request->validated();

        $comment = new Commentary();

        $comment->user_id = $data['user_id'];
        $comment->post_id = $data['post_id'];
        $comment->content = $data['content'];
        $comment->description = 'Комментарий первой итерации';

        $comment->save();


        return back();
    }

    public function destroy(CommentaryDestroyRequest $request)
    {
        $data = $request->validated();

        $comment = Commentary::find($data['id']);
        $comment->delete();

        return back();
    }
}
