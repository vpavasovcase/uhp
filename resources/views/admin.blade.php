@extends('app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Visitors</div>

                    <div class="card-body">
                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Visitor IP</th>
                                    <th>Number of visits</th>


                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($visitors as $ki => $visitor)

                                    <tr>
                                        <td>{{ $ki }}</td>
                                        <td>{{ $visitor->count() }}</td>


                                    </tr>
                                    <tr class="{{ $ki }}">
                                        <table style="width:100%; background-color:#00000008">
                                            <thead>
                                                <tr>
                                                    <th>Time spent</th>
                                                    <th>Logged in</th>
                                                    <th>Logged out</th>
                                                    <th>User Agent</th>

                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($visitor as $item)

                                                    <tr>

                                                        <td>{{ $item->login->diffInSeconds($item->logout) }} sec</td>
                                                        <td>{{ $item->login }}</td>
                                                        <td>{{ $item->logout }}</td>
                                                        <td>{{ $item->user_agent }}</td>

                                                    </tr>
                                                @endforeach


                                            </tbody>

                                        </table>
                                    </tr>
                                @endforeach


                            </tbody>

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
