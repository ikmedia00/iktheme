<div class="col-xs-6 col-md-4 sidebar" id="sidebar">
    <div class="sidebar-title for-tablet">Sidebar</div>
    <aside>
        <div class="aside-body">
            <form class="newsletter">
                <div class="icon">
                    <i class="ion-ios-email-outline"></i>
                    <h1>Newsletter</h1>
                </div>
                <div class="input-group">
                    <input type="email" class="form-control email" placeholder="Your mail">
                    <div class="input-group-btn">
                        <button class="btn btn-primary"><i class="ion-paper-airplane"></i></button>
                    </div>
                </div>
                <p>By subscribing you will receive new articles in your email.</p>
            </form>
        </div>
    </aside>
    <aside>
        <h1 class="aside-title">Popular <a href="#" class="all badge badge-secondary">See All <i class="ion-ios-arrow-right"></i></a></h1>
        <div class="aside-body">
            <article class="article-mini">
                <div class="inner">
                    <figure>
                        <a href="">
                            <img src="{{ asset('public/beranda/images/news/img07.jpg') }}" alt="">
                        </a>
                    </figure>
                    <div class="padding">
                        <h1><a href="">Fusce ullamcorper elit at felis cursus suscipit</a></h1>
                    </div>
                </div>
            </article>
            <article class="article-mini">
                <div class="inner">
                    <figure>
                        <a href="">
                            <img src="{{ asset('public/beranda/images/news/img14.jpg') }}" alt="">
                        </a>
                    </figure>
                    <div class="padding">
                        <h1><a href="">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
                    </div>
                </div>
            </article>
            <article class="article-mini">
                <div class="inner">
                    <figure>
                        <a href="">
                            <img src="{{ asset('public/beranda/images/news/img09.jpg') }}" alt="">
                        </a>
                    </figure>
                    <div class="padding">
                        <h1><a href="">Aliquam et metus convallis tincidunt velit ut rhoncus dolor</a></h1>
                    </div>
                </div>
            </article>
        </div>
    </aside>
    <aside>
        <h1 class="title-col">Trending Tags</h1>
        <div class="body-col">
            <ol class="tags-list">
                <li><a href="#">HTML5</a></li>
                <li><a href="#">CSS3</a></li>
                <li><a href="#">JavaScript</a></li>
                <li><a href="#">jQuery</a></li>
                <li><a href="#">Bootstrap</a></li>
                <li><a href="#">Responsive</a></li>
            </ol>
        </div>
    </aside>

    <aside>
        <h1 class="aside-title">Videos
            <div class="carousel-nav" id="video-list-nav">
                <div class="prev"><i class="ion-ios-arrow-left"></i></div>
                <div class="next"><i class="ion-ios-arrow-right"></i></div>
            </div>
        </h1>
        <div class="aside-body">
            <ul class="video-list" data-youtube='"carousel":true, "nav": "#video-list-nav"'>
                <li><a data-youtube-id="JvN6-bAsNJQ&t=17s" data-action="magnific"></a></li>
                <li><a data-youtube-id="9cVJr3eQfXc" data-action="magnific"></a></li>
                <li><a data-youtube-id="DnGdoEa1tPg" data-action="magnific"></a></li>
            </ul>
        </div>
    </aside>
    
    <aside>
        <h1 class="aside-title">
            Hot News
            <div class="carousel-nav" id="hot-news-nav">
                <div class="prev">
                    <i class="ion-ios-arrow-left"></i>
                </div>
                <div class="next">
                    <i class="ion-ios-arrow-right"></i>
                </div>
            </div>
        </h1>
        <div class="aside-body">
            <div class="body-col vertical-slider" data-max="4" data-nav="#hot-news-nav" data-item="article">
                <article class="article-mini">
                    <div class="inner">
                        <figure>
                            <a href="">
                                <img src="{{ asset('public/beranda/images/news/img09.jpg') }}" alt="">
                            </a>
                        </figure>
                        <div class="padding">
                            <h1><a href="">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
                            <div class="detail">
                                <div class="category"><a href="">Lifestyle</a></div>
                                <div class="time">December 22, 2016</div>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="article-mini">
                    <div class="inner">
                        <figure>
                            <a href="">
                                <img src="{{ asset('public/beranda/images/news/img01.jpg') }}" alt="">
                            </a>
                        </figure>
                        <div class="padding">
                            <h1><a href="">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
                            <div class="detail">
                                <div class="category"><a href="">Lifestyle</a></div>
                                <div class="time">December 22, 2016</div>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="article-mini">
                    <div class="inner">
                        <figure>
                            <a href="">
                                <img src="{{ asset('public/beranda/images/news/img05.jpg') }}" alt="">
                            </a>
                        </figure>
                        <div class="padding">
                            <h1><a href="">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
                            <div class="detail">
                                <div class="category"><a href="">Lifestyle</a></div>
                                <div class="time">December 22, 2016</div>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="article-mini">
                    <div class="inner">
                        <figure>
                            <a href="">
                                <img src="{{ asset('public/beranda/images/news/img02.jpg') }}" alt="">
                            </a>
                        </figure>
                        <div class="padding">
                            <h1><a href="">Fusce ullamcorper elit at felis cursus suscipit</a></h1>
                            <div class="detail">
                                <div class="category"><a href="">Travel</a></div>
                                <div class="time">December 21, 2016</div>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="article-mini">
                    <div class="inner">
                        <figure>
                            <a href="">
                                <img src="{{ asset('public/beranda/images/news/img13.jpg') }}" alt="">
                            </a>
                        </figure>
                        <div class="padding">
                            <h1><a href="">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
                            <div class="detail">
                                <div class="category"><a href="">International</a></div>
                                <div class="time">December 20, 2016</div>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="article-mini">
                    <div class="inner">
                        <figure>
                            <a href="">
                                <img src="{{ asset('public/beranda/images/news/img08.jpg') }}" alt="">
                            </a>
                        </figure>
                        <div class="padding">
                            <h1><a href="">Aliquam et metus convallis tincidunt velit ut rhoncus dolor</a></h1>
                            <div class="detail">
                                <div class="category"><a href="">Computer</a></div>
                                <div class="time">December 19, 2016</div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </aside>
</div>

