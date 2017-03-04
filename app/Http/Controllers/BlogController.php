<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $posts = [
        0 => [
            'title' => 'Título post 0',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas lacinia cursus imperdiet. Phasellus odio turpis, suscipit at purus nec, iaculis faucibus mauris. Cras tincidunt pretium gravida. Pellentesque magna diam, consectetur quis luctus a, pellentesque non ligula. Vivamus id cursus justo. Cras et nibh ultricies arcu varius aliquam cursus luctus odio. Aenean scelerisque neque et ultricies ornare. Etiam euismod facilisis libero id maximus. Suspendisse interdum, tortor vitae placerat sodales, elit magna vestibulum risus, sed tincidunt metus nibh eu justo. Mauris mattis tincidunt velit, bibendum hendrerit turpis vestibulum sed. Cras fringilla, lectus eget ultrices vestibulum, nibh risus ornare lacus, tristique rutrum augue diam dignissim turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam et rhoncus lorem.',
            'postedAt' => '01/03/2017 08:10'
        ],
        1 => [
            'title' => 'Título post 1',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas lacinia cursus imperdiet. Phasellus odio turpis, suscipit at purus nec, iaculis faucibus mauris. Cras tincidunt pretium gravida. Pellentesque magna diam, consectetur quis luctus a, pellentesque non ligula. Vivamus id cursus justo. Cras et nibh ultricies arcu varius aliquam cursus luctus odio. Aenean scelerisque neque et ultricies ornare. Etiam euismod facilisis libero id maximus. Suspendisse interdum, tortor vitae placerat sodales, elit magna vestibulum risus, sed tincidunt metus nibh eu justo. Mauris mattis tincidunt velit, bibendum hendrerit turpis vestibulum sed. Cras fringilla, lectus eget ultrices vestibulum, nibh risus ornare lacus, tristique rutrum augue diam dignissim turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam et rhoncus lorem.',
            'postedAt' => '01/03/2017 10:50'
        ],
        2 => [
            'title' => 'Título post 2',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas lacinia cursus imperdiet. Phasellus odio turpis, suscipit at purus nec, iaculis faucibus mauris. Cras tincidunt pretium gravida. Pellentesque magna diam, consectetur quis luctus a, pellentesque non ligula. Vivamus id cursus justo. Cras et nibh ultricies arcu varius aliquam cursus luctus odio. Aenean scelerisque neque et ultricies ornare. Etiam euismod facilisis libero id maximus. Suspendisse interdum, tortor vitae placerat sodales, elit magna vestibulum risus, sed tincidunt metus nibh eu justo. Mauris mattis tincidunt velit, bibendum hendrerit turpis vestibulum sed. Cras fringilla, lectus eget ultrices vestibulum, nibh risus ornare lacus, tristique rutrum augue diam dignissim turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam et rhoncus lorem.',
            'postedAt' => '01/03/2017 14:00'
        ],
        3 => [
            'title' => 'Título post 3',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas lacinia cursus imperdiet. Phasellus odio turpis, suscipit at purus nec, iaculis faucibus mauris. Cras tincidunt pretium gravida. Pellentesque magna diam, consectetur quis luctus a, pellentesque non ligula. Vivamus id cursus justo. Cras et nibh ultricies arcu varius aliquam cursus luctus odio. Aenean scelerisque neque et ultricies ornare. Etiam euismod facilisis libero id maximus. Suspendisse interdum, tortor vitae placerat sodales, elit magna vestibulum risus, sed tincidunt metus nibh eu justo. Mauris mattis tincidunt velit, bibendum hendrerit turpis vestibulum sed. Cras fringilla, lectus eget ultrices vestibulum, nibh risus ornare lacus, tristique rutrum augue diam dignissim turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam et rhoncus lorem.',
            'postedAt' => '01/03/2017 15:43'
        ],
        4 => [
            'title' => 'Título post 4',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas lacinia cursus imperdiet. Phasellus odio turpis, suscipit at purus nec, iaculis faucibus mauris. Cras tincidunt pretium gravida. Pellentesque magna diam, consectetur quis luctus a, pellentesque non ligula. Vivamus id cursus justo. Cras et nibh ultricies arcu varius aliquam cursus luctus odio. Aenean scelerisque neque et ultricies ornare. Etiam euismod facilisis libero id maximus. Suspendisse interdum, tortor vitae placerat sodales, elit magna vestibulum risus, sed tincidunt metus nibh eu justo. Mauris mattis tincidunt velit, bibendum hendrerit turpis vestibulum sed. Cras fringilla, lectus eget ultrices vestibulum, nibh risus ornare lacus, tristique rutrum augue diam dignissim turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam et rhoncus lorem.',
            'postedAt' => '01/03/2017 16:30'
        ],
        5 => [
            'title' => 'Título post 5',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas lacinia cursus imperdiet. Phasellus odio turpis, suscipit at purus nec, iaculis faucibus mauris. Cras tincidunt pretium gravida. Pellentesque magna diam, consectetur quis luctus a, pellentesque non ligula. Vivamus id cursus justo. Cras et nibh ultricies arcu varius aliquam cursus luctus odio. Aenean scelerisque neque et ultricies ornare. Etiam euismod facilisis libero id maximus. Suspendisse interdum, tortor vitae placerat sodales, elit magna vestibulum risus, sed tincidunt metus nibh eu justo. Mauris mattis tincidunt velit, bibendum hendrerit turpis vestibulum sed. Cras fringilla, lectus eget ultrices vestibulum, nibh risus ornare lacus, tristique rutrum augue diam dignissim turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam et rhoncus lorem.',
            'postedAt' => '01/03/2017 17:50'
        ]
    ];

    public function index(){
        return view('blog.blog',['posts' => $this->posts]);
    }
}
