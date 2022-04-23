@extends('layouts.app')

@section('title', 'Fibonashi - Discover')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/discover.css') }}">
<link rel="stylesheet" href="{{ asset('css/post.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('js/discover.js') }}" type="text/javascript" defer></script>
@endpush

@section('content')
    <x-layout.left-panel.left-panel />
    <div class="page-padding flex">
        <div id="discover-main">
            <div class="page-path-wrapper align-center">
                <a href="{{ route('root.slash') }}" class="align-center page-path">
                    <span>{{__('Home')}}</span>
                </a>
                <svg class="size10 mx4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M224.31,239l-136-136a23.9,23.9,0,0,0-33.9,0l-22.6,22.6a23.9,23.9,0,0,0,0,33.9l96.3,96.5-96.4,96.4a23.9,23.9,0,0,0,0,33.9L54.31,409a23.9,23.9,0,0,0,33.9,0l136-136a23.93,23.93,0,0,0,.1-34Z"></path></svg>
                <a href="{{ route('discover') }}" class="page-path">
                    <span>{{__('Discover')}}</span>
                </a>
                @if($category)
                <svg class="size10 mx4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M224.31,239l-136-136a23.9,23.9,0,0,0-33.9,0l-22.6,22.6a23.9,23.9,0,0,0,0,33.9l96.3,96.5-96.4,96.4a23.9,23.9,0,0,0,0,33.9L54.31,409a23.9,23.9,0,0,0,33.9,0l136-136a23.93,23.93,0,0,0,.1-34Z"></path></svg>
                <a href="{{ route('discover', ['category'=>$category->slug]) }}" class="fs13 bold">
                    <span class="dark">{{__('Category')}} : <span class="blue">{{ $category->title }}</span></span>
                </a>
                @endif
            </div>
            <div class="align-center">
                <svg class="size22 mr8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M129.93,253.53c-68-.07-123.6-55.81-123.42-123.74C6.69,61.7,62.5,6.13,130.34,6.48S253.4,62.05,253.49,129.91,197.89,253.6,129.93,253.53Zm.26-24.9A98.63,98.63,0,1,0,31.4,130.47,98.39,98.39,0,0,0,130.19,228.63ZM114.3,110.34a5.81,5.81,0,0,0-3.74,3.27C102.8,133.15,95,152.69,86.88,173.13l59.63-23.74a5.33,5.33,0,0,0,3-3.26c7.72-19.42,15.46-38.83,23.61-59.25C152.81,95,133.57,102.69,114.3,110.34Z"></path></svg>
                <h1 class="title-style">Discover</h1>
            </div>
            @if(Session::has('message'))
                <div class="informative-message-container align-center relative my8">
                    <div class="informative-message-container-left-stripe imcls-green"></div>
                    <div class="no-margin fs13 message-text">{!! Session::get('message') !!}</div>
                    <div class="close-parent close-informative-message-style">✖</div>
                </div>
            @endif
            @if(Session::has('errors'))
                <div class="informative-message-container align-center relative my8">
                    <div class="informative-message-container-left-stripe imcls-red"></div>
                    <div class="no-margin fs13 message-text">{!! Session::get('errors')->first() !!}</div>
                    <div class="close-parent close-informative-message-style">✖</div>
                </div>
            @endif
            @if(Session::has('error'))
                <div class="informative-message-container align-center relative my8">
                    <div class="informative-message-container-left-stripe imcls-red"></div>
                    <div class="no-margin fs13 message-text">{!! Session::get('error') !!}</div>
                    <div class="close-parent close-informative-message-style">✖</div>
                </div>
            @endif

            @if($category)
            <div class="align-center my8">
                <svg class="size14 mr6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M156.49,146.2q-32.57,0-65.12,0c-7.57,0-10.44-2.8-10.46-10.22q-.06-23.25,0-46.51c0-7.21,2.85-10,10.12-10q65.1,0,130.22,0c7.16,0,10,2.85,10,10.17q.1,23.27,0,46.51c0,7.21-3,10.07-10.13,10.08Q188.8,146.24,156.49,146.2Zm64.63,83.56c7.26,0,10.09-2.83,10.12-10.07q.1-23.25,0-46.5c0-7.23-3-10.26-10-10.27q-65.1-.06-130.21,0c-7.11,0-10.09,3-10.11,10.16,0,15,0,30,0,45,0,9.24,2.36,11.65,11.48,11.66q31.82,0,63.64,0C177.71,229.78,199.41,229.82,221.12,229.76ZM30.64,200c0,3.73.86,5.17,4.86,5,6.67-.33,13.38-.09,20.07-.09,13.45,0,13.37,0,12.78-13.5-.12-2.65-1-3.33-3.45-3.25-4.41.14-8.83-.11-13.22.08-3,.14-4.32-.63-4.29-4q.21-29.62,0-59.26c0-3.11,1.16-3.91,4-3.81,4.57.17,9.14.06,13.71,0,1.42,0,3.19.27,3.12-2-.14-4.7,1.63-10.14-.75-13.87-1.65-2.59-7-.58-10.72-.85a17.62,17.62,0,0,0-3.91,0c-4.17.61-5.58-.77-5.52-5.25.27-19.58.12-39.17.12-58.76,0-11.19,0-10.92-11.31-11.26-4.75-.15-5.55,1.58-5.52,5.81.16,27.26.08,54.52.08,81.79C30.71,144.46,30.78,172.21,30.64,200Z"></path></svg>
                <p class="dark fs14 bold no-margin">Category : <span class="blue unselectable">{{ $category->title }}</span></p>
            </div>
            @endif

            <div id="filters-wrapper">
                <p id="text-with-filters" class="dark no-margin">{{ __('Find out what has been recently written') }}.</p>
                <div class="align-center">
                    <div class="align-center">
                        <label for="discover-posts-sort" class="fs12 bold dark mr4">{{ __('sort by') }} :</label>
                        <select name="count" id="discover-posts-sort" class="dropdown-style-1" autocomplete="off">
                            <option @if($sort == 'publish-date') selected @endif value="publish-date">{{ __('Publish date') }}</option>
                            <option @if($sort == 'views') selected @endif value="views">{{ __('Views') }}</option>
                            <option @if($sort == 'reactions') selected @endif value="reactions">{{ __('Most clapped') }}</option>
                            <option @if($sort == 'comments') selected @endif value="comments">{{ __('Most commented') }}</option>
                        </select>
                    </div>
                    <span class="fs12 unselectable light-gray mx4">〡</span>
                    <div class="align-center">
                        <label for="discover-posts-count" class="fs12 bold dark mr4">{{ __('posts') }} :</label>
                        <select name="count" id="discover-posts-count" class="dropdown-style-1" autocomplete="off">
                            <option @if($count == 8) selected @endif value="8">8</option>
                            <option @if($count == 14) selected @endif value="14">14</option>
                            <option @if($count == 20) selected @endif value="20">20</option>
                        </select>
                    </div>
                </div>
            </div>
            <div id="posts-box">
                @foreach($posts as $post)
                <x-post.post-card :post="$post" />
                @endforeach
                <!-- no posts found -->
                @if(!$posts->count())
                    <div id="no-posts-found-box">
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M173.75,3.35c9.76,2.95,17.47,8.26,21,18.36.68,2,2.26,1.34,3.65,1.45,9.36.76,15.86,5.84,18.25,14.93.7,2.65,1.92,2.88,4,2.84,4.22-.08,8.47-.54,12.66.41a15.18,15.18,0,0,1,11.79,15.79c-.47,7.15-6.44,13.34-13.39,13.94-2.41.21-4.81.22-5.15-2.93-.3-2.83,1.34-3.83,4-4.33,5.13-.93,7.57-4.34,7-8.89-.58-4.18-3.7-6.58-8.78-6.62-4.07,0-8.17-.24-12.21.12-4.84.43-6.71-1.33-6.81-6.26a11.71,11.71,0,0,0-9.64-11.36,12,12,0,0,0-13.21,7,17.05,17.05,0,0,0-1.18,5.69c-.11,3.27-1.69,4.54-4.81,4.89-5.74.63-8.47,3.49-8.22,8.19s3.52,7.36,9.1,7.4q12.23.11,24.44,0c2.7,0,5.2.33,5.27,3.54s-2.31,3.87-5.07,3.85c-8.31,0-16.61,0-24.92,0-7.85-.08-13.4-3.57-15.66-11.35-.49-1.69-1.44-2.23-3-2.7-13.6-4.13-21.49-14.09-21.35-26.8S149.84,7.78,163.39,4c.24-.07.38-.46.58-.69ZM149.06,30.5a19.86,19.86,0,0,0,14.28,19.33c1.7.48,2.92.77,4-1.26,2.25-4.3,7.31-5.23,10.44-8,2.92-2.6,2.87-8.37,6.38-11.6a7.29,7.29,0,0,1,1.46-1.28c3-1.52,2.37-3.53,1.13-6a20.17,20.17,0,0,0-22.6-10.46A20,20,0,0,0,149.06,30.5ZM254.93,195.05c-1.38-2.45-3.65-2.68-6.15-2.66-8.4.06-16.8,0-25.85,0,3.26-5.78,3.54-11.41,3.21-17.12-.14-2.27-1.38-3.69-3.73-3.66s-3.57,1.39-3.64,3.71.1,4.57-.08,6.84a9.86,9.86,0,0,1-6.85,9.18c0-5.2-.05-9.75,0-14.31,0-2.89-.43-5.48-4-5.38-3.33.09-3.55,2.72-3.54,5.32,0,4.64,0,9.28,0,14.79a40.3,40.3,0,0,1-3.76-2.69c-3.75-3.57-3.27-8.27-3.19-12.82.05-2.64-.75-4.62-3.69-4.63s-3.59,2.13-3.58,4.7c0,5.42-.3,10.88,3.54,16.07H171.07c-1.79,0-3.69-.13-4.91,1.51a3.69,3.69,0,0,0-.31,4.14c1,2,2.83,1.87,4.64,1.87,26.39,0,52.79,0,79.18.06a8.87,8.87,0,0,0,5.26-2ZM62.44,42.76c-3.6,1.91-2.09,4.64-.79,7.09.85,1.6.2,2.32-1,3.16-6.38,4.57-8.82,11-8.81,18.61q0,23,0,46c0,2.86-.08,6.08,3.89,6s3.55-3.46,3.55-6.23c0-15.32,0-30.64,0-46,0-9,5.08-14.42,13.44-14.55,8.64-.13,14,5.32,14,14.48,0,13.2,0,26.4,0,39.6,0,6.12,3.24,9.68,8.54,9.73s8.49-3.46,8.62-9.64c.12-5.86-.08-11.73.09-17.6.15-5.16,3-8,7.86-8s7.83,2.73,7.91,7.92c.14,9.45.26,18.91,0,28.35-.27,8.37-6.87,14.52-15.24,14.75-3.58.1-7.17,0-10.75,0-6.88,0-7,.14-7,7.25,0,15,0,30,0,45,0,2.51-.26,3.8-3.33,3.68-7-.29-14-.27-21-.12-2.61.06-3.28-.75-3.22-3.27.17-6.52.07-13,.06-19.56,0-6.18-.37-6.52-6.75-6.54-3.58,0-7.17.06-10.75,0-8.45-.21-15.07-6.11-15.41-14.57-.4-9.92-.26-19.88,0-29.82.1-4.87,3.21-7.54,7.81-7.53s7.47,2.63,8,7.46c.19,1.78.1,3.58.12,5.37,0,5.22-.12,10.44.19,15.64.26,4.37,3.35,7,7.76,7.22s8-2.2,8.84-6.12c.44-2,.55-4.07-1.73-5s-4.16-.62-5.19,1.95c-.33.81-.37,2.19-1.77,1.75-1.24-.38-.76-1.64-.77-2.52,0-5.87-.08-11.73,0-17.6,0-3.2-.5-6.41-2.6-8.7-2.43-2.65-2.29-4.9-.67-7.71,1.24-2.16,1.52-4.54-1.11-5.88-2.86-1.47-4.58.09-5.58,2.79-.21.57-.44,1.25-1.51,1.24-.84-2.61,1.27-7.1-3.68-7.4-5.18-.32-2.9,4.72-4.51,7.3a35.18,35.18,0,0,0-2.3-3.41,3.19,3.19,0,0,0-4-.64c-1.39.64-2.95,2.26-2.12,3.37,4,5.38.31,9.43-1.71,13.94-.75,1.68-.69,3.82-.71,5.75-.06,9-.09,17.92,0,26.89.11,13.9,9.28,23.26,23.13,23.68a44.21,44.21,0,0,0,5.87,0c2.92-.31,4.06.6,3.89,3.73a121.53,121.53,0,0,0,0,14.66c.22,3.45-1.23,3.95-4.2,3.91-11.89-.14-23.79-.06-35.68-.05-1.14,0-2.29,0-3.43,0-2.47.17-4.08,1.5-3.93,4,.13,2.21,1.61,3.46,4,3.44.82,0,1.63,0,2.45,0H141.65c.81,0,1.63,0,2.44,0,2.29-.06,3.87-1.31,4-3.47.15-2.53-1.66-3.74-4-4-1.13-.11-2.28,0-3.42,0-13.85,0-27.7-.13-41.55.08-3.65.05-5-.67-4.89-4.69.3-11.89.1-23.79.1-35.69,0-8.12,0-8.12,8-8.22,15.7-.21,24.75-9.33,24.82-25.06,0-8.31,0-16.62,0-24.93,0-3.69-.54-7.27-3-10.06-1.83-2.06-1.63-3.77-.5-6,1.23-2.43,2.86-5.32-.88-7-3.39-1.56-4.59,1.11-5.67,3.58-.22.5-.44.75-1.08.39-.5-2.72,1-7-3.63-7.2-5.47-.26-3.44,4.65-4.46,8.12-1.63-2.93-2.68-6.84-6.67-4.73s-1.31,5-.25,7.57c.68,1.62.92,2.84-.49,4.35-3.19,3.38-4.11,7.6-4,12.18.13,4.88.1,9.78,0,14.66,0,1.09.87,3.14-1,3.15s-1.06-2-1.07-3.11c-.07-12.71,0-25.42,0-38.13,0-7-2.08-13.24-7.71-17.69-2.14-1.7-3-3-1.4-5.47,1.38-2.21,1.19-4.56-1.45-5.74s-4.28.25-5.24,2.77c-.22.59-.32,1.64-1.45,1.48-.72-2.84,1.16-7.39-4-7.43s-3,4.71-4.1,7.42C66.07,42.61,64.61,41.6,62.44,42.76Zm78.79,193.17a17,17,0,0,1,0,3.42c-.4,1.87,1.46,4.91-1.18,5.39-2.14.38-3.59-2.33-4.69-4.38s-1.06-4.06-1.13-6.17c-.05-1.79,0-3.59-.14-5.37a3.33,3.33,0,0,0-3.68-3.16,3.25,3.25,0,0,0-3.52,3.29c-.07,3.09-.36,6.26.15,9.27,1.32,7.75,5.88,12.88,13.57,15a17.84,17.84,0,0,0,18.64-6.65c3.39-4.41,3.89-9.49,3.76-14.8-.08-2.89,0-6.14-3.76-6.15s-3.8,3.26-3.79,6.13c0,1.79,0,3.59-.14,5.37a9.55,9.55,0,0,1-3.57,6.71c-.72.63-1.5,1.5-2.53,1.14-1.21-.43-.69-1.66-.7-2.54-.06-4.4,0-8.8-.06-13.2,0-2.43-1.61-3.58-3.78-3.52a3.18,3.18,0,0,0-3.37,3.41c0,2.28,0,4.56,0,6.84ZM27.87,217.67c-2.56,0-4.62.71-4.75,3.65s1.82,3.91,4.44,3.91H59.77c2.47,0,4.2-1.12,4.29-3.64.09-2.85-1.79-3.93-4.46-3.92-5.21,0-10.42,0-15.62,0C38.61,217.68,33.24,217.7,27.87,217.67ZM225.48,242c2.57,0,4-1.13,4-3.75s-1.56-3.44-3.81-3.44q-13.92,0-27.84,0c-2.31,0-3.75,1.08-3.78,3.5,0,2.67,1.46,3.73,4,3.7,4.56-.05,9.12,0,13.68,0S220.92,242,225.48,242ZM85.24,217.75a3.46,3.46,0,0,0-3.5,3.85A3.23,3.23,0,0,0,85,225.14c4.21.17,8.45.14,12.66,0a3.33,3.33,0,0,0,3.27-3.58,3.41,3.41,0,0,0-3.51-3.82c-1.94-.11-3.89,0-5.84,0C89.46,217.72,87.34,217.59,85.24,217.75Z" style="fill:#080808"/></svg>
                        <p class="bold-text no-margin">{{ __('No posts found') }}.</p>
                        <p class="desc-text no-margin">{{ __('Try to change your search query, filters or choose another category') }}.</p>
                    </div>
                @endif
            </div>
            @if($hasmore)
            <div id="posts-fetch-more" class="post-component fetch-more-style">
                <div class="featured-image-container">
                    <div class="fade-box full-dimensions"></div>
                </div>
                <div class="content-container">
                    <div class="flex mb4">
                        <div class="fade-box br2 mr4" style="height: 14px; width: 20%"></div>
                        <div class="fade-box br2" style="height: 14px; width: 20%"></div>
                    </div>
                    <div class="fade-box br2 mb8" style="height: 22px; width: 80%"></div>
                    <div class="fade-box br2 mb4" style="height: 16px; width: 100%"></div>
                    <div class="fade-box br2 mb4" style="height: 16px; width: 100%"></div>
                    <div class="fade-box br2 mb4" style="height: 16px; width: 80%"></div>
                    <div class="flex move-to-bottom mt8">
                        <div class="fade-box rounded size36 mr8"></div>
                        <div class="fade-box br3 mb4" style="height: 34px; width: 40%"></div>
                        <div class="align-center move-to-right" style="width: 30%">
                            <div class="fade-box br2 mr4" style="height: 20px; width: 50%"></div>
                            <div class="fade-box br2" style="height: 20px; width: 50%"></div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
        <div id="discover-right-panel">

        </div>
    </div>
@endsection