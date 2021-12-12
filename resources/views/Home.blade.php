@extends('layouts.main')
@section('container')
{{-- konten grid --}}
  <div class="container mx-auto px-4 pt-16">
    <div class="popular-movies">
      <h2 class="uppercase tracking-wider text-yellow-600 text-2xl font-bold">Popular movies</h2>
      <div class="grid id-cols-1 justify-center sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-8">
        
        <div class="card mt-8 box_movie">
          <a href="#">
            <img src="img/parasite.jpg" class="poster" alt="">
            <div class="middle place-content-start md:break-all">
                <div class="card-title">
                  <h2 class="font-bold">Parasite</h2>
                  <h6 class="text-lg">Sep 30, 2021</h6>
                </div>  
                <h6 class="text-medium"><i class="fas fa-star fa-xs"></i> 80% | 1h 49m</h6>
                <div class="text-sm break-normal">
                  Adventure, Animation, Comedy, Family, Fantasy, Music
                </div>
            </div>
          </a>
        </div>

        <div class="card mt-8 box_movie">
          <a href="#">
            <img src="https://awsimages.detik.net.id/community/media/visual/2021/09/23/shang-chi-and-the-legend-of-the-ten-rings.jpeg?w=700&q=90" class="poster" alt="">
            <div class="middle place-content-start md:break-all">
                <div class="card-title">
                  <h2 class="font-bold">Parasite</h2>
                  <h6 class="text-lg">Sep 30, 2021</h6>
                </div>  
                <h6 class="text-medium"><i class="fas fa-star fa-xs"></i> 80% | 1h 49m</h6>
                <div class="text-sm break-normal">
                  Adventure, Animation, Comedy, Family, Fantasy, Music
                </div>
            </div>
          </a>
        </div>

        <div class="card mt-8 box_movie">
          <a href="#">
            <img src="https://upload.wikimedia.org/wikipedia/id/c/c3/Harry_Potter_and_the_Sorcerer%27s_Stone_Poster.jpg" class="poster" alt="">
            <div class="middle place-content-start md:break-all">
                <div class="card-title">
                  <h2 class="font-bold">Parasite</h2>
                  <h6 class="text-lg">Sep 30, 2021</h6>
                </div>  
                <h6 class="text-medium"><i class="fas fa-star fa-xs"></i> 80% | 1h 49m</h6>
                <div class="text-sm break-normal">
                  Adventure, Animation, Comedy, Family, Fantasy, Music
                </div>
            </div>
          </a>
        </div>
        
        <div class="card mt-8 box_movie">
          <a href="#">
            <img src="img/parasite.jpg" class="poster" alt="">
            <div class="middle place-content-start md:break-all">
                <div class="card-title">
                  <h2 class="font-bold">Parasite</h2>
                  <h6 class="text-lg">Sep 30, 2021</h6>
                </div>  
                <h6 class="text-medium"><i class="fas fa-star fa-xs"></i> 80% | 1h 49m</h6>
                <div class="text-sm break-normal">
                  Adventure, Animation, Comedy, Family, Fantasy, Music
                </div>
            </div>
          </a>
        </div>

        <div class="card mt-8 box_movie">
          <a href="#">
            <img src="https://awsimages.detik.net.id/community/media/visual/2021/09/23/shang-chi-and-the-legend-of-the-ten-rings.jpeg?w=700&q=90" class="poster" alt="">
            <div class="middle place-content-start md:break-all">
                <div class="card-title">
                  <h2 class="font-bold">Parasite</h2>
                  <h6 class="text-lg">Sep 30, 2021</h6>
                </div>  
                <h6 class="text-medium"><i class="fas fa-star fa-xs"></i> 80% | 1h 49m</h6>
                <div class="text-sm break-normal">
                  Adventure, Animation, Comedy, Family, Fantasy, Music
                </div>
            </div>
          </a>
        </div>

        <div class="card mt-8 box_movie">
          <a href="#">
            <img src="https://upload.wikimedia.org/wikipedia/id/c/c3/Harry_Potter_and_the_Sorcerer%27s_Stone_Poster.jpg" class="poster" alt="">
            <div class="middle place-content-start md:break-all">
                <div class="card-title">
                  <h2 class="font-bold">Parasite</h2>
                  <h6 class="text-lg">Sep 30, 2021</h6>
                </div>  
                <h6 class="text-medium"><i class="fas fa-star fa-xs"></i> 80% | 1h 49m</h6>
                <div class="text-sm break-normal">
                  Adventure, Animation, Comedy, Family, Fantasy, Music
                </div>
            </div>
          </a>
        </div>

      </div>
    </div>
  </div>
{{-- endkonten grid --}}

@endsection