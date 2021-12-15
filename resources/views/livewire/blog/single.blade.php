<div>
	<style>
		.quoteLR {
			font-size: 7rem;
			line-height: 1;
		}
		.rquote{
			right: 2.5em;
		}
        .toc {
            background: #fff7e1;
            padding: 1em;
            border-radius: 10px;
        }
        .toc a {
            color: unset;
        }
        .toc a:after {
            content: none;
        }
	</style>
    <div class="relative">
        <img src="/storage/blog/{{$data->cover_img}}" alt="{{$data->title}}" class="web" width="1430" height="700"/>
        <img src="/storage/blog/{{$data->smallImg}}" alt="{{$data->title}}" class="mobile" width="300" height="160"/>
    </div>
    <div class="container">
        <h2 class="text-xl md:text-3xl font-bold text-center mt-10 my-5">{{$data->title}}</h2>
        <div class="flex grid grid-cols-12 gap-4 gap-x-3">
            <div class="col-span-12 lg:col-span-9 content">
                {!! $data->content !!}
				@livewire('parts.singlecomments', [ 'type'=>$type, 'title'=> $title, 'pageId'=>$pageId, 'comments'=>$comments, 'response'=>$response ])
            </div>
            @livewire('parts.singlesidebar')
        </div>
    </div>
</div>