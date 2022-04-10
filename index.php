<?php include("partials/header.php"); ?>   

    <div class="index-container">
        <div class="heading">
            <div class="section1" id="topic2">
                <p id="p1">SRI LANKA</p>
                <p id="p2">TRAIN</p>
                <p id="p3">SCHEDULE</p>
            </div>
            <div class="section1">
                <iframe src="https://www.youtube.com/embed/3NyMDfVSVpA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

        <div class="container">
            <p id="topic1">History</p>
            <div id="history">
                <div id="origin">
                    <p class="topic4">Origin</p>
                    <p>Rail was introduced in Sri Lanka in 1864 to transport coffee from plantations in the hill country district of Kandy to the port city of Colombo on its way to Europe and the world market. The coffee blight of 1871 destroyed many a fine plantation and tea replaced coffee. With the development of tea plantations in the 1880s, the joint stock companies swallowed up the former individual proprietorship of the coffee era. Under corporate ownership and management control by companies, the process of production of tea became more sophisticated and needed more and more railways built to the Kandyan highlands. To send tea to Colombo and to transport labour, machinery, manure, rice and foodstuff, etc to Kandy, another 100 miles of railways were constructed in the tea planting districts to serve the expanding tea domain

                    HistoryTo serve the coconut plantations flourishing in the west, south west and north west coastal  areas of the country, and the wet inland rubber plantations below the tea belt, railway lines were built in the wake of these agricultural developments. 
                    </P>    
                </div>
                <div id="development">
                    <p class="topic4">Development</p>
                    <p>
                        Thereafter, the need for cheap and safe travel in order to open up the hinterland of the country led to the expansion of the railway.

                        An extension of the Main Line to Kandy was made north to the ancient city of Anuradhapura, going further north to Kankesanturai and west to Talaimannar to connect the island with South India by ferry, to bring Indian labour for the tea and rubber plantations, and also import rice and other food stuffs not indigenously produced in sufficient quantities.
                    </p>
                </div>    

                <div id="furtherImprovements">
                    <p class="topic4">Further Improvements</p>
                    <p>
                        Towards the east, there was little economic justification to lay a line to the dry zone in that direction, but it became strategically worthwhile to lay a line to the natural harbour of Trincomalee and also connect it to the provincial capital of Batticaloa. These lines were laid with light (21 kg) section rails, as was the narrow gauge section to serve the rubber plantations east of Colombo, known as the Kelani Valley Line.

                        Up country, a similar branch line was laid from Nanu Oya on the Main Line through very difficult terrain to serve the tea plantations around Nuwara Eliya. Track alignment was defined in this section about 140 years ago, when economic considerations were vastly different. The railways achieved modal superiority with speeds of 25 to 40 kmph in the hill country and 65 to 80 in the low country and civil engineering criteria was influenced by the economic need to minimize cuts and fills, permitting gradients to 2 to 3 % and minimizing bridge lengths. As a result, the alignment here is winding with very sharp curves.

                        In the early days of the railways, the bulk of the freight was carried to the port of Colombo and as the port expanded, rail lines were laid to serve every pier.
                    </p>
                </div>
            </div>
        </div>

        <div class="app">
            <p id="topic3">Delta App</p>
            <div class="appsec">
                <div class="app-photos" id="app-photos">
                    <div class="item"><img src="images\app1.jpg" class="app-photo"></div>
                    <div class="item"><img src="images\app3.jpg" class="app-photo"></div>
                    <div class="item"><img src="images\app2.jpg" class="app-photo"></div>
                    <div class="item"><img src="images\app4.png" class="app-photo"></div>
                    <div class="item"><img src="images\app5.png" class="app-photo"></div>
                    <div class="item"><img src="images\app6.png" class="app-photo"></div>
                    <div class="item"><img src="images\app7.png" class="app-photo"></div>
                </div>
                <div class="text-box1">
                    <p>Download our App Now</p>
                    <div id="applinks">
                        <a href="#" class="storeLink">
                            <img src="images/android.png" alt="Download">
                            <p>Download Android version 1.1</p>
                        </a>
                        <a href="#" class="storeLink">
                            <img src="images/apple.png" alt="Download">
                            <p>Download ios version 1.1</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("partials/footer.php"); ?>    
<script>
    const appPhoto = document.querySelectorAll(".app-photo");
    const background = document.querySelector(".container");
    const history = document.querySelector("#history")
    const origin = document.querySelector("#origin")
    const development = document.querySelector("#development")
    const furtherImprovements = document.querySelector("#furtherImprovements")

    document.addEventListener('scroll', function(){
        const clientHeight = document.documentElement.clientHeight;
        const historyY = development.getBoundingClientRect().y;
        const historyHeight = development.getBoundingClientRect().height;
         
        if(clientHeight > (historyY + historyHeight * 5/6)) {
            origin.style.animation = 'fadeIn 1.5s 50ms';
            development.style.animation = 'fadeIn 1.5s 150ms';
            furtherImprovements.style.animation = 'fadeIn 1.5s 250ms';
        }
    });
</script>