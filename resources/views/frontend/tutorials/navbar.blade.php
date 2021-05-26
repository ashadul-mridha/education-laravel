
@php
    use App\Topices;
     $all_title = Topices::where('topices_type', '=' , 'HtmlgrVLP4G0IE652b33')->get();
@endphp

  <nav id="sidebar">
    <div class="sidebar-header">
      {{-- {{ strtoupper($topice_type->topics_type)}} --}}
        <h3>Learn </h3>
    </div>

    <ul class="list-unstyled components">

        @foreach ($all_title as $title)

          <li>
              <a href="{{ route('tutorials_details',$title->topices_title_slug )}}">{{ $title->topices_title}}</a>
          </li>
          
        @endforeach

    </ul>

</nav>