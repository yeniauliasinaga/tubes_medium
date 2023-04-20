<?php 
require ('koneksi.php');
include 'tata_letak/navbaratas.php'; 
?>  
  
  <!-- Trending Container - Start -->
   <div class="container py-5">
       <div class="row mb-2">
           <div class="col-12 mt-5">
            <h5><i class="fas fa-chart-line"></i><small class="font-weight-bold"> TRENDING ON MEDIUM</small></h5>
           </div>
       </div>

       <div class="row">
           <!-- Article 1 -->
           <article class="col-12 col-sm-12 col-md-4">
               <div class="row">
                
                <div class="col-10">
                    <a href="konten.php?id_berita= <?= $_session['id_berita']; ?>" style="text-decoration: none; color: black;"><small>
                     <img class="rounded-circle" src="https://picsum.photos/id/77/25/25" alt="">   
                     SYNTAX PHP NAMA PENULIS
                     <span class="text-muted">in</span>
                     SYNTAX PHP BIDANG KATEGORI
                    </small> <br>
                    <small class="font-weight-bold">
                        SYNTAX PHP JUDUL BERTA
                    </small></a><br>
                    <ul class="list-inline text-muted">
                        <li class="list-inline-item"> <small>SYNTAX PHP TANGGAL POSTING</small></li>
                        <li class="list-inline-item"> <small>.</small></li>
                        <li class="list-inline-item"> <small>4 min read</small></li>
                      </ul>
                </div>
               </div>
            
           </article>

           <!-- Article 2 -->
           <article class="col-12 col-sm-12 col-md-4">
            <div class="row">
             
             <div class="col-10">
                 <small>
                  <img class="rounded-circle" src="https://picsum.photos/id/85/25/25" alt="">   
                  Nelly
                  <span class="text-muted">in</span>
                  Discord Blog
                 </small> <br>
                 <small class="font-weight-bold">
                    Happy Blurpthday to Discord, a Place for Everything You Can Imagine
                 </small><br>
                 <ul class="list-inline text-muted">
                     <li class="list-inline-item"> <small>May 13</small></li>
                     <li class="list-inline-item"> <small>.</small></li>
                     <li class="list-inline-item"> <small>8 min read</small></li>
                   </ul>
             </div>
            </div>
         
           </article>

        <!-- Article 3 -->
        <article class="col-12 col-sm-12 col-md-4">
            <div class="row">
             
             <div class="col-10">
                 <small>
                  <img class="rounded-circle" src="https://picsum.photos/id/57/25/25" alt="">   
                  Jacqueline Dooley
                  <span class="text-muted">in</span>
                  Human Parts
                 </small> <br>
                 <small class="font-weight-bold">
                    I’m Mourning the Life My Daughter Never Got to Live
                 </small><br>
                 <ul class="list-inline text-muted">
                     <li class="list-inline-item"> <small>May 2</small></li>
                     <li class="list-inline-item"> <small>.</small></li>
                     <li class="list-inline-item"> <small>3 min read</small></li>
                   </ul>
             </div>
            </div>
         
        </article>

        <!-- Article 4 -->
        <article class="col-12 col-sm-12 col-md-4">
            <div class="row">
             
             <div class="col-10">
                 <small>
                  <img class="rounded-circle" src="https://picsum.photos/id/435/25/25" alt="">   
                  Deepak Chopra
                  <span class="text-muted">in</span>
                  Software Dev
                 </small> <br>
                 <small class="font-weight-bold">
                    Embracing the Divine Feminine Power Within Us All
                 </small><br>
                 <ul class="list-inline text-muted">
                     <li class="list-inline-item"> <small>May 16</small></li>
                     <li class="list-inline-item"> <small>.</small></li>
                     <li class="list-inline-item"> <small>5 min read</small></li>
                   </ul>
             </div>
            </div>
         
        </article>

        <!-- Article 5 -->
        <article class="col-12 col-sm-12 col-md-4">
         <div class="row">
          
          <div class="col-10">
              <small>
               <img class="rounded-circle" src="https://picsum.photos/id/38/25/25" alt="">   
               Dominic Williams
               <span class="text-muted">in</span>
               The Internet Computer
              </small> <br>
              <small class="font-weight-bold">
                Plans for “Endorphin,” a Free and Open Crypto OS for Smartphones and Other...
              </small><br>
              <ul class="list-inline text-muted">
                  <li class="list-inline-item"> <small>May 16</small></li>
                  <li class="list-inline-item"> <small>.</small></li>
                  <li class="list-inline-item"> <small>4 min read</small></li>
                </ul>
          </div>
         </div>
      
        </article>

     <!-- Article 6 -->
     <article class="col-12 col-sm-12 col-md-4">
         <div class="row">
          
          <div class="col-10">
              <small>
               <img class="rounded-circle" src="https://picsum.photos/id/399/25/25" alt=""> 
                Pranjal Saxena
               <span class="text-muted">in</span>
               Towards Data Science
              </small> <br>
              <small class="font-weight-bold">
                  Dodgers win fourth straight but lose Corey Seager to fractured hand
              </small><br>
              <ul class="list-inline text-muted">
                  <li class="list-inline-item"> <small>May 7</small></li>
                  <li class="list-inline-item"> <small>.</small></li>
                  <li class="list-inline-item"> <small>23 min read</small></li>
                </ul>
          </div>
         </div>
      
     </article>
       </div>
   </div>
    <!-- Trending Container - End -->
    
    

    
<div class="container py-5">
  <div class="row">
    <article class="col-12 col-sm-8 mt-2">
      <!-- Article 1 -->
      <div class="row mb-2">
        <div class="col-12 col-sm-8">
         <div class="col-12">
           <small>
            <img class="rounded-circle" src="https://picsum.photos/id/716/25/25" alt="">   
             Rowan Kavner
            <span class="text-muted">in</span>
            Dodger Insider
           </small> <br>
           <h5 class="font-weight-bold my-2">
             7 Little Things That Can Tell You A Lot About Someone
           </h5>
           <h6 class="text-muted">Potent habits that can reveal a person’s character.</h6>
           <ul class="list-inline text-muted">
               <li class="list-inline-item"> <small>May 16</small></li>
               <li class="list-inline-item"> <small>.</small></li>
               <li class="list-inline-item"> <small>4 min read</small></li>
               <li class="list-inline-item small"> <small><i class="fas fa-star"></i></small></li>
               <li class="list-inline-item float-right"><a href="#" class="text-dark"><i class="far fa-bookmark"></i></a></li>
             </ul>
       </div>
        </div>
        <div class="col-4">
          <img class="w-100  d-none d-sm-block" src="https://picsum.photos/id/316/200/150" alt="">
        </div>
      </div>
      <!-- Article 2 -->
      <div class="row mb-2">
       <div class="col-12 col-sm-8">
        <div class="col-12">
          <small>
           <img class="rounded-circle" src="https://picsum.photos/id/16/25/25" alt="">   
            Hannah Furst
           <span class="text-muted">in</span>
           Slackjaw
          </small> <br>
          <h5 class="font-weight-bold my-2">
           A Man In His 30s Explains To Me What’s Wrong With Women In Their 30s
          </h5>
          <h6 class="text-muted">Those bloody women over 35… They’re all tick-tock, tick-tock.</h6>
          <ul class="list-inline text-muted">
              <li class="list-inline-item"> <small>May 11</small></li>
              <li class="list-inline-item"> <small>.</small></li>
              <li class="list-inline-item"> <small>1 min read</small></li>
              <li class="list-inline-item small"> <small><i class="fas fa-star"></i></small></li>
              <li class="list-inline-item float-right"><a href="#" class="text-dark"><i class="far fa-bookmark"></i></a></li>
            </ul>
      </div>
       </div>
       <div class="col-4">
         <img class="w-100  d-none d-sm-block" src="https://picsum.photos/id/993/200/150" alt="">
       </div>
     </div>
     <!-- Article 3 -->
     <div class="row mb-2">
       <div class="col-12 col-sm-8">
        <div class="col-12">
          <small>
           <img class="rounded-circle" src="https://picsum.photos/id/816/25/25" alt="">   
           Carlyn Beccia
           <span class="text-muted">in</span>
           Fearless She Wrote
          </small> <br>
          <h5 class="font-weight-bold my-2">
           Why is Finding a Good Man so Hard for Single Women Over 35?
          </h5>
          <h6 class="text-muted">The answer is found in the Eligible Bachelor Paradox</h6>
          <ul class="list-inline text-muted">
              <li class="list-inline-item"> <small>May 1</small></li>
              <li class="list-inline-item"> <small>.</small></li>
              <li class="list-inline-item"> <small>25 min read</small></li>
              <li class="list-inline-item small"> <small><i class="fas fa-star"></i></small></li>
              <li class="list-inline-item float-right"><a href="#" class="text-dark"><i class="far fa-bookmark"></i></a></li>
            </ul>
      </div>
       </div>
       <div class="col-4">
         <img class="w-100  d-none d-sm-block" src="https://picsum.photos/id/816/200/150" alt="">
       </div>
     </div>
      <!-- Article 4 -->
      <div class="row mb-2">
       <div class="col-12 col-sm-8">
        <div class="col-12">
          <small>
           <img class="rounded-circle" src="https://picsum.photos/id/36/25/25" alt="">    
           Michael Thompson
           <span class="text-muted">in</span>
           Forge
          </small> <br>
          <h5 class="font-weight-bold my-2">
           The 7 Emails You Should Send Every Week to Get Ahead in Your Career
          </h5>
          <h6 class="text-muted">There’s power in the inbox</h6>
          <ul class="list-inline text-muted">
              <li class="list-inline-item"> <small>Feb 22</small></li>
              <li class="list-inline-item"> <small>.</small></li>
              <li class="list-inline-item"> <small>7 min read</small></li>
              <li class="list-inline-item small"> <small><i class="fas fa-star"></i></small></li>
              <li class="list-inline-item float-right"><a href="#" class="text-dark"><i class="far fa-bookmark"></i></a></li>
            </ul>
      </div>
       </div>
       <div class="col-4">
         <img class="w-100  d-none d-sm-block" src="https://picsum.photos/id/1023/200/150" alt="">
       </div>
     </div>
     <!-- Article 5 -->
     <div class="row mb-2">
      <div class="col-12 col-sm-8">
       <div class="col-12">
         <small>
          <img class="rounded-circle" src="https://picsum.photos/id/104/25/25" alt="">   
          Manpreet Singh
          <span class="text-muted">in</span>
          Programming
         </small> <br>
         <h5 class="font-weight-bold my-2">
           These are the programming languages Google uses
         </h5>
         <h6 class="text-muted">When discovering which programming languages to learn...</h6>
         <ul class="list-inline text-muted">
             <li class="list-inline-item"> <small>May 16</small></li>
             <li class="list-inline-item"> <small>.</small></li>
             <li class="list-inline-item"> <small>4 min read</small></li>
             <li class="list-inline-item small"> <small><i class="fas fa-star"></i></small></li>
             <li class="list-inline-item float-right"><a href="#" class="text-dark"><i class="far fa-bookmark"></i></a></li>
           </ul>
     </div>
      </div>
      <div class="col-4">
        <img class="w-100  d-none d-sm-block" src="https://picsum.photos/id/737/200/150" alt="">
      </div>
    </div>
    <!-- Article 6 -->
    <div class="row mb-2">
      <div class="col-12 col-sm-8">
       <div class="col-12">
         <small>
          <img class="rounded-circle" src="https://picsum.photos/id/81/25/25" alt="">   
          Brooke Meredith
          <span class="text-muted">in</span>
          Mind Cafe
         </small> <br>
         <h5 class="font-weight-bold my-2">
           9 Subtle Signs a Person Is Not So Great
         </h5>
         <h6 class="text-muted">Could this be someone you know? Or even you?</h6>
         <ul class="list-inline text-muted">
             <li class="list-inline-item"> <small>Jan 16</small></li>
             <li class="list-inline-item"> <small>.</small></li>
             <li class="list-inline-item"> <small>9 min read</small></li>
             <li class="list-inline-item small"> <small><i class="fas fa-star"></i></small></li>
             <li class="list-inline-item float-right"><a href="#" class="text-dark"><i class="far fa-bookmark"></i></a></li>
           </ul>
     </div>
      </div>
      <div class="col-4">
        <img class="w-100  d-none d-sm-block" src="https://picsum.photos/id/774/200/150" alt="">
      </div>
    </div>
    </article>

  <!-- Discover More Section - Start -->
  <aside class="col-4  d-none d-sm-block">
    <div class="row">
      <div class="col-12 mb-2"><small><strong>DISCOVER MORE OF WHAT MATTERS TO YOU</strong></small></div>
    </div>
    <div class="row">
      <div class="col">
       <ul class="list-inline">
         <li class="list-inline-item btn btn-outline-secondary mb-1"> <small> Self</small></li>
         <li class="list-inline-item btn btn-outline-secondary mb-1"> <small>Relationships</small> </li>
         <li class="list-inline-item btn btn-outline-secondary mb-1"> <small>Data  Science</small></li>
         <li class="list-inline-item btn btn-outline-secondary mb-1"> <small>Programming</small> </li>
         <li class="list-inline-item btn btn-outline-secondary mb-1"> <small>Productivity</small> </li>
         <li class="list-inline-item btn btn-outline-secondary mb-1"> <small>Javascript</small> </li>
         <li class="list-inline-item btn btn-outline-secondary mb-1"> <small>Marchine Learning</small></li>
         <li class="list-inline-item btn btn-outline-secondary mb-1"> <small>Politics</small> </li>
         <li class="list-inline-item btn btn-outline-secondary mb-1"> <small>Health</small> </li>
       </ul>
       <a href="#" class="text-success">See All Topics</a>
       <hr>
      </div>
    </div>
  </aside>
  <!-- Discover More Section - End -->


  </div>
  
</div>

 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
