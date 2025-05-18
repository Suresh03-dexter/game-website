<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us</title>
    <link rel="stylesheet" href="css/aboutus.css" />
  </head>
  <body>
    <?php
    include "nav.php";
    ?>

    <div class="about-container">
      <header class="about-header">
        <h1>About Us</h1>
        <p>
          Learn more about our mission, vision, and the people behind our
          company.
        </p>
      </header>

      <section class="about-section">
        <h2>Our Mission</h2>
        <p>
          Our mission is to deliver exceptional products that enrich lives and
          empower innovation in every corner of the world.
        </p>
      </section>

      <section class="about-section">
        <h2>Our Vision</h2>
        <p>
          We envision a future where technology and creativity converge to solve
          real-world problems, making life better for everyone.
        </p>
      </section>

      <section class="about-section team">
        <h2>Meet the Team</h2>
        <div class="team-members">
          <div class="team-member">
            <img src="images/ceo.jpg" alt="Team Member" />
            <h3>Jane Doe</h3>
            <p>CEO & Founder – Passionate about innovation and leadership.</p>
          </div>

          <div class="team-member">
            <img src="images/ceo1.png" alt="Team Member" />
            <h3>John Smith</h3>
            <p>CTO – Tech visionary with a focus on scalable solutions.</p>
          </div>
          <div class="team-member">
            <img src="images/ceo2.png" alt="Team Member" />
            <h3>Emily Davis</h3>
            <p>
              Head of Design – Dedicated to creating beautiful and intuitive
              user experiences.
            </p>
          </div>
        </div>
      </section>
    </div>
  </body>
</html>
