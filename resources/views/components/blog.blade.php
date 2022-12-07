<
    <!-- Be present above all else. - Naval Ravikant -->


    <div class="col-md-4 ftco-animate">
        @foreach ($blogs as $blog )
        <div class="blog-entry">
            <div class="block-20" style="background-image:url({{ $blog->cover_image }});">
            </div>
            <div class="text px-4 pt-3 pb-4">
                <div class="meta">
                    <div><a href="#">{{ $blog->date }}</a></div>
                    <div><a href="#">{{ $blog->title }}</a></div>
                </div>
                <h3 class="heading"><a href="#"></a>{{ $blog->content }}</h3>
                <p class="clearfix">
                    <a href="#" class="float-left read btn btn-danger">Read more</a>
                    {{-- <a href="#" class="float-right meta-chat"><span class="fa fa-comment"></span> 3</a> --}}
                </p>
            </div>
        </div>
    @endforeach

    </div>
