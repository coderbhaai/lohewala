<div class="suggestBlogs">
    <style>
        .suggestBlogs .oneliner{
            overflow: hidden;
            text-overflow: ellipsis;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            -webkit-line-clamp: 1;
        }
        .suggestBlogs .col-span-12:hover img{
            transform: scale(1.05);
            transition: transform 0.6s ease-out,-webkit-transform 0.6s ease-out;
        }
    </style>
    <h3 class="text-xl font-bold mb-5">RECENT POSTS</h3>
    <!-- <h4 class="text-base md:text-xl font-bold mb-2 md:mb-10">Our take on the industry</h4> -->
    <div class="flex grid grid-cols-12 gap-4 gap-x-5">
        @foreach($data as $i)
            <div class="col-span-12 md:col-span-4 mb-3 group">
                <div class="bg-white rounded-lg shadow-2xl overflow-hidden amitShadow">
                    <a href="/{{$i->url}}">
                        <img src="/storage/blog/{{$i->smallImg}}" alt="{{$i->title}}" class="rounded-t-lg" loading="lazy" width="400" height="220"/>
                    </a>
                    <div class="p-3">
                        <h2 class="font-bold mb-2 text-center oneliner">{{$i->title}}</h2>
                        <small class="block text-center oneliner text-action font-bold">
                            @for($j=0; $j < 2; $j++)
                                @if(count( $i['catArray'])>$j)
                                    <a href="/category/{{$i['catArray'][$j]['url']}}">
                                        {{$i['catArray'][$j]['name']}}
                                    </a>
                                    @if($j == 0) &nbsp;|&nbsp; @endif
                                @endif
                            @endfor
                        </small>
                        <div class="flex sm:block lg:flex items-center justify-between pt-5 sm:text-center">
                            <small class="font-bold text-xs sm:w-full sm:block sm:text-center lg:w-auto">
                                {{ \Carbon\Carbon::parse($i->created_at)->isoFormat('Do MMM YYYY')}}
                            </small>
                            <a href="/{{$i->url}}" class="overflow-hidden text-center px-3 py-1 font-bold text-xs rounded-full text-primary border-2 border-primary group-hover:bg-action group-hover:border-action">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="text-center my-5 group">
        <a href="/blog" class="text-center py-3 px-12 font-bold rounded-full border-2 border-primary group-hover:bg-action group-hover:border-action">Read All Blogs</a>
    </div>
</div>