import { formatSearchInput, showSuggestions, performSearch } from "./search.js";
import { openSearchPopup, closeSearchPopup } from "./popup.js";
import { showFileList } from "./fileList.js";

document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("searchInput");
    const popupSearchInput = document.getElementById("popupSearchInput");
    const searchPopup = document.getElementById("searchPopup");
    const suggestionsList = document.getElementById("suggestionsList");
    const popupSuggestionsList = document.getElementById("popupSuggestionsList");
    const fileListContainer = document.getElementById("fileListContainer");
    const themeToggle = document.getElementById("themeToggle");
    const body = document.body;
    const allLinks = JSON.parse(document.getElementById("allLinksData").textContent);

    applyTheme(body, themeToggle);

    document.addEventListener("keydown", function (event) {
        if (event.ctrlKey && event.key.toLowerCase() === "k") {
            event.preventDefault();
            openSearchPopup(searchPopup, popupSearchInput, () => showFileList(fileListContainer));
        }
    });

    document.addEventListener("keydown", function (event) {
        if (event.key === "Escape") {
            closeSearchPopup(searchPopup);
        }
    });

    searchInput.addEventListener("input", function () {
        this.value = formatSearchInput(this.value);
    });

    popupSearchInput.addEventListener("input", function () {
        showSuggestions(popupSearchInput, popupSuggestionsList, allLinks);
    });

    document.addEventListener("click", function (event) {
        if (!searchInput.contains(event.target) && !suggestionsList.contains(event.target)) {
            suggestionsList.style.display = "none";
        }
    });

    document.getElementById("searchForm").addEventListener("submit", function (event) {
        event.preventDefault();
        performSearch(searchInput, allLinks);
    });

    document.addEventListener("keydown", function (event) {
        if (event.key === "Enter") {
            event.preventDefault();
            performSearch(searchInput, allLinks);
        }
    });
});


console.log("search.js Loaded");
console.log("popup.js Loaded"); 
console.log("fileList.js Loaded");  
