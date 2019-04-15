<section id="blog" class="ls  section_padding_bottom_100">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section_header text-center">Latest Trainings</h2>
                {{--<div class="row">--}}
                <div class="col-md-6">
                    @foreach($courses as $cour)
                        @if($loop->first)
                            <span>
                                <div class="vertical-item content-absolute content-padding">
                                    <div class="item-media rounded overflow_hidden ds black">
                                        <img src="/assets/images/blog_post1.jpg" alt="">
                                        <div class="date entry-meta-corner main_bg_color">
                                            <span>{{ $cour->created_at->day }}</span>
                                            <span>{{ $cour->created_at->month }}/{{ substr($cour->created_at->year, 2, 3)  }}</span>
                                        </div>
                                    </div>
                                    <div class="item-content ds">
                                        <h4 class="entry-title highlight hover-color2 bottommargin_0">
                                            <a href="{{ url('trainings#/details/'.$cour->slug) }}">{{ $cour->title  }} </a>
                                        </h4>
                                        <div class="content-justify darklinks fontsize_12 regular">
                                            <a href="#">
                                                <i class="fa fa-user rightpadding_5" aria-hidden="true"></i> by Admin
                                            </a>
                                            {{--<a href="#">--}}
                                            {{--<i class="fa fa-comment rightpadding_5" aria-hidden="true"></i>--}}
                                            {{--<span class="amount">75</span>--}}
                                            {{--</a>--}}
                                        </div>
                                    </div>
                                </div>
                                </span>
                        @endif
                    @endforeach
                </div>
                    <div class="col-md-6">
                        @foreach($courses as $course)
                            @if(!$loop->first)
                                <div class="panel-group" id="posts-accordion{{ $loop->index + 1 }}">
                                    <div class="panel panel-blog-post">
                                        <div class="panel-heading">
                                            <a data-toggle="collapse" data-parent="#posts-accordion{{ $loop->index + 1 }}" href="#blog-collapse{{ $loop->index + 1 }}"> </a>
                                            <div class="date entry-meta-corner">
                                                <span>{{ $course->created_at->day }}</span>
                                                <span>{{ $course->created_at->month }}/{{ substr($course->created_at->year, 2, 3)  }}</span>
                                            </div>
                                            <h4 class="hover-color2">
                                                <a href="{{ url('trainings#/details/'.$course->slug) }}">{{ $course->title  }}</a>
                                            </h4>
                                            <div class="content-justify greylinks fontsize_12">
                                                <a href="#">
                                                    <i class="fa fa-user rightpadding_5" aria-hidden="true"></i> by Admin
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-comment rightpadding_5" aria-hidden="true"></i>
                                                    <span class="amount">87</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="blog-collapse{{ $loop->index + 1 }}"
                                             class="panel-collapse collapse {{ ($loop->index == 1) ? 'in' : '' }} ">
                                            <div class="panel-body">
                                                {!!  str_limit(html_entity_decode($course->content), 100)  !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>

                {{--</div>--}}
            </div>
        </div>
    </div>
</section>