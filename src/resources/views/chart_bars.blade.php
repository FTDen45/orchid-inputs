<div    data-controller="hello" style="display:inline-block;"
        data-hello-id="{{$id}}"

        data-hello-json="{{$attributes['json']}}"
        data-hello-title_top="{{$attributes['title_top']}}"
        data-hello-title_left="{{$attributes['title_left']}}"

        data-hello-chat_margin="{{$attributes['chat_margin']}}"
        data-hello-chat_width="{{$attributes['chat_width']}}"
        data-hello-chat_height="{{$attributes['chat_height']}}"
>
    <div class="" style="">
        <span>{{ $attributes['title_top'] }}</span>
        <svg class="{{ $id }} svg-metrica" width="{{ $attributes['chat_width'] }}" height="{{ $attributes['chat_height'] }}" style="">
        </svg>
    </div>
</div>
