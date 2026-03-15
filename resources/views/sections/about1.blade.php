
<style>
@font-face {
    font-family: 'name';
    src: url('{{ asset("fonts/name.ttf") }}') format('truetype');
}

@font-face {
    font-family:'naskh';
    src: url('{{ asset("fonts/naskh.woff2") }}') format('woff2');

}


.about-pages{
    height:50vw ;
    z-index: 50;
}



.about-main-container ,.about-page2 ,.about-page3 ,.about-page4 ,.about-page5 ,.about-page6 ,.about-page7{
  margin: auto;
  width:50vw ;
  height: 100vh;
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  align-items: center;
  background-image: url('{{ asset("images/background.webp") }}');
  background-size: cover;
  background-position: center;
  z-index: 0;
}

.about-pages{
    display: flex;
    flex-direction: row;
}
/* rows */
.aboutRow1 ,.aboutRow2 ,.aboutRow3 ,.aboutRow4 ,.aboutRow5{
    position: relative;
    width: 90%;
    margin: auto;
}

.aboutRow1{
    text-align: center;
}
.aboutRow1 h3{
    text-align: start;
    margin-right: 10%;
}
.aboutRow2{
    z-index: 10;
}

.aboutRow3{
    z-index: 10;
    font-weight: 900;
    font-size: large;
    display: flex;
    flex-direction: column;
    align-items: start;
    justify-content: start;
    text-align: start;
    gap: 0.5rem;
}

.aboutRow4{
    z-index: 10;
    color: #eab855;
    display: flex;
    flex-direction: column;
    align-items: start;
    justify-content: start;
    text-align: start;
    gap: 0.5rem;
}
.aboutRow4 h1{
    font-size: 5rem;
    color: #eab855;
    font-family: 'naskh', serif;
    z-index: 10;
}

.aboutRow4 p{
    font-size: 1.4rem;
    color: #ffffff;
    font-family: 'naskh', serif;
    z-index: 10;
}

.aboutRow5{
    z-index: 10;
    font-weight: 200;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    gap: 0.5rem;
}
/*For name */


.firstName {
  font-size: 6rem;
  color: #6d6c69;
  font-family: 'name', sans-serif;
  z-index: -1;
 

}

.secondName{
     font-size: 1.3rem;
        color: #6d6c69;
        font-family: 'name', sans-serif;
        z-index: -1;
  
}

.about-main-container img{
    width: 80%;
    height: auto;
    z-index: 5;
    position: absolute;
    bottom: 0;
    
}

.aboutRow2 p{
    font-size: 0.7rem;
    color: white;
    font-family: 'name', sans-serif;
    top: 130%;
    left: 62%;
    z-index: -1;
    width: 10%;
    
}

.aboutRow2 {
    font-size: 1.2rem;
    color: white;
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    z-index: 10;
}

.aboutRow3 p{
    font-size: 1rem;
    color: white;
   font-weight: bold;
   
}



/* about page 2 */

.name-page2{
        font-size: 7rem;
        font-weight: 900;
        color: #eab855;
        font-family: 'naskh', serif; 
        text-align: center;
        padding:auto;
        width: 90%;
    }

    .sub-title-page2{
        font-size: 1rem;
        color: white;
        margin-top: -20px;
        width: 80%;
        text-align: center;
        font-family: 'naskh';
        font-weight: bolder;
    }


    .main-content-page2{
        height: 40%;
        width: 80%;
        display: flex;
        flex-direction: row;
       justify-items: space-between;
       align-content: center;
       gap: 5%;
       
    }

    .right-content-page2{
        display: flex;
        flex-direction: column;
        align-content: center;
        justify-content: center;
        gap: 2%;
        
        }
  
    .left-content-page2{
        align-content: center;
        justify-content: center;
        height: 100%;
        width: 100%;
    }

   

    .about-container-page2{
        width:100%;
        display: flex;
        flex-direction: column;
    }

.row3-page2{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    width: 80%;
}

.row3-page2 .div1{
    width: 10%;
}
.row3-page2 .div2{
    width: 30%;
    font-family: 'naskh';
    font-size: 1.5rem;
}
.row3-page2 .div3{
    width: 30%;
    text-wrap: wordwrap;
    text-align:center;
}
.row3-page2 .div3 span{
    color: #eab855;
    font-size: 1.2rem;
}

.row4-page3{
    width: 80%;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    margin-top: 10%;
}

/*7pages */
/* The Viewport: This is the window through which you see the pages */
.about-pages-viewport {
    width: 100%; /* Or 50vw if you want it half-width */
    overflow: hidden;
    scroll-snap-type: x mandatory; /* This creates the "lock" effect when swiping */
    scroll-behavior: smooth;
    -webkit-overflow-scrolling: touch; /* Smooth scrolling for iOS */
    position: relative;
    justify-content: center;
    
}

/* Hide the scrollbar but keep functionality */
.about-pages-viewport::-webkit-scrollbar {
    display: none;
}

/* The Wrapper: Holds all pages in one long row */
.about-pages-wrapper {
    display: flex;
    width: 80%;
}

/* The Individual Page: Ensures every page is exactly the same size */
.page-item {
    flex: 0 0 70%; /* Changes this to 50vw if you prefer the smaller look */
    height: 100vh;
    scroll-snap-align: start; /* Each page snaps to the start of the viewport */
    scroll-snap-align: start;
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background-image: url('{{ asset("images/background.webp") }}');
    background-size: cover;
    background-position: center;
}
/* Navigation Buttons Styling */
.nav-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(234, 184, 85, 0.8); /* Using your theme color #eab855 */
    color: white;
    border: none;
    padding: 15px 20px;
    cursor: pointer;
    z-index: 100;
    font-weight: bold;
    border-radius: 5px;
    z-index: 100;
}

.next-btn { right: 20px; }
.prev-btn { left: 20px; }


    .hide{
        display:none;
    }
.test{
    border: red 2px solid;
}
.test1{
    border: yellow 2px dotted;
}
    
  

</style>
<section class="about-pages about-pages-viewport ">
    <button class="nav-btn prev-btn" onclick="moveSlide(-1)">></button>
    <button class="nav-btn next-btn" onclick="moveSlide(1)"><<</button>
    
<div class="about-pages-wrapper " id="sliderWrapper">



    <!-- this first page -->
    <div class="page-item about-main-container ">
        <img class="bashayer" src="{{ asset('images/bashayer-about.webp') }}" alt="bashayer">
        <div class="aboutRow1">
            <h1 class="firstName">BASHAYER</h1>
            <h3 class="secondName">ALZAHRANI</h3>
        </div>

        
        <div class=" aboutRow2">
            <h4 class="h4-F">Founder & strategic financial analyst</h4>
            
            
        </div>

        <div class=" aboutRow3">
            <p>اكثر من 12 عاما</p>
            <p> في قطاعين العام والخاص</p>
            
        </div>

        <div class="aboutRow4">
            <h1>إعادة تعريف</h1>
            <h1>الإعلام المالي</h1>
            <p>نحو قراءة جديدة لسوق يشهد تحولا تاريخيا</p>
        </div>

        <div class="aboutRow5">
            <p class="najabh">www.najabh.com</p>
            <p class="مؤسس">نبذة عن مؤسس</p>
        </div>
    </div>
    <!-- this is the first page end -->

    <!-- this is the second page -->
    <div class="page-item about-page2 hide">

            <div class="about-container-page2 ">
                <h1 class="name-page2">بشاير الزهراني</h1>
                <p class="sub-title-page2">
                    ﻣﺼﻤﻤﺔ وﻣﺤﻠﻠﺔ ﻓﺮص اﺳﺘﺜﻤﺎرﻳﺔ ﻣﺆﺳﺲ ﻣﻨﺼﺔ ﻧﺠﺎﺑﺔ ﻟﺼﻨﺎﻋﺔ اﻟﻘﺮار اﻻﺳﺘﺜﻤﺎري
                </p>
            </div>

            <div class="main-content-page2 ">

                <div class=" right-content-page2 ">
                    <div >
                        <p class="content1 ">
                            ﺗﺘﻤﺘﻊ ﺑﺨﺒﺮة ﻣﻬﻨﻴﺔ ﻣﻤﺘﺪة ﻓﻲ اﻟﻘﻄﺎﻋﻴﻦ اﻟﻌﺎم واﻟﺨﺎص ﻋﻤﻠﺖ ﺧﻼﻟﻬـﺎ
                            ﻓﻲ ﺑـﻴـﺌـﺎت ﺗـﻨـﻈـﻴـﻤـﻴـﺔ واﺳﺘﺜﻤﺎرﻳﺔ ﻣﺘﻌﺪدة، ﻣﻤﺎ أﺗﺎح ﻟﻬﺎ ﻓﻬﻤاً ﻋﻤﻴﻘاً
                            ﻟﺘﻘﺎﻃﻊ اﻟﻘﺮار اﻻﻗـﺘـﺼـــﺎدي ﻣﻊ اﻟـﺒـﻨـﻴــﺔ اﻟـﻤـﺆﺳﺴﻴﺔ واﻟﺴـﻴـﺎق اﻟﺘﻨﻈﻴﻤﻲ
                        </p>
                    </div>
                    <div>
                        <p class="content3 ">
                            ﺧﻼل ﻣﺴﻴﺮﺗﻬﺎ اﻟﻤﻬﻨﻴﺔ، ﺷــﺎرﻛﺖ ﻓﻲ ﺗــﺤـﻠــﻴــﻞ اﻟﻔﺮص اﻻﺳﺘﺜﻤﺎرﻳﺔ ودراﺳﺔ
                            دﻳـﻨــﺎﻣـﻴـﻜـﻴـــﺎت اﻟــﻌـــــﻼﻗﺔ ﺑﻴﻦ اﻟﺪوﻟﺔ واﻟﺴﻮق، ﻣﻊ ﺗﺮﻛﻴﺰ ﺧــﺎص ﻋﻠﻰ أدوات
                            اﻟﺘﺤﻮل اﻻﻗﺘﺼﺎدي ﻣﺜﻞ اﻟﺘﺨﺼﻴﺺ، اﻟﺸـــﺮاﻛﺎت ﺑﻴﻦ اﻟﻘﻄﺎﻋﻴﻦ اﻟﻌﺎم واﻟﺨﺎص
                            وإﻋﺎدة ﻫﻴﻜﻠﺔ اﻟﻘﻄﺎﻋﺎت اﻟﺤﻴﻮﻳﺔ
                        </p>
                    </div>
                </div>
                
            <div>

                <div class="left-content-page2 ">
                    <p class="content2 ">
                        ﺣﺼﻠﺖ ﻋﻠﻰ درﺟﺔ اﻟﻤﺎﺟﺴﺘﻴﺮ ﻓﻲ إدارة اﻷﻋﻤﺎل
                        ورﻛﺰت دراﺳــﺘــﻬﺎ ﻋﻠﻰ اﻻﻗــﺘـــﺼــﺎد اﻟﺴــﻴـــــﺎﺳﻲ
                        وﺗـــﻄــﺒــﻴــﻘــﺎﺗــــﻪ ﻓﻲ اﻷﺳــــﻮاق اﻟـــﻨــــﺎﺷـــﺌـــــــــــﺔ
                        ﺑﻮﺻﻔﻪ إﻃﺎرًا ﺗﺤﻠﻴﻠﻴًﺎ ﻟﻔﻬﻢ اﻟﻤﺤﺮﻛﺎت اﻟﺤﻘﻴﻘﻴﺔ
                        ﺧﻠﻒ اﻟﺘﺤﻮﻻت اﻻﻗﺘﺼﺎدﻳﺔ اﻟﻜﺒﺮى
                    </p>
                </div>
                
               
            </div>

          
    </div>
    <div class="row3-page2">
        <div class="div1">اليوم</div>
        <div class="div2">ﺗﺨﺼﺼﺖ في ﺗﺼﻤﻴﻢ
وﺗﺤﻠﻴﻞ اﻟﻔــﺮص
الاستثمارية ﻣﻦ</div>
        <div class="div3"> <span>منظور إستراتيجي</span> <br>
ﻻ ﻳﻜﺘﻔﻲ ﺑﺎﻟﻌﺎﺋﺪ ﺑﻞ ينظر إﻟﻰ
البنية المؤسسية
والسياق التنظيمي
وأﺛﺮ اﻟﻘﺮار ﻋﻠﻰ اﻟﻤﺪى اﻟﻄﻮﻳـﻞ </div>
    </div>
    <div class="row4-page3">
        <div>www.NAJABH.com</div>
        <div>01</div>
    </div>
    <!-- second page end -->
        <div class="page-item about-page3"> </div>
    <!-- third page start -->
        <div class="page-item about-page3"> </div>
    <!-- third page end -->
        <div class="page-item about-page3"> </div>
    <!-- fourth page start -->
        <div class="page-item about-page3"> </div>  
    <!-- fourth page end -->
        <div class="page-item about-page3"> </div>
    <!-- fifth page start -->
        <div class="page-item about-page3"> </div>
    <!-- fifth page end -->
        <div class="page-item about-page3"> </div>
    <!-- sixth page start -->
        <div class="page-item about-page3"> </div>
    <!-- sixth page end -->
        <div class="page-item about-page3"> </div>
    <!-- seventh page start -->
        <div class="page-item about-page3"> </div>
    <!-- seventh page end -->


</div>
</section>

<script>
    let currentSlide = 0;
const totalSlides = 7;

function moveSlide(direction) {
    const viewport = document.querySelector('.about-pages-viewport');
    const slideWidth = viewport.clientWidth; // Gets the width of one full page
    
    // Update the index
    currentSlide += direction;

    // Boundary checks (Stop at first or last page)
    if (currentSlide < 0) currentSlide = 0;
    if (currentSlide >= totalSlides) currentSlide = totalSlides - 1;

    // Execute the smooth scroll
    viewport.scrollTo({
        left: currentSlide * slideWidth,
        behavior: 'smooth'
    });
}
</script>