@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">              
                <div class="panel-heading">Import Excel File</div>

                <div class="panel-body">
                  @if(session('success'))
                    <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <strong>{{ session('success') }}</strong>
                    </div>
                  @endif
                    <form class="form-horizontal" method="POST" action="{{ route('import') }}" enctype='multipart/form-data'>
                        {{ csrf_field() }}
                        
                        <div class="form-group{{ $errors->has('sheet_type') ? ' has-error' : '' }}">
                            <label for="sheet_type" class="col-md-4 control-label">Sheet type:</label>

                            <div class="col-md-6">
                                <select name="sheet_type" id="" class="form-control" required>
                                  <option value="users">Users</option>
                                  <option value="tests">Tests</option>
                                </select>

                                @if ($errors->has('sheet_type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sheet_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('excel_sheet') ? ' has-error' : '' }}">
                            <label for="excel_sheet" class="col-md-4 control-label">Excel Sheet</label>

                            <div class="col-md-6">
                                <input id="excel_sheet" type="file" name="excel_sheet" required>

                                @if ($errors->has('excel_sheet'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('excel_sheet') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Import
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
