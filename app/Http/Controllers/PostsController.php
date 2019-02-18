<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Post;
class PostsController extends Controller
{
public function index() {
$posts = DB::table('posts')->orderBy('id', 'descriprion')->paginate(5);
return view('posts.index', ['posts' => $posts]);
}
public function article($id) {
$posts = Post::find($id);
return view('posts.article', ['posts' => $posts]);
}
}