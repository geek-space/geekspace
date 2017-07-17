@extends('layouts.master')
@section('content')

    <!-- HEADER -->
    <div id="geekspaceNews" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#geekspaceNews" data-slide-to="0" class="active"></li>
            <li data-target="#geekspaceNews" data-slide-to="1"></li>
            <li data-target="#geekspaceNews" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img style="height: 450px;width: 100%;" src="http://orig07.deviantart.net/c6db/f/2015/110/0/9/matrix_animated_image_2_1__by_shabbygirlblog-d8qhr9j.gif" alt="">
            </div>

            <div class="item">
                <img style="height: 450px;width: 100%;" src="http://cdn.wallpapersafari.com/11/66/K1RHTZ.jpg" alt="">
            </div>

            <div class="item">
                <img style="height: 450px;width: 100%;" src="https://media.giphy.com/media/ko7twHhomhk8E/giphy.gif" alt="">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#geekspaceNews" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#geekspaceNews" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <!-- MAIN CONTENT -->
    <div class="container">
        <!-- SIDEBAR -->
        <aside class="col-lg-2 sidebar">
            <ul class="list-group">
                <li class="list-group-item">PHP</li>
                <li class="list-group-item">JavaScript</li>
                <li class="list-group-item">Java</li>
                <li class="list-group-item">HTML</li>
                <li class="list-group-item">CSS</li>
            </ul>
        </aside>
    
        <!-- POSTS -->
        <div class="col-lg-10">
            <!-- Create Post -->
            <article class="createPost">
                <form>
                    <input class="form-control form-group" type="text" name="" placeholder="Title">
                    <textarea class="form-control form-group createPostDesc" rows="4" cols="100" placeholder="Description"></textarea>
                    <button type="submit" class="btn btn-success pull-right createPostBtn">Post</button>
                </form>
            </article>
    
            <!-- All Posts -->
            <div class="posts">
                <a href="#">
                    <article>
                        <h3>Post</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </article>
                </a>
                <a href="#">
                    <article>
                        <h3>Post</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </article>
                </a>
                <a href="#">
                    <article>
                        <h3>Post</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </article>
                </a>
                <a href="#">
                    <article>
                        <h3>Post</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </article>
                </a>
                <a href="#">
                    <article>
                        <h3>Post</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </article>
                </a>
                <a href="#">
                    <article>
                        <h3>Post</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </article>
                </a>
                <a href="#">
                    <article>
                        <h3>Post</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </article>
                </a>
                <a href="#">
                    <article>
                        <h3>Post</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </article>
                </a>
                <a href="#">
                    <article>
                        <h3>Post</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </article>
                </a>
            </div>
        </div>
    </div>
@stop