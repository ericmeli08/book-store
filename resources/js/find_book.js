let progress_bar_find_book = document.querySelectorAll("#container-find_book .progress-bar")

progress_bar_find_book.forEach(element => {
    let text = element.parentElement.parentElement.textContent
    element.style.width = text+"%"
    console.log(text)
});