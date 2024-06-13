<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function listAll() {
        $commentList = Comment::all();
        return response()->json($commentList);
    }

    public function show(int $id) {
        $comment = Comment::find($id);

        if (!$comment) {
            return response()->json([
                'message' => 'Comment not found'
            ], 404);
        }

        return $comment;
    }
}
