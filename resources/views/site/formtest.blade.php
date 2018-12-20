@extends("site.layouts.default")


@section('title','首页')

@section('content')

    <div class="col-md-offset-2 col-md-8">
        <div class="pannel panel-default">
            <div class="panel-heading">
                <h5>form测试</h5>
            </div>
            <div class="panel-body">
                <form method="post" action="{{route('formtest_store')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>测试1</label>
                        <input type="text" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">提交</button>
                </form>


            </div>
        </div>

    </div>

@stop