window.onload = () => {
    const allProfiles = document.querySelectorAll(".jcal-profile-block-bio-selector");

    allProfiles.forEach(jCalProfile => {
        const expandButton = jCalProfile.querySelector(".bio-expand-toggle-button");
        const bioEl = jCalProfile.querySelector(".jcal-profile-block-bio");

        expandButton.onclick = () => {
            bioEl.classList.toggle("line-clamp-4");
            if (expandButton.textContent === "Full bio") expandButton.textContent = "Hide bio";
            else expandButton.textContent = "Full bio";
        }
    });
}