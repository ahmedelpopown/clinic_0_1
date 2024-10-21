@extends("web.admin.app")
@section("title","doc")


 @section('content')
 
      <div class="container">
        <nav
          style="--bs-breadcrumb-divider: '>'"
          aria-label="breadcrumb"
          class="fw-bold my-4 h4"
        >
 
        </nav>
        <div class="d-flex flex-column gap-3 details-card doctor-details">
          <div class="details d-flex gap-2 align-items-center">
            <img
              src="../assets/images/major.jpg"
              alt="doctor"
              class="img-fluid rounded-circle"
              height="150"
              width="150"
            />
            <div class="details-info d-flex flex-column gap-3">
              <h6 class="card-title fw-bold">
                <!-- doctor major and more info about the doctor in summary -->
                <img src="{{App\Helpers\FileHelper::git_file_url($doctor->image)}}" alt="" width="400px" style="border-radius: 50%;height: 10rem; width: 10rem; " >
                <h4 class="card-title fw-bold"> Major Name :{{$doctor->name}}</h4>
                <h4 class="card-title fw-bold"> Major Name :{{$doctor->id_major}}</h4>
              </h6>
            </div>
          </div>
          <hr />
  
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