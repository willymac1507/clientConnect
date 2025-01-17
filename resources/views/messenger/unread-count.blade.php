<?php $count = Auth::user()->newThreadsCount(); ?>
@if($count > 0)
    <span
        class="absolute top-5 -right-2 grid min-h-[20px] min-w-[20px] translate-x-2/4 -translate-y-2/4 place-items-center rounded-full bg-red-600 py-[2px] px-[2px] text-xs text-white">
    {{ $count }}
  </span>
@endif
