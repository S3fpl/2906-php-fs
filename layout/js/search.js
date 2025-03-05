export function formatSearchInput(input) {
    return input.split(/(\s+)/).map(word => word.length > 0 ? word.charAt(0).toUpperCase() + word.slice(1).toLowerCase() : word).join("");
}

export function showSuggestions(searchInput, suggestionsList, allLinks) {
    let inputValue = formatSearchInput(searchInput.value).toLowerCase();
    suggestionsList.innerHTML = "";

    if (!inputValue) {
        suggestionsList.style.display = "none";
        return;
    }

    let filteredLinks = allLinks.filter(link => link.text.toLowerCase().includes(inputValue));

    if (filteredLinks.length === 0) {
        suggestionsList.style.display = "none";
        return;
    }

    filteredLinks.forEach(link => {
        let listItem = document.createElement("li");
        listItem.textContent = link.text;
        listItem.onclick = () => {
            searchInput.value = link.text;
            suggestionsList.style.display = "none";
            window.location.href = link.url;
        };
        suggestionsList.appendChild(listItem);
    });

    suggestionsList.style.display = "block";
}

export function performSearch(searchInput, allLinks) {
    const formattedSearch = formatSearchInput(searchInput.value);
    const selectedLink = allLinks.find(link => formatSearchInput(link.text) === formattedSearch);

    if (selectedLink) {
        window.location.href = selectedLink.url;
    } else {
        alert("Page not found! Please select a valid option.");
    }
}
