<?php  require './header.php'; ?>
      <section class="section__banner">
        <div class="container">
          <div class="banner__total">
            <h1 class="banner__total-title">Печатайте на съедобной бумаге</h1>
            <p class="banner__total-text">Вафельная тонкая бумага – 4,50 руб</p>
            <p class="banner__total-text">Вафельная плотная бумага – 5,50 руб</p>
            <p class="banner__total-text">Сахарная бумага – 9,60 руб</p>
          </div>
        </div>
      </section>

      <!-- Навигация -->
      <?php require "./pages/front/sections/catalog.php"; ?>

      <!-- Хиты продаж -->
      <?php require "./pages/front/sections/card.php"; ?> 

      <!-- Галерея вдохновения -->
      <?php require "./pages/front/sections/gallery.php"; ?>

      <?php require "./pages/front/sections/about.php"; ?>

      <section class="section__why-padding">
        <div class="container">
          <h2 class="section__why-title">Почему именно SWEETSHOP.BY?</h2>
          <div class="section__why-cards">
            <article class="section__why-card">
              <img
                class="section__why-img"
                src="assets/img/why_img/1.png"
                alt=""
              />
              <p class="section__why-text">
                Большой выбор кондитерских ингредиентов, инвентаря и упаковки
              </p>
            </article>
            <article class="section__why-card">
              <img
                class="section__why-img"
                src="assets/img/why_img/4.png"
                alt=""
              />
              <p class="section__why-text">
                Персональные рекомендации по выбору товара
              </p>
            </article>
            <article class="section__why-card">
              <img
                class="section__why-img"
                src="assets/img/why_img/2.png"
                alt=""
              />
              <p class="section__why-text">
                Оперативная доставка заказов по всей Беларуси
              </p>
            </article>
            <article class="section__why-card">
              <img
                class="section__why-img"
                src="assets/img/why_img/5.png"
                alt=""
              />
              <p class="section__why-text">Доступные цены</p>
            </article>
            <article class="section__why-card">
              <img
                class="section__why-img"
                src="assets/img/why_img/3.png"
                alt=""
              />
              <p class="section__why-text">
                Оплата товаров любым удобным для вас способом
              </p>
            </article>
            <article class="section__why-card">
              <img
                class="section__why-img"
                src="assets/img/why_img/6.png"
                alt=""
              />
              <p class="section__why-text">
                Собственное производство подложек из ламинированного МДФ,
                вырубок из пластика для пряников и печенья, а также топперов из
                полистирола
              </p>
            </article>
          </div>
        </div>
      </section>

      <section class="section__brands">
        <div class="container">
          <div class="brands__body">
            <div class="section__brands-title">Бренды</div>
            <div class="section__brands-inner">
              <img src="assets/img/brands/111.png" alt="" />
              <img src="assets/img/brands/222.png" alt="" />
              <img src="assets/img/brands/333.png" alt="" />
              <img src="assets/img/brands/444.png" alt="" />
              <img src="assets/img/brands/555.png" alt="" />
              <img src="assets/img/brands/666.png" alt="" />
            </div>
          </div>
        </div>
      </section>
  <?php  require './footer.php'; ?>
