@extends('layouts.admin-master') 
@section('list-clients')
<ul>
    <h2 class="subtitle is-3 has-text-weight-light">Class A</h2>
    <div id="A_portoflios" class="columns is-multiline">
        @foreach ($clientsA as $cA)
        
        <?php $access_css = $cA->access_level + $cA->form_level; ?>

        <div class="column is-one-quarter">
                <span class="has-text-weight-bold">Name:</span> {{ $cA->subscriber_name  }} <br>
                <span class="has-text-weight-bold">Email:</span> {{ $cA->email }} <br>
                <a href="/{{ $cA->user_id }}/portfolio">Portfolio</a>
                <hr>
            </div>
        @endforeach
    </div>

    <hr>
    
    <h2 class="subtitle is-3 has-text-weight-light">Class B</h2>
    <div id="B_portfolios" class="columns is-multiline">
        @foreach ($clientsB as $cB)

        <?php $access_css = $cB->access_level + $cB->form_level; ?>

        <div class="column is-one-quarter">
            <span class="has-text-weight-bold">Name:</span> {{ $cB->subscriber_name  }}<br>
            <span class="has-text-weight-bold">Email:</span> {{ $cB->email }}<br>
            <a href="/{{ $cB->user_id }}/portfolio" class="">Portfolio</a>
            <hr>
        </div>
    @endforeach
    </div>
    
    <hr>

    <h2 class="subtitle is-3 has-text-weight-light">Potential Clients</h2>
    <div id="PC_portfolios" class="columns is-multiline">
        @foreach ($clientsPC as $cPC)

        <?php $access_css = $cPC->access_level + $cPC->form_level; ?>

        <div class="column is-one-quarter">
            <span class="has-text-weight-bold">Name:</span> {{ $cPC->subscriber_name }} <br>
            <span class="has-text-weight-bold">Email:</span> {{ $cPC->email }} <br>
            <a href="/{{ $cPC->user_id }}/portfolio" class="">Portfolio</a>
            <hr>
        </div>
    @endforeach
    </div>


    </ul>
@endsection
 
@section('new-client-ayy')

<form action="/admin" method="post">
    @csrf
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label">Full Name</label>
        </div>
        <div class="field-body">
            <div class="field">
                <p class="control is-expanded has-icons-left">
                    <input class="input " type="text" name="name" placeholder="Francisco Wagner">
                    <span class="icon is-small is-left">
                        <i class="fas fa-user"></i>
                    </span>
                </p>
            </div>
        </div>
    </div>

    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label">Email</label>
        </div>
        <div class="field-body">
            <div class="field">
                <p class="control is-expanded has-icons-left has-icons-right">
                    <input class="input " name="email" type="email" placeholder="ameriichinose@yabai.jp">
                    <span class="icon is-small is-left">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas fa-check"></i>
                    </span>
                </p>
                <i><p class="help">confirmation email will be sent to the client's email</p></i>
            </div>
        </div>
    </div>

    <div class="field is-horizontal">
        <div class="field-label">
            <!-- Left empty for spacing -->
        </div>
        <div class="field-body">
            {{-- group might make you think it's more than one item but we need it to align btn right even though the 'group' consists
            of merely 1 --}}
            <div class="field is-grouped is-grouped-right">
                <div class="control">
                    <button class="button is-warning">
                        <span class="icon is-medium">
                            <i class="fas fa-user-plus"></i>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

@section('management-comment')
<div class="columns is-centered is-mobile">
    <div class="column">
        <form action="/admin/editMC" method="post">
            @csrf
            <div class="columns is-mobile">
                <div class="column">
                    <div class="field">
                        <h1 class="title"><span class="le-decor"> Class A</span></h1>
                        <div class="control">
                            <textarea class="textarea is-warning is-medium" name="management_comment_A" rows="4" placeholder="New comment for class A from management">{{$fundInfoA[0]->management_comment}}</textarea>
                        </div>
                    </div>  
                </div>
                <div class="column">
                    <div class="field">
                        <h1 class="title"><span class="le-decor">Class B</span></h1>
                        <div class="control">
                            <textarea class="textarea is-warning is-medium" name="management_comment_B" rows="4" placeholder="New comment for class B from management">{{$fundInfoB[0]->management_comment}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="user_id" value="1">
            <input type="hidden" name="file_type" value="A">
            <div class="has-text-centered" style="margin-top: 10px;">
                <button type="reset" class="button">Cancel</button>
                <button type="submit" class="button is-warning">Submit</button>
            </div>
        </form>
    </div>
</div>


@endsection

@section('upload-to-class')
<div class="columns is-centered">

    <div class="column is-narrow">
        <form action="/fileupload" method="post" enctype="multipart/form-data">
            @csrf
            <div class="field">
                <div class="file is-warning has-name is-boxed">
                    <label class="file-label">
                        <input class="file-input" type="file" name="filelolol" id="file-upload">
                        <span class="file-cta">
                            <span class="file-icon">
                            <i class="fas fa-cloud-upload-alt"></i>
                            </span>
                            <span class="file-label">
                            Upload Class A File
                            </span>
                        </span>
                        <span class="file-name" id="filename">
                            
                        </span>
                        </label>
                </div>
            </div>
            <input type="hidden" name="user_id" value="1">
            <input type="hidden" name="file_type" value="A">
            <div class="has-text-centered" style="margin-top: 10px;">
                <button type="submit" class="button is-warning">Submit</button>
            </div>
            <script>
                var input = document.getElementById( 'file-upload' );
                        var infoArea = document.getElementById( 'filename' );
                        input.addEventListener( 'change', showFileName );
                
                        function showFileName( event ) {
                            var input = event.srcElement;
                            var fileName = input.files[0].name;
                            infoArea.textContent = fileName;
                        }
            </script>

        </form>
    </div>




    <br><br><br>

    <div class="column is-narrow">
        <form action="/fileupload" method="post" enctype="multipart/form-data">
            @csrf
            <div class="field">
                <div class="file is-warning has-name is-boxed">
                    <label class="file-label">
                        <input class="file-input" type="file" name="filelolol" id="file-upload2">
                        <span class="file-cta">
                            <span class="file-icon">
                            <i class="fas fa-cloud-upload-alt"></i>
                            </span>
                            <span class="file-label">
                            Upload Class B File
                            </span>
                        </span>
                        <span class="file-name" id="filename2">
                            
                        </span>
                        </label>
                </div>
            </div>
            <input type="hidden" name="user_id" value="1">
            <input type="hidden" name="file_type" value="B">
            <div class="has-text-centered" style="margin-top: 10px;">
                <button type="submit" class="button is-warning">Submit</button>
            </div>
            <script>
                var input2 = document.getElementById( 'file-upload2' );
                var infoArea2 = document.getElementById( 'filename2' );
                input2.addEventListener( 'change', showFileName2 );
        
                function showFileName2( event ) {
                    var input2 = event.srcElement;
                    var fileName2 = input2.files[0].name;
                    infoArea2.textContent = fileName2;
                }
            </script>
        </form>
    </div>
    <br><br><br>

    <div class="column is-narrow">
        <form action="/fileupload" method="post" enctype="multipart/form-data">
            @csrf
            <div class="field">
                <div class="file is-warning has-name is-boxed">
                    <label class="file-label">
                           <input class="file-input" type="file" name="filelolol" id="file-upload3">
                        <span class="file-cta">
                            <span class="file-icon">
                            <i class="fas fa-cloud-upload-alt"></i>
                            </span>
                            <span class="file-label">
                            Upload by Both Class
                            </span>
                        </span>
                        <span class="file-name" id="filename3">
                            
                        </span>
                        </label>
                </div>
            </div>
            <input type="hidden" name="user_id" value="1">
            <input type="hidden" name="file_type" value="AB">
            <div class="has-text-centered" style="margin-top: 10px;">
                <button type="submit" class="button is-warning">Submit</button>
            </div>
            <script>
                var input3 = document.getElementById( 'file-upload3' );
                var infoArea3 = document.getElementById( 'filename3' );
                input3.addEventListener( 'change', showFileName3 );
        
                function showFileName3( event ) {
                    var input3 = event.srcElement;
                    var fileName3 = input3.files[0].name;
                    infoArea3.textContent = fileName3;
                }
            </script>
        </form>

    </div>
    <br><br><br>


    <div class="column is-narrow">
        <form action="/fileupload" method="post" enctype="multipart/form-data">
            @csrf
            <div class="field">
                <div class="file is-warning has-name is-boxed">
                    <label class="file-label">
                        <input class="file-input" type="file" name="filelolol" id="file-upload4">
                        <span class="file-cta">
                            <span class="file-label">
                                Upload Graph
                            </span>
                            <select name="selection">
                                <option value="A">A</option>
                                <option value="B">B</option>
                            </select>
                        </span>
                        <span class="file-name" id="filename4">
                            
                        </span>
                        </label>
                </div>
            </div>
            <input type="hidden" name="user_id" value="1">
            <input type="hidden" name="file_type" value="Graph">
            <div class="has-text-centered" style="margin-top: 10px;">
                <button type="submit" class="button is-warning">Submit</button>
            </div>
            <script>
                var input4 = document.getElementById( 'file-upload4' );
                var infoArea4 = document.getElementById( 'filename4' );
                input4.addEventListener( 'change', showFileName4 );
        
                function showFileName4( event ) {
                    var input4 = event.srcElement;
                    var fileName4 = input4.files[0].name;
                    infoArea4.textContent = fileName4;
                }
            </script>
        </form>
    </div>

</div>
@endsection
 
@section('show-files-uploaded')
    <ul>
        <h2 class="subtitle is-3 has-text-weight-light">Class A</h2>
        <div class="columns is-multiline">
            @foreach ($classAFiles as $cA)
            <div class="column is-one-quarter">
                {{ $cA->filename }} <br>
                <a href="portfolio/{{ $cA->file_type}}/{{ $cA->filename }}" class="button is-warning">Download</a>
                
                <div class="dropdown is-hoverable">
                    <div class="dropdown-trigger">
                        <button class="button" aria-haspopup="true" aria-controls="dropdown-menu4">
                            
                            <span class="icon is-small">
                                <i class="fas fa-angle-down" aria-hidden="true"></i>
                            </span>
                        </button>
                    </div>
                    <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                        <div class="dropdown-content">
                            <div class="dropdown-item">
                                edit
                            </div>
                            <div class="dropdown-item">
                                
                                <form method="post" action="/admin/files/A/{{$cA->filename}}">
                                    @csrf
                                    @method('delete')
                                    
                                    <div class="control">
                                        <button type="submit" class="button is-danger">
                                            delete&nbsp;&nbsp;
                                            <span class="icon is-small">
                                                <i class="fas fa-trash-alt"></i>
                                            </span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            @endforeach
        </div>

        <hr>

        <h2 class="subtitle is-3 has-text-weight-light">Class B</h2>
        <div class="columns is-multiline">
            @foreach ($classBFiles as $cB)
            <div class="column is-one-quarter">
                {{ $cB->filename }} <br>
                <a href="/1/portfolio/{{ $cB->file_type }}/{{ $cB->filename }}" class="button is-warning">Download</a>
                <div class="dropdown is-hoverable">
                    <div class="dropdown-trigger">
                        <button class="button" aria-haspopup="true" aria-controls="dropdown-menu4">
                            
                            <span class="icon is-small">
                                <i class="fas fa-angle-down" aria-hidden="true"></i>
                            </span>
                        </button>
                    </div>
                    <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                        <div class="dropdown-content">
                            <div class="dropdown-item">
                                edit
                            </div>
                            <div class="dropdown-item">
                                
                                <form method="post" action="/admin/files/B/{{$cB->filename}}">
                                    @csrf
                                    @method('delete')
                                    
                                    <div class="control">
                                        <button type="submit" class="button is-danger">
                                            delete&nbsp;&nbsp;
                                            <span class="icon is-small">
                                                <i class="fas fa-trash-alt"></i>
                                            </span>
                                        </button>
                                    </div                                    
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            @endforeach
        </div>
        <hr>
        <h2 class="subtitle is-3 has-text-weight-light">Class AB</h2>
        <div class="columns is-multiline">
            @foreach ($classABFiles as $cAB)
            <div class="column is-one-quarter">
                {{ $cAB->filename }} <br>
                <a href="portfolio/{{ $cAB->file_type}}/{{ $cAB->filename }}" class="button is-warning">Download</a>
                <div class="dropdown is-hoverable">
                    <div class="dropdown-trigger">
                        <button class="button" aria-haspopup="true" aria-controls="dropdown-menu4">
                            
                            <span class="icon is-small">
                                <i class="fas fa-angle-down" aria-hidden="true"></i>
                            </span>
                        </button>
                    </div>
                    <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                        <div class="dropdown-content">
                            <div class="dropdown-item">
                                edit
                            </div>
                            <div class="dropdown-item">
                                
                                <form method="post" action="/admin/files/AB/{{$cAB->filename}}">
                                    @csrf
                                    @method('delete')
                                    
                                    <div class="control">
                                        <button type="submit" class="button is-danger">
                                            delete&nbsp;&nbsp;
                                            <span class="icon is-small">
                                                <i class="fas fa-trash-alt"></i>
                                            </span>
                                        </button>
                                    </div> 
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            @endforeach
        </div>
    </ul>

@endsection


 {{-- old one, keeping for legacy purposes (copy some code over in the future), but not using it --}} 
@section('new-client')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="/register2">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}"
                                    required autofocus> @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span> @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"
                                    required> @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                    required> @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span> @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                {{-- {{ __('Register') }} --}}
                                Register
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