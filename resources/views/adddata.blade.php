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
                <li class="upper-links"><a class="links" href="addalbum">Thêm album</a></li>
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
	<div class="form-group">
		<div class="width30 floatL"><label>Tên bài hát</label></div>
		<div class="width70 floatR"><input class="width100 form-control" name="namesong" type="text" size="20"></div>
	</div><br>
	<div class="form-group">
		<div class="width30 floatL"><label>Tên ca sĩ</label></div>
		<div class="width70 floatR"><input class="width100 form-control" name="namesinger"  src=""   type="text"  size="20"></div>
    </div><br>
    		<div class="width30 floatL"><label>Album</label></div>
		<div class="width70 floatR">
            <select name="idalbum" id="">
                    @foreach ($album as $item)
                    <option value="{{$item->IDAlbum}}">{{$item->NameAlbum}}</option>
                @endforeach
            </select>
	</div><br><br>
	<div class="form-group">
		<div class="width30 floatL"><label>Link bài hát</label></div>
		<div class="width70 floatR"><input class="width100 form-control" name="linksong" type="text" size="20"></div>
	</div><br>
	<div class="form-group">
		<div class="width30 floatL"><label>Link ảnh bài hát</label></div>
		<div class="width70 floatR"><input class="width100 form-control" name="imagesong" type="text" size="20" id="image"></div>
	</div><br>
 	</div><br><br><br>

  	<div class="form-group">
  	<div class="row">
          <div class="col-sm-6">
                <button class="btn btn-success width50" type="submit" >Thêm vào</button>
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
