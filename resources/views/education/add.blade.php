@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Add Education</h2>

    <form method="post" action="/console/education/add" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="institution">Institution:</label>
            <input type="text" name="institution" id="institution" value="{{old('institution')}}" required>
            
            @if ($errors->first('institution'))
                <br>
                <span class="w3-text-red">{{$errors->first('institution')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="certification">Certification:</label>
            <input type="text" name="certification" id="certification" value="{{old('certification')}}" required>
            
            @if ($errors->first('certification'))
                <br>
                <span class="w3-text-red">{{$errors->first('certification')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="description">Description:</label>
            <input type="text" name="description" id="description" value="{{old('description')}}" required>
            
            @if ($errors->first('description'))
                <br>
                <span class="w3-text-red">{{$errors->first('description')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="year">Year:</label>
            <textarea name="year" id="year" required>{{old('year')}}</textarea>

            @if ($errors->first('year'))
                <br>
                <span class="w3-text-red">{{$errors->first('year')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Add Education</button>

    </form>

    <a href="/console/education/list">Back to Education List</a>

</section>

@endsection