<div style="width: 250px; margin: 150px auto 0;">
    @if($todo !== null)
        Информация дела номер {{$todo->id}}<br/>
        <div>title: {{ $todo->title }}</div>
        <div>description: {{ $todo->description }}</div>
        <div>created_at: {{ $todo->created_at }}</div>
        <div>updated_at: {{ $todo->updated_at }}</div>
    @else
        <div>Дело не найдено</div>
    @endif
    <br/>
    <a href="{{url('/todo')}}">Вернуться к списку дел</a>
</div>
