@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <ul id="dashboard">
        <li><a href="/console/projects/list">Manage Projects</a></li>
        <li><a href="/console/skills/list">Manage Skills</a></li>
        <li><a href="/console/education/list">Manage Education</a></li>
        <li><a href="/console/contacts/list">Manage Contacts</a></li>  
        <li><a href="/console/users/list">Manage Users</a></li>
        <li><a href="/console/logout">Log Out</a></li>
    </ul>

</section>

@endsection