@if($showAside)
  @include('./layout.aside')
@endif

<h1>Contact : {{ $name }}</h1>
<ul>
@foreach ( $data as $val )
  <li>{{ $val }}</li>
@endforeach
</ul>
