@extends('layouts.app')
@section('title', 'Blog Details')
@section('content')
    <!-- OUR BLOG DETAILS PART START -->
    <section class="courses-part py-5">
        <div class="container">
            <div class="row py-lg-4">
                <div class="col-12 mb-5 text-dark">
                    <h6>{{ $single_blog->title }}</h6>
                    <hr class="rehabilitation">
                    <p class="paragraph mt-4">{!! $single_blog->description !!}</p>
                </div>
            </div>
        </div>
    </section>
    <!-- OUR BLOG DETAILS PART END -->

    <!-- RELATED BLOG -->
    <section id="latest-blog" class="latest-blog my-2 my-lg-4">
        <div class="container pt-3 pb-lg-5">
            <h5>Media Center</h5>
            <h3>Related Blog</h3>
            <hr class="latest-blog">
            <div class="row justify-content-center">
                @foreach ($related_blog as $blog)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-3">
                        <div class="card p-card mt-4">
                            <img src="{{ asset('assets/img/blog/') }}/{{ $blog->image }}" alt="card-img">
                            <div class="card-body">
                                <span>{{ $blog->created_at->format('d M Y') }}</span>
                                <h5 class="my-3">{{ $blog->title }}</h5>
                                <p class="paragraph">Think about it the finest hotels, restaurants, bars, hospitals, airports and special events all have one thing in common
                                <a href="{{ route('blog.details', $blog->slug) }}">Read More</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- RELATED BLOG -->
@endsection