<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view ('home',[
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view ('about',[
        "title" => "About",
        "name" => "Reris Pratama",
        "email" => "rerisone@gmail.com",
        "image" => "wp9787528-reona-wallpapers.jpg",
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Reris Pratama",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt magni doloremque magnam dolor placeat totam facere enim quisquam quasi error quidem expedita libero unde cumque ut, ullam, vitae officiis perspiciatis? Temporibus saepe impedit tenetur, cumque doloribus illo maxime quasi itaque minus soluta aspernatur nam accusamus expedita quam eligendi ratione deleniti facere doloremque facilis, recusandae repellendus numquam. Cupiditate dolor excepturi ipsam corrupti tempore ullam nisi! Quam tempora dolorum totam possimus ipsa libero velit, non magnam hic, eaque consequatur adipisci? Porro, aliquam!",
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Catherine",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis autem rerum sint, id, fuga sapiente molestiae nemo velit laborum est, ipsa error alias placeat. Ut expedita, at, illum quod culpa vitae nulla sapiente in tempore molestias sunt atque harum dolorem quam incidunt quis inventore non hic dolorum deleniti commodi aspernatur autem. Accusantium temporibus placeat neque animi exercitationem nobis suscipit, accusamus nihil nisi nostrum quos id culpa distinctio libero aliquam, quod saepe aliquid enim blanditiis ullam reiciendis ad. Molestias distinctio porro eveniet ab voluptatum consequatur consequuntur, consectetur repudiandae. Ad magnam pariatur atque, vel accusantium aspernatur corrupti alias amet vitae fuga facere.",
        ],
    ];
    return view ('posts',[
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single post
Route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Reris Pratama",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt magni doloremque magnam dolor placeat totam facere enim quisquam quasi error quidem expedita libero unde cumque ut, ullam, vitae officiis perspiciatis? Temporibus saepe impedit tenetur, cumque doloribus illo maxime quasi itaque minus soluta aspernatur nam accusamus expedita quam eligendi ratione deleniti facere doloremque facilis, recusandae repellendus numquam. Cupiditate dolor excepturi ipsam corrupti tempore ullam nisi! Quam tempora dolorum totam possimus ipsa libero velit, non magnam hic, eaque consequatur adipisci? Porro, aliquam!",
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Catherine",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis autem rerum sint, id, fuga sapiente molestiae nemo velit laborum est, ipsa error alias placeat. Ut expedita, at, illum quod culpa vitae nulla sapiente in tempore molestias sunt atque harum dolorem quam incidunt quis inventore non hic dolorum deleniti commodi aspernatur autem. Accusantium temporibus placeat neque animi exercitationem nobis suscipit, accusamus nihil nisi nostrum quos id culpa distinctio libero aliquam, quod saepe aliquid enim blanditiis ullam reiciendis ad. Molestias distinctio porro eveniet ab voluptatum consequatur consequuntur, consectetur repudiandae. Ad magnam pariatur atque, vel accusantium aspernatur corrupti alias amet vitae fuga facere.",
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post,
    ]);
});

// Route::get('/', function () {
//     return view('welcome');
// });
