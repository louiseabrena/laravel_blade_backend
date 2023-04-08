@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Education</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Institution</th>
            <th>Certification</th>
            <th>Description</th>
            <th>Year</th>
            <th>Image</th>
        </tr>
        <?php foreach($education as $education): ?>
            <tr>
                <td>{{$education->institution}}</td>
                <td>{{$education->certification}}</td>
                <td>{{$education->description}}</td>
                <td>{{$education->year}}</td>
                <td>
                    @if ($education->image)
                        <img src="{{asset('storage/'.$education->image)}}" width="200">
                    @endif
                </td>
                <td><a href="/console/education/image/{{$education->id}}">Image</a></td>
                <td><a href="/console/education/edit/{{$education->id}}">Edit</a></td>
                <td><a href="/console/education/delete/{{$education->id}}">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="/console/education/add" class="w3-button w3-green">New Education</a>

</section>

@endsection