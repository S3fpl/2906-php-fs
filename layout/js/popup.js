export function openSearchPopup(searchPopup, popupSearchInput, showFileList) {
    searchPopup.style.display = "flex";
    popupSearchInput.focus();
    showFileList();
}

export function closeSearchPopup(searchPopup) {
    searchPopup.style.display = "none";
}
