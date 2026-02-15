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