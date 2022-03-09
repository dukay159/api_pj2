@include('layouts.head')
<script src="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<body>
    <!--header-top-starts-->
    <div class="header-top">
        <div class="container">
            <div class="head-main">
                <h1 style="text-align: center;">USER LIST</h1>
            </div>
        </div>
    </div>
    @include('layouts.header')
    <div class="container">
        @if(Session::has('success'))
        <div class="alert alert-success">
            <p>{{Session::get('success')}}</p>
        </div>
        @endif
        @if(Session::has('failure'))
        <div class="alert alert-danger">
            <p>{{Session::get('failure')}}</p>
        </div>
        @endif

        <div style="margin: 10px;" class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <table class="table" id="userlist">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">User Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Address</th>
                                <th scope="col">Email</th>
                                <th scope="col">Company</th>
                                <th scope="col"> </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i = 0;
                            @endphp
                            @foreach($users as $p)
                            @php
                            $i++;
                            $aaa = route('user.show', ['user' => $p->id]);
                            @endphp
                            <tr>
                                <th scope="row">{{$i}}</th>
                                <th scope="row">{{$p->name}}</th>
                                <th scope="row">{{$p->phone}}</th>
                                <th scope="row">{{$p->address}}</th>
                                <th scope="row">{{$p->email}}</th>
                                <th scope="row">{{$p->company}}</th>

                                <td>
                                    <form action="{{ route('user.destroy', ['user' => $p->id]) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <input class="btn btn-danger mb-2 btn-sm" type="submit" value="Delete">
                                    </form>
                                    <br>
                                    <a class="btn btn-warning btn-sm" href="{{ route('user.show', ['user' => $p->id]) }}">Edit</a>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div style="margin: 5px;">
                    {{ $users->appends(request()->all())->links() }}
                </div>
                
            </div>
        </div>
    </div>
    <script>
        $(document).ready( function () {
        $('#userlist').DataTable();
    } );
    </script>
</body>

</html>