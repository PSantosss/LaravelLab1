namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function list()
    {
        $posts = Post::all();
        return view('admin.posts.list', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    public function view(Post $post)
    {
        return view('user.posts.view', compact('post'));
    }

    public function staticForm()
    {
        return view('user.posts.create');
    }
}
