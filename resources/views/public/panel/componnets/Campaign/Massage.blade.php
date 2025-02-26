@component('admin.master1')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">کمپین های تبلیغاتی</h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="row">
        <div class="col-lg-12">
        @include('admin.layaut.errors')
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">کمپین تبلیغات با پیامک</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div id="father">
                     <!-- card -->
                    <div class="card-body">
                    <div class="form-group">
                    <div class="col-sm-10">
                    <label for="inputEmail3" class="col-sm-2 control-label">متن تبلیغ</label>
                    <div class="col-sm-10">
                      <input type="text" name="message" class="form-control" id="inputEmail3" required placeholder="متن را وارد کنید">
                    </div>
                    </div><hr></div>
                    </div>

                    <!-- card -->
                    </div>
                        <!-- <button class="btn btn-sm btn-danger" type="button" id="add_product_image">تصویر جدید</button>
                    </div> -->
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">اجرای تبلیغ</button>
                        <a href="{{ route('Users' ) }}" class="btn btn-default float-left">لغو</a>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
    </div>
@endcomponent