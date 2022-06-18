@extends('layouts.admin')

@section('title', 'Admin- dashboard')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/admin/dashboard.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('js/admin/dashboard.js') }}" type="text/javascript" defer></script>
@endpush

@section('left-panel')
    @include('partials.admin.left-panel', ['page'=>'admin.dashboard'])
@endsection

@section('content')
    <div class="admin-top-page-box">
        <div class="align-center">
            <svg class="size20 mr8" fill="#202224" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M67,14.45c13.12,0,26.23,0,39.35,0C115.4,14.48,119,18,119,26.82q.06,40.09,0,80.19c0,8.67-3.61,12.29-12.23,12.31q-40.35.06-80.69,0c-8.25,0-11.92-3.74-11.93-12.11q-.08-40.33,0-80.68c0-8.33,3.69-12,12-12.06C39.74,14.4,53.35,14.45,67,14.45Zm-31.92,52c0,9.52.11,19-.06,28.56-.05,2.78.73,3.53,3.51,3.52q28.08-.2,56.14,0c2.78,0,3.54-.74,3.52-3.52q-.18-28.06,0-56.14c0-2.78-.73-3.53-3.52-3.52q-28.06.2-56.13,0c-2.78,0-3.58.73-3.52,3.52C35.16,48,35.05,57.2,35.05,66.4Zm157.34,52.94c-13.29,0-26.57,0-39.85,0-8.65,0-12.29-3.63-12.3-12.24q-.06-40.35,0-80.69c0-8.25,3.75-11.91,12.11-11.93q40.35-.06,80.69,0c8.33,0,12,3.7,12.05,12q.07,40.35,0,80.69c0,8.58-3.67,12.15-12.36,12.18C219.28,119.37,205.83,119.34,192.39,119.34Zm.77-84c-9.52,0-19,.1-28.56-.07-2.78,0-3.54.73-3.52,3.52q.18,28.07,0,56.14c0,2.77.73,3.53,3.52,3.52q28.07-.2,56.13,0c2.78,0,3.54-.73,3.52-3.52q-.18-28.06,0-56.14c0-2.77-.73-3.57-3.51-3.52C211.55,35.48,202.35,35.37,193.16,35.37ZM66.23,245.43c-13.29,0-26.57,0-39.85,0-8.62,0-12.22-3.64-12.24-12.31q-.06-40.09,0-80.19c0-8.7,3.59-12.34,12.19-12.35q40.33-.08,80.68,0c8.3,0,12,3.72,12,12.06q.07,40.33,0,80.68c0,8.52-3.73,12.09-12.43,12.12C93.12,245.46,79.67,245.43,66.23,245.43ZM98.1,193c0-9.35-.11-18.71.06-28.07,0-2.79-.74-3.53-3.52-3.51q-28.06.18-56.14,0c-2.78,0-3.53.74-3.51,3.52q.18,28.07,0,56.13c0,2.79.74,3.54,3.52,3.52q28.07-.18,56.13,0c2.79,0,3.57-.74,3.52-3.52C98,211.7,98.1,202.34,98.1,193Zm94.34,52.42a52.43,52.43,0,1,1,52.64-52.85A52.2,52.2,0,0,1,192.44,245.4Zm31.75-52.17a31.53,31.53,0,1,0-31.9,31.28A31.56,31.56,0,0,0,224.19,193.23Z"></path></svg>
            <h1 class="fs20 dark no-margin">Dashboard</h1>
        </div>
        <div class="align-center height-max-content">
            <a href="{{ route('admin.dashboard') }}" class="blue-link align-center">
                <svg class="mr4" style="width: 13px; height: 13px" fill="#2ca0ff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M67,14.45c13.12,0,26.23,0,39.35,0C115.4,14.48,119,18,119,26.82q.06,40.09,0,80.19c0,8.67-3.61,12.29-12.23,12.31q-40.35.06-80.69,0c-8.25,0-11.92-3.74-11.93-12.11q-.08-40.33,0-80.68c0-8.33,3.69-12,12-12.06C39.74,14.4,53.35,14.45,67,14.45Zm-31.92,52c0,9.52.11,19-.06,28.56-.05,2.78.73,3.53,3.51,3.52q28.08-.2,56.14,0c2.78,0,3.54-.74,3.52-3.52q-.18-28.06,0-56.14c0-2.78-.73-3.53-3.52-3.52q-28.06.2-56.13,0c-2.78,0-3.58.73-3.52,3.52C35.16,48,35.05,57.2,35.05,66.4Zm157.34,52.94c-13.29,0-26.57,0-39.85,0-8.65,0-12.29-3.63-12.3-12.24q-.06-40.35,0-80.69c0-8.25,3.75-11.91,12.11-11.93q40.35-.06,80.69,0c8.33,0,12,3.7,12.05,12q.07,40.35,0,80.69c0,8.58-3.67,12.15-12.36,12.18C219.28,119.37,205.83,119.34,192.39,119.34Zm.77-84c-9.52,0-19,.1-28.56-.07-2.78,0-3.54.73-3.52,3.52q.18,28.07,0,56.14c0,2.77.73,3.53,3.52,3.52q28.07-.2,56.13,0c2.78,0,3.54-.73,3.52-3.52q-.18-28.06,0-56.14c0-2.77-.73-3.57-3.51-3.52C211.55,35.48,202.35,35.37,193.16,35.37ZM66.23,245.43c-13.29,0-26.57,0-39.85,0-8.62,0-12.22-3.64-12.24-12.31q-.06-40.09,0-80.19c0-8.7,3.59-12.34,12.19-12.35q40.33-.08,80.68,0c8.3,0,12,3.72,12,12.06q.07,40.33,0,80.68c0,8.52-3.73,12.09-12.43,12.12C93.12,245.46,79.67,245.43,66.23,245.43ZM98.1,193c0-9.35-.11-18.71.06-28.07,0-2.79-.74-3.53-3.52-3.51q-28.06.18-56.14,0c-2.78,0-3.53.74-3.51,3.52q.18,28.07,0,56.13c0,2.79.74,3.54,3.52,3.52q28.07-.18,56.13,0c2.79,0,3.57-.74,3.52-3.52C98,211.7,98.1,202.34,98.1,193Zm94.34,52.42a52.43,52.43,0,1,1,52.64-52.85A52.2,52.2,0,0,1,192.44,245.4Zm31.75-52.17a31.53,31.53,0,1,0-31.9,31.28A31.56,31.56,0,0,0,224.19,193.23Z"></path></svg>
                <span class="fs13 bold">Dashboard</span>
            </a>
        </div>
    </div>

    <div class="admin-page-content-box">
        @include('partials.session-messages')
        
        <!-- new signups viewer -->
        <div id="new-signups-viewer" class="global-viewer full-center none">
            <div class="close-button-style-1 close-global-viewer unselectable">✖</div>
            <div class="viewer-box-style-1" style="margin-top: -26px; width: 400px;">
                <div class="full-center light-gray-border-bottom relative border-box" style="padding: 14px;">
                    <div class="align-center">
                        <svg class="size16 mr6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M3.56,208.74c2.19-2.66,1.75-6.06,2.5-9.12,8.33-33.47,28-57.51,59.42-71.91.6-.27,1.16-.62,2.14-1.16l-3.43-3.85a58,58,0,0,1-7.9-66c11.25-21,35.61-33.52,58.42-30,25,3.84,44.33,21.88,49.21,45.9,7.2,35.44-19.74,68.66-56.12,69.21C68,142.44,35.06,169.14,28,206.19c-.7,3.71-.29,4.6,3.65,4.57,24.61-.18,49.23-.12,73.84-.07,7.46,0,12.31,4.4,12.51,11s-4.32,11.56-11.15,11.76c-7.22.22-14.44.09-21.66.09-22.15,0-44.31-.21-66.45.13-7,.1-12-2-15.2-8.19ZM72.41,84.82A34.39,34.39,0,0,0,106.94,119c18.82-.12,34.4-15.92,34.18-34.65a34.36,34.36,0,1,0-68.71.46Z" style="fill:#020202"></path><path d="M168.47,187.81c-5.09,0-10.18.14-15.26,0-7.13-.23-11.8-4.67-12-11.09-.2-6.7,4.34-11.64,11.67-11.85,10.17-.3,20.35-.2,30.51-.05,2.83.05,3.56-.83,3.52-3.57-.16-9.68-.11-19.36,0-29,0-8,4.57-13.11,11.49-13.13s11.37,5,11.45,13.08c.09,9.68.11,19.36,0,29-.05,2.77.78,3.66,3.58,3.62,9.84-.15,19.69-.21,29.53,0,9.67.2,15.42,8.21,11.76,16.14-2.34,5.07-6.64,6.93-12,6.91-9.68,0-19.36.12-29-.07-3-.06-3.91.79-3.85,3.83.19,9.51.13,19,.05,28.55-.06,8.49-4.48,13.47-11.65,13.35-6.93-.11-11.25-5.15-11.29-13.3-.05-9.35-.16-18.71.07-28.05.08-3.31-.57-4.67-4.21-4.4C178,188.08,173.22,187.82,168.47,187.81Z" style="fill:#040404"></path></svg>
                        <span class="fs16 bold forum-color flex align-center mt2">New registered users</span>
                    </div>
                    <div class="pointer fs20 close-global-viewer unselectable absolute" style="right: 16px">✖</div>
                </div>
                <div class="relative full-dimensions y-auto-overflow border-box" style="padding: 12px; max-height: 360px;">
                    <div id="new-signups-box">

                    </div>
                    <div id="signups-fetch-more-button" class="full-center pointer my12 blue none">
                        <svg class="spinner none size12 mr6" fill="none" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="7" stroke="currentColor" stroke-opacity="0.25" stroke-width="2" vector-effect="non-scaling-stroke"></circle>
                            <path d="M15 8a7.002 7.002 0 00-7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" vector-effect="non-scaling-stroke"></path>
                        </svg>
                        <span class="fs13">load more</span>
                    </div>
                    <div id="signups-not-found-box" class="typical-section-style full-center flex-column none">
                        <svg class="size20 my8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256,0C114.5,0,0,114.51,0,256S114.51,512,256,512,512,397.49,512,256,397.49,0,256,0Zm0,472A216,216,0,1,1,472,256,215.88,215.88,0,0,1,256,472Zm0-257.67a20,20,0,0,0-20,20V363.12a20,20,0,0,0,40,0V234.33A20,20,0,0,0,256,214.33Zm0-78.49a27,27,0,1,1-27,27A27,27,0,0,1,256,135.84Z"/></svg>
                        <p class="bold dark text-center fs13 lh15 mt4">No sign ups found. Change dashboard statistics date filter to get signups for earlier dates.</p>
                    </div>
                </div>
                <div class="loading-box flex-column full-center" style="min-height: 120px; margin-top: -20px;">
                    <svg class="loading-spinner size28" fill="none" viewBox="0 0 16 16">
                        <circle cx="8" cy="8" r="7" stroke="currentColor" stroke-opacity="0.25" stroke-width="2" vector-effect="non-scaling-stroke"></circle>
                        <path d="M15 8a7.002 7.002 0 00-7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" vector-effect="non-scaling-stroke"></path>
                    </svg>
                    <span class="forum-color fs11 mt8">{{ __('please wait') }}..</span>
                </div>
            </div>
        </div>

        <div class="card-section full-width relative">
            <div class="align-center dark" style="margin-bottom: 10px">
                <div class="align-center">
                    <svg class="size16 mr4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M400,32H48A48,48,0,0,0,0,80V432a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V80A48,48,0,0,0,400,32ZM160,368a16,16,0,0,1-16,16H112a16,16,0,0,1-16-16V240a16,16,0,0,1,16-16h32a16,16,0,0,1,16,16Zm96,0a16,16,0,0,1-16,16H208a16,16,0,0,1-16-16V144a16,16,0,0,1,16-16h32a16,16,0,0,1,16,16Zm96,0a16,16,0,0,1-16,16H304a16,16,0,0,1-16-16V304a16,16,0,0,1,16-16h32a16,16,0,0,1,16,16Z"/></svg>
                    <span class="bold">Statistics</span>
                </div>
                <!-- date filter -->
                <input type="hidden" id="dashboard-statistics-filter" value="today" autocomplete="off">
                <div class="relative" style="margin-left: 10px">
                    <div class="align-center pointer button-with-suboptions">
                        <p class="no-margin mr4 fs11">Date filter: <span class="bold fs12" id="dashboard-statistics-filter-selection-name">Today</span></p>
                        <svg class="size7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 292.36 292.36"><path d="M286.93,69.38A17.52,17.52,0,0,0,274.09,64H18.27A17.56,17.56,0,0,0,5.42,69.38a17.93,17.93,0,0,0,0,25.69L133.33,223a17.92,17.92,0,0,0,25.7,0L286.93,95.07a17.91,17.91,0,0,0,0-25.69Z"/></svg>
                    </div>
                    <div class="suboptions-container typical-suboptions-container" style="width: 160px;">
                        <div class="suboption-style-1 mb2 dashboard-statistics-filter dsf-selected">
                            <div>
                                <p class="no-margin sort-by-val bold dark">Today</p>
                                <p class="no-margin fs12 dark">Statistics of today</p>
                                <input type="hidden" class="filter" value="today" autocomplete="off">
                                <input type="hidden" class="filter-name" value="Today" autocomplete="off">
                            </div>
                        </div>
                        <div class="suboption-style-1 mb2 dashboard-statistics-filter">
                            <div>
                                <p class="no-margin bold dark">This week</p>
                                <p class="no-margin fs12 dark">Statistics of this week</p>
                                <input type="hidden" class="filter" value="this-week" autocomplete="off">
                                <input type="hidden" class="filter-name" value="Last week" autocomplete="off">
                            </div>
                        </div>
                        <div class="suboption-style-1 dashboard-statistics-filter">
                            <div>
                                <p class="no-margin bold dark">This month</p>
                                <p class="no-margin fs12 dark">Statistics of this month</p>
                                <input type="hidden" class="filter" value="this-month" autocomplete="off">
                                <input type="hidden" class="filter-name" value="Last month" autocomplete="off">
                            </div>
                        </div>
                        <div class="suboption-style-1 dashboard-statistics-filter">
                            <div>
                                <p class="no-margin bold dark">Lifetime</p>
                                <p class="no-margin fs12 dark">Statistics since this website created</p>
                                <input type="hidden" class="filter" value="lifetime" autocomplete="off">
                                <input type="hidden" class="filter-name" value="Lifetime" autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex space-between relative" style="padding: 0 10px">
                <div id="dashboard-statistics-loading-strip" class="absolute full-center full-dimensions flex-column none" style="left:0; top:0; background-color: #F6F7F9;">
                    <svg class="spinner size16 ml4" fill="none" viewBox="0 0 16 16">
                        <circle cx="8" cy="8" r="7" stroke="currentColor" stroke-opacity="0.25" stroke-width="2" vector-effect="non-scaling-stroke"></circle>
                        <path d="M15 8a7.002 7.002 0 00-7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" vector-effect="non-scaling-stroke"></path>
                    </svg>
                </div>
                <div>
                    <span class="block fs11 bold blue mb8">GENERAL STATS</span>
                    <div class="dashboard-statistics-records-box">
                        <div class="dashboard-statistics-record">
                            <svg class="size28" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M257.12,65.58c-1.66.53-1.36,2.18-1.64,3.3a52.78,52.78,0,0,1-14.38,25c-21.63,21.67-43.19,43.43-65,64.94-21,20.73-54,21.27-74.23,1.6-3.56-3.46-5-7.46-3.52-12.09,1.34-4.07,4.61-6.41,8.89-6.92s7.44,2.1,10.53,4.64c9.17,7.53,19.48,9.26,30.69,5.79,5.33-1.65,9.67-5,13.57-8.86,21.09-21.06,42.25-42,63.19-63.23,18.49-18.73,11.53-47.69-13-54.34-12.46-3.37-23.08.52-32,9.5Q163.84,51.3,147.51,67.62c-2.77,2.77-5.76,5.12-9.92,4.81a10.06,10.06,0,0,1-8.92-6.16c-1.85-4.15-1.28-8.33,1.9-11.51C144.23,41.05,156.86,26.13,172,14.12c30.66-24.28,75.29-7.43,84,31.13.2.87-.31,2.07,1.07,2.44ZM63.35,257.35c.16-.26.29-.74.47-.76,12.7-1.68,22.87-8,31.67-17,7.3-7.45,14.75-14.74,22.09-22.15,2.44-2.46,5.18-4.65,7-7.68a10.5,10.5,0,0,0-8.53-15.93c-3.93-.12-6.85,2-9.5,4.66-9,9-18,18.09-27,27-10.9,10.7-25,13.47-37.22,7.52-20.68-10.06-24.4-35.62-7.51-52.68,18.86-19,37.88-37.95,56.86-56.88a34.72,34.72,0,0,1,8.13-6.44c13.5-7.14,26-5.47,37.67,4.19,6,5,12.1,4.78,16.21-.1s3-10.9-2.58-16.1C131.77,87.2,100.44,86.4,81,104.71c-22.27,21-44.15,42.48-64.92,64.94-26.56,28.71-11.75,75.86,26.09,85.9,1.46.39,3.37,0,4.3,1.8Zm193.77-87.44c-2.84-6.16-7.75-8.25-14.35-8-8.75.3-17.52,0-26.28.09-7.57.07-12.27,4.27-12.2,10.71s4.52,10.28,11.94,10.37c9.09.12,18.2-.19,27.28.11,6.56.22,11.09-2.21,13.61-8.29Zm-82.48,87.44c6.08-2.51,8.51-7,8.29-13.6-.3-9.08,0-18.19-.1-27.28-.1-7.43-4.08-11.87-10.38-11.94s-10.64,4.62-10.71,12.19c-.08,8.77.21,17.54-.09,26.29-.23,6.6,1.86,11.51,8,14.34ZM73.22,58.47Q58,43.19,42.73,28c-2.54-2.51-5.56-4.05-9.32-3.6a10,10,0,0,0-8.62,6.51c-1.88,4.84-.18,9,3.37,12.54Q42.89,58.15,57.62,72.85a17.21,17.21,0,0,0,3.92,3c6.88,3.72,15.59-1.69,15.34-9.46A12.06,12.06,0,0,0,73.22,58.47Zm110.84,130.9c-2.15,4.76-.82,9,2.74,12.64,10,10.1,20,20.23,30.2,30.18,5.08,5,11.64,5.05,15.87.65s3.91-10.71-1.17-15.89c-9.75-9.91-19.64-19.68-29.47-29.52a12.73,12.73,0,0,0-8.82-4.15C189.23,183.51,185.85,185.42,184.06,189.37ZM77,29.5c0,5-.12,9.92,0,14.88.2,7,4.23,11.36,10.38,11.42S98,51.42,98.09,44.59q.25-15.14,0-30.26C98,7.57,93.34,2.93,87.39,3c-5.79.1-10.09,4.57-10.32,11.08-.19,5.12,0,10.25,0,15.38ZM44.21,98.34c6.86-.2,11.35-4.47,11.37-10.54s-4.33-10.39-11.3-10.51c-9.92-.17-19.84-.15-29.75,0-7.1.1-11.89,4.64-11.74,10.7S7.58,98.16,14.46,98.34c4.79.13,9.58,0,14.38,0C34,98.37,39.09,98.49,44.21,98.34Z" style="fill:#030303"/></svg>
                            <span class="flex section-card-title bold">REALTIME USERS</span>
                            <span class="flex fs20 bold unselectable dashboard-online-users-count">{{ $statistics['online-users'] }}</span>
                        </div>
                        <div class="dashboard-statistics-record">
                            <svg class="size28" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M2.27,248V31.14c3.12-6.17,8.38-8,14.92-7.72,6.74.24,13.51-.29,20.22.16,5.86.39,10.24-.44,12.52-6.79,1.27-3.54,4.62-5.89,7.59-8.27,3.87-3.09,8.69-4.1,13.06-6.1H81.47c7.87,2.52,16.34,5.35,19.88,13.07,3.73,8.14,9.39,8.68,16.49,8a6.19,6.19,0,0,1,1.49,0c7.1,1,12.38-.2,16-7.85S147.18,5.27,154.73,2.42h10.89c10,2.78,18.57,7.57,23.1,17.38,1.47,3.19,3.3,3.76,6.39,3.73,15.35-.13,30.69-.07,46-.06,10.91,0,14.56,3.64,14.56,14.44q0,101.75,0,203.47c0,11.06-3.46,14.55-14.43,14.55q-112.35,0-224.69.08C10,256,5.1,254.14,2.27,248Zm127-150.53c-33.81,0-67.62.07-101.43-.09-3.69,0-4.64.85-4.63,4.59q.23,64.09,0,128.19c0,4.14,1.36,4.78,5,4.78q100.7-.15,201.38,0c4.18,0,5.14-1.14,5.12-5.2q-.23-63.6,0-127.2c0-4-.8-5.22-5-5.19C196.24,97.57,162.76,97.48,129.28,97.48Zm-.43-21c33.82,0,67.63,0,101.44.07,3.4,0,4.58-.79,4.46-4.35-.27-7.75-.29-15.52,0-23.26.14-3.71-1.31-4.29-4.55-4.23-11.05.17-22.1.23-33.15,0-4.3-.1-7.57.17-9.06,5.12-.67,2.21-2.65,4.15-4.32,5.94a30.47,30.47,0,0,1-22.37,10,10.44,10.44,0,0,1-11-9.74c-.44-5.46,3.14-9.78,9.08-11,1.3-.26,2.59-.52,3.86-.85a9.56,9.56,0,0,0,7.46-7.63A9.75,9.75,0,0,0,167.07,26c-6.13-4.9-14.58-1.78-16.49,6.06-2.71,11.12-4.72,12.7-16.23,12.7-7.92,0-15.84.15-23.75-.07-3.17-.09-4.86.74-6.41,3.77C98.65,59.29,89.46,65,77.31,65.68,71,66,66.22,61.75,65.74,55.92c-.44-5.25,3.38-9.74,9.22-11a26.6,26.6,0,0,0,6.11-1.72A10.13,10.13,0,0,0,86.3,31.52a10.82,10.82,0,0,0-10.16-7.94c-5,0-9,3.52-10.28,9C63.5,42.92,61.27,44.72,50.79,44.73c-7.75,0-15.51.19-23.25-.08-3.6-.13-4.42,1.12-4.31,4.48.24,7.41.33,14.86,0,22.26-.21,4.19,1.11,5.17,5.19,5.14C61.88,76.37,95.37,76.44,128.85,76.44Zm46.38,53.75c-5.3-2.31-10-.46-14.09,5.64-10.34,15.45-20.78,30.83-30.83,46.47-2.58,4-3.88,3.7-6.8.52-5.57-6.06-11.53-11.77-17.42-17.53-5.53-5.4-11.64-5.8-16.19-1.26-4.39,4.4-4,10.83,1.3,16.15q14.6,14.77,29.36,29.37c6.15,6.07,13.11,5.49,17.88-1.62,13.58-20.21,27-40.5,40.52-60.78,1.46-2.2,2.74-4.5,2.65-6.17C181.51,135.28,179.41,132,175.23,130.19Z" style="fill:#010101"/></svg>
                            <span class="flex section-card-title bold">VISITORS</span>
                            <span id="open-visitors-viewer" class="flex fs20 bold unselectable dashboard-visitors-count">{{ $statistics['visitors'] }}</span>
                        </div>
                        <div class="dashboard-statistics-record">
                            <svg class="size28" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M3.56,208.74c2.19-2.66,1.75-6.06,2.5-9.12,8.33-33.47,28-57.51,59.42-71.91.6-.27,1.16-.62,2.14-1.16l-3.43-3.85a58,58,0,0,1-7.9-66c11.25-21,35.61-33.52,58.42-30,25,3.84,44.33,21.88,49.21,45.9,7.2,35.44-19.74,68.66-56.12,69.21C68,142.44,35.06,169.14,28,206.19c-.7,3.71-.29,4.6,3.65,4.57,24.61-.18,49.23-.12,73.84-.07,7.46,0,12.31,4.4,12.51,11s-4.32,11.56-11.15,11.76c-7.22.22-14.44.09-21.66.09-22.15,0-44.31-.21-66.45.13-7,.1-12-2-15.2-8.19ZM72.41,84.82A34.39,34.39,0,0,0,106.94,119c18.82-.12,34.4-15.92,34.18-34.65a34.36,34.36,0,1,0-68.71.46Z" style="fill:#020202"/><path d="M168.47,187.81c-5.09,0-10.18.14-15.26,0-7.13-.23-11.8-4.67-12-11.09-.2-6.7,4.34-11.64,11.67-11.85,10.17-.3,20.35-.2,30.51-.05,2.83.05,3.56-.83,3.52-3.57-.16-9.68-.11-19.36,0-29,0-8,4.57-13.11,11.49-13.13s11.37,5,11.45,13.08c.09,9.68.11,19.36,0,29-.05,2.77.78,3.66,3.58,3.62,9.84-.15,19.69-.21,29.53,0,9.67.2,15.42,8.21,11.76,16.14-2.34,5.07-6.64,6.93-12,6.91-9.68,0-19.36.12-29-.07-3-.06-3.91.79-3.85,3.83.19,9.51.13,19,.05,28.55-.06,8.49-4.48,13.47-11.65,13.35-6.93-.11-11.25-5.15-11.29-13.3-.05-9.35-.16-18.71.07-28.05.08-3.31-.57-4.67-4.21-4.4C178,188.08,173.22,187.82,168.47,187.81Z" style="fill:#040404"/></svg>
                            <span class="flex section-card-title bold">NEW SIGNUPS</span>
                            <span id="open-newsignups-viewer" class="flex fs20 bold blue unselectable pointer dashboard-signups-count">{{ $statistics['sign-ups'] }}</span>
                        </div>
                    </div>
                </div>
                <div>
                    <span class="block fs11 blue bold mb8">RESOURCES STATISTICS</span>
                    <div>
                        <div class="my8">
                            <div class="align-center">
                                <svg class="size15 mr8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M130,17.11h97.27c11.82,0,15.64,3.73,15.64,15.34q0,75.07,0,150.16c0,11.39-3.78,15.13-15.22,15.13-2.64,0-5.3.12-7.93-.06a11.11,11.11,0,0,1-10.53-9.38c-.81-5.69,2-11,7.45-12.38,3.28-.84,3.52-2.36,3.51-5.06-.07-27.15-.11-54.29,0-81.43,0-3.68-1-4.69-4.68-4.68q-85.63.16-171.29,0c-3.32,0-4.52.68-4.5,4.33q.26,41,0,81.95c0,3.72,1.3,4.53,4.56,4.25a45.59,45.59,0,0,1,7.39.06,11.06,11.06,0,0,1,10.58,11c0,5.62-4.18,10.89-9.91,11.17-8.43.4-16.92.36-25.36,0-5.16-.23-8.82-4.31-9.68-9.66a33,33,0,0,1-.24-5.27q0-75.08,0-150.16c0-11.61,3.81-15.34,15.63-15.34Zm22.49,45.22c16.56,0,33.13,0,49.7,0,5.79,0,13.59,2,16.83-.89,3.67-3.31.59-11.25,1.19-17.13.4-3.92-1.21-4.54-4.73-4.51-19.21.17-38.42.08-57.63.08-22.73,0-45.47.11-68.21-.1-4,0-5.27,1-4.92,5a75.62,75.62,0,0,1,0,12.68c-.32,3.89.78,5,4.85,5C110.54,62.21,131.51,62.33,152.49,62.33ZM62.3,51.13c0-11.26,0-11.26-11.45-11.26h-.53c-10.47,0-10.47,0-10.47,10.71,0,11.75,0,11.75,11.49,11.75C62.3,62.33,62.3,62.33,62.3,51.13ZM102,118.66c25.79.3,18.21-2.79,36.49,15.23,18.05,17.8,35.89,35.83,53.8,53.79,7.34,7.35,7.3,12.82-.13,20.26q-14.94,15-29.91,29.87c-6.86,6.81-12.62,6.78-19.5-.09-21.3-21.28-42.53-42.64-63.92-63.84a16.11,16.11,0,0,1-5.24-12.62c.23-9.86,0-19.73.09-29.59.07-8.71,4.24-12.85,13-13C91.81,118.59,96.92,118.66,102,118.66ZM96.16,151c.74,2.85-1.53,6.66,1.41,9.6,17.66,17.71,35.39,35.36,53,53.11,1.69,1.69,2.59,1.48,4.12-.12,4.12-4.34,8.24-8.72,12.73-12.67,2.95-2.59,2.36-4-.16-6.49-15.68-15.46-31.4-30.89-46.63-46.79-4.56-4.76-9.1-6.73-15.59-6.35C96.18,141.8,96.16,141.41,96.16,151Z"></path></svg>
                                <span class="flex bold fs13">Posts : <span class="ml4 fs14 dashboard-posts-count" style="margin-top: -1px">{{ $statistics['posts'] }}</span></span>
                            </div>
                        </div>
                        <div class="my8">
                            <div class="align-center">
                                <svg class="size15 mr8" xmlns="http://www.w3.org/2000/svg" fill="#1c1c1c" viewBox="0 0 512 512"><path d="M221.09,253a23,23,0,1,1-23.27,23A23.13,23.13,0,0,1,221.09,253Zm93.09,0a23,23,0,1,1-23.27,23A23.12,23.12,0,0,1,314.18,253Zm93.09,0A23,23,0,1,1,384,276,23.13,23.13,0,0,1,407.27,253Zm62.84-137.94h-51.2V42.9c0-23.62-19.38-42.76-43.29-42.76H43.29C19.38.14,0,19.28,0,42.9V302.23C0,325.85,19.38,345,43.29,345h73.07v50.58c.13,22.81,18.81,41.26,41.89,41.39H332.33l16.76,52.18a32.66,32.66,0,0,0,26.07,23H381A32.4,32.4,0,0,0,408.9,496.5L431,437h39.1c23.08-.13,41.76-18.58,41.89-41.39V156.47C511.87,133.67,493.19,115.21,470.11,115.09ZM46.55,299V46.12H372.36v69H158.25c-23.08.12-41.76,18.58-41.89,41.38V299Zm418.9,92H397.5l-15.83,46-15.82-46H162.91V161.07H465.45Z"></path></svg>
                                <span class="flex bold fs13">Comments : <span class="ml4 fs14 dashboard-comments-count" style="margin-top: -1px">{{ $statistics['comments'] }}</span></span>
                            </div>
                        </div>
                        <div class="my8">
                            <div class="align-center">
                                <svg class="size18 mr6" xmlns="http://www.w3.org/2000/svg" fill="#1c1c1c" viewBox="0 0 260 260"><path d="M255,166.15c-2.6,8.16-8.17,14.15-14.13,20-15,14.73-29.78,29.71-44.67,44.56-21,21-48.79,21.06-69.77.12q-32.37-32.29-64.67-64.66c-13-13-12.08-26.82,4.17-39.07-2.38-1.79-4.85-3.15-6.7-5.12-12.3-13.06-6.3-32.84,11.11-37.11,1.22-.3,3.1-1.19,3.26-2.07C75.75,71.33,83,65.43,94,63.49c2.22-14.87,15.46-25.23,32.92-18.2,8.26-11.1,16.87-15,26.86-11.21A31.69,31.69,0,0,1,164.19,41c10.56,10.13,20.79,20.6,31.61,31.4.43-3.07.58-5.59,1.17-8,2.76-11.19,12.58-17.91,24.19-16.7C231.65,48.8,240,58.05,240.27,69.09c.16,6.52.13,13,0,19.56-.05,2.66.39,4.42,3.18,5.72,6.34,2.94,9.26,8.8,11.55,15Zm-14.68-28.66c0-7.5,0-15,0-22.5-.05-5.44-2.71-8.56-7.18-8.64-4.66-.09-7.44,3.12-7.47,8.83-.05,9.78-.08,19.57,0,29.35,0,3.75-1,6.84-4.61,8.38s-6.55-.06-9.15-2.7c-7.45-7.54-15-15-22.47-22.5q-22.83-22.83-45.67-45.65c-4.42-4.4-8.59-4.84-11.93-1.44s-2.74,7.46,1.66,11.91c3.89,4,7.83,7.84,11.75,11.77,5.87,5.88,11.84,11.68,17.58,17.7,3.13,3.28,2.94,7.68,0,10.5s-6.73,2.79-10.16,0c-1-.83-1.87-1.81-2.79-2.74L103.18,83a27.46,27.46,0,0,0-3.2-3c-3.39-2.43-6.81-2.27-9.7.74-2.73,2.85-2.65,6.18-.5,9.38a23.88,23.88,0,0,0,3,3.22l47,47a23.78,23.78,0,0,1,3.28,3.61,6.72,6.72,0,0,1-.79,8.95c-2.71,2.84-6,3.2-9.31,1.05a23.27,23.27,0,0,1-3.59-3.3q-23.54-23.5-47.05-47a23.17,23.17,0,0,0-3.22-3c-3.22-2.12-6.55-2.18-9.38.59-3,2.91-3.11,6.33-.65,9.7a33,33,0,0,0,3.36,3.54c15.79,15.8,31.65,31.53,47.3,47.48,1.87,1.91,3.63,5,3.5,7.49-.12,2.14-2.72,5.45-4.71,5.85a10.57,10.57,0,0,1-8.19-2.39c-10-9.39-19.47-19.26-29.2-28.9-4.1-4.07-8.32-4.43-11.56-1.2s-2.9,7.46,1.21,11.58c22.57,22.62,45.08,45.31,67.83,67.75,13.08,12.9,32.14,12.87,45.2,0,17.44-17.15,34.6-34.57,51.94-51.83a14.83,14.83,0,0,0,4.57-11.4C240.22,151.84,240.32,144.66,240.32,137.49ZM211,128.17c0-5.63-.1-10.29,0-14.95.16-6.52,2.19-13,7.79-16,7-3.8,7.29-9.18,6.89-15.62-.24-3.74,0-7.5-.07-11.25-.14-5-3-8-7.3-8s-7.23,3-7.33,8c-.11,5.71-.12,11.42,0,17.12.09,4.09-.09,8.08-4.46,9.93-4.59,2-7.62-.89-10.62-3.91q-20.49-20.65-41.13-41.17a26,26,0,0,0-3.58-3.32c-3.07-2.07-6.25-2-8.94.61s-2.85,5.75-1,8.91a15.8,15.8,0,0,0,2.57,2.93Q175.66,93.19,207.48,125C208.34,125.86,209.29,126.64,211,128.17Zm-95.59-54,10.53-9.71c-2.49-2-4.74-7.67-10.77-6.5A8.81,8.81,0,0,0,109.47,63C107.57,69.36,113.36,71.85,115.39,74.14ZM23.49,87.32c3.91,0,7.82.21,11.71,0,4.61-.32,7.48-3.45,7.35-7.48s-3.09-6.9-7.81-7q-11.22-.21-22.44,0c-4.73.1-7.69,2.92-7.84,7S7.35,87,12.28,87.32c3.72.21,7.47,0,11.21,0ZM77.8,21.87c-.16-4.87-3.17-7.9-7.49-7.79-4.13.1-7,3-7.11,7.67Q63,33,63.2,44.19c.08,4.87,3.15,7.9,7.48,7.79,4.11-.1,6.95-3,7.11-7.68.14-3.73,0-7.48,0-11.22S77.93,25.6,77.8,21.87ZM30.73,29.53c-3.61-3.27-7.87-3.22-10.81,0s-2.7,7.16.57,10.44q7.91,7.95,16.1,15.62c3.55,3.34,7.86,3.24,10.8.06,2.8-3,2.65-7.11-.56-10.46-2.58-2.69-5.35-5.22-8-7.83S33.5,32,30.73,29.53Z"></path></svg>
                                <span class="flex bold fs13">Claps : <span class="ml4 fs14 dashboard-claps-count" style="margin-top: -1px">{{ $statistics['claps'] }}</span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <span class="block fs11 bold blue mb8">OTHERS</span>
                    <div class="my8">
                        <div class="align-center">
                            <svg class="size14 mr8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M492.21,3.82a21.45,21.45,0,0,0-22.79-1l-448,256a21.34,21.34,0,0,0,3.84,38.77L171.77,346.4l9.6,145.67a21.3,21.3,0,0,0,15.48,19.12,22,22,0,0,0,5.81.81,21.37,21.37,0,0,0,17.41-9l80.51-113.67,108.68,36.23a21,21,0,0,0,6.74,1.11,21.39,21.39,0,0,0,21.06-17.84l64-384A21.31,21.31,0,0,0,492.21,3.82ZM184.55,305.7,84,272.18,367.7,110.06ZM220,429.28,215.5,361l42.8,14.28Zm179.08-52.07-170-56.67L447.38,87.4Z"/></svg>
                            <span class="flex bold fs13">Contact messages : <span class="ml4 black fs14 dashboard-contact-messages-count" style="margin-top: -1px">{{ $statistics['contact-messages'] }}</span></span>
                        </div>
                    </div>
                    <div class="my8">
                        <div class="align-center">
                            <svg class="size14 mr8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M57.44,255.15q.08-23.37.15-46.72c0-12.28,2.72-15.17,15.37-15.81-4-9.44-8-18.74-11.93-28C57.4,156.14,54.1,147.49,50,139.28c-4-7.88-2.37-13.67,3.57-20a332.26,332.26,0,0,0,56.94-81.89,224,224,0,0,0,9.46-22.84c2.09-5.82,5.7-8.68,10.42-8.7s8.48,3,10.51,8.63c14,39.1,37.23,72.37,64.58,103.08,1.3,1.46,2.57,2.94,4,4.3,4.39,4.31,4.84,9.11,2.42,14.65-7.55,17.35-14.95,34.76-22.39,52.15-.51,1.17-1,2.36-1.42,3.52,1.06,1,2.23.54,3.27.59,7.86.34,11.69,4.15,11.85,12.28.16,7.79,0,15.58.05,23.36.07,8.91.23,17.81.36,26.72H182.11c0-12.48,0-25,.21-37.42.07-3.42-.92-4.31-4.31-4.28-19.6.16-39.21.08-58.81.08q-18.48,0-36.95,0c-2,0-3.87-.28-3.79,2.8.32,12.94-.44,25.89.41,38.83Zm73-210.93c-3.34,6.44-6.11,12.06-9.14,17.53-13.54,24.5-30.12,46.83-48.68,67.74-1.66,1.87-2.89,3.32-1.59,6.26,8,18,15.7,36.18,23.42,54.32.88,2.07,2,2.87,4.28,2.8,6-.17,12-.19,18,0,2.63.08,3.24-.78,3.2-3.29-.15-8.59-.21-17.19,0-25.78.08-3.05-.95-4.54-3.63-5.88-10.42-5.2-16.07-14-16.87-25.41-1.15-16.36,9.75-29.67,26.22-32.77,14-2.64,29.38,6.67,34.05,20.66,5.06,15.14-1.4,30.66-16,38-1.95,1-3,1.88-3,4.27q.19,13.62,0,27.25c0,2.42.74,3,3,3,5.84-.15,11.68-.22,17.51,0,2.88.12,4.19-.88,5.29-3.5q11.2-26.58,22.8-53c1.24-2.83.93-4.55-1.1-6.75A372,372,0,0,1,159.77,94,325.54,325.54,0,0,1,130.47,44.22Zm-.22,96.57a10.3,10.3,0,0,0,.48-20.59,10.3,10.3,0,1,0-.48,20.59Z"></path></svg>
                            <span class="flex bold fs13">Author requests : <span class="ml4 black fs14 dashboard-author-requests-count" style="margin-top: -1px">{{ $statistics['author-requests'] }}</span></span>
                        </div>
                    </div>
                    <div class="my8">
                        <div class="align-center">
                            <svg class="size14 mr8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M135.59,253l3.06.06H142c2.71,0,5.42,0,8.13,0-.26,0,1.19,0,2.27,0,4.14-.8,8.27-1.65,12.32-2.78Z"/><path d="M224.07,5.89V29.47H207.58c0,4.15-.24,7.82,0,11.44C209.29,62.28,200.23,79,185,93c-6.28,5.77-12.8,11.29-19.29,16.83-12,10.28-12.07,23.68,0,33.59,11.22,9.17,22.79,17.92,31.24,30,6.84,9.8,10.61,20.49,10.56,32.48,0,7.7,0,15.39,0,23.64h16.49v23.62H38.34V229.84h16.6c0-2.23,0-3.92,0-5.62.1-8.21-.29-16.46.41-24.62C56.73,183.45,65.54,171,76.9,160.3c6.55-6.18,13.67-11.75,20.59-17.52,10.88-9.07,11.08-22.69.39-32-6.9-6-14-11.88-20.74-18.11-15-13.91-23.91-30.54-22.24-51.71.25-3.2,0-6.44,0-9.66a7,7,0,0,0-.49-1.44H38.46V5.89ZM133.82,135.38l-4.95.26c-4.45,14-7.34,18.12-18.5,27.23-5.48,4.48-10.77,9.19-16.27,13.65-14.83,12-17.29,28-14.67,46,1.53-.53,3-1,4.49-1.56,10.78-4.2,21.4-8.86,32.38-12.44,5.8-1.9,12.46-3.45,18.3-2.48,9.05,1.5,17.78,5.11,26.53,8.15,7.39,2.57,14.61,5.61,22.58,8.7,0-5.55-.19-10.35,0-15.13.5-10.32-3.23-19-10.39-26.07-6.64-6.53-13.67-12.7-20.92-18.54C143.43,155.94,136.19,147.66,133.82,135.38Zm-55-105.45c0,6.38,0,12.16,0,17.94a27.92,27.92,0,0,0,7.11,19,10.24,10.24,0,0,0,6.69,3.35q38.64.34,77.29,0a10.34,10.34,0,0,0,6.7-3.34c9.62-10.83,6.81-24,7-36.95Z"/></svg>
                            <span class="flex bold fs13">Posts needs review : <span class="ml4 black fs14 dashboard-posts-awaiting-review-count" style="margin-top: -1px">{{ $statistics['posts-awaiting-review'] }}</span></span>
                        </div>
                    </div>
                    <div class="my8">
                        <div class="align-center">
                            <svg class="size14 mr8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M172,197.68H26c-.18-.8-.89-.74-1.47-.91-11-3.28-18.21-10.39-21.3-21.53-.13-.5-.23-1-.8-1.13V26.62c1.27-.76,1-2.2,1.42-3.32A29.25,29.25,0,0,1,31.39,3.11q68.41-.12,136.83,0a29,29,0,0,1,28.84,28.81q.19,68.4,0,136.8c0,11.76-6,20.32-16.32,25.9C178,196.13,174.82,196.4,172,197.68ZM99.58,178.1q33.08,0,66.15,0c8.69,0,11.83-3.17,11.84-12q0-65.76,0-131.51c0-8.79-3.16-12-11.84-12q-66,0-131.91,0c-8.7,0-11.85,3.19-11.85,12q0,65.76,0,131.52c0,8.79,3.15,12,11.84,12Q66.69,178.12,99.58,178.1Zm7.85-61c3.14-.87,5.22-2.92,5.21-6.17,0-2.74,1.41-3.54,3.56-4.47,11.86-5.17,19.24-14,20-27.14A35,35,0,0,0,110.7,43.61C93.47,38.71,75.17,45.29,67.23,60c-6.88,12.7-5.68,17.26,8.94,21.75,6,1.84,9.24,0,11.55-5.9,2.82-7.2,6-9.23,13.77-8.87,5.59.26,8.42,2.22,9.76,6.75,1.64,5.5.36,9.44-4.09,12.66-2.5,1.82-5.43,2.62-8.26,3.71-6.13,2.34-10,6.46-11,13.25-1.6,10.93,1.42,14.65,12.34,14.54A26.08,26.08,0,0,0,107.43,117.1ZM85.35,144.17c0,.76,0,1.52,0,2.27.2,8.27,3,11.28,11.32,12.1a36,36,0,0,0,9.45-.38,8.54,8.54,0,0,0,7.5-7,31.91,31.91,0,0,0,.44-10.93c-.73-7.14-3.78-10-11-10.42a51.5,51.5,0,0,0-8,.17c-6.13.57-9,3.51-9.66,9.63a43.13,43.13,0,0,0,0,4.55Z"></path></svg>
                            <span class="flex bold fs13">FAQs : <span class="ml4 black fs14 dashboard-faqs-count" style="margin-top: -1px">{{ $statistics['faqs'] }}</span></span>
                        </div>
                    </div>
                </div>
                <div>
                    <span class="block fs11 bold blue mb8 opacity0 default-cursor">others</span>
                    <div>
                        <div class="my8">
                            <div class="align-center my8">
                            <svg class="size14 mr4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M42.63,256.9c-6.13-2.82-8-7.72-8-14.28q.2-112.38.08-224.77A19.71,19.71,0,0,1,35.48,11,10.49,10.49,0,0,1,46.2,4a10.09,10.09,0,0,1,9.23,8.82,83,83,0,0,1,.24,12.32c-.13,2.76.76,4.1,3.39,5,20.76,7.23,41.37,7.51,61.38-2.13,17.11-8.25,34.6-14.22,53.91-13.41A107.44,107.44,0,0,1,217.51,25.5c4.82,2.35,7,6,7,11.39-.06,34.25,0,68.51,0,102.76,0,9.87-7.5,14.49-16.48,10.29-24.26-11.36-48.53-12-72.64.19-24.91,12.6-50.63,15.48-77.46,7.37a13.42,13.42,0,0,0-2.16-.25v59.92c0,8.73-.23,17.47.07,26.18.23,6.54-2.19,11.05-8.24,13.55ZM55.74,51.26c0,27.25.06,53.91-.07,80.58,0,3.43,2.43,3.58,4.41,4.25,21,7.11,41.62,6.67,61.83-3,4.88-2.33,9.76-4.74,14.82-6.63a97,97,0,0,1,62.43-2.26c3.18.93,4.45.7,4.42-3.24-.18-25-.13-50.05,0-75.07,0-2.66-.56-4.15-3.3-5.07a95.09,95.09,0,0,0-28-5.27c-15.06-.36-28.72,4.53-41.94,11.12a93.58,93.58,0,0,1-28.11,8.64C86.65,57.68,71.41,56.07,55.74,51.26Z" style="fill:#010101"/></svg>
                                <span class="flex bold fs13">Resources Reports : <span class="ml4 black fs14 dashboard-reports-count" style="margin-top: -1px">{{ $statistics['reports'] }}</span></span>
                            </div>
                        </div>
                        <div class="my8">
                            <div class="align-center my8">
                                <svg class="size14 mr4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M231,130.52c0,16.59-.13,33.19.06,49.78.08,6.24-2.44,10.4-7.77,13.46q-43.08,24.72-86,49.68c-5.52,3.21-10.45,3-16-.2Q78.8,218.46,36.1,194.09c-5.91-3.37-8.38-7.8-8.34-14.61q.3-49,0-98.1c0-6.63,2.49-10.93,8.2-14.19Q78.68,42.82,121.15,18c5.69-3.32,10.69-3.42,16.38-.1Q180,42.71,222.7,67.1c5.89,3.36,8.46,7.8,8.35,14.61C230.77,98,231,114.25,231,130.52Zm-179.67,0c0,44.84,33,78,77.83,78.16s78.37-33.05,78.39-78.08c0-44.88-32.93-78-77.83-78.14S51.32,85.49,51.29,130.55Z" style="fill:#020202"></path><path d="M129.35,150.13c-13.8,0-27.61,0-41.42,0-8.69,0-13.85-6-13.76-15.79.09-9.62,5.15-15.43,13.6-15.44q40,0,79.93,0c13.05,0,19,7.43,16.37,20.38-1.46,7.17-5.92,10.85-13.29,10.86C157,150.15,143.16,150.13,129.35,150.13Z" style="fill:#020202"></path></svg>
                                <span class="flex bold fs13">Unauthorized actions : <span class="ml4 black fs14 dashboard-unauthorized-actions-count" style="margin-top: -1px">{{ $statistics['unauthorized-actions'] }}</span></span>
                            </div>
                        </div>
                        <div class="my8">
                            <div class="align-center my8">
                                <svg class="size14 mr4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40"><path d="M39.24,33.2c-6.6.76-13.23.18-19.85.34-3.07.07-6.15,0-9.22,0C9,33.52,7.63,34,7,32.6s.68-2.12,1.46-2.93c2.56-2.63,5-5.36,7.78-7.78,1.81-1.6,1.42-2.48-.13-3.89-2.85-2.6-5.51-5.42-8.26-8.15C7.19,9.21,6.55,8.58,7,7.55c.31-.81,1-.88,1.72-.88q14.58,0,29.16,0a8.6,8.6,0,0,1,1.41.22ZM11.66,30.3H34.34c-2.55-2.44-4.6-4.3-6.52-6.29-1.18-1.22-2.14-2.41-3.64-.39a1.28,1.28,0,0,1-2.08.23c-1.89-2.52-3-.67-4.32.6C16,26.23,14.08,28,11.66,30.3ZM33.55,9.92H12.24c3.44,3.45,6.59,6.58,9.7,9.73.62.64,1.09,1,1.88.18C27,16.58,30.14,13.38,33.55,9.92ZM36,27.84V11.51c-2.61,2.76-4.67,5-6.82,7.19C28.4,19.5,27.94,20,29,21,31.37,23.2,33.61,25.49,36,27.84ZM4.55,21.58a12.17,12.17,0,0,0,1.48,0c.8-.1,1.59-.31,1.68-1.32.07-.77-.21-1.47-1-1.5-1.81-.07-3.74-.81-5.34.62A1.06,1.06,0,0,0,1.49,21a2.81,2.81,0,0,0,1.3.59,10.33,10.33,0,0,0,1.76,0Zm5-7.27c0-2.05-2-1.26-3.31-1.4a8.74,8.74,0,0,0-1.77,0A1.42,1.42,0,0,0,3,14.49a1.38,1.38,0,0,0,1.32,1.35c.59.06,1.19,0,2.13,0C7.4,15.63,9.58,16.65,9.52,14.31ZM6.25,27.2a13,13,0,0,0,2.07,0,1.34,1.34,0,0,0,1.25-1.67C9.27,24,8,24.16,7,24.26c-1.37.13-3.13-.76-3.9,1.14-.36.88.27,1.55,1.12,1.75a9.42,9.42,0,0,0,2.06,0Z"></path></svg>
                                <span class="flex bold fs13">Newsletter subscriptions : <span class="ml4 black fs14 dashboard-newsletter-count" style="margin-top: -1px">{{ $statistics['newsletter-subscribers'] }}</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection