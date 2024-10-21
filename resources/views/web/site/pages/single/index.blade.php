@extends("web.site.app")
@section("title", "doc")


@section('content')

<div class="container">
  <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb" class="fw-bold my-4 h4">
    <ol class="breadcrumb justify-content-center">
      <li class="breadcrumb-item">
        <a class="text-decoration-none" href="../index.html">Home</a>
      </li>
      <li class="breadcrumb-item">
        <a class="text-decoration-none" href="./index.html">doctors</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">
        doctor name
      </li>
    </ol>
  </nav>
  <div class="d-flex flex-column gap-3 details-card doctor-details">
    <div class="details d-flex gap-2 align-items-center">
      <img src="../assets/images/major.jpg" alt="doctor" class="img-fluid rounded-circle" height="150" width="150" />
      <div class="details-info d-flex flex-column gap-3">
        <h4 class="card-title fw-bold">Doctor name</h4>
        <h6 class="card-title fw-bold">
          doctor major and more info about the doctor in summary
        </h6>
      </div>
    </div>
    <hr />
     
    <form class="form" action="{{route('reservation.store' ,['id_doctor'=>$value->id]    )}}" method="POST">
       
    @csrf

    @error('name')
    {{$message}}
    @enderror
    @error('phone')
    {{$message}}
    @enderror
    @error('email')
    {{$message}}
    @enderror
 

     
      <div class="form-items">
        <div class="mb-3">
          <label class="form-label required-label"  for="name">Name</label>
          <input type="text" class="form-control"name="name" id="name"   />
        </div>
        <div class="mb-3">
          <label class="form-label required-label" for="phone">Phone</label>
          <input type="text" class="form-control" name="Phone" id="phone"  />
        </div>
        <div class="mb-3">
          <label class="form-label required-label" name="name" for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email"   />
        </div>
      </div>
      <button type="submit" class="btn btn-primary">
        Confirm Booking
      </button>
    </form>
  </div>
</div>
@endsection




@push("singleD")
  <script>
    const stars = document.querySelectorAll(".star");

    stars.forEach((star, index) => {
    star.addEventListener("click", () => {
      const isActive = star.classList.contains("active");
      if (isActive) {
      star.classList.remove("active");
      } else {
      star.classList.add("active");
      }
      for (let i = 0; i < index; i++) {
      stars[i].classList.add("active");
      }
      for (let i = index + 1; i < stars.length; i++) {
      stars[i].classList.remove("active");
      }
    });
    });
  </script>
@endpush