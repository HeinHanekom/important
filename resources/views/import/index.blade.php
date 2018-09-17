@extends('app')

@section('content')

    <!-- App Logo -->
    <div class="row justify-content-center">
        <img class="logo" src="{{asset('images/logo.png')}}">
    </div>

    <!-- File Uploader -->
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center">&lt; Upload File To Import Here &gt;</h1>
            <div class="form">
                <div class="form-group">
                    <!-- You'll need some type of file input here. -->
                </div>
            </div>
        </div>
    </div>

    <!-- Example Properties List -->
    <div class="row">
        <div class="col-sm-12">
            <h2 class="text-center mt-4">Properties</h2>
            <!-- You'll need to add a search input here. -->
            <table class="table table-striped table-dark">
                <thead>
                <td scope="col">#</td>
                <td scope="col">Property Name</td>
                <td scope="col">Street</td>
                <td scope="col">Suburb</td>
                <td scope="col">City</td>
                <td scope="col">Province</td>
                <td scope="col">Postal Code</td>
                </thead>
                <tbody>
                <tr>
                    <td scope="row">1</td>
                    <td>11 Example Property</td>
                    <td>Testing street</td>
                    <td>Testville</td>
                    <td>Cape Town</td>
                    <td>Western Cape</td>
                    <td>1001</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection