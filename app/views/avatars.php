<section class="content">
  <div class="container">
    <h1>
      Avatars
      <i class="fa-solid fa-images"></i>
    </h1>

    <section class="gallery">
      <?php foreach ($images as $image) { ?>

        <div class="modal">
          <div class="box__modal">
            <a href="javascript:void(0)" id="close__modal">
              <i class="fa-solid fa-circle-xmark"></i>
            </a>

            <div class="delete__result"></div>

            <p>Do you really want to delete ?</p>

            <a href="javascript:void(0)" item="<?php echo $image['id']; ?>" id="btn__delete">
              Delete
              <i class="fa-solid fa-trash-can"></i>
            </a>
          </div>
        </div>

        <div class="image">
          <img src="http://localhost/github/uploadAvatar/app/avatars/list/<?php echo $image['id']; ?>"
            alt="Image <?php echo $image['id']; ?>">

          <a href="" id="openModal">
            <i class="fa-solid fa-trash"></i>
          </a>
        </div>
      <?php } ?>
    </section>
  </div>
</section>

<script src="<?php echo BASE_URL; ?>public/js/modal.js"></script>