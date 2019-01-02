<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function allPosts(Request $request)
    {

        $columns = array(
            0 =>'id',
            1 =>'title',
            2=> 'body',
            3=> 'created_at',
            4=> 'id',
        );

        $totalData = Post::count();

        $totalFiltered = $totalData;

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if(empty($request->input('search.value')))
        {
            $posts = Post::offset($start)
                ->limit($limit)
                ->orderBy($order,$dir)
                ->get();
        }
        else {
            $search = $request->input('search.value');

            $posts =  Post::where('id','LIKE',"%{$search}%")
                ->orWhere('title', 'LIKE',"%{$search}%")
                ->offset($start)
                ->limit($limit)
                ->orderBy($order,$dir)
                ->get();

            $totalFiltered = Post::where('id','LIKE',"%{$search}%")
                ->orWhere('title', 'LIKE',"%{$search}%")
                ->count();
        }

        $data = array();
        if(!empty($posts))
        {
            foreach ($posts as $post)
            {
                /*$show =  route('posts.show',$post->id);
                $edit =  route('posts.edit',$post->id);*/

                $nestedData['id'] = $post->id;
                $nestedData['title'] = $post->title;
                $nestedData['body'] = substr(strip_tags($post->body),0,50)."...";
                $nestedData['created_at'] = date('j M Y h:i a',strtotime($post->created_at));
                $nestedData['options'] = "&emsp;<a href='#' title='SHOW' ><span class='glyphicon glyphicon-list'></span></a>
                                          &emsp;<a href='#' title='EDIT' ><span class='glyphicon glyphicon-edit'></span></a>";
                $data[] = $nestedData;

            }
        }

        $json_data = array(
            "draw"            => intval($request->input('draw')),
            "recordsTotal"    => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data"            => $data
        );

        echo json_encode($json_data);

    }
}
