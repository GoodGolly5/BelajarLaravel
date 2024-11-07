<div class="col">
  <div class="row">
    <div class="col-lg-4 col-6">
      <img class="card-image img-fluid" src="{{ asset('asset/linus.png') }}" alt="course_image">
    </div>
    <div class="card-fill col-lg-8 col-6 d-flex flex-column justify-content-between">
      <div>
        <h1>{{ $course->NamaKursus }}</h1>
        <p class="card-time">{{ $course->created_at }}</p>
        <p class="card-desc">{{ $course->RingkasanDeskripsi }}</p>
      </div>
      <div class="d-flex justify-content-end">
        <a href="/readmore/{{ $course->NamaKursus }}/{{ $course->KontenCourse }}" class="btn btn-primary">Read More...</a>
      </div>
    </div>
  </div>
</div>