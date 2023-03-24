    <!-- Footer Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary rounded-top p-4">
            <div class="row">
                <div class="col-12 col-sm-6 text-center text-sm-start">
                    &copy; <a href="#">Epidemia</a>, All Right Reserved.
                </div>

            </div>
        </div>
    </div>
    <!-- Footer End -->
    </div>
    <!-- Content End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script type="views/text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="views/lib/chart/chart.min.js"></script>
    <script src="views/lib/easing/easing.min.js"></script>
    <script src="views/lib/waypoints/waypoints.min.js"></script>
    <script src="views/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="views/lib/tempusdominus/js/moment.min.js"></script>
    <script src="views/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="views/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="views/js/main.js"></script>
    <script src="views/js/bootbox.min.js"></script>
    <script src="views/js/data-table.js"></script>
    <script>
        $(document).on("click", "#delete", function(e) {
            e.preventDefault();
            var link = $(this).attr("href");
            bootbox.confirm("Voulez-vous vraiment supprimer cet element ?", function(confirmed) {
                if (confirmed) {
                    window.location.href = link;
                };
            });
        });
    </script>
    </body>

    </html>