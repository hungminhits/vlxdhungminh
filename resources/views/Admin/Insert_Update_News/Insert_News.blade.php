@extends('Admin.Admin')
@section('Admin.Content_Admin')
<table border="1" class="table table-striped table-nonfluid" align="center" id="product_table" >
                                        {{-- Edit Product --}}
                                        <div id="editRowPro" class="form">
                                            <p class="form_title">Edit Product</p>
                                            <form id="formEdi" enctype="multipart/form-data" method="post">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <div class="row clearfix">
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" value="" name="id" class="form-control" readonly >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix" >
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label class="title">Title</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" name="edit_name" id="edit_name" value="" required="" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label class="description">Description</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" value="" name="edit_des" id="edit_description" required="" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label class="content">Content</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="number" value="" name="edit_unit_price" id="edit_unit_price" required="" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label class="image">Image</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="file" value=" name="edit_image" id="edit_image" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix" id="rowType">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label class="type">Category_News</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <select>
                                                                	<option>a</option>
                                                                	<option>a</option>
                                                                	<option>a</option>
                                                                	<option>a</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-offset-5 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                                    <button  type="button" onclick="saveEdit();" class="button submit-button btn btn-info btn-lg glyphicon glyphicon-floppy-save saveEdit" style="border-radius: 10px;">  Save</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        {{-- End Edit --}}
                                   
                                

                                </tbody>    
                            </table>
@endsection