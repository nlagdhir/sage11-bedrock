<section class="newsletter">
  <h2>{{ $data['newsletter_title'] ?? '' }}</h2>
  <p>{{ $data['newsletter_description'] ?? '' }}</p>

  {!! do_shortcode($data['form_shortcode'] ?? '') !!}
</section>
