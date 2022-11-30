<?php include('./assets/db/dst.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Test</title>

    <link rel="stylesheet" href="./assets/style.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./assets/script-ip.js"></script>
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js"></script>
    <script src="./assets/script-validation.js"></script>
    <script
      src="https://kit.fontawesome.com/88882bafa8.js"
      crossorigin="anonymous"
    ></script>
    <script async src="https://get.geojs.io/v1/ip/geo.js"></script>
  </head>
  <body>
    <div class="wrapper">
      <header class="header">
        <nav>
          <ul class="header__links">
            <li><a href="#">Home</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
          <i class="fas fa-bars fa-2x" id="burger"></i>
        </nav>
        <img class="header__logo" src="" alt="" />
        <div class="header__changer" id="header__changer">
          <div>
            <select id="valuta1" onchange="convertNBU();"></select>
            <button onclick="moveValuta();">&#11136;</button>
            <select id="valuta2" onchange="convertNBU()"></select>
          </div>
          <div>
            <input id="res_valuta1" oninput="convertNBU();" size="10" />
            <input id="res_valuta2" size="10" disabled />
          </div>
        </div>
      </header>
      <main class="main">
        <div class="main__block main__block-left">
          <h3>Title</h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores,
            excepturi. Accusamus libero odio iure, laudantium nemo laborum
            mollitia porro praesentium accusantium nesciunt. Eius, ab molestiae.
            Hic eveniet eaque nemo labore? Temporibus aliquid fugit cumque
            tempora! Et nemo nostrum dolores asperiores. Porro eveniet iusto
            reprehenderit illum, doloremque ipsam enim ipsa similique officia
            quia, velit dignissimos. Quam quidem voluptates laboriosam velit
            facere. Quasi aperiam incidunt error earum nobis officiis, deleniti
            saepe dicta numquam. Pariatur, reiciendis quidem. Natus sint, culpa
            accusantium tenetur cupiditate placeat veniam. Suscipit ducimus
            velit id. Beatae iure libero dolor. Enim ea est sed minus culpa id
            laboriosam earum possimus labore obcaecati deleniti omnis pariatur
            amet rem necessitatibus error doloribus, maxime doloremque fugiat
            corporis hic eius? Hic dolorem quasi obcaecati? Maiores, totam amet,
            deserunt error esse expedita alias quam culpa sed facilis sunt iste
            cupiditate dolore nisi nulla obcaecati incidunt. Commodi, deleniti
            porro? Architecto quasi odit veniam consequatur quaerat
            reprehenderit.
          </p>
        </div>
        <div class="main__block main__block-right">
          <h3>Fill the form</h3>
          <?php echo $success_msg; ?>
          <?php echo $email_exist; ?>
          <form
            id="form-contact"
            method="POST"
            class="main__form"
            autocomplete="off"
            enctype="multipart/form-data"
          >
            <div class="preloader"></div>
            <p class="contact-form__message"></p>

            <input name="firstname" type="text" size="15" maxlength="15" placeholder="First Name" required>
            <input name="lastname" type="text" size="15" maxlength="15" placeholder="Last Name" required>
            <input name="email" type="text" size="15" maxlength="15" placeholder="Email" required>
            <input name="phone" type="text" size="15" maxlength="15" placeholder="Phone" required>

            <!-- <input
              name="name"
              type="text"
              id="name"
              placeholder="First Name"
              pattern="^[a-zA-Z]+$"
              oninvalid="setCustomValidity('Please enter on alphabets only.')"
              onchange="this.setCustomValidity('')"
              required
            />
            <input
              name="password"
              type="text"
              id="lastname"
              placeholder="Last Name"
              pattern="^[a-zA-Z]+$"
              oninvalid="setCustomValidity('Please enter on alphabets only.')"
              onchange="this.setCustomValidity('')"
              required
            /> -->
            <!-- <input
              name="email"
              type="email"
              id="email"
              placeholder="Email"
              required
            /> -->
            <!-- <input
              name="phone"
              type="tel"
              id="phone"
              placeholder="Phone"
              pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
              oninvalid="setCustomValidity('Please enter on this format: 111-111-1111')"
              onchange="this.setCustomValidity('')"
              required
            /> -->

            <input name="theme" type="hidden" value="Test form" />

            <button type="submit" name="btn" class="main__button">Sumbit</button>
          </form>
        </div>
      </main>
      <article class="article">
        <div class="article__block">
          <h4>Title 1</h4>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.<a
              href=""
              class="article__link"
              >Hello</a
            >
            Molestiae eligendi nemo similique esse sed cupiditate, voluptas
            corporis quas officiis! Sed, voluptates nemo iure eos enim quis ab.
            Asperiores, harum voluptatum! Dignissimos, porro autem quo quisquam
            voluptate a rerum? Ducimus cupiditate obcaecati reprehenderit illum
            soluta officia laboriosam molestiae fugit praesentium quaerat, velit
            eum eos molestias. Quasi porro nam est dolore temporibus.
          </p>
        </div>
        <div class="article__block">
          <h4>Title 2</h4>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae
            eligendi nemo similique esse sed cupiditate, voluptas corporis quas
            officiis! Sed, voluptates nemo iure eos enim quis ab. Asperiores,
            harum voluptatum! Dignissimos, porro autem quo quisquam voluptate a
            rerum? Ducimus cupiditate obcaecati reprehenderit illum soluta
            officia laboriosam molestiae fugit praesentium quaerat, velit eum
            eos molestias. Quasi porro nam est dolore temporibus.
          </p>
        </div>
        <div class="article__block">
          <h4>Title 3</h4>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae
            eligendi nemo similique esse sed cupiditate, voluptas corporis quas
            officiis! Sed, voluptates nemo iure eos enim quis ab. Asperiores,
            harum voluptatum! Dignissimos, porro autem quo quisquam voluptate a
            rerum? Ducimus cupiditate obcaecati reprehenderit illum soluta
            officia laboriosam molestiae fugit praesentium quaerat, velit eum
            eos molestias. Quasi porro nam est dolore temporibus.
          </p>
        </div>
        <div class="article__block">
          <h4>Title 4</h4>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae
            eligendi nemo similique esse sed cupiditate, voluptas corporis quas
            officiis! Sed, voluptates nemo iure eos enim quis ab. Asperiores,
            harum voluptatum! Dignissimos, porro autem quo quisquam voluptate a
            rerum? Ducimus cupiditate obcaecati reprehenderit illum soluta
            officia laboriosam molestiae fugit praesentium quaerat, velit eum
            eos molestias. Quasi porro nam est dolore temporibus.
          </p>
        </div>
      </article>
      <article class="main video">
        <div class="video__block">
          <video width="90%" height="auto" controls="controls">
            <source src="./assets/video.mp4" type="video/mp4" />
          </video>
        </div>
        <div class="main__block main__block-right">
          <h3>Fill the form</h3>
          <form
            id="form-contact"
            method="POST"
            class="main__form"
            autocomplete="off"
            enctype="multipart/form-data"
          >
            <div class="preloader"></div>
            <p class="contact-form__message"></p>

            <input
              name="name"
              type="text"
              id="name"
              placeholder="First Name"
              pattern="^[a-zA-Z]+$"
              oninvalid="setCustomValidity('Please enter on alphabets only.')"
              onchange="this.setCustomValidity('')"
              required
            />
            <input
              name="last_name"
              type="text"
              id="lastname"
              placeholder="Last Name"
              pattern="^[a-zA-Z]+$"
              oninvalid="setCustomValidity('Please enter on alphabets only.')"
              onchange="this.setCustomValidity('')"
              required
            />
            <input
              name="email"
              type="email"
              id="email"
              placeholder="Email"
              required
            />
            <input
              name="phone"
              type="tel"
              id="phone"
              placeholder="Phone"
              pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
              oninvalid="setCustomValidity('Please enter on this format: 111-111-1111')"
              onchange="this.setCustomValidity('')"
              required
            />

            <input name="theme" type="hidden" value="Test form" />

            <button type="submit" class="main__button">Sumbit</button>
          </form>
        </div>
      </article>
      <footer class="footer">
        <div class="footer__copy">
          © <span class="footer__name">Test</span> 2022
        </div>
        <div class="footer__links">
          <a href="#">Privacy</a>
          <a href="#">Terms and Conditions</a>
        </div>
      </footer>
    </div>
    <script src="./assets/script-form.js"></script>
    <script src="./assets/script-burger.js"></script>
  </body>
</html>
