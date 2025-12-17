@if (!empty($pageSections))
  @foreach ($pageSections as $section) 

    @php
      $layout = $section['acf_fc_layout'];
    @endphp

    @includeIf('partials.sections.' . $layout, [
      'data' => $section
    ])

  @endforeach
@endif
