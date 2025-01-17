<?php $class = $thread->isUnread(Auth::id()) ? 'font-bold' : ''; ?>
<tr class="py-2 text-sm">
    <td class="text-left border-r">
        <a class="{{ $class }}" href="{{ route('messages.show', $thread->id) }}">{{ $thread->subject }}</a>
    </td>
    <td class="pl-2 text-left border-r">
        {{ $thread->latestMessage->body }}
    </td>
    <td class="pl-2 text-left border-r">
        {{ $thread->latestMessage->user->name }}
    </td>
    <td class="text-right">
        {{ $thread->latestMessage->created_at->diffForHumans() }}
    </td>
</tr>
