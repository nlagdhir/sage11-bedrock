<section class="services-intro">
  <div class="container">

    <h2>{{ $data['section_title'] ?? '' }}</h2>

    {!! $data['description'] ?? '' !!}

    @if (!empty($data['service_list']))
      <ul>
        @foreach ($data['service_list'] as $service)
          <li>
            <a href="{{ $service['service_link'] }}">
              {{ $service['service_name'] }}
            </a>
          </li>
        @endforeach
      </ul>
    @endif

  </div>
</section>
