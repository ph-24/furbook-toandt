<div id="list-cats">
    @foreach($cats as $cat)
        <div class="cat">
            <a href="{{ url('cats/'.$cat->id) }}">
                <strong>{{ $cat->name }}</strong> - {{ $cat->breed->name }}
            </a>
        </div>
    @endforeach
    {{$cats->links()}}
    <script type="application/javascript">
        $(function(){
            $('a.page-link').click(function (e) {
                e.preventDefault();
                //get url from attribute href of tag a
                var url = $(this).attr('href');
                //create request
                $.get(url, function (response) {
                    $('#list-cats').replaceWith(response);
                });
                //user load ajax
                //$('#list-cats').load(url);
            });
        });
    </script>
</div>