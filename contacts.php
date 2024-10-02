<?php include_once('header.php'); ?>
<main>
  <section class="contacts">
    <article class="contacts_map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9090.924109668162!2d144.9554202344983!3d-37.807046958631474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642ccdc6aaaab%3A0x2173400951f0012c!2sLevel%203%2F551%20Swanston%20St%2C%20Carlton%20VIC%203053%2C%20Australia!5e0!3m2!1sen!2sca!4v1667645036664!5m2!1sen!2sca"
        width="100%"
        height="100%"
        zoom="5"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
    </article>
    <article class="contacts_details">
      <div class="contacts_details-item card_purple">
        <div class="card_purple-text">
          <h2>Adress</h2>
          <p>Swanston St, Carlton VIC 3053, Australia</p>
        </div>
      </div>
      <div class="contacts_details-item card_purple">
        <div class="card_purple-text">
          <h2>E-mail</h2>
          <p>hello@company.com FOR PUBLIC INQUIRIES</p>
        </div>
      </div>
      <div class="contacts_details-item card_purple">
        <div class="card_purple-text">
          <h2>Phone</h2>
          <p>(888)234-5686 MON – FRI, 9AM – 5PM</p>
        </div>
      </div>
    </article>
  </section>
  <section class="main_form repeated_2">
    <div class="repeated_2_left">
      <div class="repeated_2_left-text">
        <p>Questions?</p>
        <h2>Contact us</h2>
      </div>
    </div>
    <div class="repeated_2_right">
      <form
        action="https://official.smartflow.com/register"
        class="repeated_2_form"
      >
        <input type="text" placeholder="Name" class="input_white" />
        <input type="text" placeholder="Last name" class="input_white" />
        <input type="text" placeholder="Email" class="input_white" />
        <input type="text" placeholder="Phone" class="input_white" />
        <button class="button_black">Send</button>
      </form>
    </div>
  </section>
</main>
<?php include_once('footer.php'); ?>