@include('Frontend.header')

<body>
    <div class="app dk" id="app">
        <!-- ############ LAYOUT START-->
        <!-- aside -->

        <!-- fluid app aside -->
        @include('Frontend.lognav')
        <!-- / -->
        <!-- content -->
        <div id="content" class="app-content white bg box-shadow-z2" role="main">
            <div class="app-header hidden-lg-up white lt box-shadow-z1">
                <div class="navbar">
                    <!-- brand -->
                    @include('Frontend.brand')
                    <!-- / brand -->
                    <!-- nabar right -->
                    <ul class="nav navbar-nav pull-right">
                        <li class="nav-item">
                            <!-- Open side - Naviation on mobile -->
                            <a data-toggle="modal" data-target="#aside" class="nav-link">
                                <i class="material-icons">menu</i>
                            </a>
                            <!-- / -->
                        </li>
                    </ul>
                    <!-- / navbar right -->
                </div>
            </div>
            <div class="app-footer app-player grey bg">
                <div class="playlist" style="width:100%"></div>
            </div>
            <div class="page-content">
                <div class="row-col">
                    <div class="col">
                        @php($i = 1)
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>SL.No</th>
                                    <th>Song Name</th>
                                    <th>Category</th>
                                    <th>Album Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($songs as $song)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $song->song_name }}</td>
                                        <td>{{ $song->category }}</td>
                                        <td>{{ $song->album_id }}</td>
                                        <td>
                                            <a class="btn btn-primary" href="{{url('edit/song/'.$song->id)}}">Edit</a>
                                            <a class="btn btn-danger" href="{{url('delete/song/'.$song->id)}}">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col">
                        <form action="{{ route('create.song') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="song_name" placeholder="Song Name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Example file input</label>
                                <input type="file" class="form-control-file" name="song" id="exampleFormControlFile1">
                            </div>
                            <div class="form-group">
                                <select name="category" class="form-control" required>
                                    <option>Choose Category</option>
                                    <option value="hip hop">Hip Hop</option>
                                    <option value="rap">Rap</option>
                                    <option value="classic">Classic</option>
                                    <option value="pop">Pop</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="album_id" class="form-control" required>
                                    <option value="" selected disabled hidden>Choose Album</option>
                                    @foreach ($albums as $album)
                                        <option value="{{$album->id}}">{{$album->album_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="submit" value="Enter" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@include('Frontend.scripts')

</html>
