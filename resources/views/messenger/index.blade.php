@php use Illuminate\Support\Facades\Auth; @endphp
@php
    $user = Auth::user();
    $org = $user->organisation;
@endphp
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Messages') }}
        </h2>
    </x-slot>
    <div class="my-12 p-4 flex max-w-7xl h-[70vh] mx-auto border rounded-xl shadow overflow-y-auto">
        <div class="py-4 basis-1/4 flex grow flex-col gap-y-5 overflow-y-auto bg-indigo-600 rounded-l-xl px-6">
            <nav class="flex flex-1 flex-col">
                <ul role="list" class="flex flex-1 flex-col gap-y-7">
                    <li>
                        <ul role="list" class="-mx-2 space-y-1">
                            <li>
                                <!-- Current: "bg-indigo-700 text-white", Default: "text-indigo-200 hover:text-white hover:bg-indigo-700" -->
                                <a
                                    href="#"
                                    class="{{ request()->routeIs('messages') ? 'bg-indigo-700 text-white' : 'text-indigo-200' }} group flex gap-x-3 rounded-md px-2 py-6 text-sm/6 font-semibold text-indigo-200 hover:bg-indigo-700 hover:text-white">
                                    <svg
                                        class="size-6 shrink-0 text-indigo-200 group-hover:text-white"
                                        stroke-width="1.5" stroke="none" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                        <path
                                            stroke-linecap="round" stroke-linejoin="round"
                                            d="M121 32C91.6 32 66 52 58.9 80.5L1.9 308.4C.6 313.5 0 318.7 0 323.9L0 416c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-92.1c0-5.2-.6-10.4-1.9-15.5l-57-227.9C446 52 420.4 32 391 32L121 32zm0 64l270 0 48 192-51.2 0c-12.1 0-23.2 6.8-28.6 17.7l-14.3 28.6c-5.4 10.8-16.5 17.7-28.6 17.7l-120.4 0c-12.1 0-23.2-6.8-28.6-17.7l-14.3-28.6c-5.4-10.8-16.5-17.7-28.6-17.7L73 288 121 96z"/>
                                    </svg>
                                    Inbox
                                    <span
                                        class="{{ Auth::user()->unreadMessagesCount() > 0 ? 'bg-red-500' : 'bg-indigo-600'}} ml-auto w-9 min-w-max whitespace-nowrap rounded-full px-2.5 py-0.5 text-center text-xs/5 font-medium text-white ring-1 ring-inset ring-indigo-500"
                                        :class=""
                                        aria-hidden="true">{{ Auth::user()->unreadMessagesCount() }}</span>
                                </a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="group flex gap-x-3 rounded-md px-2 py-6 text-sm/6 font-semibold text-indigo-200 hover:bg-indigo-700 hover:text-white">
                                    <svg
                                        class="size-6 shrink-0 text-indigo-200 group-hover:text-white"
                                        fill="currentColor"
                                        viewBox="0 0 512 512" stroke-width="1.5" stroke="none"
                                        aria-hidden="true"
                                        data-slot="icon">
                                        <path
                                            d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464l349.5 0c-8.9-63.3-63.3-112-129-112l-91.4 0c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304l91.4 0C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7L29.7 512C13.3 512 0 498.7 0 482.3z"/>
                                    </svg>
                                    Create New Direct Message
                                </a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="group flex gap-x-3 rounded-md px-2 py-6 text-sm/6 font-semibold text-indigo-200 hover:bg-indigo-700 hover:text-white">
                                    <svg
                                        class="size-6 shrink-0 text-indigo-200 group-hover:text-white" fill="none"
                                        viewBox="0 0 640 512" stroke-width="30" stroke="currentColor" aria-hidden="true"
                                        data-slot="icon">
                                        <path
                                            d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192l42.7 0c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0L21.3 320C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7l42.7 0C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3l-213.3 0zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352l117.3 0C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7l-330.7 0c-14.7 0-26.7-11.9-26.7-26.7z"/>
                                    </svg>
                                    Create New Group Message
                                </a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="group flex gap-x-3 rounded-md px-2 py-6 text-sm/6 font-semibold text-indigo-200 hover:bg-indigo-700 hover:text-white">
                                    <svg
                                        class="size-6 shrink-0 text-indigo-200 group-hover:text-white"
                                        fill="currentColor"
                                        viewBox="0 0 512 512" stroke-width="1.5" stroke="none" aria-hidden="true"
                                        data-slot="icon">
                                        <path
                                            d="M123.6 391.3c12.9-9.4 29.6-11.8 44.6-6.4c26.5 9.6 56.2 15.1 87.8 15.1c124.7 0 208-80.5 208-160s-83.3-160-208-160S48 160.5 48 240c0 32 12.4 62.8 35.7 89.2c8.6 9.7 12.8 22.5 11.8 35.5c-1.4 18.1-5.7 34.7-11.3 49.4c17-7.9 31.1-16.7 39.4-22.7zM21.2 431.9c1.8-2.7 3.5-5.4 5.1-8.1c10-16.6 19.5-38.4 21.4-62.9C17.7 326.8 0 285.1 0 240C0 125.1 114.6 32 256 32s256 93.1 256 208s-114.6 208-256 208c-37.1 0-72.3-6.4-104.1-17.9c-11.9 8.7-31.3 20.6-54.3 30.6c-15.1 6.6-32.3 12.6-50.1 16.1c-.8 .2-1.6 .3-2.4 .5c-4.4 .8-8.7 1.5-13.2 1.9c-.2 0-.5 .1-.7 .1c-5.1 .5-10.2 .8-15.3 .8c-6.5 0-12.3-3.9-14.8-9.9c-2.5-6-1.1-12.8 3.4-17.4c4.1-4.2 7.8-8.7 11.3-13.5c1.7-2.3 3.3-4.6 4.8-6.9l.3-.5z"/>
                                    </svg>
                                    Go to Chat
                                    <span
                                        class="ml-auto w-9 min-w-max whitespace-nowrap rounded-full bg-indigo-600 px-2.5 py-0.5 text-center text-xs/5 font-medium text-white ring-1 ring-inset ring-indigo-500"
                                        aria-hidden="true">20+</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="mt-auto">
                        <div class="text-xs/6 font-semibold text-indigo-200">Your organisation</div>
                        <ul role="list" class="-mx-2 mt-2 space-y-1">
                            <li>
                                <!-- Current: "bg-indigo-700 text-white", Default: "text-indigo-200 hover:text-white hover:bg-indigo-700" -->
                                <a
                                    href="#"
                                    class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-indigo-200 hover:bg-indigo-700 hover:text-white">
                                <span
                                    class="flex size-6 shrink-0 items-center justify-center rounded-lg border border-indigo-400 bg-indigo-500 text-[0.625rem] font-medium text-white">{{ strtoupper(substr($org->name, 0, 1)) }}</span>
                                    <span class="truncate">{{ $org->name }}</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="-mx-6 mt-3">
                        <a
                            href="#"
                            class="flex items-center gap-x-4 px-6 py-3 text-sm/6 font-semibold text-white hover:bg-indigo-700">
                            <img
                                class="size-8 rounded-full bg-indigo-700"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="">
                            <span class="sr-only">Your profile</span>
                            <span aria-hidden="true">{{ $user->name }}</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="p-4 basis-3/4 h-full border border-l rounded-r-xl bg-white">
            <table class="w-full table-fixed">
                <tr class="border-b">
                    <th class="w-1/3 text-left border-r">Subject</th>
                    <th class="w-1/3 pl-2 text-left border-r">Latest</th>
                    <th class="pl-2 text-left border-r">Sender</th>
                    <th class="text-right">When</th>
                </tr>
                @foreach($threads as $thread)
                    @include('messenger.partials.thread')
                @endforeach
            </table>
        </div>
    </div>
</x-app-layout>

