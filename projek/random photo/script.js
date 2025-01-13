const imageContainerEl = document.querySelector(".image-container");

const btnEl = document.querySelector(".btn");

btnEl.addEventListener("click", () => {
    addNewsImages()
});

function addNewsImages(){
    const newImgEl = document.createElement("img")
    newImgEl.src= `https://static.republika.co.id/uploads/images/inpicture_slide/bos-marvel-studios-kevin-feige-mengonfirmasi-status-avengers-di_220913174358-513.jpeg=${Math.floor(Math.random() * 2000
    )}`;
    imageContainerEl.appendChild(newImgEl);
}