<aside class="content__row__aside__sidebar">
    <!-- container -->
     <div class="content__row__aside__sidebar__container">
         <!-- header -->
         <header class="content__row__aside__sidebar__container__header d-none">
             <h3>Conheça também:</h3>
         </header>
         <!-- end of header -->

         <ul>
             <?php
             $pages = get_pages(['sort_order' => 'acs', 'exclude' => [35,33,31,5]]);
             foreach ($pages as $page):
                 ?>
                 <li class="<?= $page->post_title  == get_the_title() ? "active" : ''?>">
                     <?php if($page->post_title  == get_the_title()): ?>
                         <p class="t-bold clr-neutral-500"><?= $page->post_title; ?></p>
                     <?php else: ?>
                         <a class="t-bold link-neutral-500" href="<?= $page->guid; ?>" title="Indústrias RC | <?= $page->post_title; ?>" target="_blank"><?= $page->post_title; ?></a>
                     <?php endif; ?>

                     <i class="icon-arrow-forward"></i>
                 </li>

             <?php endforeach; ?>
         </ul>
     </div>
    <!-- end of container -->

    <!-- cta -->
     <div class="content__row__aside__sidebar__cta mt-6 t-center">
         <p class="t-bold clr-white-500">Vamos conversar?</p>

         <!-- icon -->
          <div class="content__row__aside__sidebar__cta__icon bg-primary-500">
              <i class="icon-phone clr-blue-500 f-6"></i>
          </div>
         <!-- end of icon -->

         <a rel="nofollow noopener noreferrer" class="link-white-500 f-4 t-bold" href="tel:<?= (formatPhone(CONTACT['phone']['01'])); ?>" title="Vamos conversar por telefone?"><?= CONTACT['phone']['01']; ?></a>
     </div>
    <!-- end of cta -->
</aside>