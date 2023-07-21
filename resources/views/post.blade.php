@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <p>By . <a href="/posts?author={{ $post->author->username }}"
                        class="text-decoration-none">{{ $post->author->name }}</a> in <a
                        href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>

                @if ($post->image)
                    <div style="max-height: 400px; overflow:hidden">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid">
                    </div>
                @else
                    <img src="https://random.imagecdn.app/1200/400" alt="" class="img-fluid">
                @endif

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

                <a href="/posts">Back to Posts</a>
            </div>
        </div>
    </div>
@endsection

{{-- Post::create([
    'title' =>  'Judul Ketiga',
    'slug' => 'judul-ketiga',
    'excerpt' => 'Lorem ipsum ketiga',
    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda adipisci quaerat accusamus quisquam porro, culpa, libero cum illo sequi nostrum architecto est voluptates sunt quis? Ullam eos magni libero ex voluptatum.</p><p>Veniam accusamus mollitia autem cumque provident nesciunt at. Hic repudiandae sed rerum! Et obcaecati nulla reiciendis ab praesentium, ut numquam quidem? Quod porro voluptatibus velit numquam! Consequatur eveniet eum quis commodi vero rem nesciunt perspiciatis minima alias ullam, quas aliquam ipsum, repudiandae recusandae, maxime eos error unde.</p><p>Sunt porro facere similique nam illo pariatur alias velit sed, quas sequi consectetur quae mollitia eaque, magni a error aut illum veritatis fuga repellendus reprehenderit tempore possimus et.</p><p>Aperiam ipsa necessitatibus praesentium earum dolorem labore maiores, possimus dicta aliquam, quo esse accusantium porro repellendus dolorum doloremque veniam impedit fuga perferendis? Aut, maiores adipisci corrupti delectus neque voluptatem excepturi quidem libero, inventore sapiente nobis consectetur obcaecati blanditiis tenetur, debitis qui hic nihil deserunt?</p>'
]) --}}

{{-- Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde saepe dicta dignissimos accusamus dolor nisi voluptatem maiores exercitationem iure, quaerat possimus qui reprehenderit amet eligendi tenetur ducimus corporis voluptatum beatae sapiente veniam, rem id suscipit inventore totam. Quia, voluptates et distinctio iste perferendis eos nihil excepturi, voluptatem quibusdam culpa non officiis totam? Accusantium, fugiat, veniam maiores doloribus velit error totam numquam voluptates enim saepe tenetur dicta? Eum cum, quidem assumenda nostrum itaque debitis, maxime cupiditate eius distinctio repellat ad praesentium. Labore veniam doloribus quaerat, exercitationem sunt nisi nobis dolorem odit quam necessitatibus sint voluptatem nesciunt dolorum adipisci iste similique aut. --}}
