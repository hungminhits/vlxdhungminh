@extends('Admin.Admin')
@section('Admin.Content_Admin')
<section class="content">
            <div class="container-fluid">
                <div class="row">            
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2 id="header">
                                        NEW NEWS
                                        {{-- <small>You can edit any columns except header/footer</small> --}}
                                </h2>
                            </div>
                            @if($id==0)
                                <div class="body" >     
                                    <form enctype="multipart/form-data"  id="add-form" method="post" action="{{route('InsertNews')}}">
                                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                 <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label class="id">Title:</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" value="" name="title" class="form-control" style="border-top: 1px solid black;" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label class="image">Image:</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="file" value="" name="image" id="image" class="form-control" style="border-top: 1px solid black;" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label class="id">Description</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <textarea name="description"  id="ckeditor1" class="form-control" style="resize: none; height: 12.7em;outline: none;border-top: 1px solid black;" required=""></textarea>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label class="id">Content:</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <textarea name="content"  id="ckeditor" class="form-control" style="resize: none; height: 12.7em;outline: none;border-top: 1px solid black;" required="" ></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <script>
                                                     CKEDITOR.replace('ckeditor');
                                                      CKEDITOR.replace('ckeditor1');
                                                    </script>
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label class="id">Loại Tin tức</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <select id="category_id_news" name ="category_id_news">
                                                                    @foreach($typenews as $type)
                                                                        <option value="{{$type->id}}">{{$type->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                             <button  type="submit" class="button submit-button btn btn-info btn-lg glyphicon glyphicon-floppy-save saveEdit" style="border-radius: 10px;">  Save</button>
                                             
                                    </form>                 
                                </div>
                            @else
                                <div class="body" >     

                                <form enctype="multipart/form-data"  id="add-form" method="post" action="{{route('UpdateNews',"id=$id")}}">
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                             <div class="row clearfix">
                                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                    <label class="id">Title:</label>
                                                </div>
                                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" value="{{$news[0]->title}}" name="title" class="form-control" style="border-top: 1px solid black;" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                    <label class="image">Image:</label>
                                                </div>
                                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="file" name="image" id="image" class="form-control" style="border-top: 1px solid black;" > <img  width="250px" height="250px;" src="images/news/{{$news[0]->image}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                    <label class="id">Description</label>
                                                </div>
                                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <textarea name="description" id="ckeditor1" class="form-control" style="resize: none; height: 12.7em;outline: none;border-top: 1px solid black;" required="">{{$news[0]->description}}</textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                    <label class="id">Content:</label>
                                                </div>
                                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <textarea name="content"  id="ckeditor"class="form-control" style="resize: none; height: 12.7em;outline: none;border-top: 1px solid black;" required="" >{{$news[0]->content}}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <script>
                                                    var editor = CKEDITOR.replace( 'ckeditor1',{
                                                      filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?Type=Images',
                                                      filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?Type=Flash',
                                                      filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                                      filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                                                        height: '500px',
                                                      toolbar:[
                                                      { name: 'document', items : [ 'Source','-','Templates' ] },
                                                      { name: 'clipboard', items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
                                                      { name: 'editing', items : [ 'Find','Replace','-','SelectAll','-','SpellChecker', 'Scayt' ] },
                                                      { name: 'forms', items : [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton',
                                                            'HiddenField' ] },
                                                      '/',
                                                      { name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },
                                                      { name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','CreateDiv',
                                                      '-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl' ] },
                                                      { name: 'links', items : [ 'Link','Unlink','Anchor' ] },
                                                      { name: 'insert', items : [ 'Image','MediaEmbed','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak','Iframe' ] },
                                                      '/',
                                                      { name: 'styles', items : [ 'Styles','Format','Font','FontSize' ] },
                                                      { name: 'colors', items : [ 'TextColor','BGColor' ] },
                                                      { name: 'tools', items : [ 'Maximize', 'ShowBlocks','-','About' ] }
                                                      ]
                                                    });
                                                        function BrowseServer( startupPath, functionData ){
                                                                var finder = new CKFinder();
                                                                finder.basePath = '../ckfinder/'; //Đường path nơi đặt ckfinder
                                                                finder.startupPath = startupPath; //Đường path hiện sẵn cho user chọn file
                                                                finder.selectActionFunction = SetFileField; // hàm sẽ được gọi khi 1 file được chọn
                                                                finder.selectActionData = functionData; //id của text field cần hiện địa chỉ hình
                                                                finder.selectThumbnailActionFunction = ShowThumbnails; //hàm sẽ được gọi khi 1 file thumnail được chọn
                                                                finder.popup(); // Bật cửa sổ CKFinder
                                                            } //BrowseServer    
                                                            function SetFileField( fileUrl, data ){
                                                                document.getElementById( data["selectActionData"] ).value = fileUrl;            
                                                            }
                                                            function ShowThumbnails( fileUrl, data ){
                                                                var sFileName = this.getSelectedFile().name; // this = CKFinderAPI
                                                                document.getElementById( 'thumbnails' ).innerHTML +=
                                                                '<div class="thumb">' +
                                                                '<img src="' + fileUrl + '" />' +
                                                                '<div class="caption">' +
                                                                '<a href="' + data["fileUrl"] + '" target="_blank">' + sFileName + '</a> (' + data["fileSize"] + 'KB)' +
                                                                '</div>' +
                                                                '</div>';
                                                                document.getElementById( 'preview' ).style.display = "";
                                                                return false; // nếu là true thì ckfinder sẽ tự đóng lại khi 1 file thumnail được chọn

                                                            }

                                                    </script>
                                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                    <label class="id">Loại Tin tức</label>
                                                </div>
                                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <select id="category_id_news" name ="category_id_news">
                                                                @foreach($typenews as $type)
                                                                    <option  id="{{$type->id}}" value="{{$type->id}}">{{$type->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <script type="text/javascript">
                                                            var id={{$news[0]->Category_ID}};
                                                            $('#'+id).attr('selected','selected');
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                         <button  type="submit" class="button submit-button btn btn-info btn-lg glyphicon glyphicon-floppy-save saveEdit" style="border-radius: 10px;">  Save</button>
                                         
                                </form>                 
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
</section>
                                        
@endsection