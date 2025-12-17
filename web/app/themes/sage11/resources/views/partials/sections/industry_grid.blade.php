<section class="industry-grid">
  <div class="grid">

    @foreach ($data['industries'] ?? [] as $industry)
      <div class="item">
        <h3>{{ $industry['industry_name'] }}</h3>
        <p>{{ $industry['industry_description'] }}</p>
      </div>
    @endforeach

  </div>
</section>
