@extends('layouts.admin')

@section('title', 'Admin - Manage a user')

@section('left-panel')
    @include('partials.admin.left-panel', ['page'=>'users.management'])
@endsection

@push('scripts')
<script src="{{ asset('js/admin/user/manage.js') }}" defer></script>
@endpush

@push('styles')
<link rel="stylesheet" href="{{ asset('css/admin/search-area.css') }}">
<link rel="stylesheet" href="{{ asset('css/admin/user.css') }}">
@endpush

@section('content')
<main class="flex flex-column">
    <div class="admin-top-page-box">
        <div class="align-center">
            <svg class="size18 mr8" style="margin-top: 1px;" fill="#202224" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M130,254C61.82,254.05,5.93,198.12,6,129.89S62.07,5.77,130.23,6A124.29,124.29,0,0,1,254,129.79C254.18,198,198.32,254,130,254Zm99-123.86c.06-54.55-43.36-98.92-98-99C89.94,31.1,59,50.08,41.12,86.79,23.34,123.28,28,158.8,52.29,191.58c2.25,3,3.58,3.77,7,1,43-34.12,98.77-34.07,141.52.13,3.24,2.59,4.48,1.9,6.63-.87C221.6,173.69,229,153.2,229,130.14ZM74.91,212c32.78,23.76,81.48,21.67,110.05-.06C155.36,185.48,105.73,185.4,74.91,212Zm54.77-57.31c-27.29-.17-49.5-22.52-49.31-49.63a49.79,49.79,0,0,1,50.24-49.34c27.12.25,49.43,23,49,50A49.53,49.53,0,0,1,129.68,154.65Zm25-49.32A24.65,24.65,0,1,0,130,130,24.71,24.71,0,0,0,154.65,105.33Z"/></svg>
            <h1 class="fs20 dark no-margin">User management</h1>
        </div>
        <div class="align-center height-max-content">
            <a href="{{ route('admin.dashboard') }}" class="blue-link align-center">
                <svg class="mr4" style="width: 13px; height: 13px" fill="#2ca0ff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M503.4,228.88,273.68,19.57a26.12,26.12,0,0,0-35.36,0L8.6,228.89a26.26,26.26,0,0,0,17.68,45.66H63V484.27A15.06,15.06,0,0,0,78,499.33H203.94A15.06,15.06,0,0,0,219,484.27V356.93h74V484.27a15.06,15.06,0,0,0,15.06,15.06H434a15.05,15.05,0,0,0,15-15.06V274.55h36.7a26.26,26.26,0,0,0,17.68-45.67ZM445.09,42.73H344L460.15,148.37V57.79A15.06,15.06,0,0,0,445.09,42.73Z"/></svg>
                <span class="fs13 bold">{{ __('Home') }}</span>
            </a>
            <svg class="size10 mx4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M224.31,239l-136-136a23.9,23.9,0,0,0-33.9,0l-22.6,22.6a23.9,23.9,0,0,0,0,33.9l96.3,96.5-96.4,96.4a23.9,23.9,0,0,0,0,33.9L54.31,409a23.9,23.9,0,0,0,33.9,0l136-136a23.93,23.93,0,0,0,.1-34Z"/></svg>
            <div class="flex align-center">
                <span class="fs13 bold">{{ __('Manage a user') }}</span>
            </div>
        </div>
    </div>
    @if(!$user) <!-- search for a user to manage -->
    <div class="full-center flex-column" style='margin: 30px 0 300px 0;'>
        <h2 class="fs20 dark no-margin">Manage a user</h2>
        <p class="dark no-margin mt4">Search for a user by name or username to manage</p>
        <div style="margin-top: 12px; width: 48%;">
            <div class="relative">
                <svg class="absolute size14" fill="#5b5b5b" style="top: 13px; left: 13px;" enable-background="new 0 0 515.558 515.558" viewBox="0 0 515.558 515.558" xmlns="http://www.w3.org/2000/svg"><path d="m378.344 332.78c25.37-34.645 40.545-77.2 40.545-123.333 0-115.484-93.961-209.445-209.445-209.445s-209.444 93.961-209.444 209.445 93.961 209.445 209.445 209.445c46.133 0 88.692-15.177 123.337-40.547l137.212 137.212 45.564-45.564c0-.001-137.214-137.213-137.214-137.213zm-168.899 21.667c-79.958 0-145-65.042-145-145s65.042-145 145-145 145 65.042 145 145-65.043 145-145 145z"></path></svg>
                <input type="text" class="search-input-style full-width border-box" id="user-search-input" autocomplete="off" placeholder="search for a user to manage">
                <div class="search-button-style" id="search-for-user-button">
                    <svg class="size14 mr4" fill="#5b5b5b" enable-background="new 0 0 515.558 515.558" viewBox="0 0 515.558 515.558" xmlns="http://www.w3.org/2000/svg"><path d="m378.344 332.78c25.37-34.645 40.545-77.2 40.545-123.333 0-115.484-93.961-209.445-209.445-209.445s-209.444 93.961-209.444 209.445 93.961 209.445 209.445 209.445c46.133 0 88.692-15.177 123.337-40.547l137.212 137.212 45.564-45.564c0-.001-137.214-137.213-137.214-137.213zm-168.899 21.667c-79.958 0-145-65.042-145-145s65.042-145 145-145 145 65.042 145 145-65.043 145-145 145z"></path></svg>
                    <span class="bold dark fs12">search</span>
                </div>
            </div>
            <div class="relative">
                <div id="user-search-result-box" class="search-result-box full-width scrolly none">
                    <input type="hidden" id="user-to-manage-k" autocomplete="off">
                    <div class="results-container none">
                        
                    </div>
                    <a href="" class="search-entity search-entity-factory none">
                        <img src="" class="size36 rounded mr8 avatar" alt="" style="border: 3px solid #9f9f9f;">
                        <div>
                            <div class="bold fs15 dark fullname">Mouad Nassri</div>
                            <div class="fs13 dark username">hostname47</div>
                        </div>
                    </a>
                    <div id="user-search-fetch-more-results" class="full-center my12 none" style='height: 32px;'>
                        <svg class="spinner size20" fill="none" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="7" stroke="currentColor" stroke-opacity="0.25" stroke-width="2" vector-effect="non-scaling-stroke"></circle>
                            <path d="M15 8a7.002 7.002 0 00-7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" vector-effect="non-scaling-stroke"></path>
                        </svg>
                    </div>
                    <!-- loading -->
                    <div class="search-loading full-center flex-column none" style="height: 86px">
                        <svg class="spinner size24 black" fill="none" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="7" stroke="currentColor" stroke-opacity="0.25" stroke-width="2" vector-effect="non-scaling-stroke"></circle>
                            <path d="M15 8a7.002 7.002 0 00-7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" vector-effect="non-scaling-stroke"></path>
                        </svg>
                        <span class="fs12 dark fs11 bold" style="margin-top: 5px;">searching</span>
                    </div>
                    <!-- no results found -->
                    <div class="no-results-found-box full-center none" style="height: 58px">
                        <svg class="size14 mr8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256,0C114.5,0,0,114.51,0,256S114.51,512,256,512,512,397.49,512,256,397.49,0,256,0Zm0,472A216,216,0,1,1,472,256,215.88,215.88,0,0,1,256,472Zm0-257.67a20,20,0,0,0-20,20V363.12a20,20,0,0,0,40,0V234.33A20,20,0,0,0,256,214.33Zm0-78.49a27,27,0,1,1-27,27A27,27,0,0,1,256,135.84Z"/></svg>
                        <p class="fs13 gray no-margin bold">User not found with your search query</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="admin-page-content-box">
        <input type="hidden" id="user-id" value="{{ $user->id }}" autocomplete="off">
        @include('partials.session-messages')

        <div class="flex">
            <img src="{{ $user->avatar(200) }}" id="user-avatar" class="">
            <div id="user-meta-box">
                <h1 class="no-margin fullname">{{ $user->fullname }}</h1>
                <div class="username">{{ $user->username }}</div>
                <div class="align-center">
                    <div class="meta mr4">Role :</div>
                    @if($highrole == 'Normal User')
                    <div class="italic light-gray meta">{{ $highrole }}</div>
                    @else
                    <div class="meta">{{ $highrole }}</div>
                    @endif
                </div>
                <div class="align-center">
                    <svg aria-hidden="true" fill="#282b2f" class="size14 mr6" viewBox="0 0 18 18"><path d="M9 4.5a1.5 1.5 0 0 0 1.28-2.27L9 0 7.72 2.23c-.14.22-.22.48-.22.77 0 .83.68 1.5 1.5 1.5Zm3.45 7.5-.8-.81-.81.8c-.98.98-2.69.98-3.67 0l-.8-.8-.82.8c-.49.49-1.14.76-1.83.76-.55 0-1.3-.17-1.72-.46V15c0 1.1.9 2 2 2h10a2 2 0 0 0 2-2v-2.7c-.42.28-1.17.45-1.72.45-.69 0-1.34-.27-1.83-.76Zm1.3-5H10V5H8v2H4.25C3 7 2 8 2 9.25v.9c0 .81.91 1.47 1.72 1.47.39 0 .77-.14 1.03-.42l1.61-1.6 1.6 1.6a1.5 1.5 0 0 0 2.08 0l1.6-1.6 1.6 1.6c.28.28.64.43 1.03.43.81 0 1.73-.67 1.73-1.48v-.9C16 8.01 15 7 13.75 7Z"></path></svg>
                    <span class="meta">{{ __('Member for') }} <span class="ml4" title="{{ $user->join_date }}">{{ $user->join_date_humans }}</span></span>
                </div>
                <div class="align-center">
                    <svg class="size12 mr6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M149.78,24c-1.59-11.62,9.08-21.73,20.46-18.55,15.86,4.42,30,12.39,42.71,22.8A127,127,0,0,1,253.15,86c.53,1.53,1,3.09,1.41,4.66a9.31,9.31,0,0,1,.21,1.79c.11,8.12-5.09,15-12.24,17-7.65,2.05-16.12-1.28-19.6-8.13-2.5-4.92-4.19-10.23-6.67-15.15-11.35-22.5-28.86-38.21-52.52-46.94C156.42,36.46,150.94,32.45,149.78,24ZM248,148.15c-5.4-4.34-11.48-4.85-17.87-1.91-5.92,2.72-8,8.16-10.21,13.63-15,36.7-42.39,57.53-81.85,60.65-40.68,3.21-78.94-22.13-93.12-60A93.32,93.32,0,0,1,75.22,53.15c9-7,19.25-11.31,29.53-15.84a16.9,16.9,0,0,0,9.17-22c-3.4-8.5-12.58-12.77-21.8-9.4C47,22.42,18.44,53.84,7.24,100.79c-.75,3.13-.76,6.43-1.63,9.53A25.14,25.14,0,0,1,5.15,114,25.78,25.78,0,0,1,4.76,118a25.93,25.93,0,0,1-.34,4.68v15.2c.06.39.13.77.18,1.16a32.61,32.61,0,0,1,.67,4.11C7.12,149,7.35,155.3,9.1,161.28q15.65,53.25,64.46,79.36a117.93,117.93,0,0,0,37.87,12.64c.36,0,.71,0,1.07,0a28.75,28.75,0,0,1,7.33.94,29,29,0,0,1,5.65.56h.15c.78,0,1.55,0,2.31.1s1.33-.1,2-.1a29.69,29.69,0,0,1,4.76.39h3.77a27,27,0,0,1,5.53-.58l.6,0a1.88,1.88,0,0,1,1.14-.38c30-3,55.54-15.52,76.82-36.63,14.91-14.79,25.81-32.2,31.52-52.55C256,158.17,253.28,152.42,248,148.15Z"></path></svg>
                    <div class="meta">Account status : <strong class="{{ $user->scolor }}">{{ $user->status }}</strong></div>
                </div>
            </div>
        </div>

        <div class="column-sections-box">
            <div class="column-section">
                <!-- User activities -->
                <h2 class="dark">Activities</h2>
                <div class="align-center mb4" style="gap: 6px;">
                    <a href="{{ request()->fullUrlWithQuery(['tab'=>'posts']) }}" class="button-style-5 fs13">
                        <span class="@if($tab=='posts') dark-blue @endif">Posts ({{ $statistics['posts'] }})</span>
                    </a>
                    <a href="{{ request()->fullUrlWithQuery(['tab'=>'comments']) }}" class="button-style-5 fs13">
                        <span class="@if($tab=='comments') dark-blue @endif">Comments ({{ $statistics['comments'] }})</span>
                    </a>
                    <a href="{{ request()->fullUrlWithQuery(['tab'=>'bans']) }}" class="button-style-5 fs13">
                        <span class="@if($tab=='bans') dark-blue @endif">Bans ({{ $statistics['bans'] }})</span>
                    </a>
                </div>

                <div class="typical-section-style">
                    @switch($tab)
                        @case('posts')
                            <div class="align-center mb8">
                                <svg class="size16 mr8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M130,17.11h97.27c11.82,0,15.64,3.73,15.64,15.34q0,75.07,0,150.16c0,11.39-3.78,15.13-15.22,15.13-2.64,0-5.3.12-7.93-.06a11.11,11.11,0,0,1-10.53-9.38c-.81-5.69,2-11,7.45-12.38,3.28-.84,3.52-2.36,3.51-5.06-.07-27.15-.11-54.29,0-81.43,0-3.68-1-4.69-4.68-4.68q-85.63.16-171.29,0c-3.32,0-4.52.68-4.5,4.33q.26,41,0,81.95c0,3.72,1.3,4.53,4.56,4.25a45.59,45.59,0,0,1,7.39.06,11.06,11.06,0,0,1,10.58,11c0,5.62-4.18,10.89-9.91,11.17-8.43.4-16.92.36-25.36,0-5.16-.23-8.82-4.31-9.68-9.66a33,33,0,0,1-.24-5.27q0-75.08,0-150.16c0-11.61,3.81-15.34,15.63-15.34Zm22.49,45.22c16.56,0,33.13,0,49.7,0,5.79,0,13.59,2,16.83-.89,3.67-3.31.59-11.25,1.19-17.13.4-3.92-1.21-4.54-4.73-4.51-19.21.17-38.42.08-57.63.08-22.73,0-45.47.11-68.21-.1-4,0-5.27,1-4.92,5a75.62,75.62,0,0,1,0,12.68c-.32,3.89.78,5,4.85,5C110.54,62.21,131.51,62.33,152.49,62.33ZM62.3,51.13c0-11.26,0-11.26-11.45-11.26h-.53c-10.47,0-10.47,0-10.47,10.71,0,11.75,0,11.75,11.49,11.75C62.3,62.33,62.3,62.33,62.3,51.13ZM102,118.66c25.79.3,18.21-2.79,36.49,15.23,18.05,17.8,35.89,35.83,53.8,53.79,7.34,7.35,7.3,12.82-.13,20.26q-14.94,15-29.91,29.87c-6.86,6.81-12.62,6.78-19.5-.09-21.3-21.28-42.53-42.64-63.92-63.84a16.11,16.11,0,0,1-5.24-12.62c.23-9.86,0-19.73.09-29.59.07-8.71,4.24-12.85,13-13C91.81,118.59,96.92,118.66,102,118.66ZM96.16,151c.74,2.85-1.53,6.66,1.41,9.6,17.66,17.71,35.39,35.36,53,53.11,1.69,1.69,2.59,1.48,4.12-.12,4.12-4.34,8.24-8.72,12.73-12.67,2.95-2.59,2.36-4-.16-6.49-15.68-15.46-31.4-30.89-46.63-46.79-4.56-4.76-9.1-6.73-15.59-6.35C96.18,141.8,96.16,141.41,96.16,151Z"></path></svg>
                                <h4 class="dark no-margin fs16">Posts</h4>
                            </div>
                            <div class="mt4">
                                <div class="resources-box">
                                    @foreach($resources as $post)
                                    <div class="post-component">
                                        <a href="{{ $post->link }}" target="_blank" class="title">{{ $post->title }}</a>
                                        <div class="align-center mt2">
                                            <span class="dark fs11">status : <strong class="{{ $post->scolor }}">{{ $post->status }}</strong></span>
                                            <span class="light-gray mx8 fs10">〡</span>
                                            <a href="{{ route('edit.post', ['post'=>$post->id]) }}" target="_blank" class="no-underline fs11 dark-blue">manage</a>
                                        </div>
                                    </div>
                                    @endforeach

                                    @if(!$resources->count())
                                    <div class="typical-section-style align-center mt4">
                                        <svg class="size13 mr8" style="min-width: 13px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256,0C114.5,0,0,114.51,0,256S114.51,512,256,512,512,397.49,512,256,397.49,0,256,0Zm0,472A216,216,0,1,1,472,256,215.88,215.88,0,0,1,256,472Zm0-257.67a20,20,0,0,0-20,20V363.12a20,20,0,0,0,40,0V234.33A20,20,0,0,0,256,214.33Zm0-78.49a27,27,0,1,1-27,27A27,27,0,0,1,256,135.84Z"/></svg>
                                        <span class="fs13">This user does not have any post.</span>
                                    </div>
                                    @endif
                                    <div class="flex">
                                        <div class="move-to-right">
                                            {{ $resources->appends(request()->query())->onEachSide(0)->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @break
                        @case('comments')
                            <div class="align-center mb8">
                                <svg class="size18 mr8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M73.59,195.36c-6.65,0-12.82,0-19,0-17.48-.15-30.21-12.5-30.31-30q-.22-49.08,0-98.15c.1-17.81,12.88-30,31.2-30,32.71-.09,65.42,0,98.14,0H209.2c20.13,0,32.25,12.15,32.27,32.28q.06,47,0,94c0,19.85-12.2,31.9-32.12,31.92-23,0-46-.07-69,.1a12.43,12.43,0,0,0-7,2.44c-14.14,11-28.13,22.1-42.1,33.29-3.73,3-7.53,4.94-12.25,2.53s-5.54-6.56-5.47-11.35C73.69,213.61,73.59,204.82,73.59,195.36Zm19.68,9.1c2.17-1.64,3.48-2.58,4.76-3.59,8.45-6.71,17-13.31,25.28-20.24a20.56,20.56,0,0,1,14.27-5.06c23.91.24,47.82.13,71.73.09,8.82,0,12.45-3.62,12.46-12.27V69c0-8.34-3.46-11.84-11.82-11.84H55.86C47.48,57.13,44,60.62,44,68.89v94.88c0,8.09,3.72,11.82,11.89,11.89,8.64.07,17.28,0,25.92,0,8.08.07,11.42,3.46,11.48,11.64,0,5.37,0,10.7,0,17.16Z"/></svg>
                                <h4 class="dark no-margin fs16">Comments</h4>
                            </div>
                            <div class="mt4">
                                <div class="resources-box">
                                    @foreach($resources as $comment)
                                    <div class="comment-component">
                                        <div class="mb4">
                                            @if($comment->post)
                                            <a href="{{ $comment->link }}" target="_blank" class="content">{{ $comment->content }}</a>
                                            @else
                                            <span class="content">{{ $comment->content }}</span>
                                            @endif
                                        </div>
                                        <div class="align-center">
                                            <div class="meta">
                                                <span title="{{ $comment->date }}">{{ $comment->date_humans }}</span>
                                            </div>
                                            <span class="light-gray mx4 fs10">〡</span>
                                            <div class="meta">
                                                <span class="no-wrap">{{ __('status') }} :</span>
                                                <span class="{{ $comment->scolor }}">{{ $comment->status }}</span>
                                            </div>
                                            <span class="light-gray mx4 fs10">〡</span>
                                            <a href="{{ route('admin.comments.manage', ['comment'=>$comment->id]) }}" target="_blank" class="meta no-underline">manage</a>
                                        </div>
                                        <div class="flex ml4 mt4">
                                            <svg class="size14 mr6" style="min-width: 14px;" fill="#d2d2d2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 284.93 284.93"><polygon points="281.33 281.49 281.33 246.99 38.25 246.99 38.25 4.75 3.75 4.75 3.75 281.5 38.25 281.5 38.25 281.49 281.33 281.49"></polygon></svg>
                                            @if($comment->post)
                                            <a href="{{ $comment->link }}" class="post-title dark mt4 lh15"><strong>post</strong> : {{ $comment->post->title }}</a>
                                            @else
                                            <span class="meta bold"><em>{{ __('Parent post cannot be reached') }} !</em></span>
                                            @endif
                                        </div>
                                    </div>
                                    @endforeach

                                    @if(!$resources->count())
                                    <div class="typical-section-style align-center mt4">
                                        <svg class="size13 mr8" style="min-width: 13px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256,0C114.5,0,0,114.51,0,256S114.51,512,256,512,512,397.49,512,256,397.49,0,256,0Zm0,472A216,216,0,1,1,472,256,215.88,215.88,0,0,1,256,472Zm0-257.67a20,20,0,0,0-20,20V363.12a20,20,0,0,0,40,0V234.33A20,20,0,0,0,256,214.33Zm0-78.49a27,27,0,1,1-27,27A27,27,0,0,1,256,135.84Z"/></svg>
                                        <span class="fs13">This user does not have any comment.</span>
                                    </div>
                                    @endif
                                    <div class="flex">
                                        <div class="move-to-right">
                                            {{ $resources->appends(request()->query())->onEachSide(0)->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @break
                        @case('bans')
                            <div class="align-center mb8">
                                <svg class="size14 mr8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M2.19,144V114.32c2.06-1.67,1.35-4.2,1.78-6.3Q19.81,30.91,94.83,7.28c6.61-2.07,13.5-3.26,20.26-4.86h26.73c1.44,1.93,3.6.92,5.39,1.2C215,14.2,261.83,74.5,254.91,142.49c-6.25,61.48-57.27,110-119,113.3A127.13,127.13,0,0,1,4.9,155.18C4.09,151.45,4.42,147.42,2.19,144Zm126.75-30.7c-19.8,0-39.6.08-59.4-.08-3.24,0-4.14.82-4.05,4,.24,8.08.21,16.17,0,24.25-.07,2.83.77,3.53,3.55,3.53q59.89-.14,119.8,0c2.8,0,3.6-.74,3.53-3.54-.18-8.08-.23-16.17,0-24.25.1-3.27-.85-4.06-4.06-4C168.55,113.4,148.75,113.33,128.94,113.33Z"></path></svg>
                                <h4 class="dark no-margin fs16">Bans</h4>
                            </div>
                            <div class="mt4">
                                <div class="resources-box">
                                    @foreach($resources as $b)
                                    <div class="ban-component">
                                        <p class="meta"><strong>Ban type</strong> : {{ ucfirst($b->type) }}</p>
                                        @if($b->type == 'temporary')
                                        <p class="meta"><strong>Duration</strong> : {{ $b->ban_duration_hummans }}</p>
                                        <p class="meta"><strong>Started at</strong> : {{ $b->ban_date }}</p>
                                        <p class="meta"><strong>Expired at</strong> : {{ $b->expiredat }}</p>
                                        @endif
                                        <p class="meta"><strong>Banned by</strong> : <a href="{{ route('admin.users.management', ['user'=>$b->banner->username]) }}" target="_blank" class="no-underline dark-blue bold">{{ $b->banner->username }}</a></p>
                                        <p class="meta"><strong>Reason</strong> : {{ $b->reason->title }}</p>
                                    </div>
                                    @endforeach

                                    @if(!$resources->count())
                                    <div class="typical-section-style align-center mt4">
                                        <svg class="size13 mr8" style="min-width: 13px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M433.73,49.92,178.23,305.37,78.91,206.08.82,284.17,178.23,461.56,511.82,128Z"></path></svg>
                                        <span class="fs13">Account is clean with no ban records.</span>
                                    </div>
                                    @endif
                                    <div class="flex">
                                        <div class="move-to-right">
                                            {{ $resources->appends(request()->query())->onEachSide(0)->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @break
                    @endswitch
                </div>
            </div>
            <div class="column-section">
                <!-- Account settings -->
                <div>
                    <h2 class="dark">Account settings</h2>
                    <!-- user informations -->
                    <div class="typical-section-style mb8">
                        <div class="align-center">
                            <svg class="size13 mr8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M448,0H64A64.08,64.08,0,0,0,0,64V448a64.08,64.08,0,0,0,64,64H448a64.07,64.07,0,0,0,64-64V64A64.08,64.08,0,0,0,448,0Zm21.33,448A21.35,21.35,0,0,1,448,469.33H64A21.34,21.34,0,0,1,42.67,448V64A21.36,21.36,0,0,1,64,42.67H448A21.36,21.36,0,0,1,469.33,64ZM147.63,119.89a22.19,22.19,0,0,0-4.48-7c-1.07-.85-2.14-1.7-3.2-2.56a16.41,16.41,0,0,0-3.84-1.92,13.77,13.77,0,0,0-3.84-1.28,20.49,20.49,0,0,0-12.38,1.28,24.8,24.8,0,0,0-7,4.48,22.19,22.19,0,0,0-4.48,7,20.19,20.19,0,0,0,0,16.22,22.19,22.19,0,0,0,4.48,7A22.44,22.44,0,0,0,128,149.33a32.71,32.71,0,0,0,4.27-.42,13.77,13.77,0,0,0,3.84-1.28,16.41,16.41,0,0,0,3.84-1.92c1.06-.86,2.13-1.71,3.2-2.56A22.44,22.44,0,0,0,149.33,128,21.38,21.38,0,0,0,147.63,119.89ZM384,106.67H213.33a21.33,21.33,0,0,0,0,42.66H384a21.33,21.33,0,0,0,0-42.66ZM148.91,251.73a13.77,13.77,0,0,0-1.28-3.84,16.41,16.41,0,0,0-1.92-3.84c-.86-1.06-1.71-2.13-2.56-3.2a24.8,24.8,0,0,0-7-4.48,21.38,21.38,0,0,0-16.22,0,24.8,24.8,0,0,0-7,4.48c-.85,1.07-1.7,2.14-2.56,3.2a16.41,16.41,0,0,0-1.92,3.84,13.77,13.77,0,0,0-1.28,3.84,32.71,32.71,0,0,0-.42,4.27A21.1,21.1,0,0,0,128,277.33,21.12,21.12,0,0,0,149.34,256,34.67,34.67,0,0,0,148.91,251.73ZM384,234.67H213.33a21.33,21.33,0,0,0,0,42.66H384a21.33,21.33,0,0,0,0-42.66ZM147.63,375.89a20.66,20.66,0,0,0-27.74-11.52,24.8,24.8,0,0,0-7,4.48,24.8,24.8,0,0,0-4.48,7,21.38,21.38,0,0,0-1.7,8.11,21.33,21.33,0,1,0,42.66,0A17.9,17.9,0,0,0,147.63,375.89ZM384,362.67H213.33a21.33,21.33,0,0,0,0,42.66H384a21.33,21.33,0,0,0,0-42.66Z"></path></svg>
                            <h3 class="no-margin dark">User informations</h3>
                        </div>

                        <div class="mt8 fs13 dark">
                            <p class="bold my8"><span class="dark-blue">Fullname</span> : {{ $user->fullname }}</p>
                            <p class="my8"><span class="dark-blue bold">Username</span> : {{ $user->username }}</p>
                            <p class="my8"><span class="dark-blue bold">Email</span> : {{ $user->email }}</p>
                            <p class="my8"><span class="dark-blue bold">Joined</span> : {{ $user->join_date }}</p>
                            <div class="align-center flex-wrap" style="gap: 6px;">
                                <span class="no-wrap bold dark-blue" style="margin-top: -2px;">Roles :</span>
                                @foreach($user->roles as $role)
                                <span class="button-style-4 fs11 no-wrap bold">{{ $role->title }}</span>
                                @endforeach
                                @if(!$user->roles->count())
                                <span class="light-gray italic ml8">normal user</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- ban - unban user section -->
                    <div id="ban-box">
                        @if($user->status == 'deleted')
                            <!--
                                If the account is deleted by its owner or by an admin, we don't need to show
                                any section of ban; Instead we can deal with account deletion & restoration in
                                the next section (account deletion section)
                            -->
                            <div class="typical-section-style align-center my12">
                                <svg class="size13 mr8" style="min-width: 13px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256,0C114.5,0,0,114.51,0,256S114.51,512,256,512,512,397.49,512,256,397.49,0,256,0Zm0,472A216,216,0,1,1,472,256,215.88,215.88,0,0,1,256,472Zm0-257.67a20,20,0,0,0-20,20V363.12a20,20,0,0,0,40,0V234.33A20,20,0,0,0,256,214.33Zm0-78.49a27,27,0,1,1-27,27A27,27,0,0,1,256,135.84Z"/></svg>
                                <span class="fs13">This account has been deleted permanently either by its owner or by an admin.</span>
                            </div>
                        @elseif($banned)
                            <!-- unban user section -->
                            <div class="typical-section-style">
                                <div class="align-center">
                                    <svg class="size14 mr6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M3.53,137.79a8.46,8.46,0,0,1,8.7-4c2.1.23,4.28-.18,6.37.09,3.6.47,4.61-.68,4.57-4.46-.28-24.91,7.59-47.12,23-66.65C82.8,16.35,151.92,9.31,197.09,47.21c3,2.53,3.53,4,.63,7.08-5.71,6.06-11,12.5-16.28,19-2.13,2.63-3.37,3.21-6.4.73-42.11-34.47-103.77-13.24-116,39.81a72.6,72.6,0,0,0-1.61,17c0,2.36.76,3.09,3.09,3,4.25-.17,8.51-.19,12.75,0,5.46.25,8.39,5.55,4.94,9.66-12,14.24-24.29,28.18-36.62,42.39L4.91,143.69c-.37-.43-.5-1.24-1.38-1Z"></path><path d="M216.78,81.86l35.71,41c1.93,2.21,3.13,4.58,1.66,7.58s-3.91,3.54-6.9,3.58c-3.89.06-8.91-1.65-11.33.71-2.1,2-1.29,7-1.8,10.73-6.35,45.41-45.13,83.19-90.81,88.73-28.18,3.41-53.76-3-76.88-19.47-2.81-2-3.61-3.23-.85-6.18,6-6.45,11.66-13.26,17.26-20.09,1.79-2.19,2.87-2.46,5.39-.74,42.83,29.26,99.8,6.7,111.17-43.93,2.2-9.8,2.2-9.8-7.9-9.8-1.63,0-3.27-.08-4.9,0-3.2.18-5.94-.6-7.29-3.75s.13-5.61,2.21-8c7.15-8.08,14.21-16.24,21.31-24.37C207.43,92.59,212,87.31,216.78,81.86Z"></path></svg>
                                    <h3 class="no-margin dark">Unban user</h3>
                                </div>
    
                                @if($ban->type == 'permanent')
                                    <!-- permanently banned -->
                                    <h4 class="no-margin my12 dark">User's account is currently banned <span class="red">permanently</span></h4>
                                @else
                                    <!-- temporarily banned -->
                                    <h4 class="no-margin my12 dark">User's account is currently banned <span class="red">temorarily</span></h4>
                                @endif
    
                                <p class="fs13 my8"><strong>banned by :</strong> <a href="{{ route('admin.users.management', ['user'=>$ban->banner->username]) }}" class="blue bold no-underline">{{ $ban->banner->username }}</a></p>
                                <p class="fs13 my8"><strong>reason for ban :</strong> {{ $ban->reason->title }}</p>
                                <!-- Only show duration and expiration if the ban is temporary -->
                                @if($ban->type == 'temporary')
                                <p class="fs13 my8"><strong>banned at :</strong> {{ $ban->bandate }}</p>
                                <p class="fs13 my8"><strong>ban duration :</strong> {{ $ban->ban_duration_hummans }}</p>
                                <p class="fs13 my8"><strong>expired at :</strong> {{ $ban->expired_at }}</p>
                                @endif
    
                                <p class="no-margin gray lh15 my12">If this ban was random, performed by mistake, or you decide to unban this user, press unban button below. This will make user account to live but keep ban records history.</p>
                                
                                <div id="unban-user-button" class="typical-button-style dark-bs align-center width-max-content">
                                    <div class="relative size14 mr6">
                                        <svg class="size14 icon-above-spinner" fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M2.22,214.12a4.7,4.7,0,0,1,4.22-4.69c12.34-1.16,23.78-11.69,25.38-24.57.43-3.47,1.27-5,5-4.58,3.08.37,6.61-.72,9.26.42,2.87,1.25,1.36,5.3,2.31,8,4.13,11.79,12.09,19,24.46,20.77,3,.45,4.58,1.24,4,4.47a6.53,6.53,0,0,0,0,1c0,3,.73,6.27-.35,8.78-1.18,2.72-5,1.3-7.59,2.16-12.24,4.07-19.57,12.2-21.33,25-.36,2.6-1,4-3.87,3.58a10.41,10.41,0,0,0-1.48,0c-3,0-6.26.73-8.78-.35-2.72-1.18-1.4-5-2.2-7.58-3.62-11.73-13.56-20.11-24.9-21.22a4.67,4.67,0,0,1-4.14-4.68Zm85.73-11c9.07,19.26,23.66,31.67,44.88,35.55,2.65.49,3.85,1.41,3.31,4.07-.86,4.27,1.28,5.9,5.15,7.11,27.62,8.63,56.87-.32,74.69-23.28,6.78-8.72,11.91-18.47,16.91-28.31,1.77-3.48.7-4.29-2.31-5.37q-44.46-16-88.84-32.34c-3.22-1.19-4.3-.54-5.78,2.41-6.78,13.57-17.81,21.47-32.82,24.13-7.29,1.3-14.41-.75-22.39-.38C83.34,192.66,85.52,198,88,203.13Zm56.59-62.94c-1.47,3.76-1.3,5.53,3,7,12.45,4.16,24.72,8.85,37.05,13.34,17.43,6.35,34.84,12.73,52.29,19,1.16.41,3,2.48,4-.29,2-5.38,4.24-10.69,3-16.71-2-9.76-8.1-15.59-17.35-18.22-3.64-1-5.5-2.74-5.77-6.63a14.74,14.74,0,0,0-4.64-9.59c-2.47-2.34-2.44-4.38-1.33-7.34q18.66-50.06,37.11-100.2c3.4-9.18,3.31-8.92-5.47-12.57-4.38-1.81-5.67-.53-7.16,3.57C226.62,46.38,213.67,81.14,200.92,116c-1,2.78-2.28,4.31-5.43,4.48a15.76,15.76,0,0,0-10.56,4.81c-2.4,2.49-4.53,2.44-7.37,1.18-3.61-1.6-7.38-2.79-9.95-2.81C156.3,123.68,148.63,129.76,144.54,140.19ZM121.36,124.1c.21-2.28-.71-3-3-3.4C102.68,118.09,95,110.37,92,94c-.63-3.48-2.94-2.94-4.68-2.49-3.54.9-9.42-3.16-10.45,2.41C74,109.49,65.48,118.57,49.81,120.77c-4.58.64-2.75,4.22-2.42,6.11.53,3.06-3.17,7.89,2.34,9.1,16.85,3.7,23.69,10.18,26.79,26.92.64,3.43,2.9,3,4.68,2.53,3.54-.92,8.22,3,10.68-2.42a3.8,3.8,0,0,0,.11-1c2.06-14.33,11.52-23.79,26.2-25.83,2.6-.37,3.41-1.32,3.17-3.73-.13-1.3,0-2.63,0-3.94C121.34,127.06,121.23,125.57,121.36,124.1Z"/></svg>
                                        <svg class="spinner size14 opacity0 absolute" style="top: 0; left: 0" fill="none" viewBox="0 0 16 16">
                                            <circle cx="8" cy="8" r="7" stroke="currentColor" stroke-opacity="0.25" stroke-width="2" vector-effect="non-scaling-stroke"></circle>
                                            <path d="M15 8a7.002 7.002 0 00-7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" vector-effect="non-scaling-stroke"></path>
                                        </svg>
                                    </div>
                                    <span class="bold unselectable fs13">unban user</span>
                                </div>
                            </div>
                        @else
                            <!-- 
                                ban user section
    
                                - Special case :
                                Sometimes a user is temporarily banned, and the ban duration is expired and the account is
                                ready to be used, but the user does not access his account; when the account is temporarily banned,
                                and the ban duration is expired, we cleared the ban and change the user status to active again.
                                But If the user does not access his account (AccountStatus middleware is not accessed),
                                the admin should be aware of that by displaying clear expired ban section
                            -->
                            @if($user->status == 'temp-banned')
                            <div class="typical-section-style dark">
                                <p class="no-margin lh15 fs13">This user <strong>was temporarily banned</strong>, and the ban duration is expired, but he still has temporary ban status and he needs to login to his account to update the status and delete the last ban record.</p>
                                <p class="my8 lh15 fs13">You can force this action by clean the expired temporary ban record, and change the user account status to active.</p>
                                <div class="simple-line-separator my8"></div>
                                <p class="my8 fs12"><strong>reason for ban :</strong> {{ $ban->reason->title }}</p>
                                <p class="my8 fs12"><strong>ban duration :</strong> {{ $ban->ban_duration_hummans }}</p>
                                <p class="my8 fs12"><strong>banned at :</strong> {{ $ban->bandate }}</p>
                                <p class="my8 fs12"><strong>expired at :</strong> {{ $ban->expired_at }}</p>
    
                                <div id="clean-expired-ban-button" class="typical-button-style dark-bs align-center width-max-content my12">
                                    <div class="relative size14 mr4">
                                        <svg class="size14 icon-above-spinner" fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M2.22,214.12a4.7,4.7,0,0,1,4.22-4.69c12.34-1.16,23.78-11.69,25.38-24.57.43-3.47,1.27-5,5-4.58,3.08.37,6.61-.72,9.26.42,2.87,1.25,1.36,5.3,2.31,8,4.13,11.79,12.09,19,24.46,20.77,3,.45,4.58,1.24,4,4.47a6.53,6.53,0,0,0,0,1c0,3,.73,6.27-.35,8.78-1.18,2.72-5,1.3-7.59,2.16-12.24,4.07-19.57,12.2-21.33,25-.36,2.6-1,4-3.87,3.58a10.41,10.41,0,0,0-1.48,0c-3,0-6.26.73-8.78-.35-2.72-1.18-1.4-5-2.2-7.58-3.62-11.73-13.56-20.11-24.9-21.22a4.67,4.67,0,0,1-4.14-4.68Zm85.73-11c9.07,19.26,23.66,31.67,44.88,35.55,2.65.49,3.85,1.41,3.31,4.07-.86,4.27,1.28,5.9,5.15,7.11,27.62,8.63,56.87-.32,74.69-23.28,6.78-8.72,11.91-18.47,16.91-28.31,1.77-3.48.7-4.29-2.31-5.37q-44.46-16-88.84-32.34c-3.22-1.19-4.3-.54-5.78,2.41-6.78,13.57-17.81,21.47-32.82,24.13-7.29,1.3-14.41-.75-22.39-.38C83.34,192.66,85.52,198,88,203.13Zm56.59-62.94c-1.47,3.76-1.3,5.53,3,7,12.45,4.16,24.72,8.85,37.05,13.34,17.43,6.35,34.84,12.73,52.29,19,1.16.41,3,2.48,4-.29,2-5.38,4.24-10.69,3-16.71-2-9.76-8.1-15.59-17.35-18.22-3.64-1-5.5-2.74-5.77-6.63a14.74,14.74,0,0,0-4.64-9.59c-2.47-2.34-2.44-4.38-1.33-7.34q18.66-50.06,37.11-100.2c3.4-9.18,3.31-8.92-5.47-12.57-4.38-1.81-5.67-.53-7.16,3.57C226.62,46.38,213.67,81.14,200.92,116c-1,2.78-2.28,4.31-5.43,4.48a15.76,15.76,0,0,0-10.56,4.81c-2.4,2.49-4.53,2.44-7.37,1.18-3.61-1.6-7.38-2.79-9.95-2.81C156.3,123.68,148.63,129.76,144.54,140.19ZM121.36,124.1c.21-2.28-.71-3-3-3.4C102.68,118.09,95,110.37,92,94c-.63-3.48-2.94-2.94-4.68-2.49-3.54.9-9.42-3.16-10.45,2.41C74,109.49,65.48,118.57,49.81,120.77c-4.58.64-2.75,4.22-2.42,6.11.53,3.06-3.17,7.89,2.34,9.1,16.85,3.7,23.69,10.18,26.79,26.92.64,3.43,2.9,3,4.68,2.53,3.54-.92,8.22,3,10.68-2.42a3.8,3.8,0,0,0,.11-1c2.06-14.33,11.52-23.79,26.2-25.83,2.6-.37,3.41-1.32,3.17-3.73-.13-1.3,0-2.63,0-3.94C121.34,127.06,121.23,125.57,121.36,124.1Z"/></svg>
                                        <svg class="spinner size14 opacity0 absolute" style="top: 0; left: 0" fill="none" viewBox="0 0 16 16">
                                            <circle cx="8" cy="8" r="7" stroke="currentColor" stroke-opacity="0.25" stroke-width="2" vector-effect="non-scaling-stroke"></circle>
                                            <path d="M15 8a7.002 7.002 0 00-7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" vector-effect="non-scaling-stroke"></path>
                                        </svg>
                                    </div>
                                    <span class="bold unselectable">Clean expired ban & active account</span>
                                </div>
                            </div>
                            @else
                            <div class="typical-section-style">
                                <div class="align-center">
                                    <svg class="size14 mr6" fill='#d23a3a' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M2.19,144V114.32c2.06-1.67,1.35-4.2,1.78-6.3Q19.81,30.91,94.83,7.28c6.61-2.07,13.5-3.26,20.26-4.86h26.73c1.44,1.93,3.6.92,5.39,1.2C215,14.2,261.83,74.5,254.91,142.49c-6.25,61.48-57.27,110-119,113.3A127.13,127.13,0,0,1,4.9,155.18C4.09,151.45,4.42,147.42,2.19,144Zm126.75-30.7c-19.8,0-39.6.08-59.4-.08-3.24,0-4.14.82-4.05,4,.24,8.08.21,16.17,0,24.25-.07,2.83.77,3.53,3.55,3.53q59.89-.14,119.8,0c2.8,0,3.6-.74,3.53-3.54-.18-8.08-.23-16.17,0-24.25.1-3.27-.85-4.06-4.06-4C168.55,113.4,148.75,113.33,128.94,113.33Z"></path></svg>
                                    <h3 class="no-margin red">Ban user</h3>
                                </div>
                                <p class="mt8 lh15 dark">If the user behavior does not respect our guidelines and rules, ban the user. You need to select whether the ban is temporary or permanent using the section below</p>
    
                                <div class="bold dark">Select ban type :</div>
                                <div class="flex align-center fs12 my8">
                                    <div class="flex align-center">
                                        <input type="radio" name="user-ban-type" id="um-temporarily-ban" class="um-ban-type no-margin" checked="checked" autocomplete="off" value="temporary">
                                        <label for="um-temporarily-ban" class="bold ml4 dark">Temporary ban</label>
                                    </div>
                                    <div class="flex align-center" style="margin-left: 12px">
                                        <input type="radio" name="user-ban-type" id="um-permanent-ban" class="um-ban-type no-margin" autocomplete="off" value="permanent">
                                        <label for="um-permanent-ban" class="bold ml4 dark">Permanent ban</label>
                                    </div>
                                </div>
                                <div class="typical-section-style">
                                    <!-- temporary ban box -->
                                    <div class="temporary-ban-box">
                                        <h4 class="no-margin dark mb4">Temporary ban</h4>
                                        <span class="fs13">This type of ban will prevent the user from doing all activities for a selected period of time.</span>
                                        <div class="flex align-center mt4">
                                            <p class="no-margin bold fs11 dark mr8">Select ban duration :</p>
                                            <select id="ban-duration">
                                                <option value="7">7 days</option>
                                                <option value="14">14 days</option>
                                                <option value="30">1 month</option>
                                                <option value="60">2 month</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- permanent ban box -->
                                    <div class="permanent-ban-box none">
                                        <h4 class="no-margin dark mb4">Permanent ban</h4>
                                        <span class="fs13">Permanent ban will prevent the user from accessing his account permanently.</span>
                                    </div>
                                </div>
    
                                <div class="align-center mt8">
                                    <div class="bold dark mr8 no-wrap">Select reason for ban :</div>
                                    <select id="ban-reason" class="styled-input" autocomplete="off">
                                        @foreach($banreasons as $banreason)
                                        <option value="{{ $banreason->id }}">{{ $banreason->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
    
                                <div id="ban-user-button" class="typical-button-style red-bs align-center width-max-content mt8">
                                    <div class="relative size14 mr4">
                                        <svg class="size12 icon-above-spinner" fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M2.19,144V114.32c2.06-1.67,1.35-4.2,1.78-6.3Q19.81,30.91,94.83,7.28c6.61-2.07,13.5-3.26,20.26-4.86h26.73c1.44,1.93,3.6.92,5.39,1.2C215,14.2,261.83,74.5,254.91,142.49c-6.25,61.48-57.27,110-119,113.3A127.13,127.13,0,0,1,4.9,155.18C4.09,151.45,4.42,147.42,2.19,144Zm126.75-30.7c-19.8,0-39.6.08-59.4-.08-3.24,0-4.14.82-4.05,4,.24,8.08.21,16.17,0,24.25-.07,2.83.77,3.53,3.55,3.53q59.89-.14,119.8,0c2.8,0,3.6-.74,3.53-3.54-.18-8.08-.23-16.17,0-24.25.1-3.27-.85-4.06-4.06-4C168.55,113.4,148.75,113.33,128.94,113.33Z"></path></svg>
                                        <svg class="spinner size14 opacity0 absolute" style="top: 0; left: 0" fill="none" viewBox="0 0 16 16">
                                            <circle cx="8" cy="8" r="7" stroke="currentColor" stroke-opacity="0.25" stroke-width="2" vector-effect="non-scaling-stroke"></circle>
                                            <path d="M15 8a7.002 7.002 0 00-7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" vector-effect="non-scaling-stroke"></path>
                                        </svg>
                                    </div>
                                    <span class="bold unselectable">Ban user</span>
                                </div>
                            </div>
                            @endif
                        @endif
                    </div>
                    <!-- delete user account -->
                    @if($user->status != 'deleted')
                    <div class="typical-section-style mt8">
                        <!-- 
                            If the account is deleted by its owner or an admin, there's no way to restore it.
                            So we only display deletion section if the account is not already deleted
                        -->
                        <div class="align-center">
                            <svg class="size16 mr6" fill='#d23a3a' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M207.61,146.85c0,16.84,0,33.68,0,50.51-.08,23.15-16,39.2-39.15,39.32q-38.44.21-76.91,0c-23.15-.12-39.09-16.21-39.13-39.32q-.09-51.88,0-103.76c0-1.06,0-2.13.08-3.18a9.29,9.29,0,0,1,9.21-8.85,9.49,9.49,0,0,1,9.89,8.18,33.31,33.31,0,0,1,.15,5q0,51,0,101.94c0,13.14,7.45,20.67,20.49,20.68h75.54c13,0,20.49-7.56,20.49-20.69q0-51,0-101.94a38.31,38.31,0,0,1,.09-4.55,9.5,9.5,0,0,1,9.95-8.62,9,9,0,0,1,9.16,8.85c.26,7.43.13,14.87.14,22.3Q207.63,129.79,207.61,146.85Zm-122-94.48c-11.22,0-22.45-.09-33.67.12a9.32,9.32,0,0,0-9.25,9.33,9.75,9.75,0,0,0,8.88,9.81,37.17,37.17,0,0,0,4.09.08H204.43c1.06,0,2.12,0,3.18,0,5.74-.33,9.87-4.55,9.75-9.91s-4.09-9.22-9.75-9.34c-8-.17-16.08-.06-24.12-.07H168.92c0-6.2.06-11.92,0-17.63-.1-7.91-3.58-11.46-11.39-11.48q-27.54-.09-55.07,0c-7.8,0-11.25,3.58-11.34,11.53-.07,5.59,0,11.19,0,17.58Zm25.28-9.5h38.24V52.1H110.84Zm9.35,68.8c0-6.59-4-10.83-9.67-10.8s-9.62,4.41-9.63,10.9q-.08,32.7,0,65.41c0,6.51,3.89,10.92,9.5,11,5.82.12,9.76-4.26,9.8-11.14.07-10.74,0-21.49,0-32.24C120.21,133.78,120.27,122.72,120.19,111.67Zm19.64,64.86a16.89,16.89,0,0,0,1,6.18A9.34,9.34,0,0,0,151.32,188c4.73-1,7.77-4.86,7.79-10.32q.07-33.15,0-66.3c0-6.18-4-10.45-9.54-10.54s-9.69,4.23-9.74,10.72c-.09,10.9,0,21.8,0,32.7C139.79,155,139.74,165.79,139.83,176.53Z"/></svg>
                            <h3 class="no-margin red">Delete user account</h3>
                        </div>
                        <p class="fs13 dark lh15 my8">If you think this user is not appropriate or his behaviors do not respect our guidelines, you can delete his account permanently.</p>
                        <p class="fs13 dark lh15 my8">By deleting the user account, all his activities and data will be deleted as well. If the user is an author and has some posts, the posts will not be deleted.</p>
                        <div id="delete-account-button" class="typical-button-style red-bs align-center width-max-content mt8">
                            <div class="relative size14 mr6">
                                <svg class="size14 icon-above-spinner" fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M207.61,146.85c0,16.84,0,33.68,0,50.51-.08,23.15-16,39.2-39.15,39.32q-38.44.21-76.91,0c-23.15-.12-39.09-16.21-39.13-39.32q-.09-51.88,0-103.76c0-1.06,0-2.13.08-3.18a9.29,9.29,0,0,1,9.21-8.85,9.49,9.49,0,0,1,9.89,8.18,33.31,33.31,0,0,1,.15,5q0,51,0,101.94c0,13.14,7.45,20.67,20.49,20.68h75.54c13,0,20.49-7.56,20.49-20.69q0-51,0-101.94a38.31,38.31,0,0,1,.09-4.55,9.5,9.5,0,0,1,9.95-8.62,9,9,0,0,1,9.16,8.85c.26,7.43.13,14.87.14,22.3Q207.63,129.79,207.61,146.85Zm-122-94.48c-11.22,0-22.45-.09-33.67.12a9.32,9.32,0,0,0-9.25,9.33,9.75,9.75,0,0,0,8.88,9.81,37.17,37.17,0,0,0,4.09.08H204.43c1.06,0,2.12,0,3.18,0,5.74-.33,9.87-4.55,9.75-9.91s-4.09-9.22-9.75-9.34c-8-.17-16.08-.06-24.12-.07H168.92c0-6.2.06-11.92,0-17.63-.1-7.91-3.58-11.46-11.39-11.48q-27.54-.09-55.07,0c-7.8,0-11.25,3.58-11.34,11.53-.07,5.59,0,11.19,0,17.58Zm25.28-9.5h38.24V52.1H110.84Zm9.35,68.8c0-6.59-4-10.83-9.67-10.8s-9.62,4.41-9.63,10.9q-.08,32.7,0,65.41c0,6.51,3.89,10.92,9.5,11,5.82.12,9.76-4.26,9.8-11.14.07-10.74,0-21.49,0-32.24C120.21,133.78,120.27,122.72,120.19,111.67Zm19.64,64.86a16.89,16.89,0,0,0,1,6.18A9.34,9.34,0,0,0,151.32,188c4.73-1,7.77-4.86,7.79-10.32q.07-33.15,0-66.3c0-6.18-4-10.45-9.54-10.54s-9.69,4.23-9.74,10.72c-.09,10.9,0,21.8,0,32.7C139.79,155,139.74,165.79,139.83,176.53Z"/></svg>
                                <svg class="spinner size14 opacity0 absolute" style="top: 0; left: 0" fill="none" viewBox="0 0 16 16">
                                    <circle cx="8" cy="8" r="7" stroke="currentColor" stroke-opacity="0.25" stroke-width="2" vector-effect="non-scaling-stroke"></circle>
                                    <path d="M15 8a7.002 7.002 0 00-7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" vector-effect="non-scaling-stroke"></path>
                                </svg>
                            </div>
                            <span class="bold unselectable">Delete account</span>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endif
</main>
@endsection