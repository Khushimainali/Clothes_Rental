<?php
include "header.php";  // Include header.php for navigation
?>

<style>
    /* General Container Styling */
    .container {
        width: 100%;
        padding: 20px;
        background-color: #f4f7fc;
    }

    .team-section {
        gap: 30px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .first-member, .second-member {
        display: flex;
        align-items: center;
        gap: 20px;
        margin-bottom: 40px;
    }

    .first-member .content {
        margin-right: 50px;
        flex: 1;
    }

    .first-member img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
    }

    .second-member .image {
        margin-right: 50px;
    }

    .second-member .content {
        flex: 1;
        margin-left: 50px;
    }

    .second-member img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
    }

    .team-member h3 {
        font-size: 18px;
        font-weight: bold;
        color: #333;
    }

    .team-member p {
        font-size: 14px;
        color: #777;
        margin-top: 10px;
    }

    .designation {
        font-size: 16px;
        font-weight: bold;
        color: #007bff;
        margin-top: 5px;
    }
    h3 {
        margin-top: 10px;
        font-family: 'Times New Roman', Times, serif;
    }
    p {
        margin-top: 10px;
        font-family: 'Times New Roman', Times, serif;
    }
 
    /* Responsive Design for Smaller Screens */
    @media screen and (max-width: 768px) {
        .first-member, .second-member {
            flex-direction: column;
            text-align: center;
        }

        .first-member .content, .second-member .content {
            margin-right: 0;
            margin-left: 0;
        }

        .first-member img, .second-member img {
            margin-bottom: 15px;
        }
    }
</style>

<div class="container">
    <h2 style="text-align: center; margin-bottom: 40px; font-size: 24px; font-weight: bold; color: #333;">Our Project Team</h2>
    
    <div class="team-section">
        <!-- Backend Developer -->
        <div class="first-member">
            <div class="content">
                <h3>Khushi Mainli</h3>
                <p class="designation">Backend Developer</p>
                <p>Khushi is responsible for managing the server-side of the project, ensuring smooth database interactions and server functionality.</p>
            </div>
            <div>
                <img src="742576.png" alt="Backend Developer">
            </div>
        </div>

        <!-- Frontend Developer -->
        <div class="second-member">
            <div class="image">
                <img src="th.jpeg" alt="Frontend Developer">
            </div>
            <div class="content">
                <h3>Dipa</h3>
                <p class="designation">Frontend Developer</p>
                <p>Dipa handles the visual aspects of the project, designing the user interface and ensuring a seamless user experience.</p>
            </div>
        </div>
    </div>
</div>

<?php
include "footer.php";  // Include footer.php for footer section
?>
