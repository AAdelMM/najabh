<style>
@font-face {
    font-family: 'name';
    src: url('{{ asset("fonts/name.ttf") }}') format('truetype');
}

@font-face {
    font-family:'naskh';
    src: url('{{ asset("fonts/naskh.woff2") }}') format('woff2');
}

.about-pages {
    height: 100%;
    width: 100%;
    position: relative;
    overflow: hidden;
    z-index: 50;
    margin-top: 100px;
}

/* Container for pages */
.about-pages-viewport {
    width: 100%;
    height: 100vh;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Pages wrapper - each page positioned absolutely */
.about-pages-wrapper {
    position: relative;
    width: 50%; /* Each page takes 70% of container */
    height: 80vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Individual Page */
.page-item {
    position: absolute;
    width: 100%;
    height: 100vh;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.6s ease-in-out, visibility 0.6s ease-in-out;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background-image: url('{{ asset("images/background.webp") }}');
    background-size: cover;
    background-position: center;
    overflow-y: auto;
    border-radius: 10px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
}

/* Active page */
.page-item.active {
    opacity: 1;
    visibility: visible;
}

/* Navigation Buttons */
.nav-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(234, 184, 85, 0.8);
    color: white;
    border: none;
    width: 50px;
    height: 50px;
    cursor: pointer;
    z-index: 100;
    font-weight: bold;
    border-radius: 50%;
    font-size: 1.5rem;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
}

.nav-btn:hover:not(:disabled) {
    background: rgba(234, 184, 85, 1);
    transform: translateY(-50%) scale(1.1);
}

.nav-btn:disabled {
    opacity: 0.3;
    cursor: not-allowed;
}

.next-btn { 
    left: 10%; 
}

.prev-btn { 
    right: 10%; 
}

/* Page Indicators */
.page-indicators {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    gap: 12px;
    z-index: 100;
}

.indicator {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.3);
    cursor: pointer;
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.indicator:hover {
    background: rgba(255, 255, 255, 0.6);
}

.indicator.active {
    background: #eab855;
    transform: scale(1.2);
    box-shadow: 0 0 10px rgba(234, 184, 85, 0.5);
}

/* Original page content styles - keep all your existing styles below */
.about-main-container, .about-page2, .about-page3, .about-page4, .about-page5, .about-page6, .about-page7 {
    width: 100%;
    height: 100vh;
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background-image: url('{{ asset("images/background.webp") }}');
    background-size: cover;
    background-position: center;
    z-index: 0;
}

.aboutRow1, .aboutRow2, .aboutRow3, .aboutRow4, .aboutRow5 {
    position: relative;
    width: 90%;
    margin: auto;
}

.aboutRow1 {
    text-align: center;
    z-index: 0;
    
}

.aboutRow1 h3 {
    text-align: start;
    margin-right: 20%;
    font-size: 1.5rem;
}

.aboutRow2 {
    z-index: 10;
}

.aboutRow3 {
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

.aboutRow4 {
    z-index: 10;
    color: #eab855;
    display: flex;
    flex-direction: column;
    align-items: start;
    justify-content: start;
    text-align: start;
    gap: 0.5rem;
}

.aboutRow4 h1 {
    font-size: 5rem;
    color: #eab855;
    font-family: 'naskh', serif;
    z-index: 10;
}

.aboutRow4 p {
    font-size: 1.4rem;
    color: #ffffff;
    font-family: 'naskh', serif;
    z-index: 10;
}

.aboutRow5 {
    z-index: 10;
    font-weight: 200;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    gap: 0.5rem;
}

.firstName {
    font-size: 6rem;
    color: #6d6c69;
    font-family: 'name', sans-serif;
    z-index: -1;
}

.bashayer{
    position: absolute;
    bottom: 0;
    height: 100%;
    z-index: 1;
}

.secondName {
    font-size: 1.3rem;
    color: #6d6c69;
    font-family: 'name', sans-serif;
    z-index: -1;
}

.about-main-container img {
    width: 80%;
    height: auto;
    z-index: 5;
    position: absolute;
    bottom: 0;
}

.aboutRow2 p {
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
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    z-index: 10;
}

.aboutRow3 p {
    font-size: 1rem;
    color: white;
    font-weight: bold;
}

.name-page2 {
    font-size: 7rem;
    font-weight: 900;
    color: #eab855;
    font-family: 'naskh', serif;
    text-align: center;
    width: 90%;
}

.sub-title-page2 {
    font-size: 1.2rem;
    color: white;
    margin-top: -20px;
    width: 80%;
    text-align: center;
    font-family: 'naskh';
    font-weight: bolder;
}

.main-content-page2 {
    height: 40%;
    width: 80%;
    display: flex;
    flex-direction: row;
    gap: 5%;
}

.right-content-page2 {
    display: flex;
    flex-direction: column;
    align-content: center;
    justify-content: center;
    gap: 2%;
}

.left-content-page2 {
    align-content: center;
    justify-content: center;
    height: 100%;
    width: 100%;
}

.about-container-page2 {
    width: 100%;
    display: flex;
    flex-direction: column;
}

.row3-page2 {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    width: 80%;
}

.row3-page2 .div1 {
    width: 10%;
}

.row3-page2 .div2 {
    width: 30%;
    font-family: 'naskh';
    font-size: 1.5rem;
}

.row3-page2 .div3 {
    width: 30%;
    text-align: center;
}

.row3-page2 .div3 span {
    color: #eab855;
    font-size: 1.2rem;
}

.row4-page3 {
    width: 80%;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    margin-top: 10%;
}

.test1{
    border: #eab855 dotted 2px;
}
.test{
    border: red solid 2px;
}
</style>

<section class="about-pages ">
    <!-- Navigation Buttons -->
     <button class="nav-btn next-btn" onclick="changePage(currentPage + 1)" id="nextBtn">❯</button>
    <button class="nav-btn prev-btn" onclick="changePage(currentPage - 1)" id="prevBtn" disabled>❮</button>
    
    
    <!-- Page Indicators -->
    <div class="page-indicators " id="indicators"></div>
    
    <!-- Pages Container -->
    <div class="about-pages-viewport ">
        <div class="about-pages-wrapper " id="pagesWrapper">
            <!-- Page 1 -->
            <div class="page-item active" id="page1">
                <img class="bashayer" src="{{ asset('images/bashayer-about.webp') }}" alt="bashayer">
                <div class="aboutRow1 ">
                    <h1 class="firstName">BASHAYER</h1>
                    <h3 class="secondName">ALZAHRANI</h3>
                </div>
                <div class="aboutRow2">
                    <h4 class="h4-F">Founder & strategic financial analyst</h4>
                </div>
                <div class="aboutRow3">
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
            
            <!-- Page 2 -->
            <div class="page-item" id="page2">
                <div class="about-container-page2">
                    <h1 class="name-page2">بشاير الزهراني</h1>
                    <p class="sub-title-page2">
                        ﻣﺼﻤﻤﺔ وﻣﺤﻠﻠﺔ ﻓﺮص اﺳﺘﺜﻤﺎرﻳﺔ ﻣﺆﺳﺲ ﻣﻨﺼﺔ ﻧﺠﺎﺑﺔ ﻟﺼﻨﺎﻋﺔ اﻟﻘﺮار اﻻﺳﺘﺜﻤﺎري
                    </p>
                </div>
                <div class="main-content-page2">
                    <div class="right-content-page2">
                        <div>
                            <p class="content1">
                                ﺗﺘﻤﺘﻊ ﺑﺨﺒﺮة ﻣﻬﻨﻴﺔ ﻣﻤﺘﺪة ﻓﻲ اﻟﻘﻄﺎﻋﻴﻦ اﻟﻌﺎم واﻟﺨﺎص ﻋﻤﻠﺖ ﺧﻼﻟﻬـﺎ
                                ﻓﻲ ﺑـﻴـﺌـﺎت ﺗـﻨـﻈـﻴـﻤـﻴـﺔ واﺳﺘﺜﻤﺎرﻳﺔ ﻣﺘﻌﺪدة، ﻣﻤﺎ أﺗﺎح ﻟﻬﺎ ﻓﻬﻤاً ﻋﻤﻴﻘاً
                                ﻟﺘﻘﺎﻃﻊ اﻟﻘﺮار اﻻﻗـﺘـﺼــﺎدي ﻣﻊ اﻟـﺒـﻨـﻴــﺔ اﻟـﻤـﺆﺳﺴﻴﺔ واﻟﺴـﻴـﺎق اﻟﺘﻨﻈﻴﻤﻲ
                            </p>
                        </div>
                        <div>
                            <p class="content3">
                                ﺧﻼل ﻣﺴﻴﺮﺗﻬﺎ اﻟﻤﻬﻨﻴﺔ، ﺷــﺎرﻛﺖ ﻓﻲ ﺗــﺤـﻠــﻴــﻞ اﻟﻔﺮص اﻻﺳﺘﺜﻤﺎرﻳﺔ ودراﺳﺔ
                                دﻳـﻨــﺎﻣـﻴـﻜـﻴـــﺎت اﻟــﻌـــــﻼﻗﺔ ﺑﻴﻦ اﻟﺪوﻟﺔ واﻟﺴﻮق، ﻣﻊ ﺗﺮﻛﻴﺰ ﺧــﺎص ﻋﻠﻰ أدوات
                                اﻟﺘﺤﻮل اﻻﻗﺘﺼﺎدي ﻣﺜﻞ اﻟﺘﺨﺼﻴﺺ، اﻟﺸـــﺮاﻛﺎت ﺑﻴﻦ اﻟﻘﻄﺎﻋﻴﻦ اﻟﻌﺎم واﻟﺨﺎص
                                وإﻋﺎدة ﻫﻴﻜﻠﺔ اﻟﻘﻄﺎﻋﺎت اﻟﺤﻴﻮﻳﺔ
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="left-content-page2">
                            <p class="content2">
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
                    <div class="div2">ﺗﺨﺼﺼﺖ في ﺗﺼﻤﻴﻢ وﺗﺤﻠﻴﻞ اﻟﻔــﺮص الاستثمارية ﻣﻦ</div>
                    <div class="div3"> <span>منظور إستراتيجي</span> <br>
                        ﻻ ﻳﻜﺘﻔﻲ ﺑﺎﻟﻌﺎﺋﺪ ﺑﻞ ينظر إﻟﻰ البنية المؤسسية والسياق التنظيمي
                        وأﺛﺮ اﻟﻘﺮار ﻋﻠﻰ اﻟﻤﺪى اﻟﻄﻮﻳـﻞ</div>
                </div>
                <div class="row4-page3">
                    <div>www.NAJABH.com</div>
                    <div>01</div>
                </div>
            </div>
            
            <!-- Pages 3-7 -->
            <div class="page-item" id="page3">
                <h1 style="color: white; text-align: center;">Page 3 Content</h1>
            </div>
            <div class="page-item" id="page4">
                <h1 style="color: white; text-align: center;">Page 4 Content</h1>
            </div>
            <div class="page-item" id="page5">
                <h1 style="color: white; text-align: center;">Page 5 Content</h1>
            </div>
            <div class="page-item" id="page6">
                <h1 style="color: white; text-align: center;">Page 6 Content</h1>
            </div>
            <div class="page-item" id="page7">
                <h1 style="color: white; text-align: center;">Page 7 Content</h1>
            </div>
        </div>
    </div>
</section>

<script>
let currentPage = 0;
const totalPages = 7;
let isAnimating = false;

// Initialize the slider
document.addEventListener('DOMContentLoaded', function() {
    createIndicators();
    updateNavigation();
});

// Create page indicators
function createIndicators() {
    const indicatorsContainer = document.getElementById('indicators');
    for (let i = 0; i < totalPages; i++) {
        const indicator = document.createElement('div');
        indicator.classList.add('indicator');
        if (i === 0) indicator.classList.add('active');
        indicator.onclick = () => changePage(i);
        indicatorsContainer.appendChild(indicator);
    }
}

// Change page with fade effect
function changePage(pageNumber) {
    if (isAnimating) return;
    if (pageNumber < 0 || pageNumber >= totalPages) return;
    if (pageNumber === currentPage) return;
    
    isAnimating = true;
    
    // Get all pages
    const pages = document.querySelectorAll('.page-item');
    const currentActivePage = pages[currentPage];
    const nextPage = pages[pageNumber];
    
    // Remove active class from current page (fades out)
    currentActivePage.classList.remove('active');
    
    // Add active class to next page (fades in)
    nextPage.classList.add('active');
    
    // Update current page index
    currentPage = pageNumber;
    
    // Update UI
    updateIndicators();
    updateNavigation();
    
    // Reset animation flag after transition
    setTimeout(() => {
        isAnimating = false;
    }, 600); // Match transition duration
}

// Update indicator states
function updateIndicators() {
    const indicators = document.querySelectorAll('.indicator');
    indicators.forEach((indicator, index) => {
        if (index === currentPage) {
            indicator.classList.add('active');
        } else {
            indicator.classList.remove('active');
        }
    });
}

// Update navigation buttons
function updateNavigation() {
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    
    prevBtn.disabled = currentPage === 0;
    nextBtn.disabled = currentPage === totalPages - 1;
}

// Keyboard navigation
document.addEventListener('keydown', function(e) {
    if (e.key === 'ArrowLeft') {
        changePage(currentPage - 1);
    } else if (e.key === 'ArrowRight') {
        changePage(currentPage + 1);
    }
});

// Touch swipe support
let touchStartX = 0;
let touchEndX = 0;

document.querySelector('.about-pages-viewport').addEventListener('touchstart', function(e) {
    touchStartX = e.changedTouches[0].screenX;
});

document.querySelector('.about-pages-viewport').addEventListener('touchend', function(e) {
    touchEndX = e.changedTouches[0].screenX;
    handleSwipe();
});

function handleSwipe() {
    const swipeThreshold = 50;
    const diff = touchStartX - touchEndX;
    
    if (Math.abs(diff) > swipeThreshold) {
        if (diff > 0) {
            changePage(currentPage + 1);
        } else {
            changePage(currentPage - 1);
        }
    }
}

// Optional: Add a subtle scale animation
document.querySelectorAll('.page-item').forEach(page => {
    page.addEventListener('transitionend', function(e) {
        if (e.propertyName === 'opacity') {
            // Animation complete
        }
    });
});
</script>