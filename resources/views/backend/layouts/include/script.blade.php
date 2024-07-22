 <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
 <script src="{{ asset('backend') }}/lib/chart/chart.min.js"></script>
 <script src="{{ asset('backend') }}/lib/easing/easing.min.js"></script>
 <script src="{{ asset('backend') }}/lib/waypoints/waypoints.min.js"></script>
 <script src="{{ asset('backend') }}/lib/owlcarousel/owl.carousel.min.js"></script>
 <script src="{{ asset('backend') }}/lib/tempusdominus/js/moment.min.js"></script>
 <script src="{{ asset('backend') }}/lib/tempusdominus/js/moment-timezone.min.js"></script>
 <script src="{{ asset('backend') }}/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

 <!-- Template Javascript -->
 <script src="{{ asset('backend') }}/js/main.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

 @if (session('success'))
     <script>
        Swal.fire({
        position: "center",
        icon: "success",
        title: "Your work has been saved",
        showConfirmButton: false,
        timer: 1500
        });
     </script>
 @endif

 @if (session('error'))
     <script>
        Swal.fire({
        position: "center",
        icon: "error",
        title: "Your work has not been saved, Try again",
        showConfirmButton: false,
        timer: 1500
        });
     </script>
 @endif

 <script>
     function deleteData(url){
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = url;
                }
            });
     }
 </script>
