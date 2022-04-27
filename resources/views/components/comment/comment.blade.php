<div class="comment-component">
    <div class="commenter-avatar-and-threadline">
        <a href="" class="commenter-profile-link">
            <img src="{{ $comment->user->avatar(100) }}" class="commenter-avatar" alt="">
        </a>
        <div class="comment-threadline">
            <div class="comment-threadline-inner"></div>
        </div>
    </div>
    <div class="comment-section">
        <!-- commenter name -->
        <span class="commenter-name">{{ $comment->user->fullname }}</span>
        <!-- comment date -->
        <div class="relative tooltip-box">
            <div class="align-center comment-date tooltip-pointer">
                <span class="mt2">{{ $comment->date_humans }}</span>
                <span class="mt2 edited none ml4">- ({{ __('edited') }})</span>
            </div>
            <div class="tooltip tooltip-style-1">
                <span class="mt2">{{ $comment->date }}</span>
            </div>
        </div>
        <div class="comment-body">
            <div class="comment-content">
                {{ $comment->content }}
            </div>
        </div>
        <div class="comment-clap-and-reply-container">
            <div class="button-style-4 @auth clap @else login-required @endauth @if($claped) comment-claped @endif">
                <svg class="size18 mr6 icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M255,166.15c-2.6,8.16-8.17,14.15-14.13,20-15,14.73-29.78,29.71-44.67,44.56-21,21-48.79,21.06-69.77.12q-32.37-32.29-64.67-64.66c-13-13-12.08-26.82,4.17-39.07-2.38-1.79-4.85-3.15-6.7-5.12-12.3-13.06-6.3-32.84,11.11-37.11,1.22-.3,3.1-1.19,3.26-2.07C75.75,71.33,83,65.43,94,63.49c2.22-14.87,15.46-25.23,32.92-18.2,8.26-11.1,16.87-15,26.86-11.21A31.69,31.69,0,0,1,164.19,41c10.56,10.13,20.79,20.6,31.61,31.4.43-3.07.58-5.59,1.17-8,2.76-11.19,12.58-17.91,24.19-16.7C231.65,48.8,240,58.05,240.27,69.09c.16,6.52.13,13,0,19.56-.05,2.66.39,4.42,3.18,5.72,6.34,2.94,9.26,8.8,11.55,15Zm-14.68-28.66c0-7.5,0-15,0-22.5-.05-5.44-2.71-8.56-7.18-8.64-4.66-.09-7.44,3.12-7.47,8.83-.05,9.78-.08,19.57,0,29.35,0,3.75-1,6.84-4.61,8.38s-6.55-.06-9.15-2.7c-7.45-7.54-15-15-22.47-22.5q-22.83-22.83-45.67-45.65c-4.42-4.4-8.59-4.84-11.93-1.44s-2.74,7.46,1.66,11.91c3.89,4,7.83,7.84,11.75,11.77,5.87,5.88,11.84,11.68,17.58,17.7,3.13,3.28,2.94,7.68,0,10.5s-6.73,2.79-10.16,0c-1-.83-1.87-1.81-2.79-2.74L103.18,83a27.46,27.46,0,0,0-3.2-3c-3.39-2.43-6.81-2.27-9.7.74-2.73,2.85-2.65,6.18-.5,9.38a23.88,23.88,0,0,0,3,3.22l47,47a23.78,23.78,0,0,1,3.28,3.61,6.72,6.72,0,0,1-.79,8.95c-2.71,2.84-6,3.2-9.31,1.05a23.27,23.27,0,0,1-3.59-3.3q-23.54-23.5-47.05-47a23.17,23.17,0,0,0-3.22-3c-3.22-2.12-6.55-2.18-9.38.59-3,2.91-3.11,6.33-.65,9.7a33,33,0,0,0,3.36,3.54c15.79,15.8,31.65,31.53,47.3,47.48,1.87,1.91,3.63,5,3.5,7.49-.12,2.14-2.72,5.45-4.71,5.85a10.57,10.57,0,0,1-8.19-2.39c-10-9.39-19.47-19.26-29.2-28.9-4.1-4.07-8.32-4.43-11.56-1.2s-2.9,7.46,1.21,11.58c22.57,22.62,45.08,45.31,67.83,67.75,13.08,12.9,32.14,12.87,45.2,0,17.44-17.15,34.6-34.57,51.94-51.83a14.83,14.83,0,0,0,4.57-11.4C240.22,151.84,240.32,144.66,240.32,137.49ZM211,128.17c0-5.63-.1-10.29,0-14.95.16-6.52,2.19-13,7.79-16,7-3.8,7.29-9.18,6.89-15.62-.24-3.74,0-7.5-.07-11.25-.14-5-3-8-7.3-8s-7.23,3-7.33,8c-.11,5.71-.12,11.42,0,17.12.09,4.09-.09,8.08-4.46,9.93-4.59,2-7.62-.89-10.62-3.91q-20.49-20.65-41.13-41.17a26,26,0,0,0-3.58-3.32c-3.07-2.07-6.25-2-8.94.61s-2.85,5.75-1,8.91a15.8,15.8,0,0,0,2.57,2.93Q175.66,93.19,207.48,125C208.34,125.86,209.29,126.64,211,128.17Zm-95.59-54,10.53-9.71c-2.49-2-4.74-7.67-10.77-6.5A8.81,8.81,0,0,0,109.47,63C107.57,69.36,113.36,71.85,115.39,74.14ZM23.49,87.32c3.91,0,7.82.21,11.71,0,4.61-.32,7.48-3.45,7.35-7.48s-3.09-6.9-7.81-7q-11.22-.21-22.44,0c-4.73.1-7.69,2.92-7.84,7S7.35,87,12.28,87.32c3.72.21,7.47,0,11.21,0ZM77.8,21.87c-.16-4.87-3.17-7.9-7.49-7.79-4.13.1-7,3-7.11,7.67Q63,33,63.2,44.19c.08,4.87,3.15,7.9,7.48,7.79,4.11-.1,6.95-3,7.11-7.68.14-3.73,0-7.48,0-11.22S77.93,25.6,77.8,21.87ZM30.73,29.53c-3.61-3.27-7.87-3.22-10.81,0s-2.7,7.16.57,10.44q7.91,7.95,16.1,15.62c3.55,3.34,7.86,3.24,10.8.06,2.8-3,2.65-7.11-.56-10.46-2.58-2.69-5.35-5.22-8-7.83S33.5,32,30.73,29.53Z"/></svg>
                <span class="comment-claps-count-container mr4 @if(!$comment->reactions_count) none @endif">(<span class="claps-count">{{ $comment->reactions_count }}</span>)</span>
                <span>{{ __('clap' . ($comment->reactions_count > 1 ? 's' : '')) }} </span>
                <input type="hidden" class="clapable-id" value="{{ $comment->id }}" autocomplete="off">
                <input type="hidden" class="clapable-type" value="comment" autocomplete="off">
            </div>
            <span class="separator">〡</span>
            <div class="button-style-4 comment-reply">
                <svg class="size16 mr6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M234.47,178c0,19.85-12.2,31.9-32.12,31.92-23,0-46-.07-69,.1a12.43,12.43,0,0,0-7,2.44c-14.14,11-28.13,22.1-42.1,33.29-3.73,3-7.53,4.94-12.25,2.53s-5.54-6.56-5.47-11.35c.13-8.15.06-16.3,0-25a2,2,0,0,0-2-2c-5.89,0-11.42,0-16.93,0-17.48-.15-30.21-12.5-30.31-30q-.22-49.08,0-98.15c.07-13.09,7-23.13,17.94-27.56a2,2,0,0,1,2.35.57h0l.15.17c2.85,2.91,5.73,5.8,8.61,8.67q2.26,2.28,4.55,4.54a2,2,0,0,1-1.42,3.47h-.65C40.48,71.63,37,75.12,37,83.39v94.88c0,8.09,3.72,11.82,11.89,11.89,8.64.07,17.28,0,25.92,0,8.08.07,11.42,3.46,11.48,11.64,0,4.2,0,8.38,0,13.1a2,2,0,0,0,3.25,1.63l1.5-1.16c8.45-6.71,17-13.31,25.28-20.24a20.56,20.56,0,0,1,14.27-5.06c23.91.24,47.82.13,71.73.09,8.82,0,12.45-3.62,12.46-12.27V83.47c0-6.86-2.35-10.44-7.83-11.5a2,2,0,0,1-1.09-.56c-3.39-3.45-9.07-9.37-9.73-10-.45-.46-3.18-3.36-6-6.22a2,2,0,0,1,1.45-3.44h10.6c20.13,0,32.25,12.15,32.27,32.28Q234.53,131,234.47,178ZM64.53,43.44,98,77l12.42-12.26L97.07,52.11a6.71,6.71,0,0,1,1.22-.28c13.1,0,26.19,0,39.29,0a12.56,12.56,0,0,1,4.57,1,13,13,0,0,1,7.91,14.24,13.22,13.22,0,0,1-12.42,10.58c-4.36.15-8.73,0-13.06,0V95.1c5.11,0,10,.26,14.79,0,17.3-1.07,30.45-17.46,27.86-34.52-2.31-15.27-14.94-25.95-31-26.1-11.74-.1-23.48,0-35.22,0H97.51l-.32-1,13-12.32L98.47,9.5Z"/></svg>
                <span>{{ __('reply') }}</span>
            </div>
            <span class="separator">〡</span>
            <div class="relative">
                <div class="button-style-4 button-with-suboptions">
                    <svg class="size16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M108.31,79.09A28.69,28.69,0,1,1,79.63,50.41,28.59,28.59,0,0,1,108.31,79.09ZM50.94,179a28.69,28.69,0,1,0,28.85-28.51A28.82,28.82,0,0,0,50.94,179Zm157.4-99.81a28.69,28.69,0,1,0-28.74,28.65A28.78,28.78,0,0,0,208.34,79.14ZM179.46,207.81A28.69,28.69,0,1,0,151,178.93,28.83,28.83,0,0,0,179.46,207.81Z"/></svg>
                </div>
                <div class="suboptions-container typical-suboptions-container width-max-content" style="right: 0;">
                    <!-- hide, edit and delete comment -->
                    <div class="suboption-style-2 align-center mb2">
                        <svg class="size14 mr8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 490.03 490.03"><path d="M435.67,54.31a18,18,0,0,0-25.5,0l-64,64c-79.3-36-163.9-27.2-244.6,25.5C41.47,183,5,232.31,3.47,234.41a18.16,18.16,0,0,0,.5,22c34.2,42,70,74.7,106.6,97.5l-56.3,56.3a18,18,0,1,0,25.4,25.5l356-355.9A18.11,18.11,0,0,0,435.67,54.31ZM200.47,264a46.82,46.82,0,0,1-3.9-19,48.47,48.47,0,0,1,67.5-44.6Zm90.2-90.1a84.37,84.37,0,0,0-116.6,116.6L137,327.61c-32.5-18.8-64.5-46.6-95.6-82.9,13.3-15.6,41.4-45.7,79.9-70.8,66.6-43.4,132.9-52.8,197.5-28.1Zm195.4,59.7c-24.7-30.4-50.3-56-76.3-76.3a18.05,18.05,0,1,0-22.3,28.4c20.6,16.1,41.2,36.1,61.2,59.5a394.59,394.59,0,0,1-66,61.3c-60.1,43.7-120.8,59.5-180.3,46.9a18,18,0,0,0-7.4,35.2,224.08,224.08,0,0,0,46.8,4.9,237.92,237.92,0,0,0,71.1-11.1c31.1-9.7,62-25.7,91.9-47.5,50.4-36.9,80.5-77.6,81.8-79.3A18.16,18.16,0,0,0,486.07,233.61Z"/></svg>
                        <span>{{ __('Hide comment') }}</span>
                    </div>
                    <div class="suboption-style-2 align-center mb2">
                        <svg class="size14 mr8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M181,21c14,2.34,23.12,11.71,31.67,21.91,11.51,13.73,11.54,35.17.09,49.12a72.16,72.16,0,0,1-4.92,5.28c-28.77,28.9-57.72,57.62-86.22,86.79-7.39,7.56-15.52,12.24-25.89,13.84-10.17,1.57-20.22,3.93-30.33,6-16,3.21-29.39-9.93-26.3-26.14,2.44-12.8,4.87-25.62,8.06-38.24a29.24,29.24,0,0,1,7-12.79C85.08,95.19,116.36,64,147.42,32.57c6.12-6.18,13.65-9.28,21.71-11.56ZM60.2,183c13.35-2.22,25.88-4.24,38.37-6.48a9,9,0,0,0,4.14-2.67c6.56-6.47,13-13,19.49-19.58q36-36.36,72.08-72.75c8-8.14,8.18-17.45.52-25.6-1.94-2.07-4-4-6-6q-14.2-14.25-28.37,0Q116.26,94.29,72,138.7a17.35,17.35,0,0,0-5.23,9.8C64.84,159.78,62.52,171,60.2,183Zm151.36,56,1.9-.89c4.87-2.19,7.13-5.86,6.6-10.7s-4.09-8.37-9.21-9.13a37.33,37.33,0,0,0-5.5-.27H53.49a39,39,0,0,0-5.92.31c-7,1.05-11,8.1-7.6,14.35,1.4,2.61,4.61,4.25,7,6.33Z"/></svg>
                        <span>{{ __('Edit comment') }}</span>
                    </div>
                    <div class="suboption-style-2 align-center mb2">
                        <svg class="size14 mr8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M207.61,146.85c0,16.84,0,33.68,0,50.51-.08,23.15-16,39.2-39.15,39.32q-38.44.21-76.91,0c-23.15-.12-39.09-16.21-39.13-39.32q-.09-51.88,0-103.76c0-1.06,0-2.13.08-3.18a9.29,9.29,0,0,1,9.21-8.85,9.49,9.49,0,0,1,9.89,8.18,33.31,33.31,0,0,1,.15,5q0,51,0,101.94c0,13.14,7.45,20.67,20.49,20.68h75.54c13,0,20.49-7.56,20.49-20.69q0-51,0-101.94a38.31,38.31,0,0,1,.09-4.55,9.5,9.5,0,0,1,9.95-8.62,9,9,0,0,1,9.16,8.85c.26,7.43.13,14.87.14,22.3Q207.63,129.79,207.61,146.85Zm-122-94.48c-11.22,0-22.45-.09-33.67.12a9.32,9.32,0,0,0-9.25,9.33,9.75,9.75,0,0,0,8.88,9.81,37.17,37.17,0,0,0,4.09.08H204.43c1.06,0,2.12,0,3.18,0,5.74-.33,9.87-4.55,9.75-9.91s-4.09-9.22-9.75-9.34c-8-.17-16.08-.06-24.12-.07H168.92c0-6.2.06-11.92,0-17.63-.1-7.91-3.58-11.46-11.39-11.48q-27.54-.09-55.07,0c-7.8,0-11.25,3.58-11.34,11.53-.07,5.59,0,11.19,0,17.58Zm25.28-9.5h38.24V52.1H110.84Zm9.35,68.8c0-6.59-4-10.83-9.67-10.8s-9.62,4.41-9.63,10.9q-.08,32.7,0,65.41c0,6.51,3.89,10.92,9.5,11,5.82.12,9.76-4.26,9.8-11.14.07-10.74,0-21.49,0-32.24C120.21,133.78,120.27,122.72,120.19,111.67Zm19.64,64.86a16.89,16.89,0,0,0,1,6.18A9.34,9.34,0,0,0,151.32,188c4.73-1,7.77-4.86,7.79-10.32q.07-33.15,0-66.3c0-6.18-4-10.45-9.54-10.54s-9.69,4.23-9.74,10.72c-.09,10.9,0,21.8,0,32.7C139.79,155,139.74,165.79,139.83,176.53Z"/></svg>
                        <span>{{ __('Delete comment') }}</span>
                    </div>
                    <div class="suboption-style-2 align-center mb2">
                        <svg class="size14 mr8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M204.49,43.44A15.74,15.74,0,0,0,198,44.87c-15.45,7.05-26.9,9.45-36.45,9.45-20.27,0-32.06-10.78-55.42-10.78-11.71,0-26.33,2.71-46.39,10.84V51.55a8.13,8.13,0,0,0-16.25,0v156.9a8.12,8.12,0,0,0,16.23,0V173.28c18.12-8.07,32.47-10.75,44.9-10.75,24.9,0,42.24,10.74,67.16,10.74,10.79,0,23-2,37.56-7.81a10.46,10.46,0,0,0,7.27-9.73V53.83C216.56,47.19,210.92,43.44,204.49,43.44Zm-4.16,108.13c-10.25,3.66-19.64,5.45-28.6,5.45-10.42,0-19.72-2.37-29.57-4.88-10.82-2.75-23.09-5.87-37.57-5.87-14.32,0-29.07,3.07-44.9,9.38V71.89l6.09-2.47c16-6.49,29.21-9.65,40.31-9.65,9.55,0,16.61,2.27,24.79,4.9,8.58,2.75,18.3,5.88,30.63,5.88,12,0,24.42-2.88,38.85-9v90Z" style="stroke:#000;stroke-miterlimit:10;stroke-width:9px"/></svg>
                        <span>{{ __('Report comment') }}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="comment-replies-box">
            <div class="comment-reply-input none">
                <div class="comment-reply-v-line"></div>
                <div class="flex1">
                    <x-comment.comment-input :root="false" :parent_comment_id="$comment->id" />
                </div>
            </div>
        </div>
    </div>
</div>