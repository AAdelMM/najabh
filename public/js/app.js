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