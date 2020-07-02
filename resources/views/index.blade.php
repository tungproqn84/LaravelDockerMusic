<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="../css/navbar.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<div id="flipkart-navbar">
    <div class="container">
        <div class="row row1">
            <ul class="largenav pull-right">
                <li class="upper-links"><a class="links" href="index">Danh sách nhạc</a></li>
                <li class="upper-links"><a class="links" href="add">Thêm nhạc</a></li>
                <li class="upper-links"><a class="links" href="addalbum">Thêm album</a></li>
                <li class="upper-links">
                    <a class="links" href="">
                        <svg class="" width="16px" height="12px" style="overflow: visible;">
                            <path d="M8.037 17.546c1.487 0 2.417-.93 2.417-2.417H5.62c0 1.486.93 2.415 2.417 2.415m5.315-6.463v-2.97h-.005c-.044-3.266-1.67-5.46-4.337-5.98v-.81C9.01.622 8.436.05 7.735.05 7.033.05 6.46.624 6.46 1.325v.808c-2.667.52-4.294 2.716-4.338 5.98h-.005v2.972l-1.843 1.42v1.376h14.92v-1.375l-1.842-1.42z" fill="#fff"></path>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="container">
	<div class="row">
		<div class="">
            <table class="table table-striped table-condensed">
                  <thead>
                  <tr>
                      <th>ID</th>
                      <th>ID Loại</th>
                      <th>Tên bài hát</th>
                      <th>Tên ca sĩ</th>
                      <th>Hình bài hát</th>
                      <th colspan="2"></th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($mp3 as $m )
                <tr>
                        <td>{{$m->IDSong}}</td>
                        <td>{{$m->IDCategory}}</td>
                        <td>{{$m->NameSong}}</td>
                        <td>{{$m->NameSinger}}</td>
                        <td>
                        <img src="{{$m->ImageSong}}" alt="" width="50" height="50">
                        </td>
                        <td><a href="/api/edit/{{$m->IDSong}}"><button class="btn btn-success">Sửa</button></a></td>
                        <td><a href="/api/delete/{{$m->IDSong}}"><button class="btn btn-danger">Xóa</button></a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
            </div>
	</div>
</div>

