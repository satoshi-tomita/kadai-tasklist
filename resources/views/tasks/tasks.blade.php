<ul class="media-list">
@foreach ($tasks as $task)
    <?php $user = $task->user; ?>
    <li class="media">
        <div class="media-body">
            <div>
                {!! link_to_route('users.show', $user->name, ['id' => $user->id]) !!} <span class="text-muted">posted at {{ $task->created_at }}</span>
            </div>
            <div>
                <p>タスク内容：{!! nl2br(e($task->content)) !!}</p>
                <p>進捗状況：{!! nl2br(e($task->status)) !!}</p>
            </div>
            <div>
                    {!! link_to_route('tasks.edit', 'Edit', ['id' => $task->id]) !!}
            </div>
            <div>
                @if (Auth::id() == $task->user_id)
                    {!! Form::open(['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}
                @endif
            </div>
        </div>
    </li>
@endforeach
</ul>
{!! $tasks->render() !!}
