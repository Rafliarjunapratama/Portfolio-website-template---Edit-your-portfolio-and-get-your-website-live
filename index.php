<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
      <!-- 
###################################################################################################################
########    Author code  :   Muhamad Rafli Arjuna Pratama                               ###########################
########    Design Figma :   https://www.figma.com/community/file/1184894959333450190   ###########################
###################################################################################################################
 -->
<style>

</style>

<body>
    <section id="landing"> <div class="nav"> 
        <h3>Logo</h3>
        <button class="toggle-btn" id="toggleBtn">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </button>
        <ul id="navMenu">
            <li><a href="#landing">About</a></li>
            <li><a href="#pengalaman">Work</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        </div>

        <div class="about">
            <div class="divbio">
            <img src="assets/image/gambar.png" alt="" class="gambar">
            <h6> Pablo Designero</h6>
            <p>
            Designer & Unicorn <br>Trainer
            </p>
            </div>
            <div class="bio">
            <h6>Bio:</h6>
            <p>Father of 3 humans, 5 unicorns & 2 dogs, I design since I can <br> remember it. I often get asked where I get my inspiration<br> from: in everyday’s lil’ details. And sometimes in leftover food I find in my beard.
            </p>
            </div>
        </div>  
    </section>
    
    <section id="pengalaman"> 
        <div class="when">
        <p>When I was 5, I got adbucted by a unicorn family. When they returned me to earth, I joined a designer school. But, fo’ real, what I learned with my kidnaptive family really gave an edge to my creative language.</p>
        </div>
        <div class="being">
            <p class="human">Being a human is way too complicated. Time to be a unicorn.</p>
            <p class="asli">Try it and you’ll see. Then your Figma files are just gonna fly in color, glitter, interactions and autolayout.</p>
            <p class="human">Also, grow a beard. Check my bio if that is not clear.</p>
            <p class="asli">Available for projects, from Monday to Tuesday, mainy between 14 and 16. (Unless there is a unicorn race on TV - DUH -in that case, come back another day).
            Projects include, RocknRoll covers, furniture refurbishing, Unicorn potty training and more.</p>
        </div>

        <div class="hr">
        <hr>
    </div>
    </section>
       
    <section id="contact">
        <div class="column1">
            <h1>Let’s work together</h1>
            <p>This is a template Figma file, turned into code using Anima. Learn more at AnimaApp.com This is a template Figma file, turned into code using Anima. Learn more at AnimaApp.com</p>
            <div class="icon"> <i></i></div>
        </div>

        <div class="column2">
            <form action="">
                <input type="text" class="input" placeholder="Name">
                <input type="text" class="input" placeholder="Email">
                <input type="textarea" class="textarea" placeholder="Type your massage here ">
                <input type="submit" class="button-submit">
            </form>
        </div>
          <!-- 
###################################################################################################################
########    Author code  :   Muhamad Rafli Arjuna Pratama                               ###########################
########    Design Figma :   https://www.figma.com/community/file/1184894959333450190   ###########################
###################################################################################################################
 -->

    </section>
</body>
<script>
    
const toggleBtn = document.getElementById('toggleBtn');
const navMenu = document.getElementById('navMenu');

toggleBtn.addEventListener('click', () => {
    navMenu.classList.toggle('active');
    

    toggleBtn.classList.toggle('active');
});

// Close menu ketika klik di luar
document.addEventListener('click', function(event) {
    if (!event.target.closest('.nav') && navMenu.classList.contains('active')) {
        navMenu.classList.remove('active');
        toggleBtn.classList.remove('active');
    }
});

// Close menu ketika klik link
document.querySelectorAll('#navMenu a').forEach(link => {
    link.addEventListener('click', () => {
        navMenu.classList.remove('active');
        toggleBtn.classList.remove('active');
    });
});
</script>
      <!-- 
###################################################################################################################
########    Author code  :   Muhamad Rafli Arjuna Pratama                               ###########################
########    Design Figma :   https://www.figma.com/community/file/1184894959333450190   ###########################
###################################################################################################################
 -->

</html>