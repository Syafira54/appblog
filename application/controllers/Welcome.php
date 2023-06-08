<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Orm\Post;

class welcome extends CI_Controller {
    public function index()
    {
        $post_list = Post::all()->sortByDesc('created_at');
        view('post', ['post_list' => $post_list]);
    }    

}
