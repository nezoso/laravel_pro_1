<?php

namespace App\Http\Controllers;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use App\Models\Post; 
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
         // $post = DB::table('posts')->where('id',1)->firstOrFail();
          //  $post = DB::table('posts')->find(1);
            // $post = DB::table('posts')->pluck('text','price');
         // $posts = DB::table('posts')->orderBy('id')->chunk(1,function(Collection $posts){
         //    foreach($posts as $post){
         //        print_r($post->text);
         //    }
         // });
          //$arr = [];
          // foreach($post as $record){
          //    $arr['price'] = $record->price;
          //     $arr['text'] = $record->text;
          // }
          // foreach($post as $text=>$price)
          // {
          //   print_r('____'.$text.'____'.$price.'</br>');
          // }
          

          // return view('posts',['post'=>$post]);

        // $posts = DB::table('posts')->orderBy('id')
        // ->each(function(object $post){
        //     DB::table('posts')->where('id',$post->id)->update(['text'=>'text_updated']);
        // });

        // $posts = DB::table('posts')->get();
        // echo $posts->avg('price');
        // $posts  = DB::table('posts')->select('text','token','price')->get();
        // foreach($posts as $post)
        // {
        //     print_r($post);
        // }

        // $posts = DB::table('posts')
        //      ->select(DB::raw('count(*) as token, status'))
        //      ->where('status', 'unread')
        //      ->groupBy('token')
        //      ->get();

        // return $posts;

        //PAGINATION
       // $posts = DB::table('posts')->paginate(1);
        //     $posts = DB::table('posts')->simplePaginate(1);
        // return view('posts',['post'=>$posts]);
        //$posts = Post::paginate(1);
        
        //     $posts = Post::paginate();
        // return view('posts',['post'=>$posts]);
        $post = ['1'=>'2'];
        $post->appends(['name'=>'username']);
        print_r($post);
     
    }
}
