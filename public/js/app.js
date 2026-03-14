function toggleFounderBio() {
        const content = document.getElementById('founder-expandable');
        const icon = document.getElementById('arrow-icon');
        
        if (content.style.maxHeight && content.style.maxHeight !== "0px") {
            content.style.maxHeight = "0px";
            icon.style.transform = "rotate(0deg)";
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
            icon.style.transform = "rotate(180deg)";
        }
    }

//usage policies page
function toggleFullPolicy() {
    const drawer = document.getElementById('full-policy-drawer');
    const btnText = document.getElementById('btn-text');
    const icon = document.getElementById('policy-icon');

    if (drawer.style.maxHeight && drawer.style.maxHeight !== "0px") {
        drawer.style.maxHeight = "0px";
        btnText.innerText = "قراءة السياسات كاملة";
        icon.style.transform = "rotate(0deg)";
    } else {
        drawer.style.maxHeight = drawer.scrollHeight + "px";
        btnText.innerText = "إغلاق التفاصيل";
        icon.style.transform = "rotate(180deg)";
    }
}

//privacy policy page
function togglePrivacyDrawer() {
    const drawer = document.getElementById('privacy-drawer');
    const btnText = document.getElementById('privacy-btn-text');
    const icon = document.getElementById('privacy-icon');

    if (drawer.style.maxHeight && drawer.style.maxHeight !== "0px") {
        drawer.style.maxHeight = "0px";
        btnText.innerText = "قراءة سياسة الخصوصية كاملة";
        icon.style.transform = "rotate(0deg)";
    } else {
        drawer.style.maxHeight = drawer.scrollHeight + "px";
        btnText.innerText = "إغلاق تفاصيل الخصوصية";
        icon.style.transform = "rotate(180deg)";
    }
}

//cards in our programs
function showProgramDetails(id) {
    // جلب العناصر
    const title = document.getElementById('title-' + id).innerText;
    const fullContent = document.getElementById('full-text-' + id).innerHTML;
    const icon = document.querySelector(`#card-${id} .program-icon`).innerText;
    
    // حقن البيانات في لوحة العرض
    document.getElementById('details-title').innerText = title;
    document.getElementById('details-text').innerHTML = fullContent;
    document.getElementById('details-icon').innerText = icon;
    
    // إظهار اللوحة
    const panel = document.getElementById('program-details-panel');
    panel.style.display = 'block'; // التأكد من أنه ليس hidden
    
    setTimeout(() => {
        panel.classList.add('active');
        // تمرير الشاشة للوحة
        panel.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }, 10);
}

function hideProgramDetails() {
    const panel = document.getElementById('program-details-panel');
    panel.classList.remove('active');
    setTimeout(() => {
        if(!panel.classList.contains('active')) panel.style.display = 'none';
    }, 600);
}

//loading videos before 
document.addEventListener("DOMContentLoaded", function() {
    // 1. YouTube Click-to-Play logic
    const ytOverlay = document.getElementById('yt-overlay');
    const ytPlayer = document.getElementById('yt-player');

    if (ytOverlay) {
        ytOverlay.addEventListener('click', function() {
            ytPlayer.src = ytPlayer.getAttribute('data-src');
            ytOverlay.style.display = 'none';
        });
    }

    // 2. TikTok Lazy Load (Intersection Observer)
    const tiktokContainer = document.getElementById('tiktok-container');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Inject TikTok embed only when visible
                tiktokContainer.innerHTML = `
                    <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@najabh1/video/7609812876999625991" data-video-id="7609812876999625991" style="max-width: 605px;min-width: 325px;">
                        <section><a target="_blank" href="https://www.tiktok.com/@najabh1?refer=embed">@najabh1</a></section>
                    </blockquote>
                `;
                
                // Load the TikTok JS SDK dynamically
                const script = document.createElement('script');
                script.src = "https://www.tiktok.com/embed.js";
                script.async = true;
                document.body.appendChild(script);
                
                observer.unobserve(tiktokContainer);
            }
        });
    }, { rootMargin: "200px" }); // Start loading 200px before it enters screen

    if (tiktokContainer) observer.observe(tiktokContainer);
});