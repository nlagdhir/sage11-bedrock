<section class="hero">
  <div class="container">

    @if (!empty($data['headline']))
      <h1>{{ $data['headline'] }}</h1>
    @endif

    @if (!empty($data['subheading']))
      <div class="wysiwyg">
        {!! $data['subheading'] !!}
      </div>
    @endif

    @if (!empty($data['cta_button']))
      <a href="{{ $data['cta_button']['url'] }}" class="btn">
        {{ $data['cta_button']['title'] }}
      </a>
    @endif

  </div>
</section>
