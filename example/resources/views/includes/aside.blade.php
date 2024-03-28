@section('aside')
    <div class="aside">
        <h4>Countries</h4>
        <a href="{{ route('add_country') }}" class="nav-link">Add Country</a>
        <a href="{{ route('country_list') }}" class="nav-link">List of Countries</a>
        @show
    </div>
