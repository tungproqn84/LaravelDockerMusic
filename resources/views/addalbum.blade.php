<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
        <div class="row centered-form">
        <div class="col-xs-6">
        	<div class="panel panel-default">
                <div class="panel-body">
                <form role="form" method="POST" action="postalbum">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="text" name="namealbum" id="first_name" class="form-control input-sm" placeholder="Tên Album">
                                <input type="text" name="namesinger" id="first_name" class="form-control input-sm" placeholder="Tên ca sỹ">
                                <input type="text" name="image" id="first_name" class="form-control input-sm" placeholder="Link ảnh Album">
                            </div>
                        </div>
                    <input type="submit" value="Thêm vào" class="btn btn-info btn-block">
                </form>
            </div>
                </div>
                @if ($success)
                <span>{{$message}}</span>
                  @endif
    		</div>
    	</div>
    </div>
