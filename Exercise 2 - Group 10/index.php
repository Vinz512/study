<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meet Our Team</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <center><h1>Group 10</h1></center>
    <div class="team-container">
        <!-- Featured Member Section -->
        <div class="featured-member" id="featured-member">
            <div class="member-photo-large">
                <img src="images/jay.jpg" alt="Featured Member Photo" id="featured-photo">
            </div>
            <div class="member-details">
                <h2 id="featured-name">Jay Cris Hernandez</h2>
                <p id="featured-position">Developer</p>
                <p id="featured-description">Jay Cris is an experienced software developer with a passion for frontend technologies.</p>
                <ul class="contact-info">
                    <li><strong>Phone:</strong> <span id="featured-phone">000 111 222 123</span></li>
                    <li><strong>Website:</strong> <a href="#" id="featured-website">www.jaycris.com</a></li>
                    <li><strong>Email:</strong> <a href="mailto:loremipsum@email.com" id="featured-email">jay.cris@email.com</a></li>
                </ul>
            </div>
        </div>

        <!-- Other Team Members -->
        <div class="other-members">
            <h1>Meet Our Team</h1>
            <div class="team-grid">
                <!-- Team member template -->
                <div class="team-member" onclick="showFeaturedMember(0)">
                    <img src="images/jay.jpg" alt="Team Member">
                    <h3>Jay Cris Hernandez</h3>
                    <p>Developer</p>
                </div>
                <div class="team-member" onclick="showFeaturedMember(1)">
                    <img src="images/rica.jpg" alt="Team Member">
                    <h3>Rica Mae Ramirez</h3>
                    <p>Project Manager</p>
                </div>
                <div class="team-member" onclick="showFeaturedMember(2)">
                    <img src="images/andrea.jpg" alt="Team Member">
                    <h3>Justine Andrea Santos</h3>
                    <p>UX Designer</p>
                </div>
                <div class="team-member" onclick="showFeaturedMember(3)">
                    <img src="images/vinz.jpg" alt="Team Member">
                    <h3>Vinz Ariscon</h3>
                    <p>QA Engineer</p>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
