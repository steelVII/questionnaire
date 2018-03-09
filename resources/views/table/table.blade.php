@extends ('master')

@section('content')

<section class="hero is-info">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                Questionnaire
            </h1>
            <h2 class="subtitle">
                Client's Info
            </h2>
        </div>
    </div>
</section>

<section class="section">
    <div class="content">

                <table class="table is-fullwidth is-hoverable is-narrow is-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Organization</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($questionnaires as $info)
                            <tr>
                                <td>{{ $info->name }}</td>
                                <td>{{ $info->organization }}</td>
                                <td>{{ $info->email }}</td>
                                <td>{{ $info->created_at }}</td>
                            <td><a href="{{ route('single',['id' => $info->id]) }}" class="button is-primary is-outlined">View</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
    </div>
</section>

@endsection