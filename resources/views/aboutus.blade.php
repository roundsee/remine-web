<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Studio Name</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        h1, h2 {
            color: #2c3e50;
        }
        .team-member {
            margin-bottom: 20px;
            cursor: pointer;
        }
        .team-member h3 {
            color: #3498db;
        }
        .team-member p {
            display: none;
        }
        .contact-form {
            margin-top: 30px;
        }
        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }
        .contact-form button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
        .contact-form button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <header>
        <h1>About Us - Studio Name</h1>
    </header>

    <main>
        <section id="our-story">
            <h2>Our Story</h2>
            <p>Founded in 2010 by Jane Doe, Studio Name grew from a passion for visual storytelling. What began as a small operation has blossomed into a full-service photography studio, serving the greater metropolitan area and beyond.</p>
        </section>

        <section id="our-approach">
            <h2>Our Approach</h2>
            <p>We believe that every image tells a story. Our team of skilled photographers combines technical expertise with creative vision to produce stunning, emotion-filled photographs that you'll treasure for years to come.</p>
        </section>

        <section id="services">
            <h2>Services</h2>
            <ul>
                <li>Portrait Photography</li>
                <li>Wedding Photography</li>
                <li>Commercial Photography</li>
                <li>Event Coverage</li>
                <li>Family and Newborn Sessions</li>
            </ul>
        </section>

        <section id="our-team">
            <h2>Our Team</h2>
            <div class="team-member">
                <h3>Jane Doe - Founder & Lead Photographer</h3>
                <p>With over 15 years of experience, Jane specializes in wedding and portrait photography.</p>
            </div>
            <div class="team-member">
                <h3>John Smith - Commercial Photographer</h3>
                <p>John brings 10 years of experience in product and architectural photography.</p>
            </div>
            <div class="team-member">
                <h3>Emily Brown - Event Photographer</h3>
                <p>Emily excels at capturing the energy and emotion of live events.</p>
            </div>
        </section>

        <section id="our-studio">
            <h2>Our Studio</h2>
            <p>Located in the heart of downtown, our state-of-the-art studio is equipped with the latest photography technology. We also offer on-location shoots to capture your special moments in the setting of your choice.</p>
        </section>

        <section id="our-commitment">
            <h2>Our Commitment</h2>
            <p>At Studio Name, we're dedicated to providing an exceptional experience from the first consultation to the final delivery of your photos. We work closely with each client to understand their vision and bring it to life through our craft.</p>
        </section>

        <section id="contact">
            <h2>Get in Touch</h2>
            <p>We'd love to be part of your story. Contact us today to book a session or learn more about our services.</p>
            <form class="contact-form">
                <input type="text" placeholder="Your Name" required>
                <input type="email" placeholder="Your Email" required>
                <textarea placeholder="Your Message" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Studio Name. All rights reserved.</p>
    </footer>

    <script>
        // Toggle team member details
        document.querySelectorAll('.team-member').forEach(member => {
            member.addEventListener('click', () => {
                const details = member.querySelector('p');
                details.style.display = details.style.display === 'none' ? 'block' : 'none';
            });
        });

        // Form submission handling
        document.querySelector('.contact-form').addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Thank you for your message. We will get back to you soon!');
            e.target.reset();
        });
    </script>
</body>
</html>