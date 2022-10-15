 <!-- ======= Portfolio Section ======= -->
 <section id="portfolio" class="portfolio section-bg">
     <div class="container">
         <div class="section-title">
             <h2>Portfolio</h2>
             <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                 consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                 fugiat sit in iste officiis commodi quidem hic quas.</p>
         </div>


         @foreach ($proyectos as $proyecto)
             <div class="row portfolio-container">
                 <div class="col-lg-4 col-md-6 portfolio-item ">
                     <div class="portfolio-wrap">
                         <img src="{{ asset('upload/proyectos/' . $proyecto->image) }}" class="img-fluid" alt="">
                         <div class="portfolio-links">
                             <a href="{{ $proyecto->link }}" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                         </div>
                     </div>
                 </div>
             </div>
         @endforeach
     </div>

 </section><!-- End Portfolio Section -->
