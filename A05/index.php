<?php
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Island of Personality</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: "Poppins", sans-serif
        }

        body {
            font-size: 16px;
        }

        .w3-half img {
            margin-bottom: -6px;
            margin-top: 16px;
            opacity: 0.8;
            cursor: pointer;
        }

        .w3-half img:hover {
            opacity: 1;
        }

        .w3-card-container {
            text-align: center;
        }

        .w3-container h3,
        .w3-container p {
            text-align: center;
        }
    </style>
</head>

<body>

    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding"
        style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft"
            style="width:100%;font-size:22px">Close Menu</a>
        <div class="w3-container">
        </div>
        <div class="w3-bar-block">
            <img src="anger.png" alt="anger" style="width:100%">
        </div>
    </nav>

    <!-- Top menu on small screens -->
    <header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
        <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
        <span>Company Name</span>
    </header>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu"
        id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:340px;margin-right:40px">

        <!-- Designers -->
        <div class="w3-container w3-center" id="designers" style="margin-top:75px">
            <h1 class="w3-xxxlarge w3-text-red"><b>Jet Alcantara.</b></h1>
            <hr style="width:50px;border:5px solid red" class="w3-round">
            <p>The Island of Personality is a vibrant realm that blends the essence of Adventure, Arnis,
                Coffee, and Gamer, creating a harmonious tapestry of dynamic traits. The Adventure Zone is
                wild and untamed, with towering cliffs, roaring waterfalls, and hidden caves that beckon the bold to
                explore life's uncharted territories. It symbolizes courage, curiosity, and a passion for discovery.
                Nestled nearby is Arnis, a serene bamboo forest echoing with the disciplined rhythm of
                Filipino martial arts. This area reflects resilience, adaptability, and the grace of a warrior’s spirit,
                where traditions meet the modern pursuit of mastery. For those seeking a quieter pace, Coffee
                offers a tranquil retreat shaded by coffee plants, where the air is rich with the aroma of freshly
                brewed inspiration. It embodies warmth, reflection, and the energizing power of meaningful connections.
                Finally, the Gamer’s rises as a neon-lit hub of creativity and strategy, where virtual and
                physical realms merge to celebrate innovation, playfulness, and competitive spirit. Together, these
                zones form an island where every personality finds its place, thriving on the diversity of experiences
                and passions.</p>
        </div>

        <!-- The Team -->
        <div class="w3-row-padding w3-grayscale w3-center">
            <div class="w3-col m4 w3-margin-bottom">
                <div class="w3-light-grey">
                    <img src="Adventure.jpg" alt="Adventure" style="width:100%">
                    <div class="w3-container">
                        <h3>Adventure</h3>
                        <p>A lively, dynamic space filled with winding trails, rugged terrains, and exhilarating zip
                            lines. The spirit of exploration and thrill-seeking defines this island, drawing in those
                            who crave new experiences and challenges.</p>
                        <button class="w3-button w3-red w3-margin-top" onclick="openModal('Adventure', 'Adventure Details: Explore rugged terrains, zip lines, and uncharted trails that inspire courage and thrill-seeking.')">Learn more</button>
                    </div>
                </div>
            </div>
            <div class="w3-col m4 w3-margin-bottom">
                <div class="w3-light-grey">
                    <img src="arnis.jpg" alt="arnis" style="width:100%">
                    <div class="w3-container">
                        <h3>Arnis</h3>
                        <p>A disciplined and energetic island showcasing the art of Filipino martial arts. Bamboo sticks
                            clatter rhythmically as techniques and traditions blend in an environment of respect, focus,
                            and cultural pride.</p>
                        <button class="w3-button w3-red w3-margin-top" onclick="openModal('Arnis', 'Arnis Details: Discover the rhythm of Filipino martial arts, emphasizing discipline and cultural pride.')">Learn more</button>
                    </div>
                </div>
            </div>
            <div class="w3-col m4 w3-margin-bottom">
                <div class="w3-light-grey">
                    <img src="coffee.jpg" alt="coffee" style="width:100%">
                    <div class="w3-container">
                        <h3>Coffee</h3>
                        <p>A cozy, aromatic island where the rich scent of freshly brewed coffee fills the air. It’s a
                            haven of creativity, conversation, and calm, with cafes and steaming mugs nestled in every
                            corner.</p>
                        <button class="w3-button w3-red w3-margin-top" onclick="openModal('Coffee', 'Coffee Details: Relax in a haven of aromatic brews and meaningful conversations.')">Learn more</button>
                    </div>
                </div>
            </div>
            <div class="w3-col m4 w3-margin-bottom">
                <div class="w3-light-grey">
                    <img src="gamer.jpg" alt="gamer" style="width:100%">
                    <div class="w3-container w3-center">
                        <h3>Gamer</h3>
                        <p>A high-energy, tech-savvy island buzzing with virtual landscapes, glowing screens, and
                            competitive arenas. It celebrates strategy, teamwork, and the immersive world of gaming,
                            connecting like-minded players.</p>
                        <button class="w3-button w3-red w3-margin-top" onclick="openModal('Gamer', 'Gamer Details: Immerse yourself in virtual landscapes and competitive arenas that celebrate creativity and teamwork.')">Learn more</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="modal01" class="w3-modal" style="display:none">
        <div class="w3-modal-content w3-animate-top w3-card-4">
            <header class="w3-container w3-red">
                <span onclick="closeModal()" class="w3-button w3-display-topright">&times;</span>
                <h2 id="modalTitle"></h2>
            </header>
            <div class="w3-container">
                <p id="modalContent"></p>
            </div>
            <footer class="w3-container w3-red">
                <p>Island of Personality</p>
            </footer>
        </div>
    </div>

    <script>
        // Script to open and close sidebar
        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
            document.getElementById("myOverlay").style.display = "block";
        }

        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
            document.getElementById("myOverlay").style.display = "none";
        }

        // Function to open modal
        function openModal(title, content) {
            document.getElementById("modalTitle").innerText = title;
            document.getElementById("modalContent").innerText = content;
            document.getElementById("modal01").style.display = "block";
        }

        // Function to close modal
        function closeModal() {
            document.getElementById("modal01").style.display = "none";
        }
    </script>

</body>
</html>