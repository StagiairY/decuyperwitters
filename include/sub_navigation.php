<style>

    /* Styles for sub-navigation container */
    .sub-navigation-container {
        width: 100%;
        overflow: hidden;
    }

    /* Styles for sub-navigation */
    .sub-navigation {
        white-space: nowrap;
        width: 100%;
        overflow: hidden;
        margin-bottom: -20px; /* Negative margin to hide scrollbar */
        padding-bottom: 20px; /* Adjust for negative margin */
    }

    .sub-nav-item {
        display: inline-block;
        padding: 10px 20px;
        text-decoration: none;
        color: #333;
        font-weight: bold;
        font-size: 16px;
        margin-right: 20px;
    }

    .sub-nav-item:hover {
        transform: scale(1.1); /* Enlarge on hover */
        font-size: 18px; /* Enlarge font on hover */
    }

</style>

<div class="sub-navigation mt-5 pt-5">
    <div class="sub-nav-container">
        <div class="sub-nav">
            <!-- Replace the placeholders with your actual links and titles -->
            <a href="./Rundvee.php" class="sub-nav-item">Rundvee</a>
            <a href="./Paarden.php" class="sub-nav-item">Paarden</a>
            <a href="./Kleine_hoefdieren.php" class="sub-nav-item">Kleine hoefdieren</a>
            <a href="./Stalstrooisel.php" class="sub-nav-item">Stalstrooisel</a>
            <a href="./Neerhofdieren.php" class="sub-nav-item">Neerhofdieren</a>
            <a href="./Honden_en_katten.php" class="sub-nav-item">Honden en katten</a>
            <a href="./Duiven.php" class="sub-nav-item">Duiven</a>
            <a href="./Vogels.php" class="sub-nav-item">Vogels</a>
            <a href="./Meststoffen.php" class="sub-nav-item">Meststoffen</a>
            <a href="./Potgrond.php" class="sub-nav-item">Potgrond</a>
            <a href="./Boomschors.php" class="sub-nav-item">Boomschors</a>
            <a href="./Graszaden.php" class="sub-nav-item">Graszaden</a>
            <a href="./Sproeistoffen.php" class="sub-nav-item">Sproeistoffen</a>
            <a href="./Tuingereedschap.php" class="sub-nav-item">Tuingereedschap</a>
            <a href="./Zaden_en_planten.php" class="sub-nav-item">Zaden en planten</a>
            <a href="./Laarzen_en_Jolly's.php" class="sub-nav-item">Laarzen en Jolly's</a>
            <a href="./Weide_afsluiting.php" class="sub-nav-item">Weide afsluiting</a>
            <a href="./Antargaz.php" class="sub-nav-item">Antargaz</a>
            <a href="./Houtpellets.php" class="sub-nav-item">Houtpellets</a>
        </div>
    </div>
</div>


<script>// Add JavaScript to make the sub-navigation scrollable
    const subNav = document.querySelector('.sub-nav');
    let scrollValue = 0;

    // Scroll right
    document.querySelector('.scroll-right').addEventListener('click', () => {
        scrollValue += 200; // Adjust the scrolling amount as needed
        subNav.style.transform = `translateX(-${scrollValue}px)`;
    });

    // Scroll left
    document.querySelector('.scroll-left').addEventListener('click', () => {
        scrollValue -= 200; // Adjust the scrolling amount as needed
        if (scrollValue < 0) {
            scrollValue = 0;
        }
        subNav.style.transform = `translateX(-${scrollValue}px)`;
    });
</script>