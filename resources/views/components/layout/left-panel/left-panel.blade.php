
<div id="left-panel">
    <div id="left-panel-toggle-button">
        <svg class="arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M224.31,239l-136-136a23.9,23.9,0,0,0-33.9,0l-22.6,22.6a23.9,23.9,0,0,0,0,33.9l96.3,96.5-96.4,96.4a23.9,23.9,0,0,0,0,33.9L54.31,409a23.9,23.9,0,0,0,33.9,0l136-136a23.93,23.93,0,0,0,.1-34Z"></path></svg>
    </div>
    <div id="left-panel-inner">
        <div class="quote-section">
            <svg class="start-quotation mr4" fill="#CFD8E1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M254,228.94a35.52,35.52,0,0,1-3.83.4q-53,0-106,0c-1.13,0-2.25-.13-4-.24v-5.26q0-62.7,0-125.41c0-40.29,29.73-70,69.92-70.07h23.12V77c-5.29,0-10.45.33-15.56-.05-22.56-1.69-30.51,8-28.88,29.17.22,2.88,0,5.78,0,9a25.4,25.4,0,0,0,3,.4q29.66,0,59.3,0a19.88,19.88,0,0,0,2.86-.4ZM74.93,28.37C34.94,28.42,5.07,58.13,5,98Q5,161,5,224v5H118.6V115.48H53.65c0-6.11,0-11.59,0-17.08.05-13.46,8-21.34,21.51-21.38,7.57,0,15.15,0,23,0V28.37Z"/></svg>
            <p class="quote">𝒷𝑒𝒸𝑜𝓂𝑒 𝒶𝓃 𝒾𝓃𝓈𝒾𝒹𝑒𝓇</p>
            <svg class="end-quotation mr4" fill="#CFD8E1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M5,28.79a35.52,35.52,0,0,1,3.83-.4q53,0,106,0c1.13,0,2.25.13,4,.24v5.26q0,62.7,0,125.41c0,40.3-29.73,70-69.93,70.07H25.76V180.72c5.29,0,10.45-.33,15.56.06,22.56,1.68,30.51-8,28.89-29.18-.23-2.87,0-5.78,0-9a25.81,25.81,0,0,0-3-.4q-29.65,0-59.3,0a21.41,21.41,0,0,0-2.86.41ZM184.11,229.36c40,0,69.86-29.76,69.91-69.65q.06-63,0-126V28.69H140.44V142.25h64.95c0,6.11,0,11.59,0,17.08-.06,13.46-8,21.34-21.52,21.38-7.57,0-15.15,0-23,0v48.64Z"/></svg>
        </div>
        <a href="{{ route('home') }}" class="align-center my8 link">
            <svg class="size13" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M130,249.63q-38.79,0-77.56,0c-24.86,0-42.06-17.09-42.09-41.82,0-27.88.07-55.77,0-83.65-.05-12.75,4.55-23.27,14-31.81Q63.44,56.93,102.51,21.4C119,6.5,140.94,6.45,157.42,21.34c26,23.5,51.85,47.15,77.89,70.59,9.77,8.79,14.43,19.5,14.37,32.59-.13,27.41-.22,54.83,0,82.25.19,21.92-15.28,43.78-43.09,43C181.09,249.07,155.53,249.63,130,249.63Zm-.63-23.08q39,0,78,0c10.76,0,17.06-6.35,17.08-17.13,0-28,0-56.06,0-84.09a21.06,21.06,0,0,0-7.4-16.42q-37.51-34.07-75-68.13c-8.69-7.89-16.76-7.78-25.51.18C91.79,63.47,67.14,86.11,42.11,108.33c-5.52,4.91-7.92,10.11-7.86,17.36.22,27.72.06,55.44.1,83.16,0,11.64,6.2,17.69,17.95,17.7Z"/></svg>
            <span class="ml8">{{__('Home')}}</span>
        </a>
        <a href="{{ route('discover') }}" class="align-center my8 link @if($page=='discover') left-panel-selected-button @endif">
            <svg class="size13" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M129.93,253.53c-68-.07-123.6-55.81-123.42-123.74C6.69,61.7,62.5,6.13,130.34,6.48S253.4,62.05,253.49,129.91,197.89,253.6,129.93,253.53Zm.26-24.9A98.63,98.63,0,1,0,31.4,130.47,98.39,98.39,0,0,0,130.19,228.63ZM114.3,110.34a5.81,5.81,0,0,0-3.74,3.27C102.8,133.15,95,152.69,86.88,173.13l59.63-23.74a5.33,5.33,0,0,0,3-3.26c7.72-19.42,15.46-38.83,23.61-59.25C152.81,95,133.57,102.69,114.3,110.34Z"/></svg>
            <span class="ml8">{{__('Discover')}}</span>
        </a>
        <!-- auth user section -->
        @auth
        <div class="auth-section">
            <div class="flex">
                <a href="{{ auth()->user()->profile }}" class="size32 mr8">
                    <img src="{{ auth()->user()->avatar(36) }}" class="rounded size32" alt="">
                </a>
                <div class="toggle-box">
                    <div class="align-center pointer toggle-button">
                        <p class="no-margin dark bold">{{ auth()->user()->fullname }}</p>
                        <svg class="size7 ml8 mt2 toggle-arrow" @if($page=='user-section') style="transform: rotate(90deg);" @endif xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.02 30.02"><path d="M13.4,1.43l9.35,11a4,4,0,0,1,0,5.18l-9.35,11a4,4,0,1,1-6.1-5.18L14.46,15,7.3,6.61a4,4,0,0,1,6.1-5.18Z"/></svg>
                    </div>
                    <p class="no-margin fs12 light-gray">{{ auth()->user()->username }}</p>
                    <div class="mt8 toggle-container @if($page != 'user-section') none @endif">
                        <a href="{{ route('user.profile', ['user'=>auth()->user()->username]) }}" class="my8 link @if($subpage=='profile') left-panel-selected-button @endif">{{__('profile')}}</a>
                        <a href="{{ route('user.activities') }}" class="my8 link @if($subpage=='activities') left-panel-selected-button @endif">{{__('activities')}}</a>
                        <a href="{{ route('user.settings') }}" class="my8 link @if($subpage=='settings') left-panel-selected-button @endif">{{__('settings')}}</a>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="auth-button align-center login-required auth-section">
            <svg class="size17 mr8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M130,254C61.82,254.05,5.93,198.12,6,129.89S62.07,5.77,130.23,6A124.29,124.29,0,0,1,254,129.79C254.18,198,198.32,254,130,254Zm99-123.86c.06-54.55-43.36-98.92-98-99C89.94,31.1,59,50.08,41.12,86.79,23.34,123.28,28,158.8,52.29,191.58c2.25,3,3.58,3.77,7,1,43-34.12,98.77-34.07,141.52.13,3.24,2.59,4.48,1.9,6.63-.87C221.6,173.69,229,153.2,229,130.14ZM74.91,212c32.78,23.76,81.48,21.67,110.05-.06C155.36,185.48,105.73,185.4,74.91,212Zm54.77-57.31c-27.29-.17-49.5-22.52-49.31-49.63a49.79,49.79,0,0,1,50.24-49.34c27.12.25,49.43,23,49,50A49.53,49.53,0,0,1,129.68,154.65Zm25-49.32A24.65,24.65,0,1,0,130,130,24.71,24.71,0,0,0,154.65,105.33Z"/></svg>
            <span class="fs12 bold">{{__('Login - Register')}}</span>
        </div>
        @endauth
        <span class="section-title">PUBLIC</span>
        <!-- search -->
        <div class="search-box toggle-box section">
            <div class="align-center">
                <svg class="size14 mr6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M173.51,206.37a4,4,0,0,1,4.71.52c.53.49,1.06,1,1.58,1.51l31.93,31.92a12.14,12.14,0,0,0,16.88.27q5.79-5.42,11.39-11a12.9,12.9,0,0,0,0-18.26q-15.63-15.52-31.31-31c-.29-.28-1.11-1-1.43-1.28a4,4,0,0,1-1-5.25,110.15,110.15,0,0,0,14.58-38.92C229.44,85,195.67,32.54,146.6,20c-6.25-1.59-12.65-2.62-19-3.89L110,16.32c-9.55,2.24-19.51,3.5-28.44,7.22C43,39.57,20.4,68.72,16.72,110.23c-3.59,40.5,12.55,73.32,46.85,95.2,35.87,22.89,73.09,22.32,109.92.95Zm-55-24.64c-35.1-.71-62.94-29.43-62.06-64,.86-34.23,29.56-62,63.37-61.24,34.61.74,62.59,29.41,61.78,63.29C180.72,154.6,152.4,182.42,118.46,181.73Z"/></svg>
                <label for="left-panel-search-input" class="no-margin unselectable fs14 bold dark">{{__('Search')}}</label>
                <a href="{{ route('search') }}" class="flex">
                    <svg class="size14 ml8" fill="#2ca0ff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M255,158.92c-2.53,8.79-5.95,17-13.33,23.09a37.56,37.56,0,0,1-24.16,8.85c-24,.22-48,.08-72,.07a14.67,14.67,0,0,1-2.07-.34V165.92H149q33.11,0,66.2,0c10.16,0,14.79-4.67,14.82-14.87q.06-22.39,0-44.78c0-10.17-4.67-14.82-14.87-14.84q-32.87-.06-65.72,0h-6v-25h5.07c21.91,0,43.82.3,65.72-.09,21-.38,37,12.59,40.25,31.44.05.28.36.51.55.76ZM45.36,66.54c-23.77.1-39.53,16-39.6,39.78q-.06,22.14,0,44.27c0,24.73,15.69,40.4,40.42,40.44q33.08,0,66.16,0h5v-25h-6q-32.85,0-65.68,0c-10.21,0-14.85-4.66-14.88-14.81q-.08-22.14,0-44.28c0-10.86,4.5-15.39,15.25-15.4q33.07,0,66.16,0h5.26v-25C93,66.51,69.19,66.43,45.36,66.54Zm134.48,74.4V116.53h-99v24.41Z"></path></svg>
                </a>
                <a href="{{ route('search.advanced') }}" class="align-center no-underline fs12 blue bold move-to-right mr4">
                    <svg class="size12 mr4" fill="#2ca0ff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M129.94,20.56c29.51,0,59,.13,88.54-.06,11.44-.08,20.42,3.77,25.2,14.52s1.34,20-6.35,28.39q-37.17,40.53-73.93,81.44a14.13,14.13,0,0,0-3.25,8.42c-.34,13.59-.26,27.19-.1,40.78a12.25,12.25,0,0,1-4.91,10.65c-13.35,10.5-26.59,21.15-39.84,31.79-3.11,2.49-6.31,4.06-10.32,2.18-4.18-2-5.13-5.49-5.12-9.74.06-25,0-50.08.11-75.12a12.83,12.83,0,0,0-3.65-9.52q-37.87-41.35-75.47-83C7.63,46.63,14.86,24.7,33.92,21a39.63,39.63,0,0,1,7.48-.41Q85.67,20.54,129.94,20.56Z"/></svg>
                    <span>{{__('adv. search')}}</span>
                </a>
            </div>
            <form action="{{ route('search') }}" class="flex1">
                <p class="fs11 no-margin light-gray">{{__('Search for everything')}}..</p>
                <div class="align-center mt4">
                    <input type="text" name="k" id="left-panel-search-input" required class="flex1" placeholder="{{ __('Search keywords') }}" @if($k) value="{{ $k }}" @endif>
                    <button id="left-panel-search-button">
                        <svg class="size12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M173.51,206.37a4,4,0,0,1,4.71.52c.53.49,1.06,1,1.58,1.51l31.93,31.92a12.14,12.14,0,0,0,16.88.27q5.79-5.42,11.39-11a12.9,12.9,0,0,0,0-18.26q-15.63-15.52-31.31-31c-.29-.28-1.11-1-1.43-1.28a4,4,0,0,1-1-5.25,110.15,110.15,0,0,0,14.58-38.92C229.44,85,195.67,32.54,146.6,20c-6.25-1.59-12.65-2.62-19-3.89L110,16.32c-9.55,2.24-19.51,3.5-28.44,7.22C43,39.57,20.4,68.72,16.72,110.23c-3.59,40.5,12.55,73.32,46.85,95.2,35.87,22.89,73.09,22.32,109.92.95Zm-55-24.64c-35.1-.71-62.94-29.43-62.06-64,.86-34.23,29.56-62,63.37-61.24,34.61.74,62.59,29.41,61.78,63.29C180.72,154.6,152.4,182.42,118.46,181.73Z"/></svg>
                    </button>
                </div>
            </form>
        </div>
        <!-- categories -->
        <div class="categories-box toggle-box section">
            <div class="align-center toggle-button pointer">
                <svg class="size14 mr6" style="margin-top: -2px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M156.49,146.2q-32.57,0-65.12,0c-7.57,0-10.44-2.8-10.46-10.22q-.06-23.25,0-46.51c0-7.21,2.85-10,10.12-10q65.1,0,130.22,0c7.16,0,10,2.85,10,10.17q.1,23.27,0,46.51c0,7.21-3,10.07-10.13,10.08Q188.8,146.24,156.49,146.2Zm64.63,83.56c7.26,0,10.09-2.83,10.12-10.07q.1-23.25,0-46.5c0-7.23-3-10.26-10-10.27q-65.1-.06-130.21,0c-7.11,0-10.09,3-10.11,10.16,0,15,0,30,0,45,0,9.24,2.36,11.65,11.48,11.66q31.82,0,63.64,0C177.71,229.78,199.41,229.82,221.12,229.76ZM30.64,200c0,3.73.86,5.17,4.86,5,6.67-.33,13.38-.09,20.07-.09,13.45,0,13.37,0,12.78-13.5-.12-2.65-1-3.33-3.45-3.25-4.41.14-8.83-.11-13.22.08-3,.14-4.32-.63-4.29-4q.21-29.62,0-59.26c0-3.11,1.16-3.91,4-3.81,4.57.17,9.14.06,13.71,0,1.42,0,3.19.27,3.12-2-.14-4.7,1.63-10.14-.75-13.87-1.65-2.59-7-.58-10.72-.85a17.62,17.62,0,0,0-3.91,0c-4.17.61-5.58-.77-5.52-5.25.27-19.58.12-39.17.12-58.76,0-11.19,0-10.92-11.31-11.26-4.75-.15-5.55,1.58-5.52,5.81.16,27.26.08,54.52.08,81.79C30.71,144.46,30.78,172.21,30.64,200Z"/></svg>
                <h3 class="no-margin unselectable fs14 dark">Categories</h3>
                <svg class="size7 ml8 mt2 toggle-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.02 30.02"><path d="M13.4,1.43l9.35,11a4,4,0,0,1,0,5.18l-9.35,11a4,4,0,1,1-6.1-5.18L14.46,15,7.3,6.61a4,4,0,0,1,6.1-5.18Z"/></svg>
            </div>
            <div class="categories-wrapper toggle-container none">
                @foreach($categories as $category)
                    <x-layout.left-panel.category :category="$category" />
                @endforeach
            </div>
        </div>
        <!-- tags -->
        <div class="tags-box toggle-box section">
            <div class="align-center">
                <div class="align-center toggle-button pointer">
                    <svg class="size12 mr8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M155.32,3.3h78.12c11.19,3.13,18.39,10.25,21.48,21.49v79.09c-1.28.34-1,1.52-1.23,2.38-2.34,9.41-7.32,17.21-14.14,24Q183.26,186.47,127,242.73C112.72,257,95,256.88,80.58,242.52Q48.47,210.45,16.4,178.35C.91,162.85,1,145.73,16.51,130.17Q67,79.62,117.55,29C128.53,18,139.19,6.68,155.32,3.3ZM197.4,86.52a26,26,0,1,0-25.7-26.18A25.94,25.94,0,0,0,197.4,86.52Z"/></svg>
                    <h3 class="no-margin unselectable fs14 dark">{{__('Popular Tags')}}</h3>
                    <svg class="size7 ml8 mt2 toggle-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.02 30.02"><path d="M13.4,1.43l9.35,11a4,4,0,0,1,0,5.18l-9.35,11a4,4,0,1,1-6.1-5.18L14.46,15,7.3,6.61a4,4,0,0,1,6.1-5.18Z"/></svg>
                </div>
                <a href="{{ route('tags') }}" class="fs12 bold blue no-underline ml8">{{ __('all') }}</a>
            </div>
            <div class="tags-wrapper toggle-container none">
                @foreach($tags as $tag)
                    <a href="{{ route('tag.view', ['tag'=>$tag->slug]) }}" class="tag">#{{ $tag->slug }}</a>
                @endforeach
            </div>
        </div>
        <span class="section-title">MORE</span>
        <div class="section">
            <a href="{{ route('faqs') }}" class="link my12 @if($page=='faqs') left-panel-selected-button @endif" style="margin-top: 0;">{{__('FAQs')}}</a>
            <a href="{{ route('guidelines') }}" class="link my12 @if($page=='guidelines') left-panel-selected-button @endif">{{__('Guidelines')}}</a>
            <a href="{{ route('privacy') }}" class="link my12 @if($page=='privacy') left-panel-selected-button @endif">{{__('Privacy Policy')}}</a>
        </div>
        <div class="move-to-bottom mr8">
            <div class="flex align-center dark fs13" style="letter-spacing: 1.2px;">
                <p class="unselectable fs12 bold no-margin">Designed with</p>
                <div style="max-height: 19px; height: 19px; max-width: 19px; width: 19px" class="full-center mx4" title="LOVE">
                    <svg class="heart-beating" fill="#FF0000" style="width: 16px; stroke: #331010; stroke-width: 5px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 94.5"><path d="M86.82,26.63v-7.3H78.64V12H62.27v7.29H54.09v7.3H45.91v-7.3H37.73V12H21.36v7.29H13.18v7.3H5V48.5h8.18v7.29h8.18v7.29h8.19v7.29h8.18v7.3h8.18V85h8.18V77.67h8.18v-7.3h8.18V63.08h8.19V55.79h8.18V48.5H95V26.63Z"/></svg>
                </div>
                <p class="unselectable fs12 bold">by<a href="http://mouad-nassri.freecluster.eu" target="_blank" class="no-underline mx4" style="color: rgb(58, 186, 236)">Mouad</a></p>
            </div>
        </div>
    </div>
</div>