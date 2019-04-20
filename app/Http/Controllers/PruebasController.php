<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Importamos los modelos
use App\Post;
use App\Category;
class PruebasController extends Controller
{
    public function testOrm()
    {
        /*
        $posts = Post::all(); // Es como hacer un select * from posts
        foreach ($posts as $post) {
            // Sacar datos relacionados
            echo '<h1>' . $post->title . ' - '. $post->category->name .'</h1>';
            echo "<cite>{$post->user->name}</cite>";
            echo '<p>' . $post->content . '</p>';
        }
        */
        $categories = Category::all();
        echo 'Todos los post de todas las categorias';
        foreach ($categories as $category) {
            echo '<h1>' . $category->name . '</h1> <hr>';
            foreach ($category->posts as $post) {
                echo '<h2>' . $post->title . '</h2>';
                echo '<p>' . $post->content . '</p>';
            }
        }
        die();
    }
}
