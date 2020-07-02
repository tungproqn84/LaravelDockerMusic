<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="../css/adddata.css" rel="stylesheet">
<link href="../css/navbar.css" rel="stylesheet">
<script>
        function seturl(){
            var url= document.getElementById("image");
            document.getElementById("urlimage").value("url");
        }
</script>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<div id="flipkart-navbar">
    <div class="container">
        <div class="row row1">
            <ul class="largenav pull-right">
            <li class="upper-links"><a class="links" href="index">Danh sách nhạc</a></li>
                <li class="upper-links"><a class="links" href="add">Thêm nhạc</a></li>
                <li class="upper-links"><a class="links" href="">Thêm album</a></li>
                <li class="upper-links">
                    <a class="links" href="http://clashhacks.in/">
                        <svg class="" width="16px" height="12px" style="overflow: visible;">
                            <path d="M8.037 17.546c1.487 0 2.417-.93 2.417-2.417H5.62c0 1.486.93 2.415 2.417 2.415m5.315-6.463v-2.97h-.005c-.044-3.266-1.67-5.46-4.337-5.98v-.81C9.01.622 8.436.05 7.735.05 7.033.05 6.46.624 6.46 1.325v.808c-2.667.52-4.294 2.716-4.338 5.98h-.005v2.972l-1.843 1.42v1.376h14.92v-1.375l-1.842-1.42z" fill="#fff"></path>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<body class="bg-dark">
	<div class="container bg-dark main">
	<div class="row">
		<div class="col-sm-6 bg-light boxStyle">
			<form name="theform" action="postdata" onSubmit="validate()" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
		<div class="width30 floatL"><label>Album</label></div>
    <div class="width70 floatR">
        <select name="album" id="">
            @foreach ($album as $item)
        <option value="{{$item->IDAlbum}}">{{$item->NameAlbum}}</option>
            @endforeach

        </select>
	</div><br><br>
	<div class="form-group">
		<div class="width30 floatL"><label>Tên bài hát</label></div>
		<div class="width70 floatR"><input class="width100 form-control" name="namesong" type="text" size="20" value="{{$infor->NameSong}}"></div>
	</div><br>
	<div class="form-group">
		<div class="width30 floatL"><label>Tên ca sĩ</label></div>
		<div class="width70 floatR"><input class="width100 form-control" name="namesinger"  src=""   type="text"  size="20"  value="{{$infor->NameSinger}}"></div>
	</div><br>
	<div class="form-group">
		<div class="width30 floatL"><label>Link bài hát</label></div>
		<div class="width70 floatR"><input class="width100 form-control" name="linksong" type="text" size="20"  value="{{$infor->LinkSong}}"></div>
	</div><br>
	<div class="form-group">
		<div class="width30 floatL"><label>Link ảnh bài hát</label></div>
		<div class="width70 floatR"><input class="width100 form-control" name="imagesong" type="text" size="20" id="image"  value="{{$infor->ImageSong}}"></div>
	</div><br>
 	</div><br><br><br>

  	<div class="form-group">
  	<div class="row">
          <div class="col-sm-6">
                <button class="btn btn-success width50" type="submit" >Cập nhật</button>
          </div>
          <div class="col-sm-6">
            <input id="imageset" class="btn btn-danger width50" value="Xem hình" type="button" onclick="seturl()">
      </div>
      </div>
      @if ($success)
    <span>{{$message}}</span>
      @endif
  	</div>
     </form>
		</div>
		<div class="col-sm-2">
            <img src="" alt="" id="urlimage">
        </div>
		<div class="col-sm-1"></div>
	</div>
	</div>
</body>
