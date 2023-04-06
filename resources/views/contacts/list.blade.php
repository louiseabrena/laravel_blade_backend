@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Contacts</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Title</th>
            <th>Url</th>
            <th>Image</th>
            <th>Date added</th>
            <th></th>
            <th></th>
            <th></th>

        </tr>
        @foreach ($contacts as $contact)
            <tr>
                <td>{{$contact->title}}</td>
                <td>{{$contact->url}}</td>
                <td>
                    @if ($contact->image)
                        <img src="{{asset('storage/'.$contact->image)}}" width="200">
                    @endif
                </td>
                <td>{{$contact->created_at->format('M j, Y')}}</td>
                <td><a href="/console/contacts/image/{{$contact->id}}">Image</a></td>
                <td><a href="/console/contacts/edit/{{$contact->id}}">Edit</a></td>
                <td><a href="/console/contacts/delete/{{$contact->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>

    <a href="/console/contacts/add" class="w3-button w3-green">New Contact</a>

</section>

@endsection
