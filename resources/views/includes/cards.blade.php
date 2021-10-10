<div class="card-container">
    @foreach ($movies as $movie)
        <div class="card-box">
          <div class="card-title">
            <h4>{{ $movie->title }}</h4>
          </div>
          <div class="info">
            <p>{{ $movie->original_title }}</p>
            <p>Paese: {{ $movie->nationality}}</p>
            <time>Data: {{ $movie->date }}</time>
            <p>Voto: {{ $movie->vote }}</p>
          </div>
        </div>
    @endforeach    
    </div>
