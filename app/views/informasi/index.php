 <!-- ======= Breadcrumbs ======= -->
 <section id="breadcrumbs" class="breadcrumbs">
   <div class="container">

     <div class="d-flex justify-content-between align-items-center">
       <h2><?= $data['judul']; ?></h2>
       <ol>
         <li><a href="<?= BASEURL; ?>/home">Home</a></li>
         <li><?= $data['judul']; ?></li>
       </ol>
     </div>

   </div>
 </section><!-- End Breadcrumbs -->

 <!-- ======= Informasi Section ======= -->
 <section id="blog" class="blog">
   <div class="container">
     <?php //var_dump($data['informasi']['itemCount']) ?>
     <div class="row">
       <?php foreach ($data['informasi']['body'] as $informasi) : ?>
         <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
           <article class="entry">

             <div class="entry-img">
               <img src="<?= BASEURL; ?>/public/img/dishub1.PNG" alt="" class="img-fluid">
             </div>

             <h2 class="entry-title">
               <a href="<?= BASEURL; ?>/informasi/informasiSingle"><?= $informasi['judul_informasi'] ?></a>
             </h2>
             <div class="entry-meta">
               <ul>
                 <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="<?= BASEURL; ?>/informasi/informasiSingle">Can nyokot ti database</a></li>
                 <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="<?= BASEURL; ?>/blog/blogSingle"><?= $informasi['waktu_upload'] ?></a></li>
               </ul>
             </div>

             <div class="entry-content">
               <p class="limit-text">
                 <?= $informasi['text_informasi'] ?>
               </p>
               <div class="read-more">
                 <a href="<?= BASEURL; ?>/informasi/detailInformasi/<?= $informasi['ID_informasi'] ?>">Read More</a>
               </div>
             </div>

           </article><!-- End blog entry -->
         </div>
       <?php endforeach; ?>

     </div>

     <div class="blog-pagination" data-aos="fade-up">
       <ul class="justify-content-center">
         <?php if ($data['start'] > 1) : ?>
           <li><a href="<?= BASEURL; ?>/informasi/<?= ($data['start'] - 1) ?>"><i class="icofont-rounded-left"></i></a></li>
         <?php endif; ?>
         
         <?php for ($i = 1; $i <= $data['pages']; $i++) : ?>
           <?php $active_class = "" ?>
           <?php if ($i == $data['start']) : ?>
             <?php $active_class = "active" ?>
           <?php endif; ?>
           <li class="<?= $active_class ?>"><a href="<?= BASEURL; ?>/informasi/<?= $i ?>"><?= $i; ?></a></li>
         <?php endfor; ?>

         <?php if ( $data['start'] < $data['pages']) : ?>
           <li><a href="<?= BASEURL; ?>/informasi/<?= ($data['start'] + 1) ?>"><i class="icofont-rounded-right"></i></a></li>
         <?php endif; ?>
       </ul>
     </div>

   </div>
 </section><!-- End Blog Section -->

 </main><!-- End #main -->