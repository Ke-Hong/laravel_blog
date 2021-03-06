@if($errors->any())
    <div class="alert alert-danger alert-dismissible" role="alert">
        <strong>錯誤！</strong> 請修正表單內容：
        <ul>
            @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach
        </ul>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
