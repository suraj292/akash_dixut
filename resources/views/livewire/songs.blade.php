<main class="content" id="content">
    <section class="vc_row wpb_row vc_row-fluid liquid-row-shadowbox-621b6432940ef">
        <div class="ld-container container">
            <div class="row ld-row">
                <div class="wpb_column vc_column_container vc_col-sm-12 liquid-column-621b6432941f8">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper ">
                            <div class="wpb_wrapper-inner">
                                <style>
                                    .ld_spacer_621b643294283 {
                                        height: 70px;
                                    }
                                </style>
                                <div class="ld-empty-space ld_spacer_621b643294283"><span
                                        class="liquid_empty_space_inner"></span></div>
                                <style>
                                    .ld_blog_621b643294380 .liquid-blog-grid {
                                        margin-left: -20px;
                                        margin-right: -20px;
                                    }

                                    .ld_blog_621b643294380 .liquid-blog-grid>div {
                                        padding-left: 20px;
                                        padding-right: 20px;
                                    }

                                    .ld_blog_621b643294380 .liquid-blog-grid .liquid-lp {
                                        margin-bottom: 60px;
                                    }

                                    .ld_blog_621b643294380 .filter-list {
                                        margin-bottom: px;
                                    }

                                    .ld_blog_621b643294380 .liquid-blog-item .liquid-lp-title,
                                    .ld_blog_621b643294380 .liquid-lp .liquid-lp-title {
                                        margin-top: px;
                                        margin-bottom: px;
                                    }
                                </style>
                                <div data-filter-id="ld-1540373550291-c9a2a47c-1c58"
                                     class="liquid-blog-posts ld_blog_621b643294380 ld-1540373550291-9b25b10b-a3f9 "
                                     data-post-per-page="4">
                                    <div class="liquid-blog-grid row">


                                        @foreach($songs as $song)
                                        <div class="col-md-6">
                                            <article id="post-3616"
                                                     class="liquid-lp post-3616 post type-post status-publish format-standard has-post-thumbnail hentry category-business category-motivation category-split tag-event">
                                                <div class="ld-media-item contents-visible lqd-unit-animation-done" style="transform: scale(1); height: 360px;">
                                                    <iframe width="560" height="360" src="https://www.youtube.com/embed/{{ $song->link }}"
                                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                            allowfullscreen>
                                                    </iframe>
                                                    <div class="ld-media-item-overlay d-flex flex-column text-center align-items-center justify-content-center">
                                                        <div class="ld-media-bg"></div>
                                                        <div class="ld-media-content">
                                                        <span class="ld-media-icon icon-play bordered">
                                                            <span class="ld-media-icon-inner">
                                                                <i class="fa fa-play"></i>
                                                            </span>
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <a href="	https://www.youtube.com/watch?v={{ $song->link }}?autoplay=1&cc_load_policy=1" class="liquid-overlay-link fresco"
                                                       data-fresco-group="ld-1540207915500-298c08e6-2b13">
                                                    </a>
                                                </div>


                                                <header class="liquid-lp-header">
                                                    <h2 class="entry-title liquid-lp-title h4">
                                                        <a href="#" rel="bookmark">
                                                            {{ $song->title }}
                                                        </a>
                                                    </h2>
                                                    <time class="published updated liquid-lp-date text-uppercase ltr-sp-1"
                                                        datetime="2018-08-22T06:56:42+00:00">
                                                        {{ $song->created_at->format('d M Y') }}
                                                    </time>
                                                </header>
                                                <div class="liquid-lp-excerpt entry-summary ">
                                                    {{ $song->description }}
                                                </div>
                                            </article>
                                        </div>
                                        @endforeach


                                    </div>
                                    <div class="page-nav">
                                        <nav aria-label="Page navigation">
                                            <ul class="pagination">
                                                <li><span aria-current="page"
                                                          class="page-numbers current">1</span></li>
                                                <li><a class="page-numbers"
                                                       href="https://original.liquid-themes.com/modern/page/2/?ajaxify=1">2</a>
                                                </li>
                                                <li><a class="next page-numbers"
                                                       href="https://original.liquid-themes.com/modern/page/2/?ajaxify=1"><span
                                                            aria-hidden="true"><i
                                                                class="fa fa-angle-right"></i></span></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <style>
                                    .ld_spacer_621b6432a3c45 {
                                        height: 70px;
                                    }
                                </style>
                                <div class="ld-empty-space ld_spacer_621b6432a3c45"><span
                                        class="liquid_empty_space_inner"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@section('header')
    <div class="titlebar scheme-light text-center" data-parallax="true"
         data-parallax-options='{ "parallaxBG": true }' >
        <livewire:component.header />
        <div class="titlebar-inner">
            <div class="container titlebar-container">
                <div class="row titlebar-container">
                    <div class="titlebar-col col-md-12">
                        <h1 class="tt2">SONGS</h1>
{{--                        <a class="titlebar-scroll-link" href="#content" data-localscroll="true"><i--}}
{{--                                class="fa fa-angle-down"></i></a>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('style')
    <style>
        .titlebar {
            background-color: transparent;
            background-image: url(https://original.liquid-themes.com/wp-content/uploads/2018/09/bg-1-min.jpg);
            background-size: cover;
            background-position: center top;
            height: 200px;
        }
        .titlebar-inner {
            margin-top: -220px;
        }
        .tt2 {
            font-size: 40px;
            color: #fdfdfd7a;
        }
    </style>
@endsection
