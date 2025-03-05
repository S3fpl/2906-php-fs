export function showFileList(fileListContainer) {
    const fileNames = [
        "index.html", "style.css", "script.js", "config.php", "database.php",
        "header.php", "footer.php", "dashboard.php", "profile.php", "settings.php"
    ];

    fileListContainer.innerHTML = "";

    fileNames.forEach((file) => {
        let listItem = document.createElement("div");
        listItem.textContent = file;
        listItem.classList.add("file-item");
        listItem.onclick = () => alert(`Opening ${file}`);
        fileListContainer.appendChild(listItem);
    });
}
